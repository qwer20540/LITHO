<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>테이블 생성</title>
</head>
<body>
  

  <?php
    //헤더
    include_once('header.php');

    
    //본문
    //테이블 생성(email_table) sql exists 이그지스트(존재)
    //테이블이 없으면 만들고 있으면 안만든다. 
    $sql = "create table if not exists email_table (
            idx int auto_increment not null,
            email varchar(250) not null,
            primary key (idx)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
    $result = mysqli_query($conn, $sql);
     


    //푸터
    include_once('footer.php');
  ?>

  <!-- moonjong2.dothome.co.kr/litho/create_email_table_sql.php -->


</body>
</html>


