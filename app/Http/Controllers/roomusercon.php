<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\roomcategorymod;
use App\hotelteammod;
use App\facilitiesmod;
use App\roommod;
use App\roomcartmod;
use App\servicemod;
use App\foodmod;
use App\fodcatmod;
use App\contactusmod;

use App\roomcartitemmod;
use Illuminate\Support\Facades\Input;
use DB;
use Carbon;
class roomusercon extends Controller
{
 public function contact_us()
               {


                    $cname=Input::get('name');
                    $email=Input::get('email_address');
                    $msg=Input::get('msg');

                       $ca=new contactusmod();
                       $ca->C_Name=$cname;
                       $ca->C_Email=$email;
                       $ca->Message=$msg;
                       $ca->save();

                       return view('RoomUser/hcontactus');

               }
            public function logginroom()
            {
                $roomobj =new roommod();
                $room=$roomobj->all();
                $roomcategoryobj =new roomcategorymod(); 
                $roomcategory=$roomcategoryobj->all();
                $roomcartobj=new roomcartmod();
                $roomcart=$roomcartobj->all();
                return view('RoomUser/loginroomuser',compact('room','roomcategory','roomcart'));
            }
                public  function  room() 
                {
                        $rid=session('rid');
//                echo $rid;               
                        $roomobj =new roommod();
                        $room=$roomobj->all();
                        $roomcategoryobj =new roomcategorymod(); 
                        $roomcategory=$roomcategoryobj->all();
                        $roomcartobj=new roomcartmod();
                        $roomcart=$roomcartobj->all();
                        $serviceobj = new servicemod();
                        $service=$serviceobj->all();
                        $foodobj =new foodmod();
                        $food=$foodobj->all();
                        $foodcategoryobj =new fodcatmod(); 
                        $foodcategory=$foodcategoryobj->all();
                        return view('RoomUser/room',compact('room','roomcategory','roomcart','service','food','foodcategory'));

                }

             public function roomlogin()      
                {
                    $rid=Input::get('rid');
                    $pass=Input::get('password');

         
                    $c=new roommod();
                    $data=$c->where('RoomId',$rid)->where('Pass',$pass)->count();
                      
                    if ($data>0)
                    {
                        session()->put('rid',$rid);
                        
                        $roomobj =new roommod();
                        $room=$roomobj->all();
                        $roomcategoryobj =new roomcategorymod(); 
                        $roomcategory=$roomcategoryobj->all();
                        $roomcartobj=new roomcartmod();
                        $roomcart=$roomcartobj->all();
                        $serviceobj = new servicemod();
                        $service=$serviceobj->all();
                        $foodobj =new foodmod();
                        $food=$foodobj->all();
                        $foodcategoryobj =new fodcatmod(); 
                        $foodcategory=$foodcategoryobj->all();
                        return view('RoomUser/room',compact('room','roomcategory','roomcart','service','food','foodcategory'));
                    }
                    else 
                    {
                        return redirect('loginroom');
            
                    }


                }

                public function cinsert()
                {

                    $fid=Input::get('fid');
                    $qty=Input::get('quantity');
                    $amount=Input::get('amount');
                    $status="0";
                    $cid=session('rid');
                    $type="0";
                     $ca=new roomcartitemmod();
                       $ca->RoomCartId=$cid;
                       $ca->SFId=$fid;
                       $ca->Type=$type;
                       $ca->Quantity=$qty;
                       $ca->Amount=$amount;
                       $ca->Status=$status;
                        //echo $ca; 
                        if( $ca->save())
                        {
                            echo "yes";
                        } else {
                            echo "no";
                        }

                }

                public function sinsert()
                {

                    $sid=Input::get('sid');
                    $qty=Input::get('quantity');
                    $amount=Input::get('amount');
                    $status="0";
                    $cid=session('rid');
                    $type="1";
                     $ca=new roomcartitemmod();
                       $ca->RoomCartId=$cid;
                       $ca->SFId=$sid;
                       $ca->Type=$type;
                       $ca->Quantity=$qty;
                       $ca->Amount=$amount;
                       $ca->Status=$status;
                        //echo $ca; 
                        if( $ca->save())
                        {
                            echo "yes";
                        } else {
                            echo "no";
                        }

                }

                public function cartinsert()
                {

                    $fid=Input::get('fid');
                    $qty=Input::get('quantity');
                    $amount=Input::get('amount');
                    $status="0";
                    $cid=session('rid');
                    $type="0";



                    $ca=new roomcartitemmod();
                       $ca->RoomCartId=$cid;
                       $ca->SFId=$fid;
                       $ca->Type=$type;
                       $ca->Quantity=$qty;
                       $ca->Amount=$amount;
                       $ca->Status=$status;
                        //echo $ca; 
                        if( $ca->save())
                        {
                            echo "yes";
                        } else {
                            echo "no";
                        }
                      
                }

                public  function    cart()
                {

                $id=session('rid');
                $c=new roomcartitemmod();
                $cartitem=$c->all();
                $v=new roommod();
                $dtable=$v->all();
                $b=new foodmod();
                $food=$b->all();
                $b=new servicemod();
                $service=$b->all();

                $order=DB::table('roomcartitem_tbl')
                ->join ('food_tbll','food_tbll.FoodId','=','roomcartitem_tbl.SFId')
                ->select(DB::raw('food_tbll.FName,food_tbll.Price,roomcartitem_tbl.Quantity,roomcartitem_tbl.Status,roomcartitem_tbl.Amount'))
                ->where('roomcartitem_tbl.Type','0')

                ->where('roomcartitem_tbl.RoomCartId',$id)
                ->get();


                $service=DB::table('roomcartitem_tbl')
                ->join ('service_tbl','service_tbl.ServiceId','=','roomcartitem_tbl.SFId')
                ->select(DB::raw('service_tbl.SName,service_tbl.S_Price,roomcartitem_tbl.Quantity,roomcartitem_tbl.Status,roomcartitem_tbl.Amount'))
                ->where('roomcartitem_tbl.Type','1')
               
                ->where('roomcartitem_tbl.RoomCartId',$id)
                ->get();

                return view ('RoomUser/service',compact('cartitem','dtable','food','order','service'));

                }

             
            public function sbill()
            {
                $id=session('rid');
                $c=new roomcartitemmod();
                $cartitem=$c->all();
                $v=new roommod();
                $room=$v->all();
                $b=new foodmod();
                $food=$b->all();
                $s=new servicemod();
                $service=$s->all();

                $order=DB::table('roomcartitem_tbl')
                ->join ('food_tbll','food_tbll.FoodId','=','roomcartitem_tbl.SFId')
                ->select(DB::raw('food_tbll.FName,food_tbll.Price,roomcartitem_tbl.Quantity,roomcartitem_tbl.Status,roomcartitem_tbl.Amount'))
                ->where('roomcartitem_tbl.Type','0')
                
                ->where('roomcartitem_tbl.RoomCartId',$id)
                ->get();

                $service=DB::table('roomcartitem_tbl')
                ->join ('service_tbl','service_tbl.ServiceId','=','roomcartitem_tbl.SFId')
                ->select(DB::raw('service_tbl.SName,service_tbl.S_Price,roomcartitem_tbl.Quantity,roomcartitem_tbl.Status,roomcartitem_tbl.Amount'))
                ->where('roomcartitem_tbl.Type','1')
                
                ->where('roomcartitem_tbl.RoomCartId',$id)
                ->get();


                $purchase = DB::table('roomcartitem_tbl')
               ->where('RoomCartId',$id)
               ->select(DB::raw('sum(Amount) as Subtotal'))
               
               ->get();

                foreach($purchase as $pur){
                $i=$pur->Subtotal;}

                $j=($i*5)/100;
                $k=$i+$j;
                  $mytime = Carbon\Carbon::now();
              return view('RoomUser/sbill',compact('cartitem','room','food','service','order','purchase','j','k','id','mytime'));
                
                }


               public function rabout_us()
               {

                $a=new facilitiesmod();
                $facilitie=$a->all();

                $b=new hotelteammod();
                $team = $b->all();

                return view('RoomUser/haboutus',compact('facilitie','team'));
               }

               public function rcontact_us()
               {        
                return view('RoomUser/hcontactus'); 

               }

               public function rblog_page()
               {
                    return view('RoomUser/hblogpage');
               }

               public function details()
               {
                    return view('RoomUser/roomdetails');
               }



    //
}