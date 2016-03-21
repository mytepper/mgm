<?php

class CompaniesController extends \BaseController {

/**
 * [validate description]
 * @param  [type] $data [description]
 * @return [type]       [description]
 */
	public function validate($data) {
		$validation = Validator::make($data, array(
		    'name' => 'required',
		    'address' => 'required'
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
		$company = Company::getCompany();
		return View::make('store/companies/index')->with('company', $company);
	}


/**
 * Show the form for creating a new resource.
 *
 * @return Response
 */
	public function postCreate() {
		if (Request::isMethod('post')) {
			$data = Input::all();
			if($this->validate($data) === true) {
				$saved = Company::saveCompany($data);
					if($saved) {
						Session::flash('message', 'Saved success');
						return Redirect::to('store/companies');
					}
						Session::flash('message', $saved);
						return Redirect::to('store/companies');
			}else{
				Session::flash('message', $this->validate($data));
				return Redirect::to('store/companies');
			}
		}
	}

/**
 * Show the form for editing the specified resource.
 *
 * @param  int  $id
 * @return Response
 */
	public function postEdit() {
		if (Request::isMethod('post')){
			$data = Input::all();
			if($this->validate($data) === true) {
				$saved = Company::saveCompany($data);
					if($saved){
						Session::flash('message', 'Saved success!');
						return Redirect::to('store/companies');
					}
						Session::flash('message', $saved);
						return Redirect::to('store/companies')->with('validateError');
				} else {
				Session::flash('message', $this->validate($data));
				return Redirect::to('store/companies');
			}
		}
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
		$destroy = Company::deleteCompany($id);
		if($destroy) {
			Session::flash('message', 'Delete success!');
			return Redirect::to('store/companies');
		}
			Session::flash('message', 'Delete error!');
			return Redirect::to('store/companies');
	}

}
