<?php
class DashboardController extends BaseController {

     public function admin_update(){
                    if(Input::has('password')){
                      $rules = array(
                          'email'    => 'required|email|min:5',
                          'password' => 'required|min:8|max:15|confirmed',
                          'password_confirmation' => 'required',
                      );
                    }else{
                      $rules = array(
                          'email'    => 'required|email|min:5|unique:tb_users,email,'.Auth::user()->id.'',
                          'password'    => 'required|min:5',
                      );
                    }

                    $validator = Validator::make(Input::all(),$rules);
                    if($validator->fails()){
                        return Redirect::to('store/dashboard/admin')
                            ->withErrors($validator)
                            ->withInput();
                    }else{
                        
                        if(Input::has('password')){
                          $password = Hash::make(Input::get('password'));
                        }else{
                          $password = Auth::user()->password;
                        }

                        $db = User::where('id', Auth::user()->id)
                        ->update(array(
                            'email' => Input::get('email'),
                            'password' => $password
                        ));

                        if($db) {
                            return Redirect::to('store/dashboard/admin')->with('success', '
<div class="alert alert-success alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
  <i class="fa fa-warning pr10"></i>
  Success
</div>
');
                        }else{
                        return Redirect::to('store/dashboard/admin')->with('success', '
<div class="alert alert-danger alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
  <i class="fa fa-warning pr10"></i>
  Cannot update
</div>
');
                        }  

                    }

    }



}
?>