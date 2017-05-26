<?php

if (! function_exists('page_title')){
	function page_title($title){
		$base_title=config('app.name');
		if ($title==='')
			return $base_title;
		else
			return $title . ' | ' . $base_title;
	}
}
if (! function_exists('set_active_route')){
	function set_active_route($route){
		return Route::is($route) ? 'active' : '';
	}
}
if (! function_exists('get_yes_no')){
	function get_yes_no($value){
		return $value===0 ? 'Non' : 'Oui';
	}
}