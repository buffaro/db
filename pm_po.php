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

        <form action="insert_pm.php" method="post">
            <div class="container">
                <h2>Cal Data : <span style="color:blueviolet">PM</span></h2>
                <h5>Code : <span><input type="text" name="hosp_code" value="<?php echo $device ?>" readonly></span></h5>
                <label for="hos_code" class="form-label">Electric Safety Test</label>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Ground (Ω)</span>
                    <input type="number" step="0.001" name="GROUND" class="form-control" value="">
                    <span class="input-group-text col-3">LKG (µA)</span>
                    <input type="number" step="0.01" name="LKG" class="form-control" value="">
                </div>
                <!-- Check -->
                <label for="hos_code" class="form-label">Visual Check</label>
                <?php
                $PM_LIST1 = array(
                    "หน้าปัด"
                    , "สวิตช์ เปิด-ปิด Power"
                    , "สวิตช์ เลือก Mode การใช้งาน"
                    , "ปลั๊กไฟ AC"
                    , "สายเสียบปลั๊กไฟ AC"
                    , "จุดต่อสายดิน"
                    , "Sensor Clamp / Fingertip"
                    , "Sensor Connector"
                    , "Red Light"
                    , "Display"
                   
                );
                $x = 1;
                foreach ($PM_LIST1 as $value) {
                    echo "<div div class='input-group mb-1'>
                        <span class='input-group-text col-1'>$x</span>
                        <span class='input-group-text col-8'>$value</span>
                        <input type='radio' value='no' class='btn-check' name='pm_check__v$x' id='nohave__v$x' autocomplete='off' checked>
                        <label class='btn btn-outline-secondary col-1' for='nohave__v$x'><i class='fa fa-spinner' aria-hidden='true'></i></label>
                        <input type='radio' value='false' class='btn-check' name='pm_check__v$x' id='false__v$x' autocomplete='off'>
                        <label class='btn btn-outline-danger col-1' for='false__v$x'><i class='fa fa-thumbs-down' aria-hidden='true'></i></label>
                        <input type='radio' value='pass' class='btn-check' name='pm_check__v$x' id='pass__v$x' autocomplete='off'>
                        <label class='btn btn-outline-success col-1' for='pass__v$x'><i class='fa fa-thumbs-up' aria-hidden='true'></i></label>
                        </div>";
                    $x += 1;
                }
                ?>
                <label for="hos_code" class="form-label">Performance Check</label>
                <?php
                $PM_LIST2 = array(
                    "Waveform"
                    , "Heart Rate"
                    , "SpO2 Rate"
                    , "Alarm"
                   
                );
                $y = 1;
                foreach ($PM_LIST2 as $value2) {
                    echo "<div div class='input-group mb-1'>
                        <span class='input-group-text col-1'>$y</span>
                        <span class='input-group-text col-8'>$value2</span>
                        <input type='radio' value='no' class='btn-check' name='pm_check__$y' id='nohave__$y' autocomplete='off' checked>
                        <label class='btn btn-outline-secondary col-1' for='nohave__$y'><i class='fa fa-spinner' aria-hidden='true'></i></label>
                        <input type='radio' value='false' class='btn-check' name='pm_check__$y' id='false__$y' autocomplete='off'>
                        <label class='btn btn-outline-danger col-1' for='false__$y'><i class='fa fa-thumbs-down' aria-hidden='true'></i></label>
                        <input type='radio' value='pass' class='btn-check' name='pm_check__$y' id='pass__$y' autocomplete='off'>
                        <label class='btn btn-outline-success col-1' for='pass__$y'><i class='fa fa-thumbs-up' aria-hidden='true'></i></label>
                        </div>";
                    $y += 1;
                }
                ?>
                <label for="Comments" class="form-label">Comments</label>
                <input type="text" class="form-control" name="Comments">

                <!-- Button -->
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-success w-100">Submit</button>
                    <button type="button" class="btn btn-outline-danger" onclick="window.close()">Cancel</button>
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