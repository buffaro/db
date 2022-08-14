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

        <form action="insert_data_pace.php" method="post">
            <div class="container">
                <h2>Cal Data : <span style="color:blueviolet">Fetal Monitor / Doppler</span></h2>
                <h5>Code : <span><input type="text" name="hosp_code" value="<?php echo $device ?>" readonly></span></h5>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Load (Ohms)</span>
                    <input type="number" name="PC_Load" class="form-control" value="400">
                </div>
                <!-- Pulse Rate CH 1 -->
                <label for="hos_code" class="form-label">Pulse Rate Atrium</label>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Set</span>
                    <input type="number" step="0.01" name="S1_PR_S_1" class="form-control" value="60" disabled>
                    <input type="number" step="0.01" name="S1_PR_S_2" class="form-control" value="70" disabled>
                    <input type="number" step="0.01" name="S1_PR_S_3" class="form-control" value="80" disabled>
                    <input type="number" step="0.01" name="S1_PR_S_4" class="form-control" value="90" disabled>
                    <input type="number" step="0.01" name="S1_PR_S_5" class="form-control" value="100" disabled>
                    <input type="number" step="0.01" name="S1_PR_S_6" class="form-control" value="120" disabled>
                    <input type="number" step="0.01" name="S1_PR_S_7" class="form-control" value="140" disabled>
                    <input type="number" step="0.01" name="S1_PR_S_8" class="form-control" value="160" disabled>
                    <input type="number" step="0.01" name="S1_PR_S_9" class="form-control" value="180" disabled>
                    <input type="number" step="0.01" name="S1_PR_S_10" class="form-control" value="182" disabled>
                    <input type="number" step="0.01" name="S1_PR_S_11" class="form-control" value="200" disabled>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 1</span>
                    <input type="number" step="0.01" name="S1_PR_R1_1" class="form-control">
                    <input type="number" step="0.01" name="S1_PR_R1_2" class="form-control">
                    <input type="number" step="0.01" name="S1_PR_R1_3" class="form-control">
                    <input type="number" step="0.01" name="S1_PR_R1_4" class="form-control">
                    <input type="number" step="0.01" name="S1_PR_R1_5" class="form-control">
                    <input type="number" step="0.01" name="S1_PR_R1_6" class="form-control">
                    <input type="number" step="0.01" name="S1_PR_R1_7" class="form-control">
                    <input type="number" step="0.01" name="S1_PR_R1_8" class="form-control">
                    <input type="number" step="0.01" name="S1_PR_R1_9" class="form-control">
                    <input type="number" step="0.01" name="S1_PR_R1_10" class="form-control">
                    <input type="number" step="0.01" name="S1_PR_R1_11" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 2</span>
                    <input type="number" step="0.01" name="S1_PR_R2_1" class="form-control">
                    <input type="number" step="0.01" name="S1_PR_R2_2" class="form-control">
                    <input type="number" step="0.01" name="S1_PR_R2_3" class="form-control">
                    <input type="number" step="0.01" name="S1_PR_R2_4" class="form-control">
                    <input type="number" step="0.01" name="S1_PR_R2_5" class="form-control">
                    <input type="number" step="0.01" name="S1_PR_R2_6" class="form-control">
                    <input type="number" step="0.01" name="S1_PR_R2_7" class="form-control">
                    <input type="number" step="0.01" name="S1_PR_R2_8" class="form-control">
                    <input type="number" step="0.01" name="S1_PR_R2_9" class="form-control">
                    <input type="number" step="0.01" name="S1_PR_R2_10" class="form-control">
                    <input type="number" step="0.01" name="S1_PR_R2_11" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 3</span>
                    <input type="number" step="0.01" name="S1_PR_R3_1" class="form-control">
                    <input type="number" step="0.01" name="S1_PR_R3_2" class="form-control">
                    <input type="number" step="0.01" name="S1_PR_R3_3" class="form-control">
                    <input type="number" step="0.01" name="S1_PR_R3_4" class="form-control">
                    <input type="number" step="0.01" name="S1_PR_R3_5" class="form-control">
                    <input type="number" step="0.01" name="S1_PR_R3_6" class="form-control">
                    <input type="number" step="0.01" name="S1_PR_R3_7" class="form-control">
                    <input type="number" step="0.01" name="S1_PR_R3_8" class="form-control">
                    <input type="number" step="0.01" name="S1_PR_R3_9" class="form-control">
                    <input type="number" step="0.01" name="S1_PR_R3_10" class="form-control">
                    <input type="number" step="0.01" name="S1_PR_R3_11" class="form-control">
                </div>
                <!-- Current CH 1 -->
                <label for="hos_code" class="form-label">Current Atrium</label>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Set</span>
                    <input type="number" step="0.01" name="S1_CUR_S_1" class="form-control" value="5" disabled>
                    <input type="number" step="0.01" name="S1_CUR_S_2" class="form-control" value="10" disabled>
                    <input type="number" step="0.01" name="S1_CUR_S_3" class="form-control" value="15" disabled>
                    <input type="number" step="0.01" name="S1_CUR_S_4" class="form-control" value="20" disabled>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 1</span>
                    <input type="number" step="0.01" name="S1_CUR_R1_1" class="form-control">
                    <input type="number" step="0.01" name="S1_CUR_R1_2" class="form-control">
                    <input type="number" step="0.01" name="S1_CUR_R1_3" class="form-control">
                    <input type="number" step="0.01" name="S1_CUR_R1_4" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 2</span>
                    <input type="number" step="0.01" name="S1_CUR_R2_1" class="form-control">
                    <input type="number" step="0.01" name="S1_CUR_R2_2" class="form-control">
                    <input type="number" step="0.01" name="S1_CUR_R2_3" class="form-control">
                    <input type="number" step="0.01" name="S1_CUR_R2_4" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 3</span>
                    <input type="number" step="0.01" name="S1_CUR_R3_1" class="form-control">
                    <input type="number" step="0.01" name="S1_CUR_R3_2" class="form-control">
                    <input type="number" step="0.01" name="S1_CUR_R3_3" class="form-control">
                    <input type="number" step="0.01" name="S1_CUR_R3_4" class="form-control">
                </div>
                <!-- Pulse Rate CH 2 -->
<label for="hos_code" class="form-label">Pulse Rate Ventricle</label>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Set</span>
                    <input type="number" step="0.01" name="S2_PR_S_1" class="form-control" value="60" disabled>
                    <input type="number" step="0.01" name="S2_PR_S_2" class="form-control" value="70" disabled>
                    <input type="number" step="0.01" name="S2_PR_S_3" class="form-control" value="80" disabled>
                    <input type="number" step="0.01" name="S2_PR_S_4" class="form-control" value="90" disabled>
                    <input type="number" step="0.01" name="S2_PR_S_5" class="form-control" value="100" disabled>
                    <input type="number" step="0.01" name="S2_PR_S_6" class="form-control" value="120" disabled>
                    <input type="number" step="0.01" name="S2_PR_S_7" class="form-control" value="140" disabled>
                    <input type="number" step="0.01" name="S2_PR_S_8" class="form-control" value="160" disabled>
                    <input type="number" step="0.01" name="S2_PR_S_9" class="form-control" value="180" disabled>
                    <input type="number" step="0.01" name="S2_PR_S_10" class="form-control" value="182" disabled>
                    <input type="number" step="0.01" name="S2_PR_S_11" class="form-control" value="200" disabled>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 1</span>
                    <input type="number" step="0.01" name="S2_PR_R1_1" class="form-control">
                    <input type="number" step="0.01" name="S2_PR_R1_2" class="form-control">
                    <input type="number" step="0.01" name="S2_PR_R1_3" class="form-control">
                    <input type="number" step="0.01" name="S2_PR_R1_4" class="form-control">
                    <input type="number" step="0.01" name="S2_PR_R1_5" class="form-control">
                    <input type="number" step="0.01" name="S2_PR_R1_6" class="form-control">
                    <input type="number" step="0.01" name="S2_PR_R1_7" class="form-control">
                    <input type="number" step="0.01" name="S2_PR_R1_8" class="form-control">
                    <input type="number" step="0.01" name="S2_PR_R1_9" class="form-control">
                    <input type="number" step="0.01" name="S2_PR_R1_10" class="form-control">
                    <input type="number" step="0.01" name="S2_PR_R1_11" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 2</span>
                    <input type="number" step="0.01" name="S2_PR_R2_1" class="form-control">
                    <input type="number" step="0.01" name="S2_PR_R2_2" class="form-control">
                    <input type="number" step="0.01" name="S2_PR_R2_3" class="form-control">
                    <input type="number" step="0.01" name="S2_PR_R2_4" class="form-control">
                    <input type="number" step="0.01" name="S2_PR_R2_5" class="form-control">
                    <input type="number" step="0.01" name="S2_PR_R2_6" class="form-control">
                    <input type="number" step="0.01" name="S2_PR_R2_7" class="form-control">
                    <input type="number" step="0.01" name="S2_PR_R2_8" class="form-control">
                    <input type="number" step="0.01" name="S2_PR_R2_9" class="form-control">
                    <input type="number" step="0.01" name="S2_PR_R2_10" class="form-control">
                    <input type="number" step="0.01" name="S2_PR_R2_11" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 3</span>
                    <input type="number" step="0.01" name="S2_PR_R3_1" class="form-control">
                    <input type="number" step="0.01" name="S2_PR_R3_2" class="form-control">
                    <input type="number" step="0.01" name="S2_PR_R3_3" class="form-control">
                    <input type="number" step="0.01" name="S2_PR_R3_4" class="form-control">
                    <input type="number" step="0.01" name="S2_PR_R3_5" class="form-control">
                    <input type="number" step="0.01" name="S2_PR_R3_6" class="form-control">
                    <input type="number" step="0.01" name="S2_PR_R3_7" class="form-control">
                    <input type="number" step="0.01" name="S2_PR_R3_8" class="form-control">
                    <input type="number" step="0.01" name="S2_PR_R3_9" class="form-control">
                    <input type="number" step="0.01" name="S2_PR_R3_10" class="form-control">
                    <input type="number" step="0.01" name="S2_PR_R3_11" class="form-control">
                </div>
                <!-- Current CH 2 -->
                <label for="hos_code" class="form-label">Current Ventricle</label>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Set</span>
                    <input type="number" step="0.01" name="S2_CUR_S_1" class="form-control" value="5" disabled>
                    <input type="number" step="0.01" name="S2_CUR_S_2" class="form-control" value="10" disabled>
                    <input type="number" step="0.01" name="S2_CUR_S_3" class="form-control" value="15" disabled>
                    <input type="number" step="0.01" name="S2_CUR_S_4" class="form-control" value="20" disabled>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 1</span>
                    <input type="number" step="0.01" name="S2_CUR_R1_1" class="form-control">
                    <input type="number" step="0.01" name="S2_CUR_R1_2" class="form-control">
                    <input type="number" step="0.01" name="S2_CUR_R1_3" class="form-control">
                    <input type="number" step="0.01" name="S2_CUR_R1_4" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 2</span>
                    <input type="number" step="0.01" name="S2_CUR_R2_1" class="form-control">
                    <input type="number" step="0.01" name="S2_CUR_R2_2" class="form-control">
                    <input type="number" step="0.01" name="S2_CUR_R2_3" class="form-control">
                    <input type="number" step="0.01" name="S2_CUR_R2_4" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 3</span>
                    <input type="number" step="0.01" name="S2_CUR_R3_1" class="form-control">
                    <input type="number" step="0.01" name="S2_CUR_R3_2" class="form-control">
                    <input type="number" step="0.01" name="S2_CUR_R3_3" class="form-control">
                    <input type="number" step="0.01" name="S2_CUR_R3_4" class="form-control">
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