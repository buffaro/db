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
  <form action="insert_data.php" method="post">
    <div class="container">
      <!-- Forn -->
      <h2>Devices Data</h2>
      <div class="mb-3">
        <label for="hos_code" class="form-label">Hospital Code</label>
        <input type="text" class="form-control" name="hosp_code" placeholder="CHC-00000" value="CHC-" onkeyup="this.value = this.value.toUpperCase();" required>
      </div>
      <div class="mb-3">
        <label for="ref_code" class="form-label">Reference Code</label>
        <input type="text" class="form-control" name="ref_code" placeholder="XX-00" onkeyup="this.value = this.value.toUpperCase();" required>
      </div>
      <div class="mb-3">
        <label for="ref_code" class="form-label">Device Name</label>
        <select name="name" class="form-select" aria-label="">
          <option selected>Please Select</option>
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
        <input type="text" class="form-control" name="brand" placeholder="">
      </div>
      <div class="mb-3">
        <label for="model" class="form-label">Model</label>
        <input type="text" class="form-control" name="model" placeholder="">
      </div>
      <div class="mb-3">
        <label for="sn" class="form-label">Serial Number</label>
        <input type="text" class="form-control" name="sn" placeholder="">
      </div>
      <div class="mb-3">
        <label for="loc" class="form-label">Location</label>
        <select name="loc" class="form-select" aria-label="">
          <option selected>Please Select</option>
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
        <input type="text" class="form-control" name="comment" placeholder="Ex. Envelope Shift, Sensor" value="">
      </div>
      <!-- Button -->
      <div class="d-flex justify-content-between">
        <button type="submit" class="btn btn-outline-success">Submit</button>
        <button type="button" class="btn btn-outline-warning">Clear</button>
      </div>
    </div>
  </form>
</body>

</html>