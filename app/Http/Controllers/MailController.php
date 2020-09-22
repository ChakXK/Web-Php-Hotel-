<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use View;
use App;

use Illuminate\Database\Eloquent\Model;
use DB;
class MailController extends Controller
{
protected $name;
protected $phone;
protected $email;
protected $checkin_date;
protected $checkout_date;
protected $countA;
protected $countCh;
protected $room_id;
protected $room_name;

    public function send(){

		if(isset($_GET['name'])) $this->name = strip_tags($_GET['name']);
    	if(isset($_GET['phone'])) $this->phone = strip_tags($_GET['phone']);
    	if(isset($_GET['email'])) $this->email = strip_tags($_GET['email']);
    	if(isset($_GET['start'])) $this->checkin_date = strip_tags($_GET['start']);
    	if(isset($_GET['finish'])) $this->checkout_date = strip_tags($_GET['finish']);
    	if(isset($_GET['countA'])) 
    		{$this->countA = strip_tags($_GET['countA']);}
    	else{$this->countA=0;}
    	if(isset($_GET['countCh'])) 
    		{$this->countCh = strip_tags($_GET['countCh']);}
    	else{$this->countCh=0;}
    	if(isset($_GET['roomId'])) $this->room_id = strip_tags($_GET['roomId']);
    	if(isset($_GET['roomId'])) $this->room_name = strip_tags($_GET['roomName']);


        if(is_null(App\Clients::HasRoomBooking($this->checkin_date, $this->checkout_date, $this->room_id)) &&
    is_null(App\Clients::HasRoomBooking2($this->checkin_date, $this->checkout_date, $this->room_id)))
        {

            View::composer(['mail.mailmessage'], function ($view) {

        $view->with('name', $this->name);
        $view->with('phone', $this->phone);
        $view->with('email', $this->email);
        $view->with('checkin_date', $this->checkin_date);
        $view->with('checkout_date', $this->checkout_date);
        $view->with('countA', $this->countA);
        $view->with('countCh', $this->countCh);
        $view->with('room', $this->room_name);
        });
        
        Mail::send(['text'=>'mail.mailmessage'],['name', 'Royal Hotel'], function($message){
            $message->to('RoyalHotel5stars@gmail.com','Royal Hotel')->subject('Новая заявка!');
            $message->from('RoyalHotel5stars@gmail.com','Royal Hotel');
        });


        App\Clients::insert($this->name, $this->phone, $this->email, $this->checkin_date, $this->checkout_date, $this->countA, $this->countCh, $this->room_id);

        return view('mail.mailsended')->with('name', $this->name);  
         }

    	 return view('rooms.available')->with('name', $this->name);  
	}



}