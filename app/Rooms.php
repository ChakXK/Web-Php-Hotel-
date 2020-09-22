<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Auth;
class Rooms extends Model
{
   public static function add($name,$prise,$namefile){
     	DB::table('rooms')->insert(
    	['name'=>$name,
    	'prise'=>$prise,
    	'imagename'=> $namefile]);
     }

        public static function updater($id,$name,$prise){
       $upd =  DB::table('rooms')
              ->where('id', $id)
              ->update(
                ['name'=>$name,
                 'prise'=>$prise]);
          }

               public static function updaterimage($id,$namefile){
       $upd =  DB::table('rooms')
              ->where('id', $id)
              ->update(
                ['imagename'=> $namefile
             ]);
          }
}
