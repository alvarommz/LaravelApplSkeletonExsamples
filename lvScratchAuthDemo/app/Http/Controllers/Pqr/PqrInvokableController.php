<?php

// Invokable controller.

namespace App\Http\Controllers\pqr;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PqrInvokableController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }
}
