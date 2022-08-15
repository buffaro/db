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

        <form action="insert_data_traction.php" method="post">
            <div class="container">
                <h2>Cal Data : <span style="color:blueviolet">Traction</span></h2>
                <h5>Code : <span><input type="text" name="hosp_code" value="<?php echo $device ?>" readonly></span></h5>
                <!-- Room Condition -->
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Temperature</span>
                    <input type="number" step="0.01" name="Room_T" class="form-control" value="">
                    <span class="input-group-text col-3">Humidity</span>
                    <input type="number" step="0.01" name="Room_H" class="form-control" value="">
                </div>
                <!-- Force -->
                <label for="hos_code" class="form-label">Force</label>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Set</span>
                    <input type="number" step="0.01" name="force_s_1" class="form-control" value="10" disabled>
                    <input type="number" step="0.01" name="force_s_2" class="form-control" value="20" disabled>
                    <input type="number" step="0.01" name="force_s_3" class="form-control" value="30" disabled>
                    <input type="number" step="0.01" name="force_s_4" class="form-control" value="40" disabled>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 1</span>
                    <input type="number" step="0.01" name="force_r1_1" class="form-control">
                    <input type="number" step="0.01" name="force_r1_2" class="form-control">
                    <input type="number" step="0.01" name="force_r1_3" class="form-control">
                    <input type="number" step="0.01" name="force_r1_4" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 2</span>
                    <input type="number" step="0.01" name="force_r2_1" class="form-control">
                    <input type="number" step="0.01" name="force_r2_2" class="form-control">
                    <input type="number" step="0.01" name="force_r2_3" class="form-control">
                    <input type="number" step="0.01" name="force_r2_4" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 3</span>
                    <input type="number" step="0.01" name="force_r3_1" class="form-control">
                    <input type="number" step="0.01" name="force_r3_2" class="form-control">
                    <input type="number" step="0.01" name="force_r3_3" class="form-control">
                    <input type="number" step="0.01" name="force_r3_4" class="form-control">
                </div>
                <!-- Rest -->
                <label for="hos_code" class="form-label">Rest</label>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Set</span>
                    <input type="number" step="0.01" name="rest_s_1" class="form-control" value="5" disabled>
                    <input type="number" step="0.01" name="rest_s_2" class="form-control" value="10" disabled>
                    <input type="number" step="0.01" name="rest_s_3" class="form-control" value="15" disabled>
                    <input type="number" step="0.01" name="rest_s_4" class="form-control" value="20" disabled>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 1</span>
                    <input type="number" step="0.01" name="rest_r1_1" class="form-control">
                    <input type="number" step="0.01" name="rest_r1_2" class="form-control">
                    <input type="number" step="0.01" name="rest_r1_3" class="form-control">
                    <input type="number" step="0.01" name="rest_r1_4" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 2</span>
                    <input type="number" step="0.01" name="rest_r2_1" class="form-control">
                    <input type="number" step="0.01" name="rest_r2_2" class="form-control">
                    <input type="number" step="0.01" name="rest_r2_3" class="form-control">
                    <input type="number" step="0.01" name="rest_r2_4" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 3</span>
                    <input type="number" step="0.01" name="rest_r3_1" class="form-control">
                    <input type="number" step="0.01" name="rest_r3_2" class="form-control">
                    <input type="number" step="0.01" name="rest_r3_3" class="form-control">
                    <input type="number" step="0.01" name="rest_r3_4" class="form-control">
                </div>
                <!-- Force Time -->
                <label for="hos_code" class="form-label">Force Time</label>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Set</span>
                    <input type="number" step="0.01" name="tforce_s_1" class="form-control" value="5" disabled>
                    <input type="number" step="0.01" name="tforce_s_2" class="form-control" value="10" disabled>
                    <input type="number" step="0.01" name="tforce_s_3" class="form-control" value="15" disabled>
                    <input type="number" step="0.01" name="tforce_s_4" class="form-control" value="20" disabled>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 1</span>
                    <input type="number" step="0.01" name="tforce_r1_1" class="form-control">
                    <input type="number" step="0.01" name="tforce_r1_2" class="form-control">
                    <input type="number" step="0.01" name="tforce_r1_3" class="form-control">
                    <input type="number" step="0.01" name="tforce_r1_4" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 2</span>
                    <input type="number" step="0.01" name="tforce_r2_1" class="form-control">
                    <input type="number" step="0.01" name="tforce_r2_2" class="form-control">
                    <input type="number" step="0.01" name="tforce_r2_3" class="form-control">
                    <input type="number" step="0.01" name="tforce_r2_4" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 3</span>
                    <input type="number" step="0.01" name="tforce_r3_1" class="form-control">
                    <input type="number" step="0.01" name="tforce_r3_2" class="form-control">
                    <input type="number" step="0.01" name="tforce_r3_3" class="form-control">
                    <input type="number" step="0.01" name="tforce_r3_4" class="form-control">
                </div>
                <!-- Rest Time -->
                <label for="hos_code" class="form-label">Rest</label>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Set</span>
                    <input type="number" step="0.01" name="trest_s_1" class="form-control" value="5" disabled>
                    <input type="number" step="0.01" name="trest_s_2" class="form-control" value="10" disabled>
                    <input type="number" step="0.01" name="trest_s_3" class="form-control" value="15" disabled>
                    <input type="number" step="0.01" name="trest_s_4" class="form-control" value="20" disabled>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 1</span>
                    <input type="number" step="0.01" name="trest_r1_1" class="form-control">
                    <input type="number" step="0.01" name="trest_r1_2" class="form-control">
                    <input type="number" step="0.01" name="trest_r1_3" class="form-control">
                    <input type="number" step="0.01" name="trest_r1_4" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 2</span>
                    <input type="number" step="0.01" name="trest_r2_1" class="form-control">
                    <input type="number" step="0.01" name="trest_r2_2" class="form-control">
                    <input type="number" step="0.01" name="trest_r2_3" class="form-control">
                    <input type="number" step="0.01" name="trest_r2_4" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 3</span>
                    <input type="number" step="0.01" name="trest_r3_1" class="form-control">
                    <input type="number" step="0.01" name="trest_r3_2" class="form-control">
                    <input type="number" step="0.01" name="trest_r3_3" class="form-control">
                    <input type="number" step="0.01" name="trest_r3_4" class="form-control">
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