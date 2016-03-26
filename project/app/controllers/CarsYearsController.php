<?php

class CarsYearsController extends \BaseController {

	/**
	* [validate description]
	* @param  [type] $data [description]
	* @return [type]       [description]
	*/
	public function validate($data) {
		$validation = Validator::make($data, array(
		    'name' => 'required'
		));
		if($validation->fails()){
			return $validation->messages();
		}
		return true;
	}

	/**
	* Display a listing of the resource.
	*
	* @return Response
	*/
	public function getIndex()
	{
		$caryear = Caryear::getCaryear();
		return View::make('store/car_year/index')->with('caryear', $caryear);
	}

	/**
	* Show the form for creating a new resource.
	*
	* @return Response
	*/
	public function getAdd()
	{
		return View::make('store/car_year/add');
	}

	/**
	* Show the form for creating a new resource.
	*
	* @return Response
	*/
	public function postCreate()
	{
		if (Request::isMethod('post')) {
			$data = Input::all();
			if($this->validate($data) === true) {
				$saved = Caryear::saveCaryear($data);
					if($saved) {
						Session::flash('message', 'Saved success');
						return Redirect::to('store/caryears');
					}
					Session::flash('message', $saved);
					return Redirect::to('store/caryears');
			}else{
				Session::flash('message', $this->validate($data));
				return Redirect::to('store/caryears');
			}
		}
	}

	/**
	* Show the form for editing the specified resource.
	*
	* @return Response
	*/
	public function postEdit()
	{
		if (Request::isMethod('post')) {
			$data = Input::all();
			if($this->validate($data) === true) {
				$saved = Caryear::saveCaryear($data);
					if($saved) {
						Session::flash('message', 'Saved success');
						return Redirect::to('store/caryears');
					}
					Session::flash('message', $saved);
					return Redirect::to('store/caryears');
			}else{
				Session::flash('message', $this->validate($data));
				return Redirect::to('store/caryears');
			}
		}
	}


	/**
	* Remove the specified resource from storage.
	*
	* @param  int  $id
	* @return Response
	*/
	public function getDestroy($id)
	{
		$destroy = Caryear::deleteCaryear($id);
		if($destroy) {
			Session::flash('message', 'Delete success!');
			return Redirect::to('store/caryears');
		}
		Session::flash('message', 'Delete error!');
		return Redirect::to('store/caryears');
	}


}
