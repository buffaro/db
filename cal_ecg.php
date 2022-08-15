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

        <form action="insert_data_ecg.php" method="post">
            <div class="container">
                <h2>Cal Data : <span style="color:blueviolet">Electrocardiograph</span></h2>
                <h5>Code : <span><input type="text" name="hosp_code" value="<?php echo $device ?>" readonly></span></h5>
                <!-- Room Condition -->
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Temperature</span>
                    <input type="number" step="0.01" name="Room_T" class="form-control" value="">
                    <span class="input-group-text col-3">Humidity</span>
                    <input type="number" step="0.01" name="Room_H" class="form-control" value="">
                </div>
                <!-- ECG -->
                <label for="hos_code" class="form-label">ECG</label>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Set</span>
                    <input type="number" step="0.01" name="ecgs_60" class="form-control" value="60" disabled>
                    <input type="number" step="0.01" name="ecgs_90" class="form-control" value="90" disabled>
                    <input type="number" step="0.01" name="ecgs_120" class="form-control" value="120" disabled>
                    <input type="number" step="0.01" name="ecgs_180" class="form-control" value="180" disabled>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 1</span>
                    <input type="number" step="0.01" name="ecgr1_60" class="form-control">
                    <input type="number" step="0.01" name="ecgr1_90" class="form-control">
                    <input type="number" step="0.01" name="ecgr1_120" class="form-control">
                    <input type="number" step="0.01" name="ecgr1_180" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 2</span>
                    <input type="number" step="0.01" name="ecgr2_60" class="form-control">
                    <input type="number" step="0.01" name="ecgr2_90" class="form-control">
                    <input type="number" step="0.01" name="ecgr2_120" class="form-control">
                    <input type="number" step="0.01" name="ecgr2_180" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 3</span>
                    <input type="number" step="0.01" name="ecgr3_60" class="form-control">
                    <input type="number" step="0.01" name="ecgr3_90" class="form-control">
                    <input type="number" step="0.01" name="ecgr3_120" class="form-control">
                    <input type="number" step="0.01" name="ecgr3_180" class="form-control">
                </div>
                <!-- Speed -->
                <label for="hos_code" class="form-label">Speed</label>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Set</span>
                    <input type="number" step="0.01" name="spds_25" class="form-control" value="25" disabled>
                    <input type="number" step="0.01" name="spds_50" class="form-control" value="50" disabled>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 1</span>
                    <input type="number" step="0.01" name="spdr1_25" class="form-control">
                    <input type="number" step="0.01" name="spdr1_50" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 2</span>
                    <input type="number" step="0.01" name="spdr2_25" class="form-control">
                    <input type="number" step="0.01" name="spdr2_50" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 3</span>
                    <input type="number" step="0.01" name="spdr3_25" class="form-control">
                    <input type="number" step="0.01" name="spdr3_50" class="form-control">
                </div>
                <!-- Sensitivity -->
                <label for="hos_code" class="form-label">Sensitivity</label>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Set</span>
                    <input type="number" step="0.01" name="sens_5" class="form-control" value="5" disabled>
                    <input type="number" step="0.01" name="sens_10" class="form-control" value="10" disabled>
                    <input type="number" step="0.01" name="sens_20" class="form-control" value="20" disabled>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 1</span>
                    <input type="number" step="0.01" name="senr1_5" class="form-control">
                    <input type="number" step="0.01" name="senr1_10" class="form-control">
                    <input type="number" step="0.01" name="senr1_20" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 2</span>
                    <input type="number" step="0.01" name="senr2_5" class="form-control">
                    <input type="number" step="0.01" name="senr2_10" class="form-control">
                    <input type="number" step="0.01" name="senr2_20" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 3</span>
                    <input type="number" step="0.01" name="senr3_5" class="form-control">
                    <input type="number" step="0.01" name="senr3_10" class="form-control">
                    <input type="number" step="0.01" name="senr3_20" class="form-control">
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