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

  //------------------------------------------------------------------------------------------//
	Route::controller('store/companies', 'CompaniesController');
    //Route::controller('store/levels', 'LevelsController');
  Route::controller('store/cartypes', 'CarsTypesController');
});

?>
