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

        <form action="insert_data_infant_incu.php" method="post">
            <div class="container">
                <h2>Cal Data : <span style="color:blueviolet">Infant Incubator / Warmer</span></h2>
                <h5>Code : <span><input type="text" name="hosp_code" value="<?php echo $device ?>" readonly></span></h5>
                <!-- Room Condition -->
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Temperature</span>
                    <input type="number" step="0.01" name="Room_T" class="form-control" value="">
                    <span class="input-group-text col-3">Humidity</span>
                    <input type="number" step="0.01" name="Room_H" class="form-control" value="">
                </div>
                <!-- Air Temp -->
                <label for="hos_code" class="form-label">Air Temp</label>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3"><input type="number" step="0.01" name="AirT_Set" placeholder="Set" class="form-control" value="36"></span>
                    <input type="text" name="T1_UUTs" class="form-control" value="UUT" disabled>
                    <input type="text" name="T1_MASs" class="form-control" value="Master" disabled>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 1</span>
                    <input type="number" step="0.01" name="T1_UUTr1" class="form-control">
                    <input type="number" step="0.01" name="T1_Masr1" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 2</span>
                    <input type="number" step="0.01" name="T1_UUTr2" class="form-control">
                    <input type="number" step="0.01" name="T1_Masr2" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 3</span>
                    <input type="number" step="0.01" name="T1_UUTr3" class="form-control">
                    <input type="number" step="0.01" name="T1_Masr3" class="form-control">
                </div>
                <!-- Skin Temp -->
                <label for="hos_code" class="form-label">Skin Temp</label>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3"><input type="number" step="0.01" name="SkinT_Set" placeholder="Set" class="form-control" value="36"></span>
                    <input type="text" name="T2_UUTs" class="form-control" value="UUT" disabled>
                    <input type="text" name="T2_MASs" class="form-control" value="Master" disabled>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 1</span>
                    <input type="number" step="0.01" name="T2_UUTr1" class="form-control">
                    <input type="number" step="0.01" name="T2_Masr1" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 2</span>
                    <input type="number" step="0.01" name="T2_UUTr2" class="form-control">
                    <input type="number" step="0.01" name="T2_Masr2" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 3</span>
                    <input type="number" step="0.01" name="T2_UUTr3" class="form-control">
                    <input type="number" step="0.01" name="T2_Masr3" class="form-control">
                </div>
                <!-- Other Test -->
                <label for="hos_code" class="form-label">Other Test</label>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Set</span>
                    <input type="text" name="Sound Level" class="form-control" value="Sound Level (dBA)" disabled>
                    <input type="text" name="Flow Rate" class="form-control" value="Flow Rate (m/s)" disabled>
                    <input type="text" name="Humidity" class="form-control" value="Humidity (%RH)" disabled>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read</span>
                    <input type="number" step="0.01" name="Sound" class="form-control">
                    <input type="number" step="0.01" name="Flow" class="form-control">
                    <input type="number" step="0.01" name="HUM" class="form-control">
                </div>
                <!-- Flow meter -->
                <label for="hos_code" class="form-label">Flow Meter</label>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Set</span>
                    <input type="number" step="0.01" name="flows_3" class="form-control" value="3" disabled>
                    <input type="number" step="0.01" name="flows_5" class="form-control" value="5" disabled>
                    <input type="number" step="0.01" name="flows_10" class="form-control" value="10" disabled>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 1</span>
                    <input type="number" step="0.01" name="flowr1_3" class="form-control">
                    <input type="number" step="0.01" name="flowr1_5" class="form-control">
                    <input type="number" step="0.01" name="flowr1_10" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 2</span>
                    <input type="number" step="0.01" name="flowr2_3" class="form-control">
                    <input type="number" step="0.01" name="flowr2_5" class="form-control">
                    <input type="number" step="0.01" name="flowr2_10" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 3</span>
                    <input type="number" step="0.01" name="flowr3_3" class="form-control">
                    <input type="number" step="0.01" name="flowr3_5" class="form-control">
                    <input type="number" step="0.01" name="flowr3_10" class="form-control">
                </div>

                <!-- Suction -->
                <label for="hos_code" class="form-label">Suction</label>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Set</span>
                    <input type="number" step="0.01" name="sucs_100" class="form-control" value="100" disabled>
                    <input type="number" step="0.01" name="sucs_200" class="form-control" value="200" disabled>
                    <input type="number" step="0.01" name="sucs_300" class="form-control" value="300" disabled>
                    <input type="number" step="0.01" name="sucs_400" class="form-control" value="400" disabled>
                    <input type="number" step="0.01" name="sucs_500" class="form-control" value="500" disabled>
                    <input type="text" step="0.01" name="sucs_max" class="form-control" value="Max" disabled>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 1</span>
                    <input type="number" step="0.01" name="sucr1_100" class="form-control">
                    <input type="number" step="0.01" name="sucr1_200" class="form-control">
                    <input type="number" step="0.01" name="sucr1_300" class="form-control">
                    <input type="number" step="0.01" name="sucr1_400" class="form-control">
                    <input type="number" step="0.01" name="sucr1_500" class="form-control">
                    <input type="number" step="0.01" name="sucr1_max" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 2</span>
                    <input type="number" step="0.01" name="sucr2_100" class="form-control">
                    <input type="number" step="0.01" name="sucr2_200" class="form-control">
                    <input type="number" step="0.01" name="sucr2_300" class="form-control">
                    <input type="number" step="0.01" name="sucr2_400" class="form-control">
                    <input type="number" step="0.01" name="sucr2_500" class="form-control">
                    <input type="number" step="0.01" name="sucr2_max" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 3</span>
                    <input type="number" step="0.01" name="sucr3_100" class="form-control">
                    <input type="number" step="0.01" name="sucr3_200" class="form-control">
                    <input type="number" step="0.01" name="sucr3_300" class="form-control">
                    <input type="number" step="0.01" name="sucr3_400" class="form-control">
                    <input type="number" step="0.01" name="sucr3_500" class="form-control">
                    <input type="number" step="0.01" name="sucr3_max" class="form-control">
                </div>

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