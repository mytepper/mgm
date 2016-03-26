<?php

class CarsTypesController extends \BaseController {


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
		$cartype = Cartype::getCartype();
		return View::make('store/car_type/index')->with('cartype', $cartype);
	}


	public function getAdd()
	{
		return View::make('store/car_type/add');
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
				$saved = Cartype::saveCartype($data);
					if($saved) {
						Session::flash('message', 'Saved success');
						return Redirect::to('store/cartypes');
					}
						Session::flash('message', $saved);
						return Redirect::to('store/cartypes');
			}else{
				Session::flash('message', $this->validate($data));
				return Redirect::to('store/cartypes');
			}
		}
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function postEdit()
	{
		if (Request::isMethod('post')) {
			$data = Input::all();
			if($this->validate($data) === true) {
				$saved = Cartype::saveCartype($data);
					if($saved) {
						Session::flash('message', 'Saved success');
						return Redirect::to('store/cartypes');
					}
					Session::flash('message', $saved);
					return Redirect::to('store/cartypes');
			}else{
				Session::flash('message', $this->validate($data));
				return Redirect::to('store/cartypes');
			}
		}
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getDestroy($id)
	{
		$destroy = Cartype::deleteCartype($id);
		if($destroy) {
			Session::flash('message', 'Delete success!');
			return Redirect::to('store/cartypes');
		}
		Session::flash('message', 'Delete error!');
		return Redirect::to('store/cartypes');
	}


}
