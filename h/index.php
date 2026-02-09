<?php
    session_start();
?>
<!doctype html>
<html lang="th" data-bs-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login: พลอยมณี หอมดวง (พลอย)</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;600&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Sarabun', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
        }
        .login-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 1rem;
            box-shadow: 0 1rem 3rem rgba(0,0,0,0.175);
            width: 100%;
            max-width: 400px;
            padding: 2rem;
        }
        .form-control:focus {
            box-shadow: none;
            border-color: #764ba2;
        }
        .btn-login {
            background: #764ba2;
            color: white;
            border: none;
        }
        .btn-login:hover {
            background: #5a377d;
            color: white;
        }
    </style>
</head>
<body>

<div class="login-card">
    <div class="text-center mb-4">
        <h3 class="fw-bold text-dark">เข้าสู่ระบบหลังบ้าน</h3>
        <p class="text-muted small">พลอยมณี หอมดวง (พลอย)</p>
    </div>

    <form method="post" action="">
        <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" name="auser" class="form-control form-control-lg" placeholder="กรอกชื่อผู้ใช้" autofocus required>
        </div>
        <div class="mb-4">
            <label class="form-label">Password</label>
            <input type="password" name="apwd" class="form-control form-control-lg" placeholder="กรอกรหัสผ่าน" required>
        </div>
        <div class="d-grid">
            <button type="submit" name="Submit" class="btn btn-login btn-lg">Login</button>
        </div>
    </form>

    <?php
    if(isset($_POST['Submit'])){
        include_once("connectdb.php");
        
        $user = $_POST['auser'];
        $pwd  = $_POST['apwd'];

        // ใช้ Prepared Statement เพื่อความปลอดภัยสูงสุด
        $sql = "SELECT a_id, a_name, a_password FROM admin WHERE a_username = ? LIMIT 1";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $user);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        
        if($data = mysqli_fetch_array($result)){
            // ตรวจสอบรหัสผ่าน (รองรับทั้งแบบธรรมดาและแบบ Hashed)
            if(password_verify($pwd, $data['a_password']) || $pwd === $data['a_password']){
                $_SESSION['aid'] = $data['a_id'];
                $_SESSION['aname'] = $data['a_name'];
                
                echo "<div class='alert alert-success mt-3 py-2 text-center'>สำเร็จ! กำลังเปลี่ยนหน้า...</div>";
                echo "<meta http-equiv='refresh' content='2; url=index2.php'>";
            } else {
                echo "<div class='alert alert-danger mt-3 py-2 text-center'>รหัสผ่านไม่ถูกต้อง</div>";
            }
        } else {
            echo "<div class='alert alert-danger mt-3 py-2 text-center'>ไม่พบชื่อผู้ใช้นี้</div>";
        }
        mysqli_stmt_close($stmt);
    }
    ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>