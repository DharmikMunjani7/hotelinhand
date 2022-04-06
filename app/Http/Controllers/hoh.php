<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\fodcatmod;
use App\foodmod;
use App\adminmod;
use App\dtablemod;
use App\usertypemod;
use App\roomcategorymod;
use App\roommod;
use App\servicemod;
use App\usermod;
use App\cartmod;
use App\parsalitemmod;
use App\cartitemmod;
use App\facilitiesmod;
use App\roomcartmod;

use DB;
use Illuminate\Support\Facades\Input;


class hoh extends Controller
{

//food category
    public function dashboard()
    {
                     $q=fodcatmod::get()->count();
                     $w=foodmod::get()->count();

                     $e=usertypemod::get()->count();

                     $r=usermod::get()->count();

                     $t=dtablemod::get()->count();

                     $y=facilitiesmod::get()->count();

                     $u=roomcategorymod::get()->count();

                     $i=roommod::get()->count();

                     $o=servicemod::get()->count();


        return view('AdminPanel/dashboard',compact('q','w','e','r','t','y','u','i','o'));
    }
            public function foodcategory()
                {
                     $c=new fodcatmod();
                             $data=$c->get();
                    return view('AdminPanel/foodcategory',compact('data'));
                }


                public function recivefoodcategory()      
                {
                    $name=Input::get('cname');
                   
                    $c=new fodcatmod();
                    $c->FName=$name;
                  
                    echo $name;
                if ($c->save())
                {
                        # code...
                        $status['msg']="succesfully inserted food category";
                        $status['qw']=1;
                }
                

                    $c=new fodcatmod();
                    $data=$c->get();

                    return view('AdminPanel/foodcategory',compact('data','status'));

                }

                public function editcategorydis($id)
                {
                
                    $c=new fodcatmod();
                    $data=$c->where('FoodCategoryId',$id)->get();
                    return view('AdminPanel/foodcategoryedit',compact('data'));
                
                }
                public function editcategory()
                {
                     $id=Input::get('id');  
                    $name=Input::get('cname');   
              
                $c=fodcatmod::find($id);
                $c->FName=$name;
              
                if ($c->save()) {
                        # code...
                        $status['msg']="succesfully updated food category";
                        $status['qw']=1;
                    }

                 $j=new fodcatmod();
                             $data=$j->get();
                    return view('AdminPanel/foodcategory',compact('data'));


                }
                public function deletecategory()
                {
                
                    $id=Input::get('id');
                    $deletecategory=fodcatmod::find($id);
                     $d=$deletecategory->delete();
                        if($d){
                            echo "delete successful";
                        }else{
                            echo "not deleted";
                        }

                }

//facility
   public function facility()
                {
                     $c=new facilitiesmod();
                             $data=$c->get();
                    return view('AdminPanel/facility',compact('data'));
                }


                public function recivefacility(Request $request)      
                {
                   $file = $request->file('photoo');
                       //$file=Input::get('photo');
                         //Move Uploaded File
                    $destinationPath = 'facilityimage';
                     $file->move($destinationPath,$file->getClientOriginalName());

                    $name=Input::get('fname');
                    $description=Input::get('description');

                   
                    $c=new facilitiesmod();
                    $c->F_Name=$name;
                    $c->F_Description=$description;
                    $c->Img=$file->getClientOriginalName();

                  
                
                if ($c->save())
                {
                        # code...
                        $status['msg']="succesfully inserted food category";
                        $status['qw']=1;
                }
                

                    $c=new facilitiesmod();
                    $data=$c->get();

                    return view('AdminPanel/facility',compact('data','status'));

                }

                public function editdisfacility($id)
                {
                
                    $c=new facilitiesmod();
                    $data=$c->where('F_Id',$id)->get();
                    return view('AdminPanel/facilityedit',compact('data'));
                
                }
                public function editfacility(Request $request)
                {
                     $id=Input::get('id');  
                 $file = $request->file('photooo');
                         //Move Uploaded File
                    $destinationPath = 'facilityimage';
                     $file->move($destinationPath,$file->getClientOriginalName());

                    $name=Input::get('fname');
                    $description=Input::get('description');

                   
                    
  
              
                $c=facilitiesmod::find($id);
             $c->F_Name=$name;
                    $c->F_Description=$description;
                    $c->Img=$file->getClientOriginalName();
              
                if ($c->save()) {
                        # code...
                        $status['msg']="succesfully updated facility";
                        $status['qw']=1;
                    }

              return redirect('facility');


                }
                public function deletefacility()
                {
                
                    $id=Input::get('id');
                    $deletecategory=facilitiesmod::find($id);
                     $d=$deletecategory->delete();
                        if($d){
                            echo "delete successful";
                        }else{
                            echo "not deleted";
                        }

                }

//food
                public function food()
                    {
                     
$foodcategoryobj=new fodcatmod();
                        $foodcategory = $foodcategoryobj->all();
                       

               //  $data=DB::table('food_tbll')
               // ->join('foodcategory_tbl','foodcategory_tbl.FoodCategoryId','=','food_tbll.FoodCategoryId')
               //   ->select(DB::raw('food_tbll.FoodId'))
               //   ->where('food_tbll.FoodCategoryId','foodcategory_tbll.FoodCategoryId') 
                 
                // ->get();
            
                        $data=DB::select('SELECT a.FoodId,b.FName,a.FName as fname,a.Price,a.Quantity,a.Description FROM food_tbll a,foodcategory_tbl b  WHERE a.FoodCategoryId=b.FoodCategoryId');
           // print_r($data);
                       return view('AdminPanel/food',compact('data','foodcategory'));

              
                    }


                    public function recivefood(Request $request)      
                    {
                        $file = $request->file('photo');
                         //Move Uploaded File
                    $destinationPath = 'foodimage';
                     $file->move($destinationPath,$file->getClientOriginalName());
                 

                        $cid=Input::get('cid1');
                        $fname=Input::get('fname');
                        $price=Input::get('price');
                        $quantity=Input::get('quantity');
                        
                        $description=Input::get('description');

                       
                        $c=new foodmod();
                        $c->FoodCategoryId=$cid;
                        $c->FName=$fname;
                        $c->Price=$price;
                        $c->Quantity=$quantity;
                        $c->Img=$file->getClientOriginalName();
                        $c->Description=$description;

                    
                        
                    if ($c->save())
                    {
                            # code...

                            $status['msg']="succesfully inserted food category";
                            $status['qw']=1;
                    }
                    else
                    {
                        echo "not inserted";
                    }

                    
 
 return redirect('food');
                    }

                    public function editdis($id)
                    {
                    
                        $c=new foodmod();
                        $data=$c->where('FoodId',$id)->get();
                       $foodcategoryobj=new fodcatmod();
                        $foodcategory = $foodcategoryobj->all();
                        return view('AdminPanel/foodedit',compact('data','foodcategory'));
                    
                    }
                    public function editfood()
                    {
                         $id=Input::get('id2');  
                         $cid=Input::get('cid');
                        $fname=Input::get('fname');
                        $price=Input::get('price');
                        $quantity=Input::get('quantity');
                        $description=Input::get('description');

                 
                    $c=foodmod::find($id);

                        $c->FoodCategoryId=$cid;
                        $c->FName=$fname;
                        $c->Price=$price;
                        $c->Quantity=$quantity;
                        $c->Description=$description;
                  
                    if ($c->save()) {
                            # code...
                            $status['msg']="succesfully updated food category";
                            $status['qw']=1;
                        }

              return redirect('food');
                   



                    }
                    public function deletefood()
                    {
                    
                       
                       
                    $id=Input::get('id');
                    $deletefood=foodmod::find($id);
                     $d=$deletefood->delete();
                        if($d){
                            echo "delete successful";
                        }else{
                            echo "not deleted";
                        }

                    }

//dynamic table
                public function dtable()
                    {
                         $c=new dtablemod();
                                 $data=$c->get();
                                  $d=new cartmod();
                                 $da=$d->get();
                        return view('AdminPanel/dtable',compact('data','da'));
                    }


                    public function recivedtable()      
                    {
                        
                        $tablename=Input::get('tablename');
                        $nos=Input::get('nos');
                        $pass=Input::get('pass');
                     
                     $c=new dtablemod();
                       
                        $c->TName=$tablename;
                        $c->NoOfSeat=$nos;
                        $c->Pass=$pass;
$c->Status='0';
                        
                    if ($c->save())
                    {
                            $r= $c->TableId;
                            $t=new cartmod();
                            $t->TableId=$r;
                                if ($t->save())
                                {
                                  session()->put('table'.$r,$r);

                                }
                                else 
                                {
                                    echo "not insert in cart table ";
                                }
                            // $status['msg']="succesfully inserted dtable";
                            //$status['qw']=1;
                    }
                    else
                    {
                        echo "not inserted";
                    }

                        $c=new dtablemod();
                        $data=$c->get();

                        return view('AdminPanel/dtable',compact('data','status'));

                    }

                    public function editdisdtable($id)
                    {
                    
                        $c=new dtablemod();
                        $data=$c->where('TableId',$id)->get();
                        return view('AdminPanel/dtableedit',compact('data'));
                    
                    }
                    public function editdtable()
                    {
                         $id=Input::get('id3');  
                         $tablename=Input::get('tablename');
                        $nos=Input::get('nos');
                        $pass=Input::get('pass');
                       
                  
                    $c=dtablemod::find($id);

                        $c->TName=$tablename;
                        $c->NoOfSeat=$nos;
                        $c->Pass=$pass;
                  
                    if ($c->save()) {
                            # code...
                            $status['msg']="succesfully updated dtable";
                            $status['qw']=1;
                        }

              return redirect('dtable');
                    


                    }
                    public function deletedtable()
                    {
                        //echo Input::get('id'); 
                       
                        $id=Input::get('id');
                        $deletedtable=dtablemod::find($id);
                        $d=$deletedtable->delete();
                        if($d){
                            echo "delete successful";
                        }else{
                            echo "not deleted";
                        }

                    }

//user type
                public function usertype()
                    {
                         $c=new usertypemod();
                                 $data=$c->get();
                        return view('AdminPanel/usertype',compact('data'));
                    }


                    public function reciveusertype()      
                    {
                        
                        $uname=Input::get('uname');
                     
                     $c=new usertypemod();
                       
                        $c->UName=$uname;
                        
                        
                    if ($c->save())
                    {
                            # code...

                            $status['msg']="succesfully inserted usertype";
                            $status['qw']=1;
                    }
                    else
                    {
                        echo "not inserted";
                    }

                        $c=new usertypemod();
                        $data=$c->get();

                        return view('AdminPanel/usertype',compact('data','status'));

                    }

                    public function editdisusertype($id)
                    {
                    
                        $c=new usertypemod();
                        $data=$c->where('UserTypeId',$id)->get();
                        return view('AdminPanel/usertypeedit',compact('data'));
                    
                    }
                    public function editusertype()
                    {
                         $id=Input::get('id4');  
                         $uname=Input::get('uname');
                     
                       
                  
                    $c=usertypemod::find($id);

                        $c->UName=$uname;
                    
                    if ($c->save()) {
                            # code...
                            $status['msg']="succesfully updated usertype";
                            $status['qw']=1;
                        }
                        else
                        {
                            echo "not updated";
                        }

              return redirect('usertype');


                    }
                    public function deleteusertype()
                    {
                    $id=Input::get('id');
                    $deleteusertype=usertypemod::find($id);
                     $d=$deleteusertype->delete();
                        if($d){
                            echo "delete successful";
                        }else{
                            echo "not deleted";
                        }

                    }

//user 
                public function user()
                    {
                       
 $data=DB::select('SELECT a.UserId,b.UName,a.UserName,a.Pass FROM user_tbl a,usertype_tbl b  WHERE a.UserTypeId=b.UserTypeId');
           
                                  $usertypeobj=new usertypemod();
                        $usertype = $usertypeobj->all();
                        return view('AdminPanel/user',compact('data','usertype'));
                    }


                    public function reciveuser()      
                    {
                        
                        $utid=Input::get('utid');
                        $pass=Input::get('pass');
                        $uname=Input::get('uname');
                     
                     $c=new usermod();
                       
                        $c->UserTypeId=$utid;
                        $c->UserName=$uname;
                        $c->Pass=$pass;
                        
                        
                    if ($c->save())
                    {
                            # code...

                            $status['msg']="succesfully inserted usertype";
                            $status['qw']=1;
                    }
                    else
                    {
                        echo "not inserted";
                    }

                 
                        return redirect('user');

                    }

                    public function editdisuser($id)
                    {
                    
                        $c=new usermod();
                        $data=$c->where('UserId',$id)->get();
                        return view('AdminPanel/useredit',compact('data'));
                    
                    }
                    public function edituser()
                    {
                         $id=Input::get('id5');  
                         $uname=Input::get('uname');
                         $utid=Input::get('utid');
                         $pass=Input::get('pass');
                     
                       
                  
                    $c=usermod::find($id);

                        $c->UserName=$uname;
                        $c->UserTypeId=$utid;
                        $c->Pass=$pass;

                    
                    if ($c->save()) {
                            # code...
                            $status['msg']="succesfully updated usertype";
                            $status['qw']=1;
                        }
                        else
                        {
                            echo "not updated";
                        }
   
return redirect('user');
                    }
                    public function deleteuser()
                    {
                    $id=Input::get('id');
                    $deleteuser=usermod::find($id);
                     $d=$deleteuser->delete();
                        if($d){
                            echo "delete successful";
                        }else{
                            echo "not deleted";
                        }
                    }
//room category
            public function roomcategory()
                {
                     $c=new roomcategorymod();
                             $data=$c->get();
                    return view('AdminPanel/roomcategory',compact('data'));
                }


                public function reciveroomcategory(Request $request)      
                {
                    $name=Input::get('rname');
                    $ppd=Input::get('ppd');
                   $file = $request->file('photoroom');
                         //Move Uploaded File
                    $destinationPath = 'roomimage';
                     $file->move($destinationPath,$file->getClientOriginalName());
                    $c=new roomcategorymod();
                    $c->RName=$name;
                    $c->PricePerDay=$ppd;
                  
                    $c->Img=$file->getClientOriginalName();
                    echo $name;
                if ($c->save())
                {
                        # code...
                        $status['msg']="succesfully inserted food category";
                        $status['qw']=1;
                }
                
return redirect('roomcategory');

                }

                public function editdisroomcategory($id)
                {
                
                    $c=new roomcategorymod();
                    $data=$c->where('RoomCategoryId',$id)->get();
                    return view('AdminPanel/roomcategoryedit',compact('data'));
                
                }
                public function editroomcategory(Request $request)
                {
                     $id=Input::get('id6');  
                    $name=Input::get('rname');   
                    $ppd=Input::get('ppd');   
                 $file = $request->file('photoroom');
                         //Move Uploaded File
                    $destinationPath = 'roomimage';
                     $file->move($destinationPath,$file->getClientOriginalName());
                $c=roomcategorymod::find($id);
                $c->RName=$name;
                $c->PricePerDay=$ppd;
                $c->Img=$file->getClientOriginalName();
                if ($c->save()) {
                        # code...
                        $status['msg']="succesfully updated food category";
                        $status['qw']=1;
                    }

return redirect('roomcategory');
                


                }
                public function deleteroomcategory()
                {
             
                     $id=Input::get('id');
                    $deleteroom=roomcategorymod::find($id);
                     $d=$deleteroom->delete();
                        if($d){
                            echo "delete successful";
                        }else{
                            echo "not deleted";
                        }
                }

//Room
                public function room()
                    {

 $data=DB::select('SELECT a.RoomId,b.RName,a.RoomNo,a.UserName,a.Pass,a.R_Facilities FROM room_tbl a,roomcategory_tbl b  WHERE a.RoomCategoryId=b.RoomCategoryId');
                         $facilityobj=new facilitiesmod();
                                 $facility=$facilityobj->all();

                                 $roomcategoryobj=new roomcategorymod();
                                 $roomcategory=$roomcategoryobj->all();
                        return view('AdminPanel/room',compact('data','roomcategory','facility'));
                    }


                    public function reciveroom()      
                    {
                        $cid=Input::get('cid');
                        $rno=Input::get('rno');
                        $uname=Input::get('uname');
                        $pass=Input::get('pass');
                        $check=Input::get('check');
                        $check=implode(',',$check);
                     

                       
                        $c=new roommod();
                        $c->RoomCategoryId=$cid;
                        $c->RoomNo=$rno;
                        $c->UserName=$uname;
                        $c->Pass=$pass;
                       $c->R_Facilities=$check;
                       $c->Status='0'; 
                    if ($c->save())
                    {
                            # code...

                            $status['msg']="succesfully inserted food category";
                            $status['qw']=1;
                    }
                    else
                    {
                        echo "not";
                    }

                       return redirect('room1');

                    }

                    public function editdisroom($id)
                    {
                      $facilityobj=new facilitiesmod();
                                 $facility=$facilityobj->all();

                        $c=new roommod();
                        $data=$c->where('RoomId',$id)->get();
                        return view('AdminPanel/roomedit',compact('data','facility'));
                    
                    }
                    public function editroom()
                    {
                        $id=Input::get('id7');  
                          $cid=Input::get('cid');
                        $rno=Input::get('rno');
                        $uname=Input::get('uname');
                        $pass=Input::get('pass');
                        $check=Input::get('check');
                        $check=implode(',',$check);

      
                    $c=roommod::find($id);
  $c->RoomCategoryId=$cid;
                        $c->RoomNo=$rno;
                        $c->UserName=$uname;
                        $c->Pass=$pass;
                       $c->R_Facilities=$check;
                       
                  
                    if ($c->save()) {
                            # code...
                            $status['msg']="succesfully updated food category";
                            $status['qw']=1;
                        }

                 return redirect('room1');


                    }
                    public function deleteroom()
                    {
                    $id=Input::get('id');
                    $deleteroom=roommod::find($id);
                     $d=$deleteroom->delete();
                        if($d){
                            echo "delete successful";
                        }else{
                            echo "not deleted";
                        }
                    }

//service
            public function service()
                {
                     $c=new servicemod();
                             $data=$c->get();
                    return view('AdminPanel/service',compact('data'));
                }


                public function reciveservice(Request $request)      
                {
                    $name=Input::get('sname');
                    $price=Input::get('sprice');
                    $des=Input::get('sdescription');
                   $file = $request->file('photoservice');
                         //Move Uploaded File
                    $destinationPath = 'foodimage';
                     $file->move($destinationPath,$file->getClientOriginalName());
                 
                   
                    $c=new servicemod();
                    $c->SName=$name;
                    
                    $c->S_Price=$price;
                    $c->S_Description=$des;

                    $c->Img=$file->getClientOriginalName();
                  
                   
                if ($c->save())
                {
                        # code...
                        $status['msg']="succesfully inserted food category";
                        $status['qw']=1;
                }
                

                    return redirect('service');

                }

                public function editdisservice($id)
                {
                
                    $c=new servicemod();
                    $data=$c->where('ServiceId',$id)->get();
                    return view('AdminPanel/serviceedit',compact('data'));
                
                }
                public function editservice(Request $request)
                {
                     $id=Input::get('id8');  
                    $name=Input::get('sname');   
                      $price=Input::get('sprice');
                    $des=Input::get('sdescription');
                   $file = $request->file('photoservice');
                         //Move Uploaded File
                    $destinationPath = 'foodimage';
                     $file->move($destinationPath,$file->getClientOriginalName());
              
                $c=servicemod::find($id);
                $c->SName=$name;
             
              
                    $c->S_Price=$price;
                    $c->S_Description=$des;

                    $c->Img=$file->getClientOriginalName();
                  
                if ($c->save()) {
                        # code...
                        $status['msg']="succesfully updated food category";
                        $status['qw']=1;
                    }
                    return redirect('service');

                   
                }
                public function deleteservice()
                {
                
                 $id=Input::get('id');
                    $deleteservice=servicemod::find($id);
                     $d=$deleteservice->delete();
                        if($d){
                            echo "delete successful";
                        }else{
                            echo "not deleted";
                        }
                }


//login

                public function loggin()
                {
                    
                    return view('AdminPanel/login');
                }
             public function userlogin()      
                {
                    $name=Input::get('username');
                   $pass=(Input::get('password'));
                   $item_id=(Input::get('item_id'));
switch($item_id)
        {
            case 'tableuser' :

$q=new dtablemod();
                    $data2=$q->where('TableId',$name)->where('Pass',$pass)->count();
                      
                    if ($data2>0)
                    {
                        session()->put('tid',$name);

                      
                        $foodobj =new foodmod();
                        $food=$foodobj->all();
                        $foodcategoryobj =new fodcatmod(); 
                        $foodcategory=$foodcategoryobj->all();
                        $cartobj=new cartmod();
                        $cart=$cartobj->all();
                        return view('TableUser/start',compact('food','foodcategory','cart'));
                    }
                    else 
                    {
                        return redirect('login');
            
                    }

break;
case 'admin':
               //echo $name.$pass;
                   $c=new adminmod();
                  $data=$c->where('UserName',$name)->where('Pass',$pass)->count(); 
                  
                    
                if ( $data>0)
                {
                    session()->put('username',$name);
                       
                     
                }
                else 
                {
                    return redirect('login');
                }
                if ($data>0 && session('username')==$name) {
                $c=new fodcatmod();
                 $data=$c->get();
                  $q=fodcatmod::get()->count();
                     $w=foodmod::get()->count();

                     $e=usertypemod::get()->count();

                     $r=usermod::get()->count();

                     $t=dtablemod::get()->count();

                     $y=facilitiesmod::get()->count();

                     $u=roomcategorymod::get()->count();

                     $i=roommod::get()->count();

                     $o=servicemod::get()->count();
                    return view('AdminPanel/dashboard',compact('data','q','w','e','r','t','y','u','i','o'));

                    # code...
                }
                 else 
                {
                    return redirect('login');
                }
                //table user login
break;

case 'cook':
               //echo $name.$pass;
                   $c=new usermod();
                  $data3=$c->where('UserName',$name)->where('Pass',$pass)->count(); 
                  
                    
                if ( $data3>0)
                {
                    session()->put('cook',$name);
                       
                     
                    return view('CookUser/cookpage');

                }
                else 
                {
                    return redirect('login');
                }
                //table user login
break;

case 'waiter':
               //echo $name.$pass;
                   $c=new usermod();
                  $data4=$c->where('UserName',$name)->where('Pass',$pass)->count(); 
                  
                    
                if ( $data4>0)
                {
                    session()->put('waiter',$name);
                       
                    return redirect('waiter');
                     
                    //return view('CookUser/waiter');

                }
                else 
                {
                    return redirect('login');
                }
                //table user login
break;

case 'reception':
               
                    $c=new usermod();
                 $data5=$c->where('UserName',$name)->where('Pass',$pass)->count(); 
                  echo $data5;
                    
                if ( $data5>0)
                {
                    session()->put('reception',$name);
                   
                      
                 return redirect('bookroom');

                }
                else 
                {
                    return redirect('login');
                }
                //table user login
break;
case 'roomuser':
         
                    $c=new roommod();
                    $data=$c->where('RoomId',$name)->where('Pass',$pass)->count();
                      
                    if ($data>0)
                    {
                        session()->put('rid',$name);

                    }
                    else 
                    {
                        return redirect('login');
            
                    }
            if ($data>0 && session('rid')==$name) {
               session()->put('booked','booked');
                        
                $id=session('rid');
                $status='1';   
                $c=roommod::find($id);
                $c->Status=$status;
                $c->save();
                        session()->put('booking','booking');

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
                    return redirect('login');
                }
                    break;

case 'cashier':
               
                    $c=new usermod();
                 $data4=$c->where('UserName',$name)->where('Pass',$pass)->count(); 
                 //echo $data4;
                    
                if ( $data4>0)
                {
                    session()->put('cashier',$name);
                     
                      

                }
                else 
                {
                    return redirect('login');
                }
                if ($data4>0 && session('cashier')==$name) {
// echo session('cashier');
                return redirect('tablecart');
                }
                 else 
                {
                    return redirect('login');
                }
                //table user login
break;


}
  
                }

                public function logout2()
                {
                    $id=session('rid');
                  //  echo $id;
                    $status='0';   
                    $c=roommod::find($id);
                    $c->Status=$status;
                    $c->save();
                    session()->forget('booking');
                    session()->forget('rid');

            


                    return redirect('login');
                }
                

                public function logout()
                {

                   
                    session()->forget('username');

                
                    return redirect('login');
                }

                   public function logout3()
                {

                   
                    session()->forget('tid');

                

                    return redirect('login');
                }
                
                   public function logout4()
                {

                   
                    session()->forget('cook');

                 

                    return redirect('login');
                }
                   public function logout5()
                {

                   
                    session()->forget('waiter');

              

                    return redirect('login');
                }
                   public function logout6()
                {

                   
                    session()->forget('reception');

            

                    return redirect('login');
                }
                   public function logout7()
                {

                   
                    session()->forget('cashier');

         

                    return redirect('login');
                }
}



