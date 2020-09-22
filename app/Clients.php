<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Clients extends Model
{
	  public function Type()
    {
	return $this->belongsTo('App\Rooms', 'room_id');
   }

	 public static function insert($name, $phone, $email, $checkin_date, $checkout_date, $countA, $countCh, $room_id){
		    $id = DB::table('clients')->insertGetId(
		    ['name' => $name, 'phone'=>$phone, 'email'=>$email, 'checkin_date'=>$checkin_date, 'checkout_date'=>$checkout_date, 'countA'=>$countA, 'countCh'=>$countCh, 'room_id' => $room_id]
		);
	}

  public static function HasRoomBooking($checkin_date, $checkout_date, $room_id){
    return DB::table('clients')->where('checkin_date', '<=', $checkin_date)
        ->where('checkout_date', '>=', $checkin_date)
        ->where('room_id', '=', $room_id)
        ->first();
  }

    public static function HasRoomBooking2($checkin_date, $checkout_date, $room_id){
    return DB::table('clients')->where('checkin_date', '<=', $checkout_date)
        ->where('checkout_date', '>=', $checkout_date)
        ->where('room_id', '=', $room_id)
        ->first();
  }

public static function FreeRooms($checkin_date, $checkout_date){

//**************************************************************
 /* select * from clients where (
          checkin_date<="3 April, 2020"
          and checkout_date>="6 April, 2020")
          
          or(
          checkin_date<="3 April, 2020"
          and checkout_date>="6 April, 2020")
*/

         $roomids =  
         DB::select('select * from clients where (
          checkin_date<="'.$checkin_date.'"
          and checkout_date>="'.$checkin_date.'")
          
          or(
          checkin_date<="'.$checkout_date.'"
          and checkout_date>="'.$checkout_date.'")
          ');

          $rooms=DB::table('rooms')->get();

           for ($i = 0; $i < count($rooms); $i++) {
          for ($j = 0; $j < count($roomids); $j++) {
             if($rooms[$i]->id==$roomids[$j]->room_id){
              $rooms[$i]->id=0;
             }
          }
      }
      return $rooms;
  }

}


