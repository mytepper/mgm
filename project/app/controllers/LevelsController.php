<?php
class LevelsController extends BaseController{

  /**
  * [validate description]
  * @param  [type] $data [description]
  * @return [type]       [description]
  */
  public function validate($data) {
    $validation = Validator::make($data, array(
        'name' => 'required',
        'up_price' => 'required',
        'position_price' => 'required',
        'invite_price' => 'required'
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
    $level = Level::getLevel();
    return View::make('store/level/index')->with('level', $level);
  }


  public function getAdd()
  {
    return View::make('store/level/add');
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
        $saved = Level::saveLevel($data);
          if($saved) {
            Session::flash('message', 'Saved success');
            return Redirect::to('store/levels');
          }
            Session::flash('message', $saved);
            return Redirect::to('store/levels');
      }else{
        Session::flash('message', $this->validate($data));
        return Redirect::to('store/levels');
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
        $saved = Level::saveLevel($data);
          if($saved) {
            Session::flash('message', 'Saved success');
            return Redirect::to('store/levels');
          }
          Session::flash('message', $saved);
          return Redirect::to('store/levels');
      }else{
        Session::flash('message', $this->validate($data));
        return Redirect::to('store/levels');
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
    $destroy = Level::deleteLevel($id);
    if($destroy) {
      Session::flash('message', 'Delete success!');
      return Redirect::to('store/levels');
    }
    Session::flash('message', 'Delete error!');
    return Redirect::to('store/levels');
  }
}
?>
