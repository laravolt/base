<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\User\StoreRequest;
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
     * UserController constructor.
     * @param UserRepository $user
     */
    public function __construct(UserRepository $user)
    {
        $this->user = $user;
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
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreRequest|Request $request
     * @return Response
     */
    public function store(StoreRequest $request)
    {
        $user = $this->user->create($request->only('name', 'email', 'password', 'status'));

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
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->only('name', 'email'));

        flash()->success('berhasil')->warning('info');
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
