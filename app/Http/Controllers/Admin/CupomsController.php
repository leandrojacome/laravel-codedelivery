<?php

namespace CodeDelivery\Http\Controllers\Admin;


use CodeDelivery\Http\Controllers\Controller;
use CodeDelivery\Http\Requests\Admin\CupomRequest;
use CodeDelivery\Repositories\CupomRepository;

class CupomsController extends Controller
{

    /**
     * @var CupomRepository
     */
    private $repository;

    public function __construct(CupomRepository $repository)
    {

        $this->repository = $repository;
    }

    public function index()
    {
        $cupoms = $this->repository->paginate();
        return view('admin.cupoms.index', compact('cupoms'));
    }

    public function create()
    {
        return view('admin.cupoms.create');
    }

    public function store(CupomRequest $request)
    {
        $this->repository->create($request->all());
        return redirect()->route('admin.cupoms.index');
    }

    public function edit($id)
    {
        $cupom = $this->repository->find($id);
        return view('admin.cupoms.edit', compact('cupom'));
    }

    public function update(CupomRequest $request, $id)
    {
        $this->repository->update($request->all(), $id);
        return redirect()->route('admin.cupoms.index');
    }

    public function destroy($id)
    {
        $this->repository->delete($id);
        return redirect()->route('admin.cupoms.index');
    }

}