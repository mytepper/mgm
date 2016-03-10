<?php

class CaryearController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	 public function add(){

                    $db = Caryear::insert([
                        'name' => Input::get('name')
                    ]);
                   if($db){
                        return Redirect::to('store/car_year/add')->with('success', '
                <div class="alert alert-success alert-dismissable">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <i class="fa fa-warning pr10"></i>
                  บันทึกข้อมูลแล้ว
                </div>
                ');
                        }else{
                        return Redirect::to('store/car_year/add')->with('success', '
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
                     $db = Caryear::where('id', $id)
                    ->update(array(
                        'name' => Input::get('name')
                    ));

                   if($db){
                            return Redirect::to('store/car_year')->with('success', '
                    <div class="alert alert-success alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <i class="fa fa-warning pr10"></i>
                      บันทึกข้อมูลแล้ว
                    </div>
                    ');
                        }else{
                            return Redirect::to('store/car_year')->with('success', '
                    <div class="alert alert-danger alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <i class="fa fa-warning pr10"></i>
                      บันทึกข้อมูลไม่ได้
                    </div>
                    ');
                            }

                    }


}
