<html>
	<head>	
	</head>
	<body>
	<?php
		$ajax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
        strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
//		echo $_REQUEST['cor'];
//		echo $_REQUEST['ability'];
//		echo $_REQUEST['kind1'];
//		echo $_REQUEST['kind2'];
		$Test1 = $_REQUEST['cor'];
		$Test2 = $_REQUEST['kind1'];
		$Test3 = $_REQUEST['ability'];
		$Test4 = $_REQUEST['kind2'];
		$num = 0;
		if (strcmp($Test1 , "1") == 0) {
			$num1 = 1;
		} else if (strcmp($Test1 , "2") == 0) {
			$num1 = 2;
		} else {
			$num1 = 3;
		}
		if (strcmp($Test2 , "1") == 0) {
			$num2 = 1;
		} else if (strcmp($Test2 , "2") == 0) {
			$num2 = 2;
		} else {
			$num2 = 3;
		}
		$num3 = 0;
		if (strcmp($Test3 , "6")== 0) $num3 = 1;
		if (strcmp($Test3 , "8")== 0) $num3 = 1;
		if (strcmp($Test3 , "4")== 0) $num3 = 2;
		if (strcmp($Test3 , "9")== 0) $num3 = 2;
		if (strcmp($Test3 , "5")== 0) $num3 = 3;
		if (strcmp($Test3 , "7")== 0) $num3 = 3;
		if (strcmp($Test4 , "1")== 0) $num4 = 1;
		if (strcmp($Test4 , "2")== 0) $num4 = 2;
		if (strcmp($Test4 , "3")== 0) $num4 = 3;
		if (strcmp($Test4 , "4")== 0) $num4 = 4;
		if (strcmp($Test4 , "5")== 0) $num4 = 5;
	?>
		<form> 
		<?PHP
			if($num1 == 1){
		?>
		请输入smile值
		<?PHP
			} else if($num1 == 2){
		?>
		请输入pure值
		<?PHP
			}else{
		?>
		请输入cool值
		<?PHP
			}
		?>
		<input type="text" id="num1">
		<br />
		
		<?PHP
		if($num3 == 1) echo "请输入smile值";
		if($num3 == 2) echo "请输入pure值";
		if($num3 == 3) echo "请输入cool值";
		if ($num3 != 0){
		?>
		<input type="text" id="num3">
		<br />
		<?PHP
		}
			if($num4 == 1) echo "多少秒触发技能";
			if($num4 == 2) echo "多少图标触发技能";
			if($num4 == 3) echo "多少combo触发技能";
			if($num4 == 4) echo "多少分数触发技能";
			if($num4 == 5) echo "多少perfect触发技能";
		?>
		<input type="text" id="num4">
		<br />
		请输入概率
		<input type="text" id="num5">
		<br />
		<?PHP
			if($num2 == 1){
		?>
		加多少分
		<?PHP
			} else if($num2 == 2){
		?>
		回多少血
		<?PHP
			}else{
		?>
		增强判定多少秒
		<?PHP
			}
		?>
		<input type="text" id="num2">
		</form>
		<button id="BU3">NEXT</button>
	</body>
</html>