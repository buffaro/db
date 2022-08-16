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
    $device = $_GET['Code'];
    $sql = "SELECT * FROM cpy WHERE Code = '" . $device . "'";
    $result = mysqli_query($conn, $sql);
    if ($row = mysqli_fetch_array($result)) {
    ?>

        <form action="insert_data_fetal_multi.php" method="post">
            <div class="container">
                <h2>Cal Data : <span style="color:blueviolet">Fetal Monitor</span></h2>
                <h5>Code : <span><input type="text" name="hosp_code" value="<?php echo $device ?>" readonly></span></h5>
                <!-- Room Condition -->
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Temperature</span>
                    <input type="number" step="0.01" name="Room_T" class="form-control" value="">
                    <span class="input-group-text col-3">Humidity</span>
                    <input type="number" step="0.01" name="Room_H" class="form-control" value="">
                </div>
                <!-- Fetal Heart Rate CH 1 -->
                <label for="hos_code" class="form-label">Heart Rate CH 1</label>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Set</span>
                    <input type="number" step="0.01" name="ecgs1_60" class="form-control" value="60" disabled>
                    <input type="number" step="0.01" name="ecgs1_90" class="form-control" value="90" disabled>
                    <input type="number" step="0.01" name="ecgs1_120" class="form-control" value="120" disabled>
                    <input type="number" step="0.01" name="ecgs1_150" class="form-control" value="150" disabled>
                    <input type="number" step="0.01" name="ecgs1_180" class="form-control" value="180" disabled>
                    <input type="number" step="0.01" name="ecgs1_210" class="form-control" value="210" disabled>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 1</span>
                    <input type="number" step="0.01" name="ecgr11_60" class="form-control">
                    <input type="number" step="0.01" name="ecgr11_90" class="form-control">
                    <input type="number" step="0.01" name="ecgr11_120" class="form-control">
                    <input type="number" step="0.01" name="ecgr11_150" class="form-control">
                    <input type="number" step="0.01" name="ecgr11_180" class="form-control">
                    <input type="number" step="0.01" name="ecgr11_210" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 2</span>
                    <input type="number" step="0.01" name="ecgr21_60" class="form-control">
                    <input type="number" step="0.01" name="ecgr21_90" class="form-control">
                    <input type="number" step="0.01" name="ecgr21_120" class="form-control">
                    <input type="number" step="0.01" name="ecgr21_150" class="form-control">
                    <input type="number" step="0.01" name="ecgr21_180" class="form-control">
                    <input type="number" step="0.01" name="ecgr21_210" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 3</span>
                    <input type="number" step="0.01" name="ecgr31_60" class="form-control">
                    <input type="number" step="0.01" name="ecgr31_90" class="form-control">
                    <input type="number" step="0.01" name="ecgr31_120" class="form-control">
                    <input type="number" step="0.01" name="ecgr31_150" class="form-control">
                    <input type="number" step="0.01" name="ecgr31_180" class="form-control">
                    <input type="number" step="0.01" name="ecgr31_210" class="form-control">
                </div>
                <!-- Fetal Heart Rate CH 2 -->
                <label for="hos_code" class="form-label">Heart Rate CH 2</label>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Set</span>
                    <input type="number" step="0.01" name="ecgs2_60" class="form-control" value="60" disabled>
                    <input type="number" step="0.01" name="ecgs2_90" class="form-control" value="90" disabled>
                    <input type="number" step="0.01" name="ecgs2_120" class="form-control" value="120" disabled>
                    <input type="number" step="0.01" name="ecgs2_150" class="form-control" value="150" disabled>
                    <input type="number" step="0.01" name="ecgs2_180" class="form-control" value="180" disabled>
                    <input type="number" step="0.01" name="ecgs2_210" class="form-control" value="210" disabled>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 1</span>
                    <input type="number" step="0.01" name="ecgr12_60" class="form-control">
                    <input type="number" step="0.01" name="ecgr12_90" class="form-control">
                    <input type="number" step="0.01" name="ecgr12_120" class="form-control">
                    <input type="number" step="0.01" name="ecgr12_150" class="form-control">
                    <input type="number" step="0.01" name="ecgr12_180" class="form-control">
                    <input type="number" step="0.01" name="ecgr12_210" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 2</span>
                    <input type="number" step="0.01" name="ecgr22_60" class="form-control">
                    <input type="number" step="0.01" name="ecgr22_90" class="form-control">
                    <input type="number" step="0.01" name="ecgr22_120" class="form-control">
                    <input type="number" step="0.01" name="ecgr22_150" class="form-control">
                    <input type="number" step="0.01" name="ecgr22_180" class="form-control">
                    <input type="number" step="0.01" name="ecgr22_210" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 3</span>
                    <input type="number" step="0.01" name="ecgr32_60" class="form-control">
                    <input type="number" step="0.01" name="ecgr32_90" class="form-control">
                    <input type="number" step="0.01" name="ecgr32_120" class="form-control">
                    <input type="number" step="0.01" name="ecgr32_150" class="form-control">
                    <input type="number" step="0.01" name="ecgr32_180" class="form-control">
                    <input type="number" step="0.01" name="ecgr32_210" class="form-control">
                </div>
                <!-- Normal -->
                <label for="Setting" class="form-label">Setting</label>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Envelope Shift</span>
                    <select name="ES" class="form-select" aria-label="">
                        <option value="10">10</option>
                        <option value="9">9</option>
                        <option value="8">8</option>
                        <option value="7">7</option>
                        <option value="6">6</option>
                        <option value="5">5</option>
                        <option value="4">4</option>
                        <option value="3">3</option>
                        <option value="2">2</option>
                        <option value="1">1</option>
                        <option selected>0</option>
                        <option value="-1">-1</option>
                        <option value="-2">-2</option>
                        <option value="-3">-3</option>
                        <option value="-4">-4</option>
                        <option value="-5">-5</option>
                        <option value="-6">-6</option>
                        <option value="-7">-7</option>
                        <option value="-8">-8</option>
                        <option value="-9">-9</option>
                        <option value="-10">-10</option>
                    </select>
                    <span class="input-group-text col-3">SpO2 Sensor</span>
                    <select name="PO_Sensor" class="form-select" aria-label="">
                        <option selected>Nellcor</option>
                        <option value="GE/Ohmeda">GE/Ohmeda</option>
                        <option value="Nonin">Nonin</option>
                        <option value="Masimo">Masimo</option>
                        <option value="Nihon Kohden">Nihon Kohden</option>
                        <option value="Philips">Philips</option>
                        <option value="Mindray">Mindray</option>
                        <option value="Other">Other</option>
                        <option value="None">None</option>
                    </select>
                    <span class="input-group-text col-3">Resp Lead</span>
                    <select name="Resp_Lead" class="form-select" aria-label="">
                        <option selected>LL</option>
                        <option value="LA">LA</option>
                    </select>
                </div>
                <label for="hos_code" class="form-label">Normal</label>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Set</span>
                    <input type="number" step="0.01" name="nms_sys" class="form-control" value="120" disabled>
                    <input type="number" step="0.01" name="nms_mean" class="form-control" value="93" disabled>
                    <input type="number" step="0.01" name="nms_dias" class="form-control" value="80" disabled>
                    <input type="number" step="0.01" name="nms_pr" class="form-control" value="80" disabled>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 1</span>
                    <input type="number" step="0.01" name="nmr1_sys" class="form-control">
                    <input type="number" step="0.01" name="nmr1_mean" class="form-control">
                    <input type="number" step="0.01" name="nmr1_dias" class="form-control">
                    <input type="number" step="0.01" name="nmr1_pr" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 2</span>
                    <input type="number" step="0.01" name="nmr2_sys" class="form-control">
                    <input type="number" step="0.01" name="nmr2_mean" class="form-control">
                    <input type="number" step="0.01" name="nmr2_dias" class="form-control">
                    <input type="number" step="0.01" name="nmr2_pr" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 3</span>
                    <input type="number" step="0.01" name="nmr3_sys" class="form-control">
                    <input type="number" step="0.01" name="nmr3_mean" class="form-control">
                    <input type="number" step="0.01" name="nmr3_dias" class="form-control">
                    <input type="number" step="0.01" name="nmr3_pr" class="form-control">
                </div>
                <!-- High -->
                <label for="hos_code" class="form-label">High</label>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Set</span>
                    <input type="number" step="0.01" name="his_sys" class="form-control" value="150" disabled>
                    <input type="number" step="0.01" name="his_mean" class="form-control" value="117" disabled>
                    <input type="number" step="0.01" name="his_dias" class="form-control" value="100" disabled>
                    <input type="number" step="0.01" name="his_pr" class="form-control" value="80" disabled>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 1</span>
                    <input type="number" step="0.01" name="hir1_sys" class="form-control">
                    <input type="number" step="0.01" name="hir1_mean" class="form-control">
                    <input type="number" step="0.01" name="hir1_dias" class="form-control">
                    <input type="number" step="0.01" name="hir1_pr" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 2</span>
                    <input type="number" step="0.01" name="hir2_sys" class="form-control">
                    <input type="number" step="0.01" name="hir2_mean" class="form-control">
                    <input type="number" step="0.01" name="hir2_dias" class="form-control">
                    <input type="number" step="0.01" name="hir2_pr" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 3</span>
                    <input type="number" step="0.01" name="hir3_sys" class="form-control">
                    <input type="number" step="0.01" name="hir3_mean" class="form-control">
                    <input type="number" step="0.01" name="hir3_dias" class="form-control">
                    <input type="number" step="0.01" name="hir3_pr" class="form-control">
                </div>
                <!-- Low -->
                <label for="hos_code" class="form-label">Low</label>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Set</span>
                    <input type="number" step="0.01" name="los_sys" class="form-control" value="100" disabled>
                    <input type="number" step="0.01" name="los_mean" class="form-control" value="77" disabled>
                    <input type="number" step="0.01" name="los_dias" class="form-control" value="65" disabled>
                    <input type="number" step="0.01" name="los_pr" class="form-control" value="80" disabled>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 1</span>
                    <input type="number" step="0.01" name="lor1_sys" class="form-control">
                    <input type="number" step="0.01" name="lor1_mean" class="form-control">
                    <input type="number" step="0.01" name="lor1_dias" class="form-control">
                    <input type="number" step="0.01" name="lor1_pr" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 2</span>
                    <input type="number" step="0.01" name="lor2_sys" class="form-control">
                    <input type="number" step="0.01" name="lor2_mean" class="form-control">
                    <input type="number" step="0.01" name="lor2_dias" class="form-control">
                    <input type="number" step="0.01" name="lor2_pr" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 3</span>
                    <input type="number" step="0.01" name="lor3_sys" class="form-control">
                    <input type="number" step="0.01" name="lor3_mean" class="form-control">
                    <input type="number" step="0.01" name="lor3_dias" class="form-control">
                    <input type="number" step="0.01" name="lor3_pr" class="form-control">
                </div>
                <!-- ECG -->
                <label for="hos_code" class="form-label">ECG</label>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Set</span>
                    <input type="number" step="0.01" name="ecgs_60" class="form-control" value="60" disabled>
                    <input type="number" step="0.01" name="ecgs_90" class="form-control" value="90" disabled>
                    <input type="number" step="0.01" name="ecgs_120" class="form-control" value="120" disabled>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 1</span>
                    <input type="number" step="0.01" name="ecgr1_60" class="form-control">
                    <input type="number" step="0.01" name="ecgr1_90" class="form-control">
                    <input type="number" step="0.01" name="ecgr1_120" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 2</span>
                    <input type="number" step="0.01" name="ecgr2_60" class="form-control">
                    <input type="number" step="0.01" name="ecgr2_90" class="form-control">
                    <input type="number" step="0.01" name="ecgr2_120" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 3</span>
                    <input type="number" step="0.01" name="ecgr3_60" class="form-control">
                    <input type="number" step="0.01" name="ecgr3_90" class="form-control">
                    <input type="number" step="0.01" name="ecgr3_120" class="form-control">
                </div>
                <!-- SpO2 -->
                <label for="hos_code" class="form-label">SpO2</label>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Set</span>
                    <input type="number" step="0.01" name="pos_90" class="form-control" value="90" disabled>
                    <input type="number" step="0.01" name="pos_94" class="form-control" value="94" disabled>
                    <input type="number" step="0.01" name="pos_98" class="form-control" value="98" disabled>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 1</span>
                    <input type="number" step="0.01" name="por1_90" class="form-control">
                    <input type="number" step="0.01" name="por1_94" class="form-control">
                    <input type="number" step="0.01" name="por1_98" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 2</span>
                    <input type="number" step="0.01" name="por2_90" class="form-control">
                    <input type="number" step="0.01" name="por2_94" class="form-control">
                    <input type="number" step="0.01" name="por2_98" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 3</span>
                    <input type="number" step="0.01" name="por3_90" class="form-control">
                    <input type="number" step="0.01" name="por3_94" class="form-control">
                    <input type="number" step="0.01" name="por3_98" class="form-control">
                </div>
                <!-- Respiration -->
                <label for="hos_code" class="form-label">Respiration</label>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Set</span>
                    <input type="number" step="0.01" name="ress_20" class="form-control" value="20" disabled>
                    <input type="number" step="0.01" name="ress_30" class="form-control" value="30" disabled>
                    <input type="number" step="0.01" name="ress_40" class="form-control" value="40" disabled>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 1</span>
                    <input type="number" step="0.01" name="resr1_20" class="form-control">
                    <input type="number" step="0.01" name="resr1_30" class="form-control">
                    <input type="number" step="0.01" name="resr1_40" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 2</span>
                    <input type="number" step="0.01" name="resr2_20" class="form-control">
                    <input type="number" step="0.01" name="resr2_30" class="form-control">
                    <input type="number" step="0.01" name="resr2_40" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 3</span>
                    <input type="number" step="0.01" name="resr3_20" class="form-control">
                    <input type="number" step="0.01" name="resr3_30" class="form-control">
                    <input type="number" step="0.01" name="resr3_40" class="form-control">
                </div>
                <!-- Button -->
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-success w-100">Submit</button>
                    <button type="button" class="btn btn-outline-danger"onclick="window.close()">Cancel</button>
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