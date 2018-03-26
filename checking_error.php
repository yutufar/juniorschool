<?php
$pw=htmlspecialchars($_POST['password']);
$rp="hb1486hb";

if($pw===$rp){
header('Location:create.php');

}else {
echo "비밀번호가 틀렸습니다.";

}

 ?>
