<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class RoomsController extends Controller
{
	protected $checkin_date;
	protected $checkout_date;

      public function index(){
	$rooms = App\Rooms::all();
	return view ('rooms.rooms', compact('rooms'));
	}

	  public function reserve(){
	$rooms = App\Rooms::all();
	return view ('rooms.reservation', compact('rooms'));
	}

	public function search(){

	if(isset($_GET['start'])) $this->checkin_date = strip_tags($_GET['start']);
    if(isset($_GET['finish'])) $this->checkout_date = strip_tags($_GET['finish']);

  	$rooms = App\Clients::FreeRooms($this->checkin_date, $this->checkout_date);
  
	return view ('rooms.freerooms', compact('rooms'));
	}

}
