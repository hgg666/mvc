<?php 
	function C($name, $method){
		require_once('/libs/Controller/'.$name.'Controller.class.php');
		// eval()函数,将数据转化成可执行的php语句
		eval('$obj = new '.$name.'Controller(); $obj->'.$method.'();');
	}
	
	 function M($name){
    	require_once('/libs/Model/'.$name.'Model.class.php');
    	eval('$obj=new '.$name.'Model();');
    	return $obj;
    }

    function V($name){
    	require_once('/libs/View/'.$name.'View.class.php');
    	eval('$obj=new '.$name.'View();');
    	return $obj;
    }

    //对一些非法字符的转义
    function daddslashes($str){
    	return (!get_magic_quotes_gpc())?addslashes($str):$str;
    }
 ?>