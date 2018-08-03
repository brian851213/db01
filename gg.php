<?php
/*
for($i=0;$i<5;$i++){
$a = rand(0,10);
if($a != $a){
echo $a
}

}  
*/ 
?>
<?php
if(!empty($_POST["c"])){
for($i=1;$i<=$_POST["c"];$i++){  //產生5個
$b=rand($_POST["a"],$_POST["b"]);  //產生1~25的亂數
for($j=1;$j<=$i;$j++){  //檢查重覆

if($b==$a[$j]){
$b=rand($_POST["a"],$_POST["b"]);  //如果重覆，重新產生亂數
$j=0;
}
}
$a[$i]=$b;  //寫入陣列
}
arsort($a);  //排序
foreach($a as $value){  //把陣列內的亂數讀出
echo "結果:".$value . "　　";
}
}
?>


<form method="post">
<a>輸入抽獎的數字範圍</a>
<input name="a">
<input name="b">
抽幾個
<input name="c">
<input type="submit" value="抽!">
</form>