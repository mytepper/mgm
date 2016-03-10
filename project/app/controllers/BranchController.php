<?php
class BranchController extends BaseController{

    public function add(){

                    $db = Branch::insert([
                        'name' => Input::get('name'),
                        'address' => Input::get('address')
                    ]);
                   if($db){
                        return Redirect::to('store/branch/add')->with('success', '
                <div class="alert alert-success alert-dismissable">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <i class="fa fa-warning pr10"></i>
                  บันทึกข้อมูลแล้ว
                </div>
                ');
                        }else{
                        return Redirect::to('store/branch/add')->with('success', '
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
                     $db = Branch::where('id', $id)
                    ->update(array(
                        'name' => Input::get('name'),
                        'address' => Input::get('address')
                    ));

                   if($db){
                            return Redirect::to('store/branch')->with('success', '
                    <div class="alert alert-success alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <i class="fa fa-warning pr10"></i>
                      บันทึกข้อมูลแล้ว
                    </div>
                    ');
                        }else{
                            return Redirect::to('store/branch')->with('success', '
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