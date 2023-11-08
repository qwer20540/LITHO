<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  


<?php

  include_once('header.php');


  //입력데이터 변수에 대입
  $email = $_POST['email'];


  //INPUT : INSERT INPUT TABLE이름
  $sql = "insert into email_table (email) values ('$email')";
  $result = mysqli_query($conn, $sql);

  echo '결과값 : '.$result;

  if( $result ){
    echo "성공적으로 저장되었습니다. <a href='javascript:' onclick='javascript:history.go(-1);'>되돌아가기</a>";
  }



  include_once('footer.php');

?>

</body>
</html>
