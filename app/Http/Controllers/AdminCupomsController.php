<?php

namespace CodeDelivery\Http\Controllers;


use CodeDelivery\Repositories\CupomRepository;
use CodeDelivery\Repositories\UserRepository;
use Illuminate\Http\Request;

class AdminCupomsController extends Controller
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

    public function edit($id, UserRepository $userRepository)
    {
        $order = $this->repository->find($id);
        $list_status = [
            0 => 'Pendente',
            1 => 'Em Trânsito',
            2 => 'Entregue',
            3 => 'Cancelado',
        ];
        $deliveryman = $userRepository->getDeliveryman();
        return view('admin.orders.edit', compact('order', 'list_status', 'deliveryman'));
    }

    public function update(Request $request, $id)
    {
        $this->repository->update($request->all(), $id);
        return redirect()->route('admin.orders.index');
    }

}