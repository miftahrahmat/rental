<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Car;
use App\Location;
use App\Reservation;

class FrontController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

     public function loc(Request $request) {

        return redirect('front.content.car');
    }
}
