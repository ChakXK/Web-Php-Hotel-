<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;    
class ManagementController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
    */
        public function index()
    {
        $booking = App\Clients::all();
        return view('management.home', compact('booking'));
    }


    public function rooms()
    {
        $rooms = App\Rooms::all();
        return view('management.rooms', compact('rooms'));
    }

        public function addroom()
    {

        return view('management.addroom');
    }

        public function roomadded()
    {
        if(isset($_POST['name']) && isset($_POST['prise'])){
        $name=htmlentities($_POST['name']);
        $prise = $_POST['prise'];

        $uploaddir = public_path() .'/'.config('sitesettings.imagesputh');
        $namefile = time().rand(0,1000000).'_'.basename($_FILES['image']['name']);
        $uploadfile = $uploaddir .'/'. $namefile;
        move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);
        App\Rooms::add($name,$prise, $namefile);
         } 

          $rooms = App\Rooms::all();
        return view('management.rooms', compact('rooms'));
    }


         public function deleteroom($id)
    {
        $room =  App\Rooms::find($id);
        return view('management.deleteroom', compact('room'));
    }


         public function roomdeleted()
    {
        if(isset($_POST['id']) && isset($_POST["ok"])){
        $id=htmlentities($_POST['id']);

        $room = App\Rooms::find($id);

        $room->delete();

         } 

          $rooms = App\Rooms::all();
        return view('management.rooms', compact('rooms'));
    }

         public function updateroom($id)
    {
        $room =  App\Rooms::find($id);
        return view('management.updateroom', compact('room'));
    }


         public function roomupdated()
    {
        if( isset($_POST["ok"])){

        $id=htmlentities($_POST['id']);

       $name=htmlentities($_POST['name']);
        $prise = $_POST['prise'];

     if( $_FILES['image']['name']){

        $uploaddir = public_path() .'/'.config('sitesettings.imagesputh');
        $namefile = time().rand(0,1000000).'_'.basename($_FILES['image']['name']);
        $uploadfile = $uploaddir .'/'. $namefile;
        move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);

          App\Rooms::updaterimage($id,$namefile);
     }
       
        App\Rooms::updater($id,$name,$prise);

         } 

          $rooms = App\Rooms::all();
        return view('management.rooms', compact('rooms'));
    }


    public function food()
    {
        $food = App\Food::all();
        return view('management.food', compact('food'));
    }

        public function addfood()
    {
            $type = App\TypeFood::all();
        return view('management.addfood', compact('type'));
    }

        public function foodadded()
    {
        if($_POST['name']!=null && $_POST['prise']!=null && $_POST['type']!=null){
        $name=htmlentities($_POST['name']);
        $prise = $_POST['prise'];
        $type = $_POST['type'];
        App\Food::add($name,$prise, $type);
         } 

          $food = App\Food::all();
        return view('management.food', compact('food'));
    }


    public function updatefood($id)
    {
        $food =  App\Food::find($id);
        $type = App\TypeFood::all();
        return view('management.updatefood', compact('food'), compact('type'));
    }


         public function foodupdated()
    {
        if( isset($_POST["ok"])){

        $id=htmlentities($_POST['id']);

       $name=htmlentities($_POST['name']);
        $prise = $_POST['prise'];
         $type = $_POST['type'];
       
        App\Food::updater($id,$name,$prise,$type);
        }

          $food = App\Food::all();
        return view('management.food', compact('food'));
    }



         public function deletefood($id)
    {
        $food =  App\Food::find($id);
        return view('management.deletefood', compact('food'));
    }


         public function fooddeleted()
    {
        if(isset($_POST['id']) && isset($_POST["ok"])){
        $id=htmlentities($_POST['id']);

        $food = App\Food::find($id);

        $food->delete();

         } 

          $food = App\Food::all();
        return view('management.food', compact('food'));
    }

         public function deletebooking($id)
    {
        $booking =  App\Clients::find($id);
        return view('management.deletebooking', compact('booking'));
    }


         public function bookingdeleted()
    {
        if(isset($_POST['id']) && isset($_POST["ok"])){
        $id=htmlentities($_POST['id']);

        $client = App\Clients::find($id);

        $client->delete();

         } 

          $booking = App\Clients::all();
        return view('management.home', compact('booking'));
    }

}
