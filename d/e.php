<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ใบสมัครงาน - บริษัท พลอยมณี ครีเอทีฟ สตูดิโอ จำกัด</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<style>
    /* 🎨 การกำหนดสีพาสเทลเฉพาะสำหรับฟอร์มนี้ */
    :root {
        --pastel-blush-pink: #FEE7F2; /* พื้นหลังโดยรวม */
        --pastel-mint-green: #E0F7FA; /* พื้นหลังฟอร์ม */
        --pastel-sky-blue: #D7F4FE; /* พื้นหลังส่วนแสดงผล */
        --pastel-primary-color: #8D51A7; /* สีม่วงลาเวนเดอร์เข้มสำหรับหัวข้อหลัก */
        --pastel-success-btn: #A3E4D7; /* ปุ่มสมัคร (เขียวมิ้นต์อ่อน) */
        --pastel-reset-btn: #F9E79F; /* ปุ่ม Reset (เหลืองอ่อน) */
    }

    body {
        background-color: var(--pastel-blush-pink); /* ชมพูอ่อนมาก */
        color: #333; /* สีข้อความหลัก */
    }

    .header-icon {
        font-size: 2.5rem;
        color: var(--pastel-primary-color); 
        margin-right: 15px;
    }
    
    .form-section-title {
        border-left: 5px solid var(--pastel-primary-color);
        padding-left: 10px;
        color: var(--pastel-primary-color);
        font-weight: bold;
    }

    /* 🟢 ปรับสีปุ่มให้เป็นโทนพาสเทล */
    .btn-pastel-primary {
        background-color: var(--pastel-primary-color);
        border-color: var(--pastel-primary-color);
        color: white; 
    }
    .btn-pastel-primary:hover {
        background-color: #794392;
        border-color: #794392;
    }

    .btn-pastel-reset {
        background-color: var(--pastel-reset-btn);
        border-color: var(--pastel-reset-btn);
        color: #333;
    }
    .btn-pastel-reset:hover {
        background-color: #F7E370;
        border-color: #F7E370;
    }
</style>
</head>

<body>

<div class="container mt-5 mb-5">
    
    <div class="text-center mb-5 p-4 bg-white rounded shadow-sm">
        <i class="bi bi-palette-fill header-icon"></i> 
        <h1 class="display-5 fw-bold mb-1" style="color: var(--pastel-primary-color);">บริษัท พลอยมณี ครีเอทีฟ สตูดิโอ จำกัด</h1>
        <p class="lead text-muted">Pastel Creative Studio Co., Ltd. - ใบสมัครงานออนไลน์</p>
    </div>

    <form method="post" action="f.php" class="p-4 p-md-5 border rounded-3 shadow-lg" style="background-color: var(--pastel-mint-green); border-color: #B2D9D2 !important;">

        <h3 class="mb-3 form-section-title">
            <i class="bi bi-brush"></i> ตำแหน่งที่สนใจและค่าตอบแทน
        </h3>
        <div class="row g-3 mb-4">
            <div class="col-md-7">
                <label for="position" class="form-label">ตำแหน่งที่ต้องการสมัคร <span class="text-danger">*</span></label>
                <select class="form-select" id="position" name="position" required>
                    <option value="" selected disabled>เลือกตำแหน่งงานที่เปิดรับ</option>
                    <option value="Graphic Designer">Graphic Designer (ออกแบบกราฟิก)</option>
                    <option value="Content Creator">Content Creator (สร้างสรรค์เนื้อหา)</option>
                    <option value="Social Media Admin">Social Media Admin (ดูแลสื่อสังคม)</option>
                    <option value="Creative Director">Creative Director (ผู้อำนวยการฝ่ายสร้างสรรค์)</option>
                </select>
            </div>
            <div class="col-md-5">
                <label for="salary" class="form-label">เงินเดือนที่คาดหวัง (บาท)</label>
                <input type="number" class="form-control" id="salary" name="salary" placeholder="ระบุตัวเลข">
            </div>
        </div>

        <hr class="my-4 border-light">

        <h3 class="mb-3 form-section-title">
            <i class="bi bi-person-fill"></i> ข้อมูลส่วนบุคคล
        </h3>
        <div class="row g-3 mb-4">
            <div class="col-md-2">
                <label for="prefix" class="form-label">คำนำหน้า <span class="text-danger">*</span></label>
                <select class="form-select" id="prefix" name="prefix" required>
                    <option value="นาย">นาย</option>
                    <option value="นาง">นาง</option>
                    <option value="นางสาว" selected>นางสาว</option>
                </select>
            </div>
            <div class="col-md-5">
                <label for="firstname" class="form-label">ชื่อ <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="firstname" name="firstname" required>
            </div>
            <div class="col-md-5">
                <label for="lastname" class="form-label">นามสกุล <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="lastname" name="lastname" required>
            </div>
            <div class="col-md-4">
                <label for="dob" class="form-label">วันเดือนปีเกิด <span class="text-danger">*</span></label>
                <input type="date" class="form-control" id="dob" name="dob" required>
            </div>
            <div class="col-md-8">
                <label for="contact" class="form-label">เบอร์โทรศัพท์ / อีเมล <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="contact" name="contact" required placeholder="0XX-XXXXXXX หรือ email@address.com">
            </div>
        </div>
        
        <hr class="my-4 border-light">

        <h3 class="mb-3 form-section-title">
            <i class="bi bi-book"></i> ประวัติการศึกษาและทักษะ
        </h3>
        <div class="row g-3 mb-4">
            <div class="col-md-6">
                <label for="edu_level" class="form-label">ระดับการศึกษาสูงสุด <span class="text-danger">*</span></label>
                <select class="form-select" id="edu_level" name="edu_level" required>
                    <option value="" selected disabled>เลือกระดับการศึกษา</option>
                    <option value="ปริญญาตรี">ปริญญาตรี</option>
                    <option value="ปริญญาโท">ปริญญาโท</option>
                    <option value="ปวส.">ปวส. / อนุปริญญา</option>
                    <option value="อื่นๆ">อื่นๆ</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="major" class="form-label">สาขาวิชาหลัก</label>
                <input type="text" class="form-control" id="major" name="major" placeholder="เช่น นิเทศศิลป์, การตลาดดิจิทัล">
            </div>
        </div>

        <div class="mb-4">
            <label for="skills" class="form-label">ความสามารถพิเศษ / ทักษะที่เกี่ยวข้อง</label>
            <textarea class="form-control" id="skills" name="skills" rows="3" placeholder="ระบุโปรแกรม (AI, PS, Figma) หรือทักษะด้านภาษาที่โดดเด่น..."></textarea>
        </div>
        
        <hr class="my-4 border-light">

        <h3 class="mb-3 form-section-title">
            <i class="bi bi-lightbulb-fill"></i> ประสบการณ์และข้อมูลเพิ่มเติม
        </h3>
        
        <div class="mb-4">
            <label for="experience" class="form-label">ประสบการณ์ทำงานโดยย่อ</label>
            <textarea class="form-control" id="experience" name="experience" rows="4" placeholder="สรุปประสบการณ์ที่เกี่ยวข้องกับตำแหน่งที่สมัคร (ชื่อบริษัท, ตำแหน่ง, ระยะเวลา)"></textarea>
        </div>
        
        <div class="mb-4">
            <label for="others" class="form-label">ข้อมูลอื่นๆ ที่คุณต้องการนำเสนอ</label>
            <textarea class="form-control" id="others" name="others" rows="3" placeholder="เช่น งานอดิเรก, รางวัลที่ได้รับ, แหล่งข้อมูลที่ทราบการรับสมัคร"></textarea>
        </div>

        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mt-5">
            <button class="btn btn-pastel-primary btn-lg px-4 me-sm-3" type="submit" name="SubmitApplication">
                <i class="bi bi-box-arrow-in-right me-2"></i> **ส่งใบสมัคร (Apply)**
            </button>
            <button class="btn btn-pastel-reset btn-lg px-4" type="reset">
                <i class="bi bi-trash me-2"></i> ล้างข้อมูล
            </button>
        </div>

    </form>
    
    <hr class="my-5">
    <div class="p-4 border rounded shadow-sm" style="background-color: var(--pastel-sky-blue); border-color: #B4D7FA !important;">
        <h2 class="mb-3" style="color: var(--pastel-primary-color);">🛠 ข้อมูลที่ถูกส่ง (ตัวอย่างการแสดงผล)</h2>
        <?php
        if(isset($_POST['SubmitApplication'])){
            echo "<p><strong>ตำแหน่งที่สมัคร:</strong> " . htmlspecialchars($_POST['position']) . "</p>";
            echo "<p><strong>ชื่อ-นามสกุล:</strong> " . htmlspecialchars($_POST['prefix']) . htmlspecialchars($_POST['firstname']) . " " . htmlspecialchars($_POST['lastname']) . "</p>";
            echo "<p><strong>วันเดือนปีเกิด:</strong> " . htmlspecialchars($_POST['dob']) . "</p>";
            echo "<p><strong>ระดับการศึกษาสูงสุด:</strong> " . htmlspecialchars($_POST['edu_level']) . "</p>";
            echo "<p><strong>ความสามารถพิเศษ:</strong> " . nl2br(htmlspecialchars($_POST['skills'])) . "</p>";
            echo "<p><strong>ประสบการณ์ทำงาน:</strong> " . nl2br(htmlspecialchars($_POST['experience'])) . "</p>";
        } else {
            echo "<p class='text-muted'>ข้อมูลที่คุณกรอกจะถูกแสดงที่นี่หลังจากกดปุ่ม 'ส่งใบสมัคร (Apply)'</p>";
        }
        ?>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6R3wE5tQ8" crossorigin="anonymous"></script>
</body>
</html>