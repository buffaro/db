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

        <form action="insert_data_cavi.php" method="post">
            <div class="container">
                <h2>Cal Data : <span style="color:blueviolet">ABI</span></h2>
                <h5>Code : <span><input type="text" name="hosp_code" value="<?php echo $device ?>" readonly></span></h5>
                <!-- Room Condition -->
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Temperature</span>
                    <input type="number" step="0.01" name="Room_T" class="form-control" value="">
                    <span class="input-group-text col-3">Humidity</span>
                    <input type="number" step="0.01" name="Room_H" class="form-control" value="">
                </div>
                <!-- RA -->
                <label for="hos_code" class="form-label">R-A</label>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Set</span>
                    <input type="number" step="0.01" name="ras_sys" class="form-control" value="120" disabled>
                    <input type="number" step="0.01" name="ras_mean" class="form-control" value="93" disabled>
                    <input type="number" step="0.01" name="ras_dias" class="form-control" value="80" disabled>
                    <input type="number" step="0.01" name="ras_pr" class="form-control" value="80" disabled>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 1</span>
                    <input type="number" step="0.01" name="rar1_sys" class="form-control">
                    <input type="number" step="0.01" name="rar1_mean" class="form-control">
                    <input type="number" step="0.01" name="rar1_dias" class="form-control">
                    <input type="number" step="0.01" name="rar1_pr" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 2</span>
                    <input type="number" step="0.01" name="rar2_sys" class="form-control">
                    <input type="number" step="0.01" name="rar2_mean" class="form-control">
                    <input type="number" step="0.01" name="rar2_dias" class="form-control">
                    <input type="number" step="0.01" name="rar2_pr" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 3</span>
                    <input type="number" step="0.01" name="rar3_sys" class="form-control">
                    <input type="number" step="0.01" name="rar3_mean" class="form-control">
                    <input type="number" step="0.01" name="rar3_dias" class="form-control">
                    <input type="number" step="0.01" name="rar3_pr" class="form-control">
                </div>
                <!-- LA -->
                <label for="hos_code" class="form-label">L-A</label>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Set</span>
                    <input type="number" step="0.01" name="las_sys" class="form-control" value="120" disabled>
                    <input type="number" step="0.01" name="las_mean" class="form-control" value="93" disabled>
                    <input type="number" step="0.01" name="las_dias" class="form-control" value="80" disabled>
                    <input type="number" step="0.01" name="las_pr" class="form-control" value="80" disabled>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 1</span>
                    <input type="number" step="0.01" name="lar1_sys" class="form-control">
                    <input type="number" step="0.01" name="lar1_mean" class="form-control">
                    <input type="number" step="0.01" name="lar1_dias" class="form-control">
                    <input type="number" step="0.01" name="lar1_pr" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 2</span>
                    <input type="number" step="0.01" name="lar2_sys" class="form-control">
                    <input type="number" step="0.01" name="lar2_mean" class="form-control">
                    <input type="number" step="0.01" name="lar2_dias" class="form-control">
                    <input type="number" step="0.01" name="lar2_pr" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 3</span>
                    <input type="number" step="0.01" name="lar3_sys" class="form-control">
                    <input type="number" step="0.01" name="lar3_mean" class="form-control">
                    <input type="number" step="0.01" name="lar3_dias" class="form-control">
                    <input type="number" step="0.01" name="lar3_pr" class="form-control">
                </div>
                <!-- RB -->
                <label for="hos_code" class="form-label">R-B</label>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Set</span>
                    <input type="number" step="0.01" name="rbs_sys" class="form-control" value="120" disabled>
                    <input type="number" step="0.01" name="rbs_mean" class="form-control" value="93" disabled>
                    <input type="number" step="0.01" name="rbs_dias" class="form-control" value="80" disabled>
                    <input type="number" step="0.01" name="rbs_pr" class="form-control" value="80" disabled>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 1</span>
                    <input type="number" step="0.01" name="rbr1_sys" class="form-control">
                    <input type="number" step="0.01" name="rbr1_mean" class="form-control">
                    <input type="number" step="0.01" name="rbr1_dias" class="form-control">
                    <input type="number" step="0.01" name="rbr1_pr" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 2</span>
                    <input type="number" step="0.01" name="rbr2_sys" class="form-control">
                    <input type="number" step="0.01" name="rbr2_mean" class="form-control">
                    <input type="number" step="0.01" name="rbr2_dias" class="form-control">
                    <input type="number" step="0.01" name="rbr2_pr" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 3</span>
                    <input type="number" step="0.01" name="rbr3_sys" class="form-control">
                    <input type="number" step="0.01" name="rbr3_mean" class="form-control">
                    <input type="number" step="0.01" name="rbr3_dias" class="form-control">
                    <input type="number" step="0.01" name="rbr3_pr" class="form-control">
                </div>
                <!-- LB -->
                <label for="hos_code" class="form-label">L-B</label>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Set</span>
                    <input type="number" step="0.01" name="lbs_sys" class="form-control" value="120" disabled>
                    <input type="number" step="0.01" name="lbs_mean" class="form-control" value="93" disabled>
                    <input type="number" step="0.01" name="lbs_dias" class="form-control" value="80" disabled>
                    <input type="number" step="0.01" name="lbs_pr" class="form-control" value="80" disabled>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 1</span>
                    <input type="number" step="0.01" name="lbr1_sys" class="form-control">
                    <input type="number" step="0.01" name="lbr1_mean" class="form-control">
                    <input type="number" step="0.01" name="lbr1_dias" class="form-control">
                    <input type="number" step="0.01" name="lbr1_pr" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 2</span>
                    <input type="number" step="0.01" name="lbr2_sys" class="form-control">
                    <input type="number" step="0.01" name="lbr2_mean" class="form-control">
                    <input type="number" step="0.01" name="lbr2_dias" class="form-control">
                    <input type="number" step="0.01" name="lbr2_pr" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 3</span>
                    <input type="number" step="0.01" name="lbr3_sys" class="form-control">
                    <input type="number" step="0.01" name="lbr3_mean" class="form-control">
                    <input type="number" step="0.01" name="lbr3_dias" class="form-control">
                    <input type="number" step="0.01" name="lbr3_pr" class="form-control">
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