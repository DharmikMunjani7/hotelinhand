<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//admin panel
				//food category
				Route::get('dashboard','hoh@dashboard');

				Route::get('foodcategory','hoh@foodcategory');
				Route::post('recivefoodcategory','hoh@recivefoodcategory');
				Route::get('/editcategorydis/{id}','hoh@editcategorydis');
				Route::post('/editcategory','hoh@editcategory');
				Route::post('/deletecategory','hoh@deletecategory');
				//food
				Route::get('food','hoh@food');
				Route::post('recivefood','hoh@recivefood');
				Route::get('/editdis/{id2}','hoh@editdis');
				Route::post('/editfood','hoh@editfood');
				Route::post('/deletefood','hoh@deletefood');
				//dyning table
				Route::get('dtable','hoh@dtable');
				Route::post('recivedtable','hoh@recivedtable');
				Route::get('/editdisdtable/{id3}','hoh@editdisdtable');
				Route::post('/editdtable','hoh@editdtable');
				Route::post('/deletedtable','hoh@deletedtable');
				//usertype
				Route::get('usertype','hoh@usertype');
				Route::post('reciveusertype','hoh@reciveusertype');
				Route::get('/editdisusertype/{id4}','hoh@editdisusertype');
				Route::post('/editusertype','hoh@editusertype');
				Route::post('/deleteusertype','hoh@deleteusertype');
				//user
				Route::get('user','hoh@user');
				Route::post('reciveuser','hoh@reciveuser');
				Route::get('/editdisuser/{id5}','hoh@editdisuser');
				Route::post('/edituser','hoh@edituser');
				Route::post('/deleteuser','hoh@deleteuser');
				//facility
				Route::get('facility','hoh@facility');
				Route::post('recivefacility','hoh@recivefacility');
				Route::get('/editdisfacility/{id5}','hoh@editdisfacility');
				Route::post('/editfacility','hoh@editfacility');
				Route::post('/deletefacility','hoh@deletefacility');
			

				//roomcategory
				Route::get('roomcategory','hoh@roomcategory');
				Route::post('reciveroomcategory','hoh@reciveroomcategory');
				Route::get('/editdisroomcategory/{id6}','hoh@editdisroomcategory');
				Route::post('/editroomcategory','hoh@editroomcategory');
				Route::post('/deleteroomcategory','hoh@deleteroomcategory');
				//room
				Route::get('room1','hoh@room');
				Route::post('reciveroom1','hoh@reciveroom');
				Route::get('/editdisroom2/{id7}','hoh@editdisroom');
				Route::post('/editroom2','hoh@editroom');
				Route::post('/deleteroom2','hoh@deleteroom');
				//service
				Route::get('service','hoh@service');
				Route::post('reciveservice','hoh@reciveservice');
				Route::get('/editdisservice/{id8}','hoh@editdisservice');
				Route::post('/editservice','hoh@editservice');
				Route::post('/deleteservice','hoh@deleteservice');

				//login
				Route::get('login','hoh@loggin');
				Route::post('userlogin','hoh@userlogin');
				//logout
				Route::get('logout2','hoh@logout2');

				Route::get('logout','hoh@logout');
				Route::get('logout3','hoh@logout3');

				Route::get('logout4','hoh@logout4');
				Route::get('logout5','hoh@logout5');

				Route::get('logout6','hoh@logout6');

				Route::get('logout7','hoh@logout7');


//table user panel
				Route::get('start','tableusercon@start');
				
				//menu
				Route::get('menu','tableusercon@menu');
				//cook
				Route::get('cook','tableusercon@cook');
				
				Route::post('/cartinsert','tableusercon@cartinsert');
				//place order

				Route::get('placeorder','tableusercon@placeorder');
				//bill genrate
				Route::get('bill','tableusercon@bill');
//cahsier user panel
				Route::get('foodmenu','cashiercon@foodmenu');
				Route::post('/parsalitem','cashiercon@parsalcartinsert');
				Route::get('tcart','cashiercon@tcart');
				Route::get('tablecart','cashiercon@tablecart');
				
				
				Route::post('search2','cashiercon@search2');
				
				Route::get('order','cashiercon@order');
				Route::get('parsalbill','cashiercon@parsalbill');
				Route::get('tablebill','cashiercon@tablebill');
				Route::get('token','cashiercon@token');
				
				Route::get('deletecart','cashiercon@deletecart');
				Route::get('deleteparsalcart','cashiercon@deleteparsalcart');
				//token
				Route::post('recivetoken','cashiercon@recivetoken');
				Route::post('deletetoken','cashiercon@deletetoken');

///Room User Login

			

				//aboutus
				Route::get('rabout_us','roomusercon@rabout_us');
				//contactus
				Route::get('rcontact_us','roomusercon@rcontact_us');
				//blog page
				Route::get('rblog_page','roomusercon@rblog_page');
				//insert into cart
				Route::post('/scartinsert','roomusercon@cinsert');
				Route::Post('/rscartinsert','roomusercon@sinsert');								
				//cart
				Route::get('/roomcart','roomusercon@cart');
				//room
				Route::get('room','roomusercon@room');
				//roomdetails
				Route::get('roomdetails','roomusercon@details');
				//bill
				Route::get('/sbill','roomusercon@sbill');			
				//conntact_us	
				Route::Post('contact_form','roomusercon@contact_us');		

//cook user pannel

				//cook user login
//				Route::get('logincook','')
//				Route::get('cook','cookcon@cookpage');
				Route::get('cookdis','cookusercon@cookdis');
				Route::POST('cookk','cookusercon@cook');
				Route::POST('updatepripare','cookusercon@updatepripare');
				
				Route::POST('updatepripare2','cookusercon@updatepripare2');
				Route::POST('updatepripare3','cookusercon@updatepripare3');
				
				Route::POST('updatepickup','cookusercon@updatepickup');
				Route::POST('updatepickup2','cookusercon@updatepickup2');
				Route::POST('updatepickup4','cookusercon@updatepickup4');
				
				Route::POST('updateready','cookusercon@updateready');
				
				Route::POST('updateready2','cookusercon@updateready2');
				Route::POST('updateready3','cookusercon@updateready3');
				
				Route::POST('updateservice2','cookusercon@updateservice2');
				
				Route::get('waiter','cookusercon@waiter');
				Route::POST('waiter2','cookusercon@waiter2');

//reception
				Route::get('bookroom','receptioncon@bookroom');
				Route::get('rr','receptioncon@rr');
				Route::get('rs','receptioncon@rs');
				
				Route::get('customer','receptioncon@customer');
				Route::post('addcustomer','receptioncon@addcustomer');
				Route::post('book','receptioncon@book');
				Route::get('books','receptioncon@books');

				Route::get('roombill','receptioncon@roombill');

				Route::post('search3','receptioncon@search3');
				Route::get('deleteroomcart','receptioncon@deleteroomcart');
