<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\fodcatmod;
use App\foodmod;
use App\cartmod;
use App\cartitemmod;
use DB;
use Auth;
use Carbon;
use App\dtablemod;
use Illuminate\Support\Facades\Input;
class tableusercon extends Controller
{
    //
         public function start()
            {
session()->forget('booked');
                 $foodobj =new foodmod();
                        $food=$foodobj->all();
                        $foodcategoryobj =new fodcatmod(); 
                        $foodcategory=$foodcategoryobj->all();
                        $cartobj=new cartmod();
                        $cart=$cartobj->all();
                        //update mate
                        $id=session('tid');
                    $status='0';   
                $c=dtablemod::find($id);
                $c->status=$status;
                $c->save();
                        return view('TableUser/start',compact('food','foodcategory','cart'));
            } 
            public function menu()
            {
               //update mate
                        $id=session('tid');
                    $status='1';   
                $c=dtablemod::find($id);
                $c->status=$status;
                $c->save();
                        session()->put('booked','booked');
              $foodobj =new foodmod();
              $food=$foodobj->all();
              $foodcategoryobj =new fodcatmod(); 
              $foodcategory=$foodcategoryobj->all();
                $cartobj=new cartmod();
                $cart=$cartobj->all();
            return view('TableUser/menu',compact('food','foodcategory','cart'));
            }  
             //
            public function cook()
            {
            return view('TableUser/cook');
            }  
         //cart insert 
            public function cartinsert()      
                {
                $fid=Input::get('fid');
                $qty=Input::get('quantity');
                $amount=Input::get('amount');
                $status="0";
                $cid=session('tid');
              echo $fid."".$qty."".$amount."".$status."".$cid;
                   $c=new cartitemmod();
                   $c->CartId=$cid;
                   $c->FoodId=$fid;
                   $c->Quantity=$qty;
                   $c->Amount=$amount;
                   $c->Status=$status;
                    $c->save();
                // if ($c->save())
                // {
                //        return redirect('menu');
                // }
                //     $c=new fodcatmod();
                //     $data=$c->get();
                //     return view('AdminPanel/foodcategory',compact('data','status'));
                }
//place order
         public function placeorder()
            {
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
                ->where('cartitem_tbl.CartId',$id)
                ->get();
                return view('TableUser/placeorder',compact('cartitem','dtable','food','order'));
            } 
//bill
         public function bill()
            {
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
                ->where('cartitem_tbl.CartId',$id)
                ->get();
                $purchase = DB::table('cartitem_tbl')
               ->where('CartId',$id)
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
              return view('TableUser/bill',compact('cartitem','dtable','food','order','purchase','j','k','id','mytime'));
              // return view('TableUser/bill');
            } 
}