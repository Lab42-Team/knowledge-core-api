<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\StoreUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    /**
     * Create a new UserController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->authorizeResource(User::class, 'user');
    }

    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreUserRequest $request
     * @return JsonResponse
     */
    public function store(StoreUserRequest $request)
    {
        $validated = $request->validated();
        $user = User::create(array_merge(
            $validated,
            [
                'last_login_date' => Carbon::now(),
                'login_ip' => '127.0.0.1',
            ],
        ));
        return response()->json([
            'message' => 'New user successfully registered.',
            'user' => $user
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param User $user
     * @return JsonResponse
     */
    public function show(User $user)
    {
        return response()->json($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateUserRequest $request
     * @param User $user
     * @return JsonResponse
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $validated = $request->validated();
        // Обновляем пароль только если он был передан
        if (isset($validated['password'])) {
            $validated['password'] = bcrypt($validated['password']);
        } else {
            unset($validated['password']); // Удаляем пароль из данных, если он не передан
        }
        $user->fill($validated);
        $user->save();
        return response()->json($user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     * @return JsonResponse|null
     */
    public function destroy(User $user)
    {
        $user->delete();
        return response()->json(['id' => $user->id], 200);
    }


    /**
     * Get user roles.
     *
     * @return JsonResponse
     */
    public function getRoles()
    {
        $roles = User::getRoleArray();
        return response()->json(['roles' => $roles]);
    }

    /**
     * Get user statuses.
     *
     * @return JsonResponse
     */
    public function getStatuses()
    {
        $statuses = User::getStatusArray();
        return response()->json(['statuses' => $statuses]);
    }
}
