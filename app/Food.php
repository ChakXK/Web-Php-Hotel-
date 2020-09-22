<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Food extends Model
{

  public function Type()
    {
	return $this->belongsTo('App\TypeFood', 'type_foods_id');
   }

   public static function foodstype(){
     return DB::table('foods')
            ->join('type_foods', 'type_foods.id', '=', 'foods.type_foods_id')
            ->select('foods.*', 'type_foods.name as type_name')
            ->get();
	}


    public static function foods()
		{
			$types = DB::table('type_foods')->get();
			$foods=[];
			foreach ($types as $type ) {
				$foods[$type->name]=DB::table('foods')->where('type_foods_id',$type->id)->get();
			}
				return $foods;
			
		}

		public static function add($name,$prise,$type){
     	DB::table('foods')->insert(
    	['name'=>$name,
    	'prise'=>$prise,
    	'type_foods_id'=> $type]);
     }

        public static function updater($id,$name,$prise,$type){
       $upd =  DB::table('foods')
              ->where('id', $id)
              ->update(
              ['name'=>$name,
    			'prise'=>$prise,
    			'type_foods_id'=> $type]);
          }

}
