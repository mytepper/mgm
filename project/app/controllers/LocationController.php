<?php
class LocationController extends BaseController{

    public function add(){

                    $file = Input::file('icon');
                    $icon = date("Y-m-d-H-i-s").'.'.$file->guessClientExtension();
                    $thepath = 'uploads';
                    if (!file_exists($thepath))
                        mkdir($thepath, 0777, true);
                    $uploadflag = $file->move($thepath,$icon);

                    $db = DB::table('tb_location')->insert([
                        'name' => Input::get('name'),
                        'icon' =>$icon,
                        'tel' => Input::get('tel'),
                        'address' => Input::get('address'),
                        'code_map' => Input::get('code_map'),
                        'long_' => Input::get('long_'),
                        'lagi_' => Input::get('lagi_'),
                    ]);
                   if($db){
                        return Redirect::to('store/location/add')->with('success', '
                <div class="alert alert-success alert-dismissable">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <i class="fa fa-warning pr10"></i>
                  บันทึกข้อมูลแล้ว
                </div>
                ');
                        }else{
                        return Redirect::to('store/location/add')->with('success', '
                <div class="alert alert-danger alert-dismissable">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <i class="fa fa-warning pr10"></i>
                  บันทึกข้อมูลไม่ได้
                </div>
                ');
                        }

            }

    public function edit(){
                    $id = Input::get('id');
                    $location = DB::table('tb_location')->find($id);
                    if(Input::hasFile('icon')){
                        $file = Input::file('icon');
                        $icon = date("Y-m-d-H-i-s").'.'.$file->guessClientExtension();
                        $thepath = 'uploads';
                        if (!file_exists($thepath))
                            mkdir($thepath, 0777, true);
                        $uploadflag = $file->move($thepath,$icon);

                    }else{
                        $icon = $location->icon;
                    }

                     $db = DB::table('tb_location')
                    ->where('id', $id)
                    ->update(array(
                        'name' => Input::get('name'),
                        'icon' =>$icon,
                        'tel' => Input::get('tel'),
                        'address' => Input::get('address'),
                        'code_map' => Input::get('code_map'),
                        'long_' => Input::get('long_'),
                        'lagi_' => Input::get('lagi_'),
                    ));

                   if($db){
                            return Redirect::to('store/location/edit/'.$id)->with('success', '
                    <div class="alert alert-success alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <i class="fa fa-warning pr10"></i>
                      บันทึกข้อมูลแล้ว
                    </div>
                    ');
                        }else{
                            return Redirect::to('store/location/edit/'.$id)->with('success', '
                    <div class="alert alert-danger alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <i class="fa fa-warning pr10"></i>
                      บันทึกข้อมูลไม่ได้
                    </div>
                    ');
                            }

                    }


}
?>