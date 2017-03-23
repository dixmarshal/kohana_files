<?php defined('SYSPATH') or die('No direct script access.');

class Group_Access 
{
	static function usergroup($mod, $wg)
	{
		$session = Session::instance('database');
		$group   = Arr::get($session->get('user'), 'group');
		if(!isset($group))
		{ 
			$group = 'guest'; 
		}
		return Kohana::$config->load('access_site.'.$group.'.'.$mod.'.'.$wg);
	}
}