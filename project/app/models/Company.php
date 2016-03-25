<?php
class Company extends Eloquent {

    protected $table = 'companies';
    protected $fillable = ['name', 'address']; 
    public $timestamps = true;

/**
* getcompay
*
* @return array
*/
    public static function getCompany() {
    	return self::orderBy('id', 'desc')->paginate(9);
    }

/**
 * [saveCompany description]
 * @param  [type] $data [description]
 * @return [type]       [description]
 */
    public  static function saveCompany($data) {
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
    public static function deleteCompany($id) {
    	$delete = self::where('id', '=', $id)->delete();
    	return $delete;
    }

}
?>
