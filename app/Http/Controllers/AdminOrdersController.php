<?php

namespace CodeDelivery\Http\Controllers;


use CodeDelivery\Repositories\OrderRepository;
use CodeDelivery\Repositories\UserRepository;
use Illuminate\Http\Request;

class AdminOrdersController extends Controller
{

    /**
     * @var OrderRepository
     */
    private $repository;

    public function __construct(OrderRepository $repository)
    {

        $this->repository = $repository;
    }

    public function index()
    {
        $orders = $this->repository->paginate();
        return view('admin.orders.index', compact('orders', 'list_status'));
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