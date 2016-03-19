<?php namespace Helpers;

class Helper {

    public static function text($text, $array , $hidden = false) {
		$attr = '';
		foreach ($array as $key => $value) {
			$attr .= $key . '=' .$value . ' ';
		}
		$hidden = ($hidden) ? 'style="display:none"' : '';
        $html = '<div class="form-group" '.$hidden.'>';
		$html.= '<label for="recipient-name" class="control-label">' . $text . '</label>';
		$html.= '<input type="text" class="form-control" '.$attr.'>';
		$html.= '</div>';
		return $html;
    }

	public static function textarea($text, $array , $hidden = false) {
		$attr = '';
		foreach ($array as $key => $value) {
			$attr .= $key . '=' .$value . ' ';
		}
		$hidden = ($hidden) ? 'style="display:none"' : '';
        $html = '<div class="form-group" '.$hidden.'>';
		$html.= '<label for="recipient-name" class="control-label">' . $text . '</label>';
		$html.= '<textarea class="form-control" '.$attr.'></textarea>';
		$html.= '</div>';
		return $html;
    }
}
