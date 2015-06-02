<?php
	//Auto includes all available classes
	spl_autoload_register(function($class){
		$classPath = str_replace('\\', '/', $class);
		include __DIR__."/".$classPath.'.php';
	});

?>