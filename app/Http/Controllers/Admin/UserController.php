<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\User\StoreRequest;
use App\Repositories\RoleRepository;
use App\Repositories\UserRepository;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * @var UserRepository
     */
    private $user;
    /**
     * @var RoleRepository
     */
    private $role;

    /**
     * UserController constructor.
     * @param UserRepository $user
     * @param RoleRepository $role
     */
    public function __construct(UserRepository $user, RoleRepository $role)
    {
        $this->user = $user;
        $this->role = $role;
    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $users = $this->user->paginate();
        $totalUsers = $this->user->count();
        return view('admin.users.index', compact('users', 'totalUsers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $roles = $this->role->lists('name', 'id');
        return view('admin.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreRequest|Request $request
     * @return Response
     */
    public function store(StoreRequest $request)
    {
        $user = $this->user->createWithRoles($request->only('name', 'email', 'password', 'status'), $request->get('roles', []));

        if($user) {
            flash()->success(trans('users.registration.success', ['name' => $user['name']]));

            if($request->has('continue')) {
                return redirect()->back();
            }

            return redirect()->route('admin.users.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param User $user
     * @return Response
     * @internal param int $id
     */
    public function edit(User $user)
    {
        $roles = $this->role->lists('name', 'id');
        return view('admin.users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StoreRequest|Request $request
     * @param  int $id
     * @return Response
     */
    public function update(StoreRequest $request, $id)
    {
        $user = $this->user->updateWithRoles($id, $request->only('name', 'email', 'status'), $request->get('roles', []));

        if ($user) {
            flash()->success(trans('users.update.success', ['name' => $user['name']]));
            return redirect()->route('admin.users.index');
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
