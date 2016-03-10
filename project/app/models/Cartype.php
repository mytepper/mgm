<?php
class Cartype extends Eloquent {
	public $timestamps = false;
    protected $table = 'tb_car_type';

    public static function get($id){
    	return self::where('id',$id)->first();
    }

}
?>