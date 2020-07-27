<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function readAllReviews(){

        $id = request('Car');
        // $car = Car::find($id);
        $reviews = Review::where('Car', $id)->get();
        return view('carReview', ['reviews' => $reviews]);
    }

    public function specificCarReview($id){
        $reviews = Review::where("id", $id)->get();
        $car=Car::where('id',$review[0]->car)->get();
        return view('carReview',['car'=>$car[0]]);
    }
}
