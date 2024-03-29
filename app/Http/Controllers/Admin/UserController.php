<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\StoreUserRequest;
use App\Http\Requests\Admin\User\UpdateUserRequest;
use App\Models\User;
use Carbon\Carbon;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = User::getRoleArray();
        $statuses = User::getStatusArray();
        return view('admin.user.create', compact('statuses', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        $data = $request->validated();
        //добавляем недостающие поля
        $data['last_login_date'] = Carbon::now();
        $data['login_ip'] = '127.0.0.1';
        //шифруем пароль
        $data['password'] = bcrypt($data['password']);
        $model = User::create($data);
        $message = __('user.USER_MESSAGE.CREATED', ['id' => $model->id]);
        return redirect()->route('admin.user.show', $model->id)->with('success', $message);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('admin.user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $roles = User::getRoleArray();
        $statuses = User::getStatusArray();
        return view('admin.user.edit', compact('user', 'statuses', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $data = $request->validated();
        //проверяем изменился ли пароль
        if ($data['password'] != $user->password){
            //если изменился шифруем новый
            $data['password'] = bcrypt($data['password']);
        }
        $user->update($data);
        $message = __('user.USER_MESSAGE.CHANGED', ['id' => $user->id]);
        return redirect()->route('admin.user.show', $user->id)->with('success', $message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        $message = __('news.NEWS_MESSAGE.DELETED', ['id' => $user->id]);
        return redirect()->route('admin.user.index')->with('error', $message);
    }
}