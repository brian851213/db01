<?php
$tt = strtotime("+6hour");
$tt2 = date("Hi",$tt);
//echo $tt2;
if(!empty($_POST["acc"])){
if($_POST["acc"] == "admin" && $_POST["pw"] == $_POST["acc"].$tt2){
    echo "登入成功";
}else{echo "登入失敗";}
}
?>
<form method="post">
<input name="acc">
<br>
<input name="pw">
<input type="submit" value="登入">
</form>