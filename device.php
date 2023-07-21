<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>บริษัท ไอโซเทค อินสตรูเมนท์ (ไทยแลนด์) จำกัด</title>
    <link rel="icon" type="image/x-icon" href="../assets/images/isologo.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
    <script>
        $('body').on('keydown', 'input, select', function(e) {
            if (e.key === "Enter") {
                var self = $(this),
                    form = self.parents('form:eq(0)'),
                    focusable, next;
                focusable = form.find('input,a,select,button,textarea').filter(':visible');
                next = focusable.eq(focusable.index(this) + 1);
                if (next.length) {
                    next.focus();
                } else {
                    form.submit();
                }
                return false;
            }
        });
    </script>
    <?php
    include_once("conf.php");

    $conn = new mysqli($cpy_server, $cpy_user, $cpy_pass, $cpy_db);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $device = $_GET['id'];
    $sql = "SELECT * FROM cpy WHERE Code = '" . $device . "'";
    $result = mysqli_query($conn, $sql);
    if ($row = mysqli_fetch_array($result)) {
        if ($row['Name'] == "Bedside Monitor" || $row['Name'] == "Vital Signs Monitor" || $row['Name'] == "Monitor(MRI)" || $row['Name'] == "Monitor CT") {
            $cal_selector = "bsm";
            $pm_selector = "bsm";
        } elseif ($row['Name'] == "Digital Blood Pressure" || $row['Name'] == "Ambulatory Blood Pressure Monitoring(บันทึกความดัน24 Hr)") {
            $cal_selector = "nibp";
            $pm_selector = "nibp";
        } elseif ($row['Name'] == "Ankle brachial index(เครื่องตรวจสมรรถภาพหลอดเลือดแดง)ABI") {
            $cal_selector = "cavi";
            $pm_selector = "cavi";
        } elseif ($row['Name'] == "Pulse Oximeter") {
            $cal_selector = "po";
            $pm_selector = "po";
        } elseif ($row['Name'] == "Electrocardiograph" || $row['Name'] == "Holter Recorder(บันทึกคลื่นไฟฟ้าหัวใจ)") {
            $cal_selector = "ecg";
            $pm_selector = "ecg";
        } elseif (
            $row['Name'] == "Blood warmer(เครื่องอุ่นสารให้เลือด)" || $row['Name'] == "Hypo / Hyperthermia" || $row['Name'] == "อ่างแช่พาราฟิน (Parafin Bath)"
            || $row['Name'] == "Cloth warmer(เครื่องอุ่นผ้า)" || $row['Name'] == "Hydrocollator(เครื่องต้มแผ่นให้ความร้อน)" || $row['Name'] == "Forced air Warming Blankets"
        ) {
            $cal_selector = "temp";
            $pm_selector = "temp";
        } elseif ($row['Name'] == "Infant Incubator(ตู้อบเด็กทารก)" || $row['Name'] == "Infant Warmer (ช่วยเด็กแรกเกิด)" || $row['Name'] == "Radiant warmer(ให้ความอบอุ่นเด็กด้วยแสง)") {
            $cal_selector = "infant_incu";
            $pm_selector = "infant_incu";
        } elseif ($row['Name'] == "Infant T-piece resuscitator") {
            $cal_selector = "pressure";
            $pm_selector = "pressure";
        } elseif ($row['Name'] == "Centrifuge") {
            $cal_selector = "cen";
            $pm_selector = "cen";
        } elseif ($row['Name'] == "Fetal Doppler") {
            $cal_selector = "fetal";
            $pm_selector = "fetal";
        } elseif ($row['Name'] == "Fetal Monitor(เครื่องฟังเสียงหัวใจเด็ก)") {
            $cal_selector = "fetal_multi";
            $pm_selector = "fetal_multi";
        } elseif ($row['Name'] == "Electrosurgical Unit (ตัดจี้ด้วยไฟฟ้า)") {
            $cal_selector = "esu";
            $pm_selector = "esu";
        } elseif ($row['Name'] == "Sphygmomanometer" || $row['Name'] == "Neopuff" || $row['Name'] == "Aspirators" || $row['Name'] == "Pressure Cuff" || $row['Name'] == "Vacuum Extractor (เครื่องช่วยคลอดโดยใช้แรงดูด)") {
            $cal_selector = "pressure";
            $pm_selector = "pressure";
        } elseif ($row['Name'] == "Spiro meter") {
            $cal_selector = "spiro";
            $pm_selector = "spiro";
        } elseif ($row['Name'] == "Traction (ชุดดึงคอและหลังอัตโนมัติ)") {
            $cal_selector = "traction";
            $pm_selector = "traction";
        } elseif ($row['Name'] == "PaceMaker (เครื่องกระตุ้นหัวใจ)") {
            $cal_selector = "pace";
            $pm_selector = "pace";
        } elseif ($row['Name'] == "Laser") {
            $cal_selector = "error";
            $pm_selector = "laser";
        } elseif ($row['Name'] == "Microware Diathermy") {
            $cal_selector = "error";
            $pm_selector = "microwave";
        } elseif ($row['Name'] == "Exercise Stress Test") {
            $cal_selector = "stress";
            $pm_selector = "stress";
        } elseif ($row['Name'] == "Treadmill(ลู่วิ่งไฟฟ้า)") {
            $cal_selector = "tread";
            $pm_selector = "tread";
        } elseif ($row['Name'] == "Infant Ventilator") {
            $cal_selector = "infant_ven";
            $pm_selector = "ven";
        } elseif ($row['Name'] == "Ventilator") {
            $cal_selector = "ven";
            $pm_selector = "ven";
        } elseif ($row['Name'] == "Ultrasound(เครื่องรักษาด้วยคลื่นอัลตราซาวน์)") {
            $cal_selector = "ultrasound";
            $pm_selector = "ultrasound";
        } elseif ($row['Name'] == "Tens (ลดความเจ็บปวดเฉพาะจุดขนาดเล็ก)") {
            $cal_selector = "tens";
            $pm_selector = "tens";
        } elseif ($row['Name'] == "Interferential Therapy(รักษาด้วยคลื่นความถี่กระแสไฟฟ้า)") {
            $cal_selector = "es";
            $pm_selector = "tens";
        } elseif ($row['Name'] == "Syring Driver") {
            $cal_selector = "syringe_driver";
            $pm_selector = "syd";
        } elseif ($row['Name'] == "Syring Pump") {
            $cal_selector = "inf";
            $pm_selector = "inf";
        } else {
            $cal_selector = "error";
            $pm_selector = "error";
        }

    ?>

        <form action="update_data.php" method="post">
            <div class="container">
                <!-- Form -->
                <h2>Devices Data</h2>
                <span><button type="button" class="btn btn-primary btn-sm" onclick="window.open('view_'+'<?php echo $pm_selector ?>'+'.php?code='+'<?php echo $row['Code']; ?>')">
                        View
                    </button></span>
                <div class="mb-3">
                    <label for="hos_code" class="form-label">Hospital Code</label>
                    <input type="text" class="form-control" name="hosp_code" placeholder="CHC-00000" value="<?php echo $row['Code']; ?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="ref_code" class="form-label">Reference Code</label>
                    <input type="text" class="form-control" name="ref_code" placeholder="CPY-XX-00" value="<?php echo $row['Ref']; ?>">
                </div>
                <div class="mb-3">
                    <label for="ref_code" class="form-label">Device Name</label>
                    <select name="name" class="form-select" aria-label="">
                        <option selected><?php echo $row['Name']; ?></option>
                        <option value="Ambulatory Blood Pressure Monitoring(บันทึกความดัน24 Hr)">Ambulatory Blood Pressure Monitoring(บันทึกความดัน24 Hr)</option>
                        <option value="Ankle brachial index(เครื่องตรวจสมรรถภาพหลอดเลือดแดง)ABI">Ankle brachial index(เครื่องตรวจสมรรถภาพหลอดเลือดแดง)ABI</option>
                        <option value="Aspirators">Aspirators</option>
                        <option value="Bedside Monitor">Bedside Monitor</option>
                        <option value="Bilevel Positive Airway Pressure (BiPaP)">Bilevel Positive Airway Pressure (BiPaP)</option>
                        <option value="Blood warmer(เครื่องอุ่นสารให้เลือด)">Blood warmer(เครื่องอุ่นสารให้เลือด)</option>
                        <option value="Centrifuge">Centrifuge</option>
                        <option value="Cloth warmer(เครื่องอุ่นผ้า)">Cloth warmer(เครื่องอุ่นผ้า)</option>
                        <option value="Digital Blood Pressure">Digital Blood Pressure</option>
                        <option value="Electrical Stimulator">Electrical Stimulator</option>
                        <option value="Electrocardiograph">Electrocardiograph</option>
                        <option value="Electrosurgical Unit (ตัดจี้ด้วยไฟฟ้า)">Electrosurgical Unit (ตัดจี้ด้วยไฟฟ้า)</option>
                        <option value="Exercise Stress Test">Exercise Stress Test</option>
                        <option value="Fetal Doppler">Fetal Doppler</option>
                        <option value="Fetal Monitor(เครื่องฟังเสียงหัวใจเด็ก)">Fetal Monitor(เครื่องฟังเสียงหัวใจเด็ก)</option>
                        <option value="Forced air Warming Blankets">Forced air Warming Blankets</option>
                        <option value="Holter Recorder(บันทึกคลื่นไฟฟ้าหัวใจ)">Holter Recorder(บันทึกคลื่นไฟฟ้าหัวใจ)</option>
                        <option value="Hydrocollator(เครื่องต้มแผ่นให้ความร้อน)">Hydrocollator(เครื่องต้มแผ่นให้ความร้อน)</option>
                        <option value="Hypo / Hyperthermia">Hypo / Hyperthermia</option>
                        <option value="Infant Incubator(ตู้อบเด็กทารก)">Infant Incubator(ตู้อบเด็กทารก)</option>
                        <option value="Infant T-piece resuscitator">Infant T-piece resuscitator</option>
                        <option value="Infant Ventilator">Infant Ventilator</option>
                        <option value="Infant Warmer (ช่วยเด็กแรกเกิด)">Infant Warmer (ช่วยเด็กแรกเกิด)</option>
                        <option value="Interferential Therapy(รักษาด้วยคลื่นความถี่กระแสไฟฟ้า)">Interferential Therapy(รักษาด้วยคลื่นความถี่กระแสไฟฟ้า)</option>
                        <option value="Laser">Laser</option>
                        <option value="Microware Diathermy">Microware Diathermy</option>
                        <option value="Monitor CT">Monitor CT</option>
                        <option value="Monitor(MRI)">Monitor(MRI)</option>
                        <option value="Neopuff">Neopuff</option>
                        <option value="Oxygen Flow Meter">Oxygen Flow Meter</option>
                        <option value="Oxygen High Flow">Oxygen High Flow</option>
                        <option value="PaceMaker (เครื่องกระตุ้นหัวใจ)">PaceMaker (เครื่องกระตุ้นหัวใจ)</option>
                        <option value="Pneumetic Compression">Pneumetic Compression</option>
                        <option value="Pressure Cuff">Pressure Cuff</option>
                        <option value="Pulse Oximeter">Pulse Oximeter</option>
                        <option value="Radiant warmer(ให้ความอบอุ่นเด็กด้วยแสง)">Radiant warmer(ให้ความอบอุ่นเด็กด้วยแสง)</option>
                        <option value="Sphygmomanometer">Sphygmomanometer</option>
                        <option value="Spiro meter">Spiro meter</option>
                        <option value="Syring Driver">Syring Driver</option>
                        <option value="Syring Pump">Syring Pump</option>
                        <option value="Tens (ลดความเจ็บปวดเฉพาะจุดขนาดเล็ก)">Tens (ลดความเจ็บปวดเฉพาะจุดขนาดเล็ก)</option>
                        <option value="Traction (ชุดดึงคอและหลังอัตโนมัติ)">Traction (ชุดดึงคอและหลังอัตโนมัติ)</option>
                        <option value="Treadmill(ลู่วิ่งไฟฟ้า)">Treadmill(ลู่วิ่งไฟฟ้า)</option>
                        <option value="Ultrasound(เครื่องรักษาด้วยคลื่นอัลตราซาวน์)">Ultrasound(เครื่องรักษาด้วยคลื่นอัลตราซาวน์)</option>
                        <option value="Vacuum Extractor (เครื่องช่วยคลอดโดยใช้แรงดูด)">Vacuum Extractor (เครื่องช่วยคลอดโดยใช้แรงดูด)</option>
                        <option value="Ventilator">Ventilator</option>
                        <option value="Vital Signs Monitor">Vital Signs Monitor</option>
                        <option value="อ่างแช่พาราฟิน (Parafin Bath)">อ่างแช่พาราฟิน (Parafin Bath)</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="brand" class="form-label">Brand</label>
                    <input type="text" class="form-control" name="brand" placeholder="" value="<?php echo $row['Brand']; ?>">
                </div>
                <div class="mb-3">
                    <label for="model" class="form-label">Model</label>
                    <input type="text" class="form-control" name="model" placeholder="" value="<?php echo $row['Model']; ?>">
                </div>
                <div class="mb-3">
                    <label for="sn" class="form-label">Serial Number</label>
                    <input type="text" class="form-control" name="sn" placeholder="" value="<?php echo $row['SN']; ?>">
                </div>
                <div class="mb-3">
                    <label for="loc" class="form-label">Location</label>
                    <select name="loc" class="form-select" aria-label="">
                        <option selected><?php echo $row['Ward']; ?></option>
                        <option value="กายภาพ">กายภาพ</option>
                        <option value="ไตเทียม">ไตเทียม</option>
                        <option value="ยานพาหนะ">ยานพาหนะ</option>
                        <option value="วิสัญญี">วิสัญญี</option>
                        <option value="วิสัญญี,Scope">วิสัญญี,Scope</option>
                        <option value="ศัลยกรรม">ศัลยกรรม</option>
                        <option value="ศูนย์กระดูก">ศูนย์กระดูก</option>
                        <option value="ศูนย์ความงาม">ศูนย์ความงาม</option>
                        <option value="สูติ-นรีเวช">สูติ-นรีเวช</option>
                        <option value="ห้องคลอด">ห้องคลอด</option>
                        <option value="อายุรกรรม">อายุรกรรม</option>
                        <option value="Cardio">Cardio</option>
                        <option value="Cath-Lab">Cath-Lab</option>
                        <option value="CCU">CCU</option>
                        <option value="Check-up">Check-up</option>
                        <option value="Dental">Dental</option>
                        <option value="ER">ER</option>
                        <option value="ICU">ICU</option>
                        <option value="Nursery">Nursery</option>
                        <option value="OPD-เด็ก">OPD-เด็ก</option>
                        <option value="OPD-ตา">OPD-ตา</option>
                        <option value="OPD-GI">OPD-GI</option>
                        <option value="OR">OR</option>
                        <option value="OR,Scope">OR,Scope</option>
                        <option value="Vascular">Vascular</option>
                        <option value="Ward 5A">Ward 5A</option>
                        <option value="Ward 5B">Ward 5B</option>
                        <option value="Ward 6A">Ward 6A</option>
                        <option value="Ward 6B">Ward 6B</option>
                        <option value="Ward 7A">Ward 7A</option>
                        <option value="Ward 7B">Ward 7B</option>
                        <option value="Ward 8A">Ward 8A</option>
                        <option value="Ward 8B">Ward 8B</option>
                        <option value="Ward 9A">Ward 9A</option>
                        <option value="Ward 9B">Ward 9B</option>
                        <option value="X-ray">X-ray</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="comment" class="form-label">Comment</label>
                    <input type="text" class="form-control" name="comment" placeholder="" value="<?php echo $row['Comment']; ?>">
                </div>

                <!-- Button -->
                <div class="d-flex justify-content-between">
                    <button type="button" class="btn btn-success col-4" onclick="window.open('cal_'+'<?php echo $cal_selector ?>'+'.php?Code='+'<?php echo $row['Code']; ?>')">
                        <h2>CAL</h2> [ ล่าสุด: <?php echo $row['Caldate']; ?> ]
                    </button>
                    <button type="button" class="btn btn-primary col-4" onclick="window.open('pm_'+'<?php echo $pm_selector ?>'+'.php?Code='+'<?php echo $row['Code']; ?>')">
                        <h2>PM</h2> [ ล่าสุด: <?php echo $row['PMdate']; ?> ]
                    </button>
                    <button type="submit" class="btn btn-outline-warning col-2"><h4>Update</h4></button>
                </div>

            </div>
        </form>
    <?php
    } else {
        echo "ไม่พบข้อมูล";
    }
    mysqli_close($conn)
    ?>
</body>

</html>