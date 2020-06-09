<?php

namespace App\Http\Controllers\Api;

use App\Complain;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ComplainRestController extends Controller
{
    public function store(Request $request)
    {
        $payload = $request->all();
        Complain::create([
           ""
        ]);

    }

}
