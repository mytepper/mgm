<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', function(){
    return View::make('login');
});

Route::get('/login', function(){
    return View::make('login');
});


#active menu
HTML::macro('clever_link', function($route)
{
    if(Request::is($route . '/*') OR Request::is($route))
    {
        $active = "menu-open";
    }

    else
    {
        $active = '';
    }

    return $active;
});
##
##login

Route::post('/login', array('uses' => 'SiteController@authLogin'));
Route::get('/logout', array('uses' => 'SiteController@authLogout'));

##

##reminer
Route::controller('password', 'RemindersController');
##

##### @Dashboard
Route::group(array('before' => 'store'), function() {

  Route::get("store/dashboard", function(){
     return View::make("store/dashboard/index");
  });

  Route::get("store/dashboard/admin", function(){
    $rs = User::find(Auth::user()->id);
     return View::make("store/dashboard/admin")->with('rs',$rs);
  });


  Route::post('store/dashboard/admin_update', array('uses' => 'DashboardController@admin_update'));







  //branch
  Route::get("store/branch", function(){
     $get = Branch::orderBy('id','desc')->paginate(10);
     return View::make("store/branch/index")->with('get',$get);
  });

  Route::get("store/branch/add", function(){
     return View::make("store/branch/add");
  });

  Route::post('store/branch/add', array('uses' => 'BranchController@add'));
  Route::post('store/branch/edit', array('uses' => 'BranchController@edit'));

  Route::get("store/branch/delete/{id}",function($id){

    $db  = Branch::where('id', '=', $id)->delete();
     if($db){
        return Redirect::to('store/branch')->with('success', '
        <div class="alert alert-success alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <i class="fa fa-warning pr10"></i>
          ลบข้อมูลแล้ว
        </div>
        ');
           }else{
                    return Redirect::to('store/branch')->with('success', '
            <div class="alert alert-danger alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <i class="fa fa-warning pr10"></i>
              ลบข้อมูลไม่สำเร็จ
            </div>
            ');
                 }

  });

  //-------------------------------------------------------------------------------------------///

    //car_brand
  Route::get("store/car_brand", function(){
     $get = Carbrand::orderBy('id','desc')->paginate(10);
     return View::make("store/car_brand/index")->with('get',$get);
  });

  Route::get("store/car_brand/add", function(){
     return View::make("store/car_brand/add");
  });

  Route::post('store/car_brand/add', array('uses' => 'CarbrandController@add'));
  Route::post('store/car_brand/edit', array('uses' => 'CarbrandController@edit'));

  Route::get("store/car_brand/delete/{id}",function($id){

    $db  = Carbrand::where('id', '=', $id)->delete();
     if($db){
        return Redirect::to('store/car_brand')->with('success', '
        <div class="alert alert-success alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <i class="fa fa-warning pr10"></i>
          ลบข้อมูลแล้ว
        </div>
        ');
           }else{
                    return Redirect::to('store/car_brand')->with('success', '
            <div class="alert alert-danger alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <i class="fa fa-warning pr10"></i>
              ลบข้อมูลไม่สำเร็จ
            </div>
            ');
                 }

  });

  //-------------------------------------------------------------------------------------------///


    //car_type
  Route::get("store/car_type", function(){
     $get = Cartype::orderBy('id','desc')->paginate(10);
     return View::make("store/car_type/index")->with('get',$get);
  });

  Route::get("store/car_type/add", function(){
     return View::make("store/car_type/add");
  });

  Route::post('store/car_type/add', array('uses' => 'CartypeController@add'));
  Route::post('store/car_type/edit', array('uses' => 'CartypeController@edit'));

  Route::get("store/car_type/delete/{id}",function($id){

    $db  = Cartype::where('id', '=', $id)->delete();
     if($db){
        return Redirect::to('store/car_brand')->with('success', '
        <div class="alert alert-success alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <i class="fa fa-warning pr10"></i>
          ลบข้อมูลแล้ว
        </div>
        ');
           }else{
                    return Redirect::to('store/car_type')->with('success', '
            <div class="alert alert-danger alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <i class="fa fa-warning pr10"></i>
              ลบข้อมูลไม่สำเร็จ
            </div>
            ');
                 }

  });

  //-------------------------------------------------------------------------------------------///


      //car_year
  Route::get("store/car_year", function(){
     $get = Caryear::orderBy('id','desc')->paginate(10);
     return View::make("store/car_year/index")->with('get',$get);
  });

  Route::get("store/car_year/add", function(){
     return View::make("store/car_year/add");
  });

  Route::post('store/car_year/add', array('uses' => 'CaryearController@add'));
  Route::post('store/car_year/edit', array('uses' => 'CaryearController@edit'));

  Route::get("store/car_year/delete/{id}",function($id){

    $db  = Caryear::where('id', '=', $id)->delete();
     if($db){
        return Redirect::to('store/car_brand')->with('success', '
        <div class="alert alert-success alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <i class="fa fa-warning pr10"></i>
          ลบข้อมูลแล้ว
        </div>
        ');
           }else{
                    return Redirect::to('store/car_year')->with('success', '
            <div class="alert alert-danger alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <i class="fa fa-warning pr10"></i>
              ลบข้อมูลไม่สำเร็จ
            </div>
            ');
                 }

  });

  //-------------------------------------------------------------------------------------------///


  //level
  Route::get("store/level", function(){
     $get = Level::orderBy('id','desc')->paginate(10);
     return View::make("store/level/index")->with('get',$get);
  });

  Route::get("store/level/add", function(){
     return View::make("store/level/add");
  });

  Route::post('store/level/add', array('uses' => 'LevelController@add'));
  Route::post('store/level/edit', array('uses' => 'LevelController@edit'));

  Route::get("store/level/delete/{id}",function($id){

    $db  = Level::where('id', '=', $id)->delete();
     if($db){
        return Redirect::to('store/level')->with('success', '
        <div class="alert alert-success alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <i class="fa fa-warning pr10"></i>
          ลบข้อมูลแล้ว
        </div>
        ');
           }else{
                    return Redirect::to('store/level')->with('success', '
            <div class="alert alert-danger alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <i class="fa fa-warning pr10"></i>
              ลบข้อมูลไม่สำเร็จ
            </div>
            ');
                 }

  });


    Route::get('store/user/get',function(){
       $data = user::orderBy('id','DESC')
                  ->get();
        return (json_encode($data));
        //return; //$data;
    });


  //-------------------------------------------------------------------------------------------///


  //user
  Route::get("store/user", function(){
     $get = User::orderBy('id','desc')->paginate(10);
     return View::make("store/user/index")->with('get',$get);
  });

  Route::get("store/user/add", function(){
     return View::make("store/user/add");
  });

  Route::get("store/user/edit/{id}", function($id){
      $rs = User::where('id',Auth::user()->id)->fisrt();
    return View::make("store/user/edit")->with('rs',$rs);
  });

  Route::post('store/user/add', array('uses' => 'UserController@add'));
  Route::post('store/user/edit', array('uses' => 'UserController@edit'));

  Route::get("store/user/delete/{id}",function($id){

    $db  = User::where('id', '=', $id)->delete();
     if($db){
        return Redirect::to('store/car_brand')->with('success', '
        <div class="alert alert-success alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <i class="fa fa-warning pr10"></i>
          ลบข้อมูลแล้ว
        </div>
        ');
           }else{
                    return Redirect::to('store/user')->with('success', '
            <div class="alert alert-danger alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <i class="fa fa-warning pr10"></i>
              ลบข้อมูลไม่สำเร็จ
            </div>
            ');
                 }

  });

  //------------------------------------------------------------------------------------------//

    Route::post('store/level/edit', array('uses' => 'LevelController@edit'));
    Route::any('store/companies' ,array('uses' => 'CompaniesController@index'));
    Route::post('store/companies/edit' ,array('uses' => 'CompaniesController@edit'));
    Route::get('store/companies/destroy/{id}' ,array('uses' => 'CompaniesController@destroy'));
	Route::post('store/companies/create' ,array('uses' => 'CompaniesController@create'));
});

?>
