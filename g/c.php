<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>พลอยมณี หอมดวง(พลอย) - Pastel Dashboard</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Itim&family=Mitr:wght@300;400&display=swap" rel="stylesheet">

    <style>
        :root {
            --bg-pastel: #fff9fb;
            --primary-pastel: #ffc2d1; /* ชมพู */
            --secondary-pastel: #e2f0cb; /* เขียวมินต์ */
            --accent-pastel: #b5ead7;
            --text-soft: #6d6d6d;
        }

        body { 
            background-color: var(--bg-pastel);
            font-family: 'Itim', cursive; /* ฟอนต์สไตล์น่ารัก */
            color: var(--text-soft);
            padding-top: 40px;
        }

        .card { 
            border: none;
            border-radius: 25px;
            box-shadow: 0 10px 30px rgba(255, 182, 193, 0.2);
            overflow: hidden;
        }

        .card-header { 
            background: linear-gradient(45deg, #ffc2d1, #ffe5ec) !important;
            border-bottom: none;
            padding: 25px;
            text-align: center;
        }

        .card-header h2 {
            color: #ff5d8f;
            margin: 0;
            font-weight: bold;
        }

        /* ตกแต่งตาราง DataTables */
        .table {
            border-collapse: separate;
            border-spacing: 0 8px;
        }

        .table thead th {
            background-color: #b5ead7 !important; /* หัวตารางสีเขียวพาสเทล */
            color: #4a7c6a;
            border: none;
            padding: 15px;
            font-size: 1.1rem;
        }

        .table tbody tr {
            background-color: white;
            box-shadow: 0 2px 5px rgba(0,0,0,0.02);
            transition: all 0.3s ease;
        }

        .table tbody tr:hover {
            background-color: #fff0f3 !important;
            transform: translateY(-2px);
        }

        .table td {
            vertical-align: middle;
            border: none;
            padding: 15px;
        }

        /* รูปสินค้า */
        .img-thumb {
            border-radius: 15px;
            border: 3px solid #fff;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        /* Badge สีพาสเทล */
        .badge-pill {
            background-color: #e2f0cb;
            color: #6b8e23;
            border-radius: 20px;
            padding: 5px 15px;
            font-size: 0.9rem;
        }

        /* ปรับแต่งส่วน Search และ Pagination ให้พาสเทล */
        .page-link {
            color: #ff5d8f;
            border-radius: 10px;
            margin: 0 3px;
            border: none;
        }
        
        .page-item.active .page-link {
            background-color: #ffc2d1;
            border-color: #ffc2d1;
        }

        .dataTables_filter input {
            border-radius: 20px;
            border: 2px solid #ffc2d1;
            padding: 5px 15px;
        }
        
        .total-box {
            background: #fff;
            border: 3px dashed #ffc2d1;
            border-radius: 20px;
            padding: 15px 30px;
            display: inline-block;
        }
    </style>
</head>

<body>

<div class="container mb-5">
    <div class="card">
        <div class="card-header">
            <h2>✨ พลอยมณี หอมดวง (พลอย) ✨</h2>
            <p class="mb-0 text-muted">Supermarket Sweet Dashboard</p>
        </div>
        <div class="card-body bg-white p-4">
            <div class="table-responsive">
                <table id="popTable" class="table table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th class="rounded-start">ID</th>
                            <th>สินค้า</th>
                            <th>ประเภท</th>
                            <th>วันที่</th>
                            <th>ประเทศ</th>
                            <th class="text-end">จำนวนเงิน</th>
                            <th class="text-center rounded-end">รูปภาพ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include_once("connectdb.php");
                            $sql = "SELECT * FROM popsupermarket";
                            $rs = mysqli_query($conn, $sql);
                            $total = 0;
                            
                            while ($data = mysqli_fetch_array($rs)) {
                                $total += $data['p_amount'];
                        ?>
                        <tr>
                            <td class="fw-bold">#<?php echo $data['p_order_id']; ?></td>
                            <td><?php echo $data['p_product_name']; ?></td>
                            <td><span class="badge-pill"><?php echo $data['p_category']; ?></span></td>
                            <td><?php echo date('d/m/Y', strtotime($data['p_date'])); ?></td>
                            <td>🌍 <?php echo $data['p_country']; ?></td>
                            <td class="text-end fw-bold text-danger"><?php echo number_format($data['p_amount'], 2); ?></td>
                            <td class="text-center">
                                <img src="<?php echo $data['p_product_name']; ?>.jpg" 
                                     class="img-thumb" 
                                     width="50" height="50"
                                     onerror="this.src='https://via.placeholder.com/50/FFC2D1/FFFFFF?text=🛍️'">
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

            <div class="text-end mt-4">
                <div class="total-box">
                    <span class="fs-5">ยอดรวมทั้งหมด: </span>
                    <span class="fs-3 fw-bold" style="color: #ff5d8f;">฿ <?php echo number_format($total, 2); ?></span>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
        $('#popTable').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.13.7/i18n/th.json"
            },
            "pageLength": 5,
            "order": [[ 0, "desc" ]]
        });
    });
</script>

</body>
</html>