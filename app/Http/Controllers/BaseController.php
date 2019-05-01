<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\Customer;
use App\Reservation;

class BaseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    protected function setupLayout()
    {
        if ( ! is_null($this->layout))
        {
            $this->layout = View::make($this->layout);
        }
    }

        public function dashBoard(){

            $mobils = Car::where('status', '=', 'Tersedia')->get();

            $cars = Car::all()->count();
            $cust = Customer::all()->count();
            $reserv = Reservation::all()->count();

            if (auth()->user()->status == 'admin') {
                return view('admin.dashboard',compact('cars', 'cust', 'reserv'));
            } else {
               return view('front.content.home', compact('mobils'));
            }
        }
}
