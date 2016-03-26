<?php

class CarsController extends \BaseController {

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
		$carbrand = Carbrand::getCarbrand();
		return View::make('store/car_brand/index')->with('carbrand', $carbrand);
	}


	public function getAdd()
	{
		return View::make('store/car_brand/add');
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
				$saved = Carbrand::saveCarbrand($data);
					if($saved) {
						Session::flash('message', 'Saved success');
						return Redirect::to('store/carbrands');
					}
					Session::flash('message', $saved);
					return Redirect::to('store/carbrands');
			}else{
				Session::flash('message', $this->validate($data));
				return Redirect::to('store/carbrands');
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
				$saved = Carbrand::saveCarbrand($data);
					if($saved) {
						Session::flash('message', 'Saved success');
						return Redirect::to('store/carbrands');
					}
					Session::flash('message', $saved);
					return Redirect::to('store/carbrands');
			}else{
				Session::flash('message', $this->validate($data));
				return Redirect::to('store/carbrands');
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
		$destroy = Carbrand::deleteCarbrand($id);
		if($destroy) {
			Session::flash('message', 'Delete success!');
			return Redirect::to('store/carbrands');
		}
		Session::flash('message', 'Delete error!');
		return Redirect::to('store/carbrands');
	}

}
