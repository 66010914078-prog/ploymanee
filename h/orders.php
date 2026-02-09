<?php
    include_once("check_login.php"); // ไฟล์นี้ต้องมี session_start() อยู่ข้างในนะครับ
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>จัดการออเดอร์ | ระบบหลังบ้าน</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <style>
        body { font-family: 'Sarabun', sans-serif; background-color: #f8f9fa; }
        .sidebar { min-height: 100vh; background: #212529; color: white; }
        .sidebar a { color: rgba(255,255,255,0.8); text-decoration: none; padding: 12px 20px; display: block; border-radius: 8px; margin-bottom: 5px; }
        .sidebar a:hover, .sidebar a.active { background: #3d444b; color: white; }
        .main-content { padding: 30px; }
        .table-container { background: white; border-radius: 15px; padding: 20px; box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075); }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-3 col-lg-2 d-md-block sidebar collapse shadow">
            <div class="text-center py-4 border-bottom border-secondary mb-3">
                <i class="bi bi-person-badge fs-1"></i>
                <h6 class="mt-2"><?php echo $_SESSION['aname']; ?></h6>
            </div>
            <div class="px-2">
                <a href="index2.php"><i class="bi bi-speedometer2 me-2"></i> หน้าหลักแอดมิน</a>
                <a href="products.php"><i class="bi bi-box-seam me-2"></i> จัดการสินค้า</a>
                <a href="orders.php" class="active"><i class="bi bi-cart3 me-2"></i> จัดการออเดอร์</a>
                <a href="customers.php"><i class="bi bi-people me-2"></i> จัดการลูกค้า</a>
                <hr class="text-secondary">
                <a href="logout.php" class="text-danger"><i class="bi bi-box-arrow-right me-2"></i> ออกจากระบบ</a>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">
            <div class="d-flex justify-content-between align-items-center pt-3 pb-2 mb-4 border-bottom">
                <h1 class="h2"><i class="bi bi-cart-check me-2"></i>จัดการออเดอร์</h1>
                <button class="btn btn-outline-primary btn-sm"><i class="bi bi-download me-1"></i> Export รายงาน</button>
            </div>

            <div class="table-container">
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>เลขที่คำสั่งซื้อ</th>
                                <th>วันที่</th>
                                <th>ลูกค้า</th>
                                <th>ยอดรวม</th>
                                <th>สถานะ</th>
                                <th class="text-center">จัดการ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#ORD-67001</td>
                                <td>03 ก.พ. 2569</td>
                                <td>สมชาย สายลม</td>
                                <td>฿ 1,250.00</td>
                                <td><span class="badge bg-warning text-dark">รอดำเนินการ</span></td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-info text-white"><i class="bi bi-eye"></i></button>
                                    <button class="btn btn-sm btn-success"><i class="bi bi-check-lg"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>#ORD-67002</td>
                                <td>02 ก.พ. 2569</td>
                                <td>วิภาวดี รักดี</td>
                                <td>฿ 890.00</td>
                                <td><span class="badge bg-success">จัดส่งแล้ว</span></td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-info text-white"><i class="bi bi-eye"></i></button>
                                    <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
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