<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ผลลัพธ์ใบสมัคร - บริษัท พลอยมณี ครีเอทีฟ สตูดิโอ จำกัด</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        /* 🎨 การกำหนดสีพาสเทล (เพื่อให้หน้าแสดงผลดูสอดคล้องกับหน้าฟอร์ม) */
        :root {
            --pastel-blush-pink: #FEE7F2; 
            --pastel-primary-color: #8D51A7; /* ม่วงลาเวนเดอร์เข้ม */
            --pastel-success-color: #A3E4D7; /* เขียวมิ้นต์อ่อน */
        }

        body {
            background-color: var(--pastel-blush-pink);
        }
        .result-header {
            background-color: white;
            color: var(--pastel-primary-color);
        }
        .result-card {
            border-left: 5px solid var(--pastel-primary-color); 
            background-color: #ffffff;
        }
        .table-pastel-header {
            background-color: var(--pastel-success-color);
            color: #333;
        }
    </style>
</head>
<body>

<div class="container mt-5 mb-5">
    
    <div class="text-center mb-5 p-4 rounded shadow-sm result-header">
        <h1 class="display-6 fw-bold">
            <i class="bi bi-check-all me-2"></i> ข้อมูลใบสมัครที่ได้รับสำเร็จ
        </h1>
        <p class="lead text-muted">บริษัท พลอยมณี ครีเอทีฟ สตูดิโอ จำกัด ขอบคุณสำหรับการสมัครงาน</p>
    </div>

    <div class="p-4 rounded shadow-lg result-card">
        <?php
        // ตรวจสอบว่ามีการส่งข้อมูลแบบ POST มาหรือไม่
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo '<h4 class="mb-4 text-center" style="color: var(--pastel-primary-color);"><i class="bi bi-file-text me-2"></i> สรุปข้อมูลที่ผู้สมัครได้กรอก</h4>';
            echo '<table class="table table-striped table-hover">';
            echo '<thead class="table-pastel-header"><tr><th style="width: 35%;">หัวข้อ</th><th>รายละเอียด</th></tr></thead>';
            echo '<tbody>';

            // --- 1. ข้อมูลตำแหน่งงาน ---
            echo '<tr><td colspan="2" class="fw-bold table-light"><i class="bi bi-briefcase-fill me-2 text-secondary"></i> ตำแหน่งและค่าตอบแทน</td></tr>';
            echo '<tr><td>ตำแหน่งที่ต้องการสมัคร:</td><td>' . htmlspecialchars($_POST['position']) . '</td></tr>';
            echo '<tr><td>เงินเดือนที่คาดหวัง:</td><td>' . (empty($_POST['salary']) ? '-' : number_format(htmlspecialchars($_POST['salary'])) . ' บาท') . '</td></tr>';

            // --- 2. ข้อมูลส่วนตัว ---
            echo '<tr><td colspan="2" class="fw-bold table-light"><i class="bi bi-person-fill me-2 text-secondary"></i> ข้อมูลส่วนบุคคล</td></tr>';
            $fullname = htmlspecialchars($_POST['prefix']) . htmlspecialchars($_POST['firstname']) . ' ' . htmlspecialchars($_POST['lastname']);
            echo '<tr><td>ชื่อ-นามสกุล:</td><td>' . $fullname . '</td></tr>';
            echo '<tr><td>วันเดือนปีเกิด:</td><td>' . htmlspecialchars($_POST['dob']) . '</td></tr>';
            echo '<tr><td>เบอร์โทรศัพท์ / อีเมล:</td><td>' . htmlspecialchars($_POST['contact']) . '</td></tr>';

            // --- 3. ประวัติการศึกษาและทักษะ ---
            echo '<tr><td colspan="2" class="fw-bold table-light"><i class="bi bi-book me-2 text-secondary"></i> การศึกษาและทักษะ</td></tr>';
            echo '<tr><td>ระดับการศึกษาสูงสุด:</td><td>' . htmlspecialchars($_POST['edu_level']) . '</td></tr>';
            echo '<tr><td>สาขาวิชาหลัก:</td><td>' . (empty($_POST['major']) ? '-' : htmlspecialchars($_POST['major'])) . '</td></tr>';
            echo '<tr><td>ความสามารถพิเศษ:</td><td>' . (empty($_POST['skills']) ? '-' : nl2br(htmlspecialchars($_POST['skills']))) . '</td></tr>';

            // --- 4. ประสบการณ์และข้อมูลเพิ่มเติม ---
            echo '<tr><td colspan="2" class="fw-bold table-light"><i class="bi bi-lightbulb-fill me-2 text-secondary"></i> ประสบการณ์เพิ่มเติม</td></tr>';
            echo '<tr><td>ประสบการณ์ทำงานโดยย่อ:</td><td>' . (empty($_POST['experience']) ? '-' : nl2br(htmlspecialchars($_POST['experience']))) . '</td></tr>';
            echo '<tr><td>ข้อมูลอื่นๆ ที่ต้องการนำเสนอ:</td><td>' . (empty($_POST['others']) ? '-' : nl2br(htmlspecialchars($_POST['others']))) . '</td></tr>';
            
            echo '</tbody>';
            echo '</table>';

            echo '<div class="alert alert-success mt-4 text-center" role="alert">';
            echo '<strong><i class="bi bi-heart-fill me-1"></i> ขอบคุณค่ะ!</strong> ทางเราจะติดต่อกลับไปในเร็วๆ นี้';
            echo '</div>';

        } else {
            // กรณีเข้าถึงไฟล์ f.php โดยตรงโดยไม่มีการส่งข้อมูล
            echo '<div class="alert alert-danger text-center" role="alert">';
            echo '<strong>เกิดข้อผิดพลาด:</strong> ไม่พบข้อมูลที่ส่งมาจากฟอร์ม กรุณาเข้าสู่หน้าสมัครงานเพื่อกรอกข้อมูล';
            echo '</div>';
        }
        ?>
    </div>
    
    <div class="text-center mt-4">
        <a href="javascript:history.back()" class="btn btn-outline-secondary btn-lg">
            <i class="bi bi-arrow-left me-2"></i> กลับไปหน้าฟอร์ม
        </a>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6R3wE5tQ8" crossorigin="anonymous"></script>
</body>
</html>