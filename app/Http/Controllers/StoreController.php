<?php

namespace App\Http\Controllers;

use App\Repositories\ProductRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\StatusRepository;
use App\Repositories\PhotoRepository;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StoreController extends Controller
{
  private $productRepository;
  private $categoryRepository;
  private $photoRepository;
  private $statusRepository;

  public function __construct(ProductRepository $productRepository, CategoryRepository $categoryRepository, PhotoRepository $photoRepository, StatusRepository $statusRepository)
  {
      $this->productRepository = $productRepository;
      $this->categoryRepository = $categoryRepository;
      $this->photoRepository = $photoRepository;
      $this->statusRepository = $statusRepository;
  }
    //
  public function index()
  {
    $status = $this->statusRepository->lists('name','id');
    $categoriesl = $this->categoryRepository->lists('name','id');
    
    $categories = $this->categoryRepository->all();

    $rProducts = $this->productRepository->orderBy('featured', 'desc')->all()->take(3);
    $nProducts = $this->productRepository->orderBy('id', 'desc')->all()->take(3);

    return view('client.store.index', compact('categories', 'rProducts', 'nProducts','status','categoriesl'));
  }
  
  public function search(Request $request)
  {
    $status = $this->statusRepository->lists('name','id');
    $categoriesl = $this->categoryRepository->lists('name','id');
    
    $data = $request->all();
    $keyword = $data['keyword'];
      
    $categories = $this->categoryRepository->all();
    
    $products = array();
    
    if ($keyword!='') {
        $products = $this->productRepository->where("name", "LIKE","%$keyword%")->get();
    }
    
    return view('client.store.products', compact('products','categories','status','categoriesl'));
  }

  public function products($id)
  {
    $status = $this->statusRepository->lists('name','id');
    $categoriesl = $this->categoryRepository->lists('name','id');
    
    $categories = $this->categoryRepository->all();
    $products = $this->productRepository->where('category_id','=',$id)->paginate(2);

    return view('client.store.products', compact('products','categories','status','categoriesl'));
  }

  public function product($id)
  {
    $status = $this->statusRepository->lists('name','id');
    $categoriesl = $this->categoryRepository->lists('name','id'); 
     
    $product = $this->productRepository->find($id);

    return view('client.store.product', compact('product','status','categoriesl'));
  }
  
  public function about()
  {
    $status = $this->statusRepository->lists('name','id');
    $categoriesl = $this->categoryRepository->lists('name','id'); 
    
    return view('client.store.about', compact('status','categoriesl'));
  }
  
  public function contact()
  {
    $status = $this->statusRepository->lists('name','id');
    $categoriesl = $this->categoryRepository->lists('name','id'); 
    
    return view('client.store.contact', compact('status','categoriesl'));
  }

  public function interest(Request $request, $id)
  {
    $this->validate($request, [
      'name'        => 'required|min:3',
      'email'       => 'required|email',
      'phone'       => 'required|min:10|max:10',
      'cell_phone'  => 'required|min:11|max:11',
      'message'     => 'max:255'
    ]);

    $product = $this->productRepository->find($id);
    $data = $request->all();

    Mail::send('client.store.email_interest', ['data' => $data, 'product' => $product], function ($m) use ($product) {

        $m->subject('Interesse em Produtos: '.ucfirst($product->name).' - '.date('l jS \of F Y h:i:s A'));
        $m->from('appxisto@gmail.com','App Xisto');
        $m->to('appxisto@gmail.com','App Xisto');

    });

    $data = ['featured' => $product->featured+1];
    $this->productRepository->update($data, $product->id);

    return redirect()->route('client.store.product',['id'=>$product->id]);
  }

  public function publishEmail(Request $request)
  {
    $this->validate($request, [
      'product' => 'required|min:3',
      'description' => 'required',
      'price' => 'required',
      'category' => 'required',
      'status_id' => 'required',
      'name' => 'required|min:3',
      'email' => 'required|email|unique:sellers',
      'phone' => 'required|min:10|max:10',
      'cell_phone' => 'required|min:11|max:11',
      'address' => 'required|min:3',
      'city' => 'required|min:3',
      'state' => 'required|min:2|max:2',
      'zipcode' => 'required|min:8|max:8',
    ]);

    $data = $request->all();

    $data['status'] = $this->statusRepository->find($data['status_id'])->name;

    Mail::send('client.store.email_publish', ['data' => $data], function ($m) use ($data) {

        $m->subject('Publicar Produto: '.ucfirst($data['product']).' - '.date('l jS \of F Y h:i:s A'));
        $m->from('appxisto@gmail.com','App Xisto');
        $m->to('appxisto@gmail.com','App Xisto');

    });

    return redirect()->route('client.store.index');
  }
}
