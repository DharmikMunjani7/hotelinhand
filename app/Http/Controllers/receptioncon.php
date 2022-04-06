<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Illuminate\Support\Facades\Input;
use App\facilitymod;
use App\roomcategorymod;
use App\roommod;
use App\customermod;
use App\bookroommod;
use App\roomcartitemmod;




use App\foodmod;
use Carbon;

use lluminate\Database\Eloquent\Builder;

class receptioncon extends Controller
{
  public  function search3()
                {
                  
                $search1=Input::get('search3');
                        
               session()->put('search3',$search1);


                $data1=DB::select("SELECT b.FName,b.Price,a.Quantity,a.Status,a.Amount From roomcartitem_tbl a,food_tbll b WHERE a.SFId = b.FoodId AND a.Type='0' AND a.RoomCartId=$search1  ");
                    $data2=DB::select("SELECT b.SName,b.S_Price,a.Quantity,a.Status,a.Amount From roomcartitem_tbl a,service_tbl b WHERE a.SFId = b.ServiceId AND a.Type='1' AND a.RoomCartId=$search1 ");
         
                foreach($data1 as $row)
                {
                  echo "<tr>";

                    echo "<th scope='col'>".$row->FName."</th>";
                    echo "<th scope='col'>".$row->Price."</th>";

                    echo "<th scope='col'>".$row->Quantity."</th>";
                    echo "<th scope='col'>".$row->Amount."</th>";
                    echo "<th scope='col'>".$row->Status."</th>";
                  
                    
                  
                 echo "</tr>";
              }
    foreach($data2 as $row2)
                {
                  echo "<tr>";

                    echo "<th scope='col'>".$row2->SName."</th>";
                    echo "<th scope='col'>".$row2->S_Price."</th>";

                    echo "<th scope='col'>".$row2->Quantity."</th>";
                    echo "<th scope='col'>".$row2->Amount."</th>";
                    echo "<th scope='col'>".$row2->Status."</th>";
                  
                    
                  
                 echo "</tr>";
              }

                              }

               
    //
   public function bookroom()
   {
   	 $data=DB::select('SELECT a.RoomId,b.RName,b.PricePerDay,b.Img ,a.RoomNo,a.R_Facilities FROM room_tbl a,roomcategory_tbl b  WHERE a.RoomCategoryId=b.RoomCategoryId');
//   $roomobj=new roommod();
//   $room=$roomobj->all();
     $bookroomobj=new bookroommod();
     $bookroom=$bookroomobj->all();

// $roomcategoryobj=new roomcategorymod();
//   $roomcategory=$roomcategoryobj->all();
  

   	return view('reception/bookroom',compact('data','bookroom'));
   }
   public function customer()
   {
     $customerobj=new customermod();
     $customer=$customerobj->all();

   	return view('reception/customer',compact('customer'));

   }
   public function addcustomer(Request $request)
   {
      $cname=Input::get('cname');
      $adults=Input::get('adults');
      $child=Input::get('children');
      $email=Input::get('email');
      $contact=Input::get('contact');
      $gst=Input::get('gst');
   $proof=Input::get('proof');
      $address=Input::get('address');
$file = $request->file('photocus');
                       //$file=Input::get('photo');
                         //Move Uploaded File
                    $destinationPath = 'customerproof';
                     $file->move($destinationPath,$file->getClientOriginalName());
 $c=new customermod();
                    $c->CName=$cname;
                    $c->Adults=$adults;
                    $c->Children=$child;
                    $c->EmailId=$email;
                    $c->Contact=$contact;
                    $c->Address=$address;
                    $c->GstNo=$gst;
                    $c->ProofType=$proof;
                  
                    $c->Proof=$file->getClientOriginalName();

                   if($c->save())
                   {
                      return view('reception/customer');
                      alert('inserted');
                   }



   }
   public function book()
   {
      $roomid=Input::get('roomid');
      $sdate=Input::get('sdate');
      $ldate=Input::get('ldate');

      $amount=Input::get('amount');
    
     
      $cid=Input::get('cid');
 $c=new bookroommod();
      
$c->RoomId=$roomid;
$c->CustomerId=$cid;
$c->StartDate=$sdate;
$c->EndDate=$ldate;
$c->Amount=$amount;
$c->save();
return redirect('bookroom');



   }
     public function books()
   {
    
                     return view('reception/book');
      


   }
   public function rr()
   {
    $roomobj=new roommod();
     $room=$roomobj->all();

    $bookroomobj=new bookroommod();
     $bookroom=$bookroomobj->all();


    return view('reception/roomcart',compact('room','bookroom'));
   }
    public function rs()
   {
      $c=new roommod();
                             $data=$c->get();
    return view('reception/roomstatus',compact('data'));
   }
    public function deleteroomcart()
            {
                        $id=session('search3');
          
                     $deleteroomcart=roomcartitemmod::where('RoomCartId',$id);
                
                    $d=$deleteroomcart->delete();

                    $bookroom=bookroommod::where('RoomId',$id);
                    $q=$bookroom->delete();
                        if($d){
                          return redirect('rr');
               
                            
                        }else{

                          return redirect('rr');
                        }
             
            }


         public function roombill()
            {
                $search=session('search3');

                $id=session('rid');
                $c=new roomcartitemmod();
                $roomcartitem=$c->all();
                $v=new roommod();
                $room=$v->all();
                $b=new foodmod();
                $food=$b->all();

            $data1=DB::select("SELECT b.FName,b.Price,a.Quantity,a.Status,a.Amount From roomcartitem_tbl a,food_tbll b WHERE a.SFId = b.FoodId AND a.Type='0' AND a.RoomCartId=$search  ");
                    $data2=DB::select("SELECT b.SName,b.S_Price,a.Quantity,a.Status,a.Amount From roomcartitem_tbl a,service_tbl b WHERE a.SFId = b.ServiceId AND a.Type='1' AND a.RoomCartId=$search ");
                    $data3=DB::select("SELECT b.RoomNo,c.CName,a.StartDate,a.EndDate,a.Amount FROM bookroom_tbl a,room_tbl b,customer_tbl c WHERE a.CustomerId=c.CustomerId AND a.RoomId=b.RoomID And a.RoomId=$search ");
//SELECT b.RoomNo,c.CName,a.StartDate,a.EndDate,a.Amount FROM bookroom_tbl a,room_tbl b,customer_tbl c WHERE a.CustomerId=c.CustomerId AND a.RoomId=b.RoomID And a.RoomId='1'

                $purchase = DB::table('roomcartitem_tbl')
               ->where('RoomCartId',$search )
               ->select(DB::raw('sum(Amount) as Subtotal'))
               
               ->get();


                $purchase2 = DB::table('bookroom_tbl')
               ->where('RoomId',$search )
               ->select(DB::raw('sum(Amount) as Subtotal2'))
               
               ->get();

foreach($purchase as $pur){
   $i=$pur->Subtotal;}


foreach($purchase2 as $pur2){
   $u=$pur2->Subtotal2;}
$p=$i+$u;
               $j=($p*5)/100;
              $k=$p+$j;
                  $mytime = Carbon\Carbon::now();
    //echo $i;

// $total = Member::count();
// $percent =  / $total * 100;


            


              return view('reception/roombill',compact('roomcartitem','room','food','data1','data2','data3','purchase','p','j','k','search','mytime'));
              // return view('TableUser/bill');
            } 

}
