<?php
class Branch extends Eloquent {
	public $timestamps = false;
    protected $table = 'tb_branch';

    public static function get($id){
    	return self::where('id',$id)->first();
    }

}
?>