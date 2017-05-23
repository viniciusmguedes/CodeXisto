<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\PhotoRepository;
use App\Repositories\ProductRepository;
use App\Http\Requests;
use App\Http\Requests\AdminPhotoRequest;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class PhotosController extends Controller
{
  private $repository;
  private $productRepository;

  public function __construct(PhotoRepository $repository, ProductRepository $productRepository)
  {
      $this->repository = $repository;
      $this->productRepository = $productRepository;
  }

  public function index($id){
      $product = $this->productRepository->find($id);

      return view('admin.photos.index',compact('product'));
  }

  public function create($id){
      $product = $this->productRepository->find($id);

      return view('admin.photos.create',compact('product'));
  }

  public function store(AdminPhotoRequest $request, $id)
  {
      $file = $request->file('photo');
      $extension = $file->getClientOriginalExtension();

      $photo = $this->repository->create(['product_id'=>$id,'extension'=>$extension]);

      Storage::disk('public_local')->put($photo->id.'.'.$extension, File::get($file));

      return redirect()->route('admin.photos.index',['id'=>$id]);
  }

  public function destroy($id)
  {
      $photo = $this->repository->find($id);
      
      Storage::disk('public_local')->delete($photo->id.'.'.$photo->extension);

      $product = $photo->product;
      $photo->delete();

      return redirect()->route('admin.photos.index',['id'=>$product->id]);
  }
}
