<html>
	<head>	
	</head>
	<body>
	<?php
//		echo "TEST";
		$ajax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
        strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
//		echo $_REQUEST['cor'];
		$Test = $_REQUEST['cor'];
	if (strcmp($Test , "1") == 0) {
			$jud = "smile";
			$num = 1;
		} else if (strcmp($Test , "2") == 0) {
			$jud = "pure";
			$num = 2;
		} else {
			$jud = "cool";
			$num = 3;
		}
	?>
		<form>
			请输入本队主唱技能：<br />
			<input type="radio" name="ability" value="1"/>
			<?PHP echo $jud; ?>P小幅提升
			<input type="radio" name="ability" value="2"/>
			<?PHP echo $jud; ?>P提升
			<input type="radio" name="ability" value="3"/>
			<?PHP echo $jud; ?>P大幅提升
		<?PHP
			if($num==1){
			?>
			<input type="radio" name="ability" value="4"/>
			smile随pure的增加而增加
			<input type="radio" name="ability" value="5"/>
			smile随cool的增加而增加
		<?PHP	}
			else if($num==2){
		?>	<input type="radio" name="ability" value="6"/>
			pure随smile的增加而增加
			<input type="radio" name="ability" value="7"/>
			pure随cool的增加而增加
		<?PHP	} else 	{
		?>	<input type="radio" name="ability" value="8"/>
			cool随smile的增加而增加
			<input type="radio" name="ability" value="9"/>
			cool随pure的增加而增加
		<?PHP	}
		?>
		<input type="radio" name="ability" value="10"/> 无
		<br />
		请选择技能类型？		<br />
		<input type="radio" name="kind1" value="1"/>加分
		<input type="radio" name="kind1" value="2"/>回血
		<input type="radio" name="kind1" value="3"/>判定	
		<br />
		请选择技能触发类型？	<br />
		<input type="radio" name="kind2" value="1"/>时间
		<input type="radio" name="kind2" value="2"/>图标
		<input type="radio" name="kind2" value="3"/>combo
		<input type="radio" name="kind2" value="4"/>分数
		<input type="radio" name="kind2" value="5"/>perfect
		<input type="radio" name="kind2" value="6"/>星星perfect
		<br />	
		</form>
		<button id="BU2">NEXT</button>
	</body>
</html>