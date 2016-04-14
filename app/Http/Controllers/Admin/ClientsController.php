<?php

namespace CodeDelivery\Http\Controllers\Admin;

use CodeDelivery\Http\Controllers\Controller;
use CodeDelivery\Http\Requests;
use CodeDelivery\Http\Requests\Admin\ClientRequest;
use CodeDelivery\Repositories\ClientRepository;
use CodeDelivery\Repositories\UserRepository;
use CodeDelivery\Services\ClientService;


class ClientsController extends Controller
{
    /**
     * @var ProductRepository
     */
    private $repository;

    /**
     * @var UserRepository
     */
    private $userRepository;
    /**
     * @var ClientService
     */
    private $clientService;

    public function __construct(
        ClientRepository $repository,
        UserRepository $userRepository,
        ClientService $clientService)
    {

        $this->repository = $repository;
        $this->userRepository = $userRepository;
        $this->clientService = $clientService;
    }

    public function index()
    {
        $clients = $this->repository->paginate();

        return view('admin.clients.index', compact('clients'));
    }

    public function create()
    {
        $users = $this->userRepository->lists('name', 'id');
        return view('admin.clients.create', compact('users'));
    }

    public function store(ClientRequest $request)
    {
        $this->clientService->create($request->all());
        return redirect()->route('admin.clients.index');
    }
    public function edit($id)
    {
        $client = $this->repository->find($id);
        return view('admin.clients.edit', compact('client'));
    }

    public function update(ClientRequest $request, $id)
    {
        $this->clientService->update($request->all(), $id);
        return redirect()->route('admin.clients.index');
    }

    public function destroy($id)
    {
        $this->repository->delete($id);
        return redirect()->route('admin.clients.index');
    }
}
