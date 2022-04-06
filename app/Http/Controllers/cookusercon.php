<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\fodcatmod;
use App\foodmod;
use App\cartmod;
use App\dtablemod;
use App\roomcartitemmod;
use App\parsalitemmod;
use App\cartitemmod;
use Illuminate\Support\Facades\Input;

use DB;

class cookusercon extends Controller
{
    //
    public function cookdis()
    {
        return view('CookUser/cookpage'); 
    }   
    public function cook(){

                
                $record=DB::table('cartitem_tbl')
               ->join('food_tbll','food_tbll.FoodId','=','cartitem_tbl.FoodId')
               ->join('foodcategory_tbl','foodcategory_tbl.FoodCategoryId','=','food_tbll.FoodCategoryId')
                 ->select(DB::raw('cartitem_tbl.CartId,cartitem_tbl.CartItemId,foodcategory_tbl.FName,food_tbll.FName as fname,cartitem_tbl.Quantity,cartitem_tbl.Status'))
                 ->where('cartitem_tbl.Status','0') 
                 ->orwhere('cartitem_tbl.Status','1')
                 ->orderBy('cartitem_tbl.CartItemId','desc')
                ->get();

                 $record2=DB::table('roomcartitem_tbl')
               ->join('food_tbll','food_tbll.FoodId','=','roomcartitem_tbl.SFId')
               ->join('foodcategory_tbl','foodcategory_tbl.FoodCategoryId','=','food_tbll.FoodCategoryId')
                 ->select(DB::raw('roomcartitem_tbl.RoomCartId,roomcartitem_tbl.RoomCartItemId,foodcategory_tbl.FName,food_tbll.FName as fname,roomcartitem_tbl.Quantity,roomcartitem_tbl.Status'))
                 ->where('roomcartitem_tbl.Type','0') 
                
                 ->where('roomcartitem_tbl.Status','0') 
                 ->orwhere('roomcartitem_tbl.Status','1')
                 ->orderBy('roomcartitem_tbl.RoomCartItemId','desc')
                ->get();

               //   $record3=DB::table('parsalitem_tbl')
               // ->join('food_tbll','food_tbll.FoodId','=','parsalitem_tbl.ParsalId')
               //   ->select(DB::raw('parsalitem_tbl.ParsalId,food_tbll.FName as fname,parsalitem_tbl.Quantity,parsalitem_tbl.Status'))
               //   ->where('parsalitem_tbl.Status','0') 
               //   ->orwhere('parsalitem_tbl.Status','1')
               //  ->get();

                   $record3=DB::select("SELECT a.ParsalId,b.FName,a.Quantity,a.Status From parsalitem_tbl a,food_tbll b WHERE a.FoodId=b.FoodId AND (a.Status='0'OR a.Status='1')");
                   // print_r($record3);
                 
                foreach($record as $row)
                {
                echo "<form method='post'>";

                  echo "<tr>";

                    echo "<th scope='col'>".$row->CartId."</th>";
                    echo "<th scope='col'>".$row->CartItemId."</th>";

                    echo "<th scope='col'>".$row->FName."</th>";
                    echo "<th scope='col'>".$row->fname."</th>";
                    echo "<th scope='col'>".$row->Quantity."</th>";
                   if($row->Status==0)
                    { 

                      echo "<th scope='col'><span class='label label-danger'>pending</span></th>";
                      
                        //echo "<th scope='col'>0</th>";
                    }
                    elseif ($row->Status==1) {
                        echo "<th scope='col'><span class='label label-warning'>pripared</span></th>";
                  
                    }
                    elseif($row->Status==2)
                    {
                      echo "<th scope='col'><span class='label label-success'>ready</span></th>";
                    }
                    echo "<th scope='col'> <button onclick='ok($row->CartItemId);' type='button' class='btn btn-default btn-lg'>
          <span class='glyphicon glyphicon-time'></span> 
        </button></th>";
                  
                    echo "<th scope='col'> <button onclick='ready($row->CartItemId)' type='button' class='btn btn-default btn-lg'>
          <span class='glyphicon glyphicon-saved'></span> 
        </button></th>";
               
                  
                 echo "</tr>";
                 echo "</form>";
            

              }

              echo "<br></br>";
                   echo "<h3 align='center'>ROOM</h3>";

       echo " <tr>

      <th scope='col'>RoomID</th>
      <th scope='col'>CartItemID</th>
       <th scope='col'>FoodCategoryName</th>
      <th scope='col'>FoodName</th>
      <th scope='col'>Quantity</th>
     <th scope='col'>Status</th>
     <th scope='col'>prepare</th>
     <th scope='col'>Ready</th>
    
    </tr>";


                 foreach($record2 as $row2)
                {
                echo "<form method='post'>";

                  echo "<tr>";

                    echo "<th scope='col'>".$row2->RoomCartId."</th>";
                    echo "<th scope='col'>".$row2->RoomCartItemId."</th>";

                    echo "<th scope='col'>".$row2->FName."</th>";
                    echo "<th scope='col'>".$row2->fname."</th>";
                    echo "<th scope='col'>".$row2->Quantity."</th>";
                   if($row2->Status==0)
                    { 

                      echo "<th scope='col'><span class='label label-danger'>pending</span></th>";
                      
                        //echo "<th scope='col'>0</th>";
                    }
                    elseif ($row2->Status==1) {
                        echo "<th scope='col'><span class='label label-warning'>pripared</span></th>";
                  
                    }
                    elseif($row2->Status==2)
                    {
                      echo "<th scope='col'><span class='label label-success'>ready</span></th>";
                    }
                    echo "<th scope='col'> <button onclick='ok2($row2->RoomCartItemId);' type='button' class='btn btn-default btn-lg'>
          <span class='glyphicon glyphicon-time'></span> 
        </button></th>";
                  
                    echo "<th scope='col'> <button onclick='ready2($row2->RoomCartItemId)' type='button' class='btn btn-default btn-lg'>
          <span class='glyphicon glyphicon-saved'></span> 
        </button></th>";
               
                  
                 echo "</tr>";
                 echo "</form>";
            

              }

 echo "<br></br>";
                   echo "<h3 align='center'>PARSAL</h3>";

       echo " <tr>
      <th scope='col'>ParsalID</th>
      
      <th scope='col'>FoodName</th>
      <th scope='col'>Quantity</th>
     <th scope='col'>Status</th>
     <th scope='col'>prepare</th>
     <th scope='col'>Ready</th>
    
    </tr>";
  foreach($record3 as $row3)
                {
                echo "<form method='post'>";

                  echo "<tr>";

                    echo "<th scope='col'>".$row3->ParsalId."</th>";
                  
                    echo "<th scope='col'>".$row3->FName."</th>";
                   
                    echo "<th scope='col'>".$row3->Quantity."</th>";
                   if($row3->Status==0)
                    { 

                      echo "<th scope='col'><span class='label label-danger'>pending</span></th>";
                      
                        //echo "<th scope='col'>0</th>";
                    }
                    elseif ($row3->Status==1) {
                        echo "<th scope='col'><span class='label label-warning'>pripared</span></th>";
                  
                    }
                    elseif($row3->Status==2)
                    {
                      echo "<th scope='col'><span class='label label-success'>ready</span></th>";
                    }
                    echo "<th scope='col'> <button onclick='okk3($row3->ParsalId);' type='button' class='btn btn-default btn-lg'>
          <span class='glyphicon glyphicon-time'></span> 
        </button></th>";
                  
                    echo "<th scope='col'> <button onclick='readyy3($row3->ParsalId)' type='button' class='btn btn-default btn-lg'>
          <span class='glyphicon glyphicon-saved'></span> 
        </button></th>";
               
                  
                 echo "</tr>";
                 echo "</form>";
            

              }


              
              //x  return view(' ',compact('record'))->with('','');
       //	return view('CookUser/cookpage',compact('$food','$foodcategory','$cart','$order'));
        		
            }

    public function updatepripare()
    {
                    $id=Input::get('id');
                  $c=cartitemmod::find($id);
                  $c->Status='1';
                  $c->save();
     
     } 
         public function updatepripare2()
    {

                    $id=Input::get('id');

                 $c=roomcartitemmod::find($id);
                  $c->Status='1';
                  $c->save();
     
     } 
     public function updatepripare3()
    {
                    $id=Input::get('id');

                 $c=parsalitemmod::find($id);
                  $c->Status='1';
                  $c->save();
     
     } 
    public function updatepickup()
    {
                    $id=Input::get('id');
                  $c=cartitemmod::find($id);
                  $c->Status='3';
                  $c->save();
     
     }
       public function updatepickup2()
    {
                    $id=Input::get('id');
                  $c=roomcartitemmod::find($id);
                  $c->Status='3';
                  $c->save();
     
     }
         public function updatepickup4()
    {
    
                    $id=Input::get('id');
                  $c=parsalitemmod::find($id);
                  $c->Status='3';
                  $c->save();
     
     }
    public function updateready()
    {
                    $id=Input::get('id');
                  $c=cartitemmod::find($id);
                  $c->Status='2';
                  $c->save();
     
     }
       public function updateready2()
    {
                    $id=Input::get('id');
                  $c=roomcartitemmod::find($id);
                  $c->Status='2';
                  $c->save();
     
     }
        public function updateready3()
    {
                          $id=Input::get('id');
                  $c=parsalitemmod::find($id);
                  $c->Status='2';
                  $c->save();
     
     }
    
       public function updateservice2()
    {
                    $id=Input::get('id');
                  $c=roomcartitemmod::find($id);
                  $c->Status='4';
                  $c->save();
     
     }
     public function waiter()
     {
return view('CookUser/waiter');
     } 
      public function waiter2()
     {
 $record=DB::table('cartitem_tbl')
               ->join('food_tbll','food_tbll.FoodId','=','cartitem_tbl.FoodId')
               ->join('foodcategory_tbl','foodcategory_tbl.FoodCategoryId','=','food_tbll.FoodCategoryId')
                 ->select(DB::raw('cartitem_tbl.CartId,cartitem_tbl.CartItemId,foodcategory_tbl.FName,food_tbll.FName as fname,cartitem_tbl.Quantity,cartitem_tbl.Status'))
                 
          
                 ->where('cartitem_tbl.Status','2')
                 ->orderBy('cartitem_tbl.CartItemId','desc')
                ->get();

                 $record2=DB::table('roomcartitem_tbl')
               ->join('food_tbll','food_tbll.FoodId','=','roomcartitem_tbl.SFId')
               ->join('foodcategory_tbl','foodcategory_tbl.FoodCategoryId','=','food_tbll.FoodCategoryId')
                 ->select(DB::raw('roomcartitem_tbl.RoomCartId,roomcartitem_tbl.RoomCartItemId,foodcategory_tbl.FName,food_tbll.FName as fname,roomcartitem_tbl.Quantity,roomcartitem_tbl.Status'))
                 ->where('roomcartitem_tbl.Type','0') 
                
         
                 ->where('roomcartitem_tbl.Status','2')
                 ->orderBy('roomcartitem_tbl.RoomCartItemId','desc')
                ->get();
              
   $record3=DB::table('roomcartitem_tbl')
               ->join('service_tbl','service_tbl.ServiceId','=','roomcartitem_tbl.SFId')
                 ->select(DB::raw('roomcartitem_tbl.RoomCartId,roomcartitem_tbl.RoomCartItemId,service_tbl.SName,roomcartitem_tbl.Quantity,roomcartitem_tbl.Status'))
                 ->where('roomcartitem_tbl.Type','1') 
                
         
                 ->where('roomcartitem_tbl.Status','0')
                 ->orderBy('roomcartitem_tbl.RoomCartItemId','desc')
                ->get();

                $record4=DB::select("SELECT a.ParsalId,b.FName,a.Quantity,a.Status From parsalitem_tbl a,food_tbll b WHERE a.FoodId=b.FoodId AND a.Status='2'");

              
                foreach($record as $row)
                {
                echo "<form method='post'>";

                  echo "<tr>";

                    echo "<th scope='col'>".$row->CartId."</th>";
                    echo "<th scope='col'>".$row->CartItemId."</th>";

                    echo "<th scope='col'>".$row->FName."</th>";
                    echo "<th scope='col'>".$row->fname."</th>";
                    echo "<th scope='col'>".$row->Quantity."</th>";
                 if($row->Status==2)
                    {
                      echo "<th scope='col'><span class='label label-success'>ready</span></th>";
                    }elseif($row->Status==3)
                    {
                     echo "<th scope='col'><span class='label label-info'>pickup</span></th>";   
                    }
                    echo "<th scope='col'> <button onclick='ok($row->CartItemId);' type='button' class='glyphicon glyphicon-thumbs-u'>
          <span class='glyphicon glyphicon-transfer'></span> 
        </button></th>";
                  
                   
               
                  
                 echo "</tr>";
                 echo "</form>";
            

              }
              echo "<br><br>";
              echo "<h3 align='center'>ROOM_FOOD</h3>";

                echo "  <tr>
      <th scope='col'>RoomID</th>
      <th scope='col'>CartItemID</th>
       <th scope='col'>FoodCategoryName</th>
      <th scope='col'>FoodName</th>
      <th scope='col'>Quantity</th>
     <th scope='col'>Status</th>
     <th scope='col'>pickup</th>
   
    
    </tr>";

              foreach($record2 as $row2)
                {
                echo "<form method='post'>";

                  echo "<tr>";

                    echo "<th scope='col'>".$row2->RoomCartId."</th>";
                    echo "<th scope='col'>".$row2->RoomCartItemId."</th>";

                    echo "<th scope='col'>".$row2->FName."</th>";
                    echo "<th scope='col'>".$row2->fname."</th>";
                    echo "<th scope='col'>".$row2->Quantity."</th>";
                 if($row2->Status==2)
                    {
                      echo "<th scope='col'><span class='label label-success'>ready</span></th>";
                    }elseif($row2->Status==3)
                    {
                     echo "<th scope='col'><span class='label label-info'>pickup</span></th>";   
                    }
                    echo "<th scope='col'> <button onclick='ok2($row2->RoomCartItemId);' type='button' class='glyphicon glyphicon-thumbs-u'>
          <span class='glyphicon glyphicon-transfer'></span> 
        </button></th>";
                  
                   
               
                  
                 echo "</tr>";
                 echo "</form>";
            

              }

               echo "<br><br>";
                   echo "<h3 align='center'>ROOM_SERVICE</h3>";

                echo "  <tr>
      <th scope='col'>RoomID</th>
      <th scope='col'>CartItemID</th>
       
      <th scope='col'>ServiceName</th>
      <th scope='col'>Quantity</th>
     <th scope='col'>Status</th>
     <th scope='col'>pickup</th>
   
    
    </tr>";

              foreach($record3 as $row3)
                {
                echo "<form method='post'>";

                  echo "<tr>";

                    echo "<th scope='col'>".$row3->RoomCartId."</th>";
                    echo "<th scope='col'>".$row3->RoomCartItemId."</th>";

                    echo "<th scope='col'>".$row3->SName."</th>";
                            echo "<th scope='col'>".$row3->Quantity."</th>";
                 if($row3->Status==0)
                    { echo "<th scope='col'><span class='label label-danger'>pending</span></th>";
                     
                    }elseif($row4->Status==4)
                    {
                        echo "<th scope='col'><span class='label label-success'>ready</span></th>";
                    }
                    echo "<th scope='col'> <button onclick='ok3($row3->RoomCartItemId);' type='button' class='glyphicon glyphicon-thumbs-u'>
          <span class='glyphicon glyphicon-transfer'></span> 
        </button></th>";
                  
                   
               
                  
                 echo "</tr>";
                 echo "</form>";
            

              }
                    echo "<br><br>";
              echo "<h3 align='center'>PARSAL_FOOD</h3>";

                echo "  <tr>
      <th scope='col'>ParsalID</th>
  
      <th scope='col'>FoodName</th>
      <th scope='col'>Quantity</th>
     <th scope='col'>Status</th>
     <th scope='col'>pickup</th>
   
    
    </tr>";

              foreach($record4 as $row4)
                {
                echo "<form method='post'>";

                  echo "<tr>";

                    echo "<th scope='col'>".$row4->ParsalId."</th>";
                    
                    echo "<th scope='col'>".$row4->FName."</th>";
                   echo "<th scope='col'>".$row4->Quantity."</th>";
                 if($row4->Status==2)
                    {
                      echo "<th scope='col'><span class='label label-success'>ready</span></th>";
                    }elseif($row4->Status==3)
                    {
                     echo "<th scope='col'><span class='label label-info'>pickup</span></th>";   
                    }
                    echo "<th scope='col'> <button onclick='okk4($row4->ParsalId);' type='button' class='glyphicon glyphicon-thumbs-u'>
          <span class='glyphicon glyphicon-transfer'></span> 
        </button></th>";
                  
                   
               
                  
                 echo "</tr>";
                 echo "</form>";
            

              }

     } 

     // public function editcategorydis($id)
     //            {
                
     //                $c=new fodcatmod();
     //                $data=$c->where('FoodCategoryId',$id)->get();
     //                return view('AdminPanel/foodcategoryedit',compact('data'));
                
     //            }
     //            public function editcategory()
     //            {
     //                 $id=Input::get('id');  
     //                $name=Input::get('cname');   
              
     //            $c=fodcatmod::find($id);
     //            $c->FName=$name;
              
     //            if ($c->save()) {
     //                    # code...
     //                    $status['msg']="succesfully updated food category";
     //                    $status['qw']=1;
     //                }

     //             $j=new fodcatmod();
     //                         $data=$j->get();
     //                return view('AdminPanel/foodcategory',compact('data'));


     //            }
               
}
