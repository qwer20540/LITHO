<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>정보검색 출력</title>

  <link rel='stylesheet' href='./form_css/reset.css'>
  <link rel='stylesheet' href='./form_css/style.css'>


</head>
<body>
  
    <?php
      include_once('header.php');



      //정보검색 
      $sql = "select * from email_table";
      $rusult = mysqli_query($conn, $sql);

      //데이터 레코드가 1개이상이면
      if( mysqli_num_rows($rusult) > 0 ){
        echo "<table class='select-table'>";
        echo "<caption>LITHO EMAIL LIST</caption>";

          //반복문 배열처리 mysqli_fetch_array()
          while( $row = mysqli_fetch_array($rusult) ){
              echo "<tr>";
                  echo "<td>" .$row['idx'].   "</td>";
                  echo "<td>" .$row['email']. "</td>";
              echo "</tr>";
          }

        echo "</table>";
        echo "<div style='text-align:center;padding-top:50px;'><a href='./form_input_email.html'>폼으로 가기</a></div>";
      }


      include_once('footer.php');
    ?>


</body>
</html>