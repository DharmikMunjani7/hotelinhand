<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\fodcatmod;
use App\foodmod;
use App\cartmod;
use App\cartitemmod;
use App\parsalitemmod;
use App\dtablemod;
use App\tokenmod;

use Carbon;
use DB;
use Illuminate\Support\Facades\Input;
use lluminate\Database\Eloquent\Builder;

class cashiercon extends Controller
{
	function foodmenu()
	{
    //echo "fggs";

            	$foodobj =new foodmod();
            	$food=$foodobj->all();
            	$foodcategoryobj =new fodcatmod(); 
            	$foodcategory=$foodcategoryobj->all();
                $cartobj=new cartmod();
                $cart=$cartobj->all();
        		return view('cashier/foodmenu',compact('food','foodcategory','cart'));
		
	}
	    public function parsalcartinsert()      
                {
              echo "haamojha";
                $fid=Input::get('fid');
              
                $qty=Input::get('quantity');
                $amount=Input::get('amount');
                $status="0";
                
              // echo $fid."".$qty."".$amount."".$status;

                   $c=new parsalitemmod();
              
                   $c->FoodId=$fid;
                   $c->Quantity=$qty;
                   $c->Amount=$amount;
                   $c->Status=$status;
                   // $c->save();
                   
                if ($c->save())
                {
                       return redirect('foodmenu');
                }
                

                //     $c=new fodcatmod();
                //     $data=$c->get();

                //     return view('AdminPanel/foodcategory',compact('data','status'));
                }

              function tcart()
                {
                  return view('cashier/tcart');
                }

              function tablecart()
                {
                    $v=new dtablemod();
                $dtable=$v->all();
                  return view('cashier/tablecart',compact('dtable'));
                }
                public  function search2()
                {
                  echo "esaasdfa";
                $search1=Input::get('search2');
                                 session()->put('search',$search1);
echo $search1;
                   $c=new cartitemmod();
                   $q=new foodmod();


                $data1=DB::table('cartitem_tbl')
                ->join ('food_tbll','food_tbll.FoodId','=','cartitem_tbl.FoodId')
                ->select(DB::raw('food_tbll.FName,food_tbll.Price,cartitem_tbl.Quantity,cartitem_tbl.Status,cartitem_tbl.Amount'))
                ->where('cartitem_tbl.CartId',$search1)
                ->get();

                     
                     //$data1=$c->where('CartId',$search)->get();
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


                       //   return view('cashier/',compact('food','foodcategory','cart'));

                              }

               
                function order()
                {
                   $c=new parsalitemmod();
                $parsalitem=$c->all();
                $v=new dtablemod();
                $dtable=$v->all();
                $b=new foodmod();
                $food=$b->all();

                $order=DB::table('parsalitem_tbl')
                ->join ('food_tbll','food_tbll.FoodId','=','parsalitem_tbl.FoodId')
                ->select(DB::raw('food_tbll.FName,food_tbll.Price,parsalitem_tbl.Quantity,parsalitem_tbl.Status,parsalitem_tbl.Amount'))
              
                ->get();
               
            
                    
                
                    
                return view('cashier/placeorder',compact('parsalitem','dtable','food','order'));
            }

    public function parsalbill()
            {
                $id=session('tid');
               
                $c=new parsalitemmod();
                $cartitem=$c->all();
                $v=new dtablemod();
                $dtable=$v->all();
                $b=new foodmod();
                $food=$b->all();

                $order=DB::table('parsalitem_tbl')
                ->join ('food_tbll','food_tbll.FoodId','=','parsalitem_tbl.FoodId')
                ->select(DB::raw('food_tbll.FName,food_tbll.Price,parsalitem_tbl.Quantity,parsalitem_tbl.Status,parsalitem_tbl.Amount'))
                ->get();


                $purchase = DB::table('parsalitem_tbl')
               ->select(DB::raw('sum(Amount) as Subtotal'))
               
               ->get();

foreach($purchase as $pur){
   $i=$pur->Subtotal;}

               $j=($i*5)/100;
              $k=$i+$j;
    $mytime = Carbon\Carbon::now();


            


              return view('cashier/bill',compact('cartitem','dtable','food','order','purchase','j','k',
                'mytime'));
              // return view('TableUser/bill');
            }

         public function tablebill()
            {
                $search=session('search');

                $id=session('tid');
                $c=new cartitemmod();
                $cartitem=$c->all();
                $v=new dtablemod();
                $dtable=$v->all();
                $b=new foodmod();
                $food=$b->all();

                $order=DB::table('cartitem_tbl')
                ->join ('food_tbll','food_tbll.FoodId','=','cartitem_tbl.FoodId')
                ->select(DB::raw('food_tbll.FName,food_tbll.Price,cartitem_tbl.Quantity,cartitem_tbl.Status,cartitem_tbl.Amount'))
                ->where('cartitem_tbl.CartId',$search)
                ->get();


                $purchase = DB::table('cartitem_tbl')
               ->where('CartId',$search )
               ->select(DB::raw('sum(Amount) as Subtotal'))
               
               ->get();

foreach($purchase as $pur){
   $i=$pur->Subtotal;}

               $j=($i*5)/100;
              $k=$i+$j;
                  $mytime = Carbon\Carbon::now();
    //echo $i;

// $total = Member::count();
// $percent =  / $total * 100;


            


              return view('cashier/tablebill',compact('cartitem','dtable','food','order','purchase','j','k','search','mytime'));
              // return view('TableUser/bill');
            } 

            //token
            function token()
            {
               $b=new tokenmod();
                 

                    $data=$b->orderBy('TokenNo', 'DESC')->get();

                    $c=new dtablemod();

                    $data2=$c ->get();
              return view('cashier/token',compact('data','data2'));
            }
    //

                function recivetoken()
                {
                $name=Input::get('name');
                $number=Input::get('number');
                $cnumber=Input::get('cnumber');
              
               
               $b=new tokenmod();
                $b->Name=$name;
                $b->PersonNo=$number;
                $b->Contact_No=$cnumber;

                $b->save();
                    $data=$b->orderBy('TokenNo', 'DESC')->get();
                    
                     $c=new dtablemod();
                    $data2=$c ->get();

                
                  return redirect('token');  
                //return view('cashier/token',compact('data','data2'));
            }
            function deletetoken()
            {
           
                $id=Input::get('id');
                    $token=tokenmod::find($id);
                     $d=$token->delete();
                  
            }
               public function deletecart()
            {
                        $id=session('search');
          
                     $deletecart=cartitemmod::where('CartId',$id);
                
                    $d=$deletecart->delete();
                        if($d){
                          return redirect('tablecart');
               
                            
                        }else{

                          return redirect('tablecart');
                        }
             
            }
            public function deleteparsalcart()
            {
                     
          
                 
                        $collection =parsalitemmod::get();

                          foreach($collection as $c) {

                          $c->delete();

                          }
                          return redirect('foodmenu');

             
            }
}
