<?php
class Level extends Eloquent {

	protected $table = 'levels';
    protected $fillable = ['name', 'up_price', 'position_price', 'invite_price']; 
    public $timestamps = true;

	/**
	* get cartype
	*
	* @return array
	*/
    public static function getLevel() {
    	return self::orderBy('id', 'desc')->paginate(9);
    }

	/**
	* [saveCompany description]
	* @param  [type] $data [description]
	* @return [type]       [description]
	*/
    public  static function saveLevel($data) {
		unset($data['_token']);
		$param = array();
		foreach ($data as $key => $value) {
			$param = $param + array($key => $value);
		}
    	if($data['id']){
			$id = $data['id'];
			unset($data['id']);
			return self::where('id', $id)
				->update($param);
    	}else{
    		return self::create($param);
    	}
    }

	/**
	* [deleteCompany description]
	* @param  [type] $id [description]
	* @return [type]     [description]
	*/
    public static function deleteLevel($id) {
    	$delete = self::where('id', '=', $id)->delete();
    	return $delete;
    }

}
?>