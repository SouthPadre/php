<?php
namespace Ex2;

class Creator
{
	public static function create($name)
	{
        if (class_exists('\\Ex2\\' . $name)) {
        	$fullname = '\\Ex2\\' . $name;
            return new $fullname($name);
        }
        return new EmptyItem($name);
	} 
}


