<?php
    include_once("check_login.php");
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>จัดการสินค้า | ระบบหลังบ้าน</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <style>
        body { font-family: 'Sarabun', sans-serif; background-color: #f8f9fa; }
        .sidebar { min-height: 100vh; background: #212529; color: white; }
        .sidebar a { color: rgba(255,255,255,0.8); text-decoration: none; padding: 12px 20px; display: block; border-radius: 8px; margin-bottom: 5px; }
        .sidebar a:hover, .sidebar a.active { background: #3d444b; color: white; }
        .main-content { padding: 30px; }
        .product-img { width: 60px; height: 60px; object-fit: cover; border-radius: 8px; }
        .table-container { background: white; border-radius: 15px; padding: 25px; box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.05); }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-3 col-lg-2 d-md-block sidebar collapse shadow">
            <div class="text-center py-4 border-bottom border-secondary mb-3">
                <i class="bi bi-box-fill fs-1 text-warning"></i>
                <h6 class="mt-2"><?php echo $_SESSION['aname']; ?></h6>
            </div>
            <div class="px-2">
                <a href="index2.php"><i class="bi bi-speedometer2 me-2"></i> หน้าหลักแอดมิน</a>
                <a href="products.php" class="active"><i class="bi bi-box-seam me-2"></i> จัดการสินค้า</a>
                <a href="orders.php"><i class="bi bi-cart3 me-2"></i> จัดการออเดอร์</a>
                <a href="customers.php"><i class="bi bi-people me-2"></i> จัดการลูกค้า</a>
                <hr class="text-secondary">
                <a href="logout.php" class="text-danger"><i class="bi bi-box-arrow-right me-2"></i> ออกจากระบบ</a>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">
            <div class="d-flex justify-content-between align-items-center pt-3 pb-2 mb-4 border-bottom">
                <h1 class="h2">📦 จัดการสินค้า</h1>
                <a href="add_product.php" class="btn btn-primary shadow-sm">
                    <i class="bi bi-plus-circle me-1"></i> เพิ่มสินค้าใหม่
                </a>
            </div>

            <div class="table-container">
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th width="10%">รูปภาพ</th>
                                <th width="40%">ชื่อสินค้า</th>
                                <th width="15%">ราคา</th>
                                <th width="15%">คงเหลือ</th>
                                <th width="20%" class="text-center">จัดการ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="https://via.placeholder.com/100" class="product-img border" alt="สินค้า"></td>
                                <td>
                                    <div class="fw-bold">รองเท้าผ้าใบแฟชั่น</div>
                                    <small class="text-muted">หมวดหมู่: รองเท้า</small>
                                </td>
                                <td>฿ 1,290</td>
                                <td><span class="badge bg-info text-dark">45 ชิ้น</span></td>
                                <td class="text-center">
                                    <div class="btn-group" role="group">
                                        <a href="edit_product.php?id=1" class="btn btn-sm btn-outline-warning"><i class="bi bi-pencil-square"></i> แก้ไข</a>
                                        <a href="delete_product.php?id=1" class="btn btn-sm btn-outline-danger" onclick="return confirm('ยืนยันการลบสินค้า?')"><i class="bi bi-trash"></i> ลบ</a>
                                    </div>
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