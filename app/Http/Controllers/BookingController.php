<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class BookingController extends Controllers
{
    public function show($id){
    	$room = App\Rooms::find($id);
    	return view ('booking.show', compact('room'));
	}

}