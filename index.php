<?php
    $card=array("Jk.png","01.png","02.png","03.png","04.png","05.png","06.png",
    "07.png","08.png","09.png","10.png","11.png","12.png","13.png",);

    $leftCard=mt_rand(0,13);//乱数を生成
?>
<html>
	<head>
		<meta http-equiv="Content-type"content="text/html;charset=UTF-8">
	</head>

<!-- 	<center> -->

	<body style="text-align: center">
		<font size = "6">High ＆ Lowゲーム</font><hr>
		大きいカードが出るか小さいカードが出るか当ててみよう。

<!-- ①	<form>タグをaction属性「.php」、method属性「post」で配属する。（S02のPHP処理全て囲むようにする） -->
		<form action="kekka.php" method="post">
    		<?php
    		      echo '<img src="cards/',$card["$leftCard"],'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';

    		      echo '<img src="cards/bg.png">',"<br>","<br>";

    		      echo '<input type="hidden"name="leftCard"value="',$leftCard,'">';
//     ④ランダム数値の変数$leftCardの値を、隠しフィールドのvalueに利用してecho文でHTML出力する
    		?>
    <!-- ②①のタグ内に<input type="radio">をname属性「select」で２つ配置する -->
    <!-- １つ目のvalue属性には「High」を、 -->
    		<input type="radio" name="select" value="High">High（おおきい）&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<!-- ２つ目のvalue属性には「Low」を指定する。 -->
    		<input type="radio" name="select" value="Low">Low（ちいさい）<br>

    <!-- ③①のタグ内に<input type="submit">をvalue属性「決定」で配置する --><br>
    		<input type="submit"value="決定">
		</form>
	</body>
<!-- 	</center> -->

</html>
