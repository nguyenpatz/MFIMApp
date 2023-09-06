<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Resources\V1\UserResource;
use App\Http\Resources\V1\UserCollection;

class UsersController extends Controller
{

    public function index()
    {
        return new UserCollection(User::paginate());
    }

    public function create()
    {
        // 
    }

    public function store(Request $request)
    {
        // 
    }

    public function show(User $user)
    {
        return new UserResource($user);
    }

    public function edit(User $user)
    {
        // 
    }

    public function update(Request $request, User $user)
    {
        // 
    }

    public function destroy(User $user)
    {
        // 
    }
}
