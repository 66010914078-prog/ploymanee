<?php
    include_once("check_login.php");
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>จัดการลูกค้า | ระบบหลังบ้าน</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <style>
        body { font-family: 'Sarabun', sans-serif; background-color: #f8f9fa; }
        .sidebar { min-height: 100vh; background: #212529; color: white; }
        .sidebar a { color: rgba(255,255,255,0.8); text-decoration: none; padding: 12px 20px; display: block; border-radius: 8px; margin-bottom: 5px; }
        .sidebar a:hover, .sidebar a.active { background: #3d444b; color: white; }
        .main-content { padding: 30px; }
        .table-container { background: white; border-radius: 15px; padding: 25px; box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.05); }
        .avatar-circle { width: 40px; height: 40px; background: #e9ecef; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #6c757d; font-weight: bold; }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-3 col-lg-2 d-md-block sidebar collapse shadow">
            <div class="text-center py-4 border-bottom border-secondary mb-3">
                <i class="bi bi-people-fill fs-1 text-info"></i>
                <h6 class="mt-2"><?php echo $_SESSION['aname']; ?></h6>
            </div>
            <div class="px-2">
	<a href="index2.php"><li>หน้าหลักแอดมิน<li></a>
	<a href="products.php"><li>จัดการสินค้า</li></a>
    <a href="orders.php"><li>จัดการออเดอร์</li></a>
    <a href="customers.php"><li>จัดการลูกค้า</li></a>
   <a href="logout.php"><li>ออกจากระบบ</li></a>
                <hr class="text-secondary">
                <a href="logout.php" class="text-danger"><i class="bi bi-box-arrow-right me-2"></i> ออกจากระบบ</a>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">
            <div class="d-flex justify-content-between align-items-center pt-3 pb-2 mb-4 border-bottom">
                <h1 class="h2"><i class="bi bi-person-lines-fill me-2"></i>จัดการลูกค้า</h1>
                <div class="input-group style="width: 250px;">
                    <input type="text" class="form-control form-control-sm" placeholder="ค้นหาชื่อลูกค้า...">
                    <button class="btn btn-outline-secondary btn-sm"><i class="bi bi-search"></i></button>
                </div>
            </div>

            <div class="table-container">
                <div class="table-responsive">
                    <table class="table table-striped table-hover align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th width="5%">#</th>
                                <th width="10%">โปรไฟล์</th>
                                <th width="30%">ชื่อ-นามสกุล</th>
                                <th width="25%">อีเมล / เบอร์โทรศัพท์</th>
                                <th width="15%">วันที่สมัคร</th>
                                <th width="15%" class="text-center">จัดการ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><div class="avatar-circle">ส</div></td>
                                <td>
                                    <div class="fw-bold">สมหมาย รักเรียน</div>
                                    <small class="text-muted">ID: CUST-001</small>
                                </td>
                                <td>
                                    <div><i class="bi bi-envelope me-1"></i> sommai@example.com</div>
                                    <div><i class="bi bi-telephone me-1"></i> 081-234-5678</div>
                                </td>
                                <td>01 ก.พ. 2569</td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-light border" title="ดูรายละเอียด"><i class="bi bi-info-circle"></i></button>
                                    <button class="btn btn-sm btn-outline-danger" title="ระงับการใช้งาน"><i class="bi bi-slash-circle"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>