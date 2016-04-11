<?php

namespace CodeDelivery\Http\Controllers;

use CodeDelivery\Http\Requests;
use CodeDelivery\Http\Requests\AdminClientRequest;
use CodeDelivery\Repositories\ClientRepository;
use CodeDelivery\Repositories\UserRepository;
use CodeDelivery\Services\ClientService;


class AdminClientsController extends Controller
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

    public function __construct(ClientRepository $repository, UserRepository $userRepository, ClientService $clientService)
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

    public function store(AdminClientRequest $request)
    {
        $this->clientService->create($request->all());
        return redirect()->route('admin.clients.index');
    }
    public function edit($id)
    {
        $client = $this->repository->find($id);
        return view('admin.clients.edit', compact('client'));
    }

    public function update(AdminClientRequest $request, $id)
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
