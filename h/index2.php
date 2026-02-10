<?php
include_once("check_login.php");
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard: พลอยมณี หอมดวง (พลอย)</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <style>
        body { font-family: 'Sarabun', sans-serif; background-color: #f4f7f6; }
        .sidebar {
            min-height: 100vh;
            background: #212529;
            color: white;
            transition: all 0.3s;
        }
        .sidebar a {
            color: rgba(255,255,255,0.8);
            text-decoration: none;
            padding: 12px 20px;
            display: block;
            border-radius: 8px;
            margin-bottom: 5px;
        }
        .sidebar a:hover, .sidebar a.active {
            background: #3d444b;
            color: white;
        }
        .main-content { padding: 30px; }
        .admin-profile { padding: 20px; border-bottom: 1px solid #3d444b; margin-bottom: 20px; }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-3 col-lg-2 d-md-block sidebar collapse shadow">
            <div class="admin-profile text-center">
                <i class="bi bi-person-circle fs-1"></i>
                <h6 class="mt-2 mb-0"><?php echo $_SESSION['aname']; ?></h6>
                <span class="badge bg-success small">Online</span>
            </div>
            
            <div class="px-2">
                <a href="index2.php" class="active"><i class="bi bi-speedometer2 me-2"></i> หน้าหลักแอดมิน</a>
                <a href="products.php"><i class="bi bi-box-seam me-2"></i> จัดการสินค้า</a>
                <a href="orders.php"><i class="bi bi-cart3 me-2"></i> จัดการออเดอร์</a>
                <a href="customers.php"><i class="bi bi-people me-2"></i> จัดการลูกค้า</a>
                <hr class="text-secondary">
                <a href="logout.php" class="text-danger"><i class="bi bi-box-arrow-right me-2"></i> ออกจากระบบ</a>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-4 border-bottom">
                <h1 class="h2">แผงควบคุม (Dashboard)</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <span class="text-muted">ยินดีต้อนรับคุณ, <?php echo $_SESSION['aname']; ?></span>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <h6 class="text-muted">ยอดขายวันนี้</h6>
                            <h3 class="fw-bold mb-0">฿ 15,400</h3>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="card border-0 shadow-sm border-start border-primary border-4">
                        <div class="card-body">
                            <h6 class="text-muted">ออเดอร์ใหม่</h6>
                            <h3 class="fw-bold mb-0">12 รายการ</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5">
                <h4>ยินดีต้อนรับสู่ระบบหลังบ้าน</h4>
                <p>เลือกเมนูทางด้านซ้ายเพื่อจัดการส่วนต่างๆ ของเว็บไซต์</p>
            </div>
        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>