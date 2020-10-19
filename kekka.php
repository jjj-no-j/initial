
<?php
    $card=array("Jk.png","01.png","02.png","03.png","04.png","05.png","06.png",
        "07.png","08.png","09.png","10.png","11.png","12.png","13.png",);

    $rightCard=mt_rand(0,13);

        $leftCard=$_POST['leftCard'];
        $select=$_POST['select'];
?>

<html>
	<head>
		<meta http-equiv="Content-type"content="text/html;charset=UTF-8">
	</head>

	<body style="text-align: center">
	<font size = "6">High ＆ Lowゲーム</font><hr>
		<?php
//             左のカード値
            echo '<img src="cards/',$card["$leftCard"],'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
//             右のカード値
//             echo '<img src="../cards/',$card["$rightCard"],'">';
            echo '<img src="cards/',$card["$rightCard"],'">',"<br>","<br>";

//             選択結果
            echo "$select","を選択しました。","<br><br>";

            if ($leftCard < $rightCard) {
                $result="High";
            }
            elseif ($leftCard > $rightCard){
                $result="Low";
            }
            else {
                $result=$select;
            }
		?>
	<font size="6">
		<?php
            if ($result == $select) {
                echo "「You Win!」";
                echo "「あなたのかち！」";
            }
            else {
                echo "「You Lose...」";
                echo "「あなたのまけ…」";
            }
		?>
	</font><br>
		<a href="index.php">もう一回</a>
	</body>
</html>
<hr><br>kekka.php<br>
