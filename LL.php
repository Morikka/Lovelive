<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title></title>
		<script type="text/javascript">
		function ch2() {
			var kinds1 = document.getElementsByName("kind1");
			var kind1 = "";
			for(var i=0;i<kinds1.length;i++){
				if(kinds1[i].checked){
					kind1=kinds1[i].value;
					break;
				}
			}
		</script>
	</head>
	<body>
		<?php
//		echo "Test";
//		echo $_GET["rarity"];
//		echo $_GET["cor"];
		if (strcmp($_GET["cor"], "1") == 0) {
			$jud = "smile";
			$num = 1;
		} else if (strcmp($GET["cor"], "2") == 0) {
			$jud = "pure";
			$num = 2;
		} else {
			$jud = "cool";
			$num = 3;
		}
	?>
		请输入本队主唱技能：
		<form action="javascript:ch2();" method="get">
			<input type="radio" name="ability" value="1"/>
			<?PHP echo $jud; ?>P小幅提升
			<input type="radio" name="ability" value="2"/>
			<?PHP echo $jud; ?>P提升
			<input type="radio" name="ability" value="3"/>
			<?PHP echo $jud; ?>P大幅提升
		<?PHP
			if($num==1){
				echo "<input type=\"radio\" name=\"ability\" value=\"4\"/>";
				echo "smile随pure的增加而增加";
				echo "<input type=\"radio\" name=\"ability\" value=\"5\"/>";
				echo "smile随cool的增加而增加";
			}
			else if($num==2){
				echo "<input type=\"radio\" name=\"ability\" value=\"6\"/>";
				echo "pure随smile的增加而增加";
				echo "<input type=\"radio\" name=\"ability\" value=\"7\"/>";
				echo "pure随cool的增加而增加";
			} else 	{
				echo "<input type=\"radio\" name=\"ability\" value=\"8\"/>";
				echo "cool随smile的增加而增加";
				echo "<input type=\"radio\" name=\"ability\" value=\"9\"/>";
				echo "cool随pure的增加而增加";
			}
		?>
		<input type="radio" name="raritdy" value="0"/> 无
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
		<input type="submit" value="next">
		</form>
		<p id="p2"></p>
	</body>
</html>