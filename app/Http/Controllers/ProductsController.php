<?php

namespace App\Http\Controllers;

use App\Repositories\ProductRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\SellerRepository;
use App\Repositories\StatusRepository;
use App\Repositories\PhotoRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

use App\Http\Requests;
use App\Http\Requests\AdminProductRequest;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
  private $repository;
  private $categoryRepository;
  private $sellerRepository;
  private $photoRepository;

  public function __construct(ProductRepository $repository, CategoryRepository $categoryRepository, SellerRepository $sellerRepository, StatusRepository $statusRepository, PhotoRepository $photoRepository)
  {
      $this->repository = $repository;
      $this->categoryRepository = $categoryRepository;
      $this->sellerRepository = $sellerRepository;
      $this->statusRepository = $statusRepository;
      $this->photoRepository = $photoRepository;
  }

  public function index()
  {
      $products = $this->repository->paginate(10);
      return view('admin.products.index', compact('products'));
  }

  public function create()
  {
      $categories = $this->categoryRepository->lists('name','id');
      $sellers = $this->sellerRepository->lists('name','id');
      $status = $this->statusRepository->lists('name','id');

      return view('admin.products.create', compact('categories','sellers','status'));
  }

  public function store(AdminProductRequest $request)
  {
      $data = $request->all();
      $this->repository->create($data);

      return redirect()->route('admin.products.index');
  }

  public function edit($id)
  {
      $product = $this->repository->find($id);
      $categories = $this->categoryRepository->lists('name','id');
      $sellers = $this->sellerRepository->lists('name','id');
      $status = $this->statusRepository->lists('name','id');

      return view('admin.products.edit', compact('product','categories','sellers','status'));
  }

  public function update(AdminProductRequest $request, $id)
  {
      $data = $request->all();
      $this->repository->update($data, $id);

      return redirect()->route('admin.products.index');
  }

  public function destroy($id)
  {
      $photos = $this->photoRepository->where('product_id','=',$id)->get();
      
      foreach ($photos as $photo)
      {
          Storage::disk('public_local')->delete($photo->id.'.'.$photo->extension);
      }
      
      $this->repository->delete($id);

      return redirect()->route('admin.products.index');
  }
}
