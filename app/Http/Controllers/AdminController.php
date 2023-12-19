<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AdminController extends Controller
{
    public function __invoke()
    {
        // if (Gate::allow('isAdmin')) {
        //     dd('Admin is Allowed');
        // }
        // abort(403);
    }
}
