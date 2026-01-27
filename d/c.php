<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>นางสาวพลอยมณี หอมดวง(พลอย) -- Gimini</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<style>
    /* 🎨 การกำหนดสีพาสเทล */
    :root {
        --pastel-pink-bg: #F9EBEA; /* พื้นหลังโดยรวม */
        --pastel-mint-bg: #EAF9F6; /* พื้นหลังการ์ดฟอร์ม */
        --pastel-lavender-bg: #E8F5FF; /* พื้นหลังส่วนแสดงผล */
        --pastel-primary-text: #8E44AD; /* สีม่วงลาเวนเดอร์เข้มสำหรับหัวข้อหลัก */
        --pastel-success-btn: #A3E4D7; /* ปุ่มสมัคร (เขียวมิ้นต์) */
        --pastel-reset-btn: #F9E79F; /* ปุ่ม Reset (เหลืองอ่อน) */
        --pastel-info-btn: #AED6F1; /* ปุ่ม MSU (ฟ้าอ่อน) */
    }

    /* พื้นหลังของ Body เป็นสีชมพูอ่อนมาก */
    body {
        background-color: var(--pastel-pink-bg);
    }

    /* การจัดรูปแบบสำหรับกล่องแสดงสี */
    .color-display {
        width: 30px;
        height: 30px;
        border: 1px solid #ccc;
        display: inline-block;
        vertical-align: middle;
        margin-left: 10px;
        border-radius: 4px;
    }

    /* 🟢 ปรับสีปุ่มให้เป็นโทนพาสเทล */
    .btn-pastel-success {
        background-color: var(--pastel-success-btn);
        border-color: var(--pastel-success-btn);
        color: #333; /* สีข้อความเข้มขึ้นเพื่อให้มองเห็นได้ง่าย */
    }
    .btn-pastel-success:hover {
        background-color: #82D9C5;
        border-color: #82D9C5;
    }

    .btn-pastel-warning {
        background-color: var(--pastel-reset-btn);
        border-color: var(--pastel-reset-btn);
        color: #333;
    }
    .btn-pastel-warning:hover {
        background-color: #F7E370;
        border-color: #F7E370;
    }

    .btn-pastel-info {
        background-color: var(--pastel-info-btn);
        border-color: var(--pastel-info-btn);
        color: #333;
    }
    .btn-pastel-info:hover {
        background-color: #92C9EF;
        border-color: #92C9EF;
    }
</style>
</head>

<body>
<div class="container mt-5 mb-5">

    <h1 class="text-center mb-4" style="color: var(--pastel-primary-text);">ฟอร์มสมัครสมาชิก -- นางสาวพลอยมณี หอมดวง(พลอย) -- Gemini</h1>
    <hr>

    <form method="post" action="" class="p-4 border rounded shadow-lg" style="background-color: var(--pastel-mint-bg); border-color: #B2D9D2 !important;">

        <div class="mb-3">
            <label for="fullname" class="form-label fw-bold">ชื่อ-นามสกุล <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="fullname" name="fullname" required autofocus placeholder="กรุณาใส่ชื่อ-นามสกุล">
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label fw-bold">เบอร์โทร <span class="text-danger">*</span></label>
            <input type="tel" class="form-control" id="phone" name="phone" required placeholder="0XX-XXXXXXX">
        </div>

        <div class="mb-3">
            <label for="height" class="form-label fw-bold">ความสูง (ซม.) <span class="text-danger">*</span></label>
            <div class="input-group">
                <input type="number" class="form-control" id="height" name="height" min="100" max="220" required placeholder="100 - 220">
                <span class="input-group-text bg-light">ซม.</span>
            </div>
        </div>

        <div class="mb-3">
            <label for="color" class="form-label d-block fw-bold">สีที่ชอบ</label>
            <input type="color" class="form-control form-control-color" id="color" name="color" value="#FFFFFF" title="เลือกสีของคุณ">
        </div>

        <div class="mb-4">
            <label for="major" class="form-label fw-bold">สาขาวิชา</label>
            <select class="form-select" id="major" name="major">
                <option value="การบัญชี">การบัญชี</option>
                <option value="การจัดการ">การจัดการ</option>
                <option value="การตลาด">การตลาด</option>
                <option value="คอมธุรกิจ">คอมธุรกิจ</option>
            </select>
        </div>

        <div class="d-grid gap-2 d-md-block text-center">
            <button type="submit" name="Submit" class="btn btn-pastel-success me-2">
                <i class="bi bi-person-check-fill"></i> **สมัครสมาชิก**
            </button>
            <button type="reset" class="btn btn-pastel-warning me-2">
                <i class="bi bi-arrow-counterclockwise"></i> Reset
            </button>
            <button type="button" onClick="window.location='https://www.msu.ac.th';" class="btn btn-pastel-info me-2">
                Go to MSU
            </button>
            <button type="button" onClick="window.print();" class="btn btn-secondary">
                <i class="bi bi-printer-fill"></i> พิมพ์
            </button>
        </div>

    </form>
    
    <hr class="my-5">

    <div class="p-4 border rounded shadow-sm" style="background-color: var(--pastel-lavender-bg); border-color: #B4D7FA !important;">
        <h2 class="mb-3" style="color: var(--pastel-primary-text);">✅ ข้อมูลที่ถูกส่ง</h2>
        <?php
        if(isset($_POST['Submit'])){
            $fullname = $_POST['fullname'];
            $phone = $_POST['phone'];
            $height = $_POST['height'];
            $color = $_POST['color'];
            $major = $_POST['major'];
            
            echo "<p><strong>ชื่อ-นามสกุล:</strong> " . htmlspecialchars($fullname) . "</p>";
            echo "<p><strong>เบอร์โทร:</strong> " . htmlspecialchars($phone) . "</p>";
            echo "<p><strong>ความสูง:</strong> " . htmlspecialchars($height) . " ซม.</p>";
            echo "<p><strong>สีที่ชอบ:</strong> " . htmlspecialchars($color) . " <span class='color-display' style='background-color:{$color}'></span></p>";
            echo "<p><strong>สาขาวิชา:</strong> " . htmlspecialchars($major) . "</p>";
        } else {
            echo "<p class='text-muted'>ยังไม่มีข้อมูลถูกส่ง กรุณากรอกแบบฟอร์มแล้วกดปุ่ม 'สมัครสมาชิก'</p>";
        }
        ?>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6R3wE5tQ8" crossorigin="anonymous"></script>
</body>
</html>