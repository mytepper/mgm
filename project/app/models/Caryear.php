<?php
class Caryear extends Eloquent {
	public $timestamps = false;
    protected $table = 'tb_car_year';

    public static function get($id){
    	return self::where('id',$id)->first();
    }

}
?>