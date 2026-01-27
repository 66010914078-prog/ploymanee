  <?php
  
			$host = "localhost";
			$user = "root";
			$pwd="Ploymanee";
			$db="4078db";
			$conn= mysqli_connect($host,$user,$pwd,$db) or die ("เชื่อมต่อฐานข้อมูลไม่ได้");
			mysqli_query($conn,"SET NAMEs utf8");

        ?>