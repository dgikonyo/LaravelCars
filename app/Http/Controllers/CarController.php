<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    
    public function allcars(){
        

        $cars=Car::all();
        return view('car.allcars',['cars'=>$cars]);

        /**
         * 
         * also you could use
         * 
         $cars=DB::table('cars')->get();//gets all car records

         return $cars;
         */

       
    }
    
    public function particularcar($id){
        $cars=DB::table('cars')->find($id);

        return $cars;

    }

    public function newcar(){
        $cars=DB::table('cars')->latest()->first();

        return $cars;
    }

}
