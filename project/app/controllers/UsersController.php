<?php

class UsersController extends BaseController {

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
		$user = User::getUser();
		return View::make('store/user/index')->with('user', $user);
	}


	public function getAdd()
	{
		return View::make('store/user/add');
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
				$saved = User::saveUser($data);
					if($saved) {
						Session::flash('message', 'Saved success');
						return Redirect::to('store/users');
					}
						Session::flash('message', $saved);
						return Redirect::to('store/users');
			}else{
				Session::flash('message', $this->validate($data));
				return Redirect::to('store/users');
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
				$saved = User::saveUser($data);
					if($saved) {
						Session::flash('message', 'Saved success');
						return Redirect::to('store/users');
					}
					Session::flash('message', $saved);
					return Redirect::to('store/users');
			}else{
				Session::flash('message', $this->validate($data));
				return Redirect::to('store/users');
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
		$destroy = User::deleteUser($id);
		if($destroy) {
			Session::flash('message', 'Delete success!');
			return Redirect::to('store/users');
		}
		Session::flash('message', 'Delete error!');
		return Redirect::to('store/users');
	}


}
