<?php
class Level extends Eloquent {
	public $timestamps = false;
    protected $table = 'tb_level';

    public static function get($id){
    	return self::where('id',$id)->first();
    }

}
?>