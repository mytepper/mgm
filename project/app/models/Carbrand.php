<?php
class Carbrand extends Eloquent {
	public $timestamps = false;
    protected $table = 'tb_brand';

    public static function get($id){
    	return self::where('id',$id)->first();
    }

}
?>