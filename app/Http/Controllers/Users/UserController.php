<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class UserController extends Controller
{
    /** @return Collection<int, User> */
    public function index(): Collection
    {
        return User::all();
    }
}
