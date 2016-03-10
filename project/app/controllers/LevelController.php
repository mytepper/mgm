<?php
class LevelController extends BaseController{

    public function edit(){
                    $id = Input::get('id');
                     $db = Level::where('id', $id)
                    ->update(array(
                        'name' => Input::get('name'),
                        'total' => Input::get('total')
                    ));

                   if($db){
                            return Redirect::to('store/level')->with('success', '
                    <div class="alert alert-success alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <i class="fa fa-warning pr10"></i>
                      บันทึกข้อมูลแล้ว
                    </div>
                    ');
                        }else{
                            return Redirect::to('store/level')->with('success', '
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