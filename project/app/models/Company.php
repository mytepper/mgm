<?php
class Company extends Eloquent {

    protected $table = 'companies';

/**
* getcompay
*
* @return array
*/
    public static function getCompany() {
    	return self::paginate(10);
    }

/**
 * [saveCompany description]
 * @param  [type] $data [description]
 * @return [type]       [description]
 */
    public  static function saveCompany($data) {
	    	$param = array(
	    			'name' => $data['name'],
	    			'address' => $data['address']
	    	);
	    	if($data['id']){
				return self::where('id', $data['id'])
					->update($param);
	    	}else{
	    		return self::insert($param);
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
