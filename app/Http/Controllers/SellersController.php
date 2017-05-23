<?php

namespace App\Http\Controllers;

use App\Repositories\SellerRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\AdminSellerRequest;
use App\Http\Controllers\Controller;

class SellersController extends Controller
{
    private $repository;

    public function __construct(SellerRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $sellers = $this->repository->paginate(10);
        return view('admin.sellers.index', compact('sellers'));
    }

    public function create()
    {
        return view('admin.sellers.create');
    }

    public function store(AdminSellerRequest $request)
    {
        $data = $request->all();
        $this->repository->create($data);

        return redirect()->route('admin.sellers.index');
    }

    public function edit($id)
    {
        $seller = $this->repository->find($id);
        return view('admin.sellers.edit', compact('seller'));
    }

    public function update(AdminSellerRequest $request, $id)
    {
        $data = $request->all();
        $this->repository->update($data, $id);

        return redirect()->route('admin.sellers.index');
    }
}
