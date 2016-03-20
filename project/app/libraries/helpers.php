<?php namespace Helpers;

class Helper {

/**
 * [text description]
 * @param  [type] $text   [description]
 * @param  [type] $array  [description]
 * @param  [type] $hidden [description]
 * @return [type]         [description]
 */
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

/**
 * [textarea description]
 * @param  [type] $text   [description]
 * @param  [type] $array  [description]
 * @param  [type] $hidden [description]
 * @return [type]         [description]
 */
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

/**
 * [select description]
 * @param  [type] $text     [description]
 * @param  [type] $array    [description]
 * @param  [type] $hidden   [description]
 * @param  [type] $data     [description]
 * @param  [type] $selected [description]
 * @param  string $empty    [description]
 * @return [type]           [description]
 */
	public static function select($text, $array , $hidden = false , $data , $selected = false , $empty = '-- Please select --') {
		$attr = '';
		foreach ($array as $key => $value) {
			$attr .= $key . '=' . $value . ' ';
		}

		$options = '<option value="">' . $empty . '</option>';
		foreach ($data as $key => $value) {
			$options.= '<option value="' . $key . '"';
			if($selected){
				$options.= ($selected == $key) ? 'selected="selected"' : '';
			}
			$options.= '>' . $value . '</option>';
		}

		$hidden = ($hidden) ? 'style="display:none"' : '';
		$html = '<div class="form-group" '.$hidden.'>';
		$html.= '<label for="recipient-name" class="control-label">' . $text . '</label>';
		$html.= '<select class="form-control" '.$attr.'>';
		$html.= $options;
		$html.= '</select>';
		$html.= '</div>';
		return $html;
	}
}
