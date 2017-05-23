<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\StatusRepository;
use App\Http\Requests;
use App\Http\Requests\AdminStatusRequest;
use App\Http\Controllers\Controller;

class StatusesController extends Controller
{
    private $repository;

    public function __construct(StatusRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $statuses = $this->repository->paginate(10);
        return view('admin.statuses.index', compact('statuses'));
    }

    public function create()
    {
        return view('admin.statuses.create');
    }

    public function store(AdminStatusRequest $request)
    {
        $data = $request->all();
        $this->repository->create($data);

        return redirect()->route('admin.statuses.index');
    }

    public function edit($id)
    {
        $status = $this->repository->find($id);
        return view('admin.statuses.edit', compact('status'));
    }

    public function update(AdminStatusRequest $request, $id)
    {
        $data = $request->all();
        $this->repository->update($data, $id);

        return redirect()->route('admin.statuses.index');
    }
}
