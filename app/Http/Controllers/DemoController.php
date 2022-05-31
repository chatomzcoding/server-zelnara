<?php

namespace App\Http\Controllers;

use App\Models\User;

class DemoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function user()
    {
        $data = User::get();
        return response()->json($data, 200);
    }

    //
}
