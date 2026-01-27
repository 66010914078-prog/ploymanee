<!doctype html>
<html lang="th">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>นางสาวพลอยมณี หอมดวง(พลอย) -- GPT</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJc8P9pWmH2P5osdGJ7k6y7t1NE+oY0Qdu8KxgtgVWxH1zYYvsa4b6v8V+L8" crossorigin="anonymous">
  <style>
    body {
      background-color: #f0f8ff; /* Color for soft pastel background */
      font-family: 'Arial', sans-serif;
    }
    .container {
      margin-top: 30px;
      background-color: #ffffff;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 30px;
    }
    h1 {
      text-align: center;
      color: #6a5acd;
      font-weight: bold;
    }
    label {
      font-weight: bold;
      color: #6a5acd;
    }
    input[type="text"], input[type="number"], select, input[type="color"] {
      border-radius: 5px;
      padding: 8px;
      border: 1px solid #ced4da;
      width: 100%;
    }
    button {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border-radius: 5px;
      margin-top: 15px;
    }
    .btn-submit {
      background-color: #a2d2ff;
      color: #fff;
      border: none;
    }
    .btn-submit:hover {
      background-color: #86c4ff;
    }
    .btn-reset {
      background-color: #ffc3a0;
      color: #fff;
      border: none;
    }
    .btn-reset:hover {
      background-color: #ffb29d;
    }
    .btn-print {
      background-color: #ffb3e6;
      color: #fff;
      border: none;
    }
    .btn-print:hover {
      background-color: #ff99cc;
    }
    .btn-go-msu {
      background-color: #c6ffb3;
      color: #fff;
      border: none;
    }
    .btn-go-msu:hover {
      background-color: #a6ff8f;
    }
    .form-group {
      margin-bottom: 20px;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1>ฟอร์มสมัครสมาชิก -- นางสาวพลอยมณี หอมดวง(พลอย) -- GPT</h1>
    <form method="post" action="">

      <div class="form-group">
        <label for="fullname">ชื่อ-นามสกุล</label>
        <input type="text" name="fullname" id="fullname" required autofocus>
      </div>

      <div class="form-group">
        <label for="phone">เบอร์โทร</label>
        <input type="text" name="phone" id="phone" required>
      </div>

      <div class="form-group">
        <label for="height">ความสูง</label>
        <input type="number" name="height" id="height" min="100" max="220" required> ซม.
      </div>

      <div class="form-group">
        <label for="color">สีที่ชอบ</label>
        <input type="color" name="color" id="color">
      </div>

      <div class="form-group">
        <label for="major">สาขาวิชา</label>
        <select name="major" id="major" required>
          <option value="การบัญชี">การบัญชี</option>
          <option value="การจัดการ">การจัดการ</option>
          <option value="การตลาด">การตลาด</option>
          <option value="คอมธุรกิจ">คอมธุรกิจ</option>
        </select>
      </div>

      <button type="submit" name="Submit" class="btn btn-submit">สมัครสมาชิก</button>
      <button type="reset" class="btn btn-reset">Reset</button>
      <button type="button" onClick="window.location='https://www.msu.ac.th';" class="btn btn-go-msu">Go to MSU</button>
      <button type="button" onClick="window.print();" class="btn btn-print">พิมพ์</button>

    </form>

    <hr>

    <?php
    if (isset($_POST['Submit'])) {
      $fullname = $_POST['fullname'];
      $phone = $_POST['phone'];
      $height = $_POST['height'];
      $color = $_POST['color'];
      $major = $_POST['major'];
      
      echo "ชื่อ-นามสกุล: ".$fullname."<br>";
      echo "เบอร์โทร: ".$phone."<br>";
      echo "ความสูง: ".$height." ซม.<br>";
      echo "สีที่ชอบ: <div style='background-color: {$color}; width: 50px; height: 50px;'></div><br>";
      echo "สาขาวิชา: ".$major."<br>";
    }
    ?>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gyb9Ps1vvRkE4MkHgF3bc9TuK6Tt3z4m+4Ik43dS6z2xMuQmPx" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0v8Fq78DqKsbABbE5dt37kAnT5vKsdE4IIKpeOS5vD0k6cAt" crossorigin="anonymous"></script>
</body>
</html>
