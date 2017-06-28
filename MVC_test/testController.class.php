<?php 
	// 控制器获取模型和视图,模型是用来获取数据,视图是来输出数据
	class testController{
		function show(){
			$testModel = new testModel();
			$data = $testModel -> get();
			$testView = new testView();
			$testView -> display($data);
		}
	}
?>