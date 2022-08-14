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

        <form action="insert_data_temp.php" method="post">
            <div class="container">
                <h2>Cal Data : <span style="color:blueviolet">Temperature Devices</span></h2>
                <h5>Code : <span><input type="text" name="hosp_code" value="<?php echo $device ?>" readonly></span></h5>
                <!-- Temp 1 -->
                <label for="hos_code" class="form-label">Temp 1</label>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3"><input type="number" step="0.01" name="T1_Set" placeholder="Set" class="form-control"></span>
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
                <!-- Temp 2 -->
                <label for="hos_code" class="form-label">Temp 2</label>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3"><input type="number" step="0.01" name="T2_Set" placeholder="Set" class="form-control"></span>
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

                <!-- Temp 3 -->
                <label for="hos_code" class="form-label">Temp 3</label>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3"><input type="number" step="0.01" name="T3_Set" placeholder="Set" class="form-control"></span>
                    <input type="text" name="T3_UUTs" class="form-control" value="UUT" disabled>
                    <input type="text" name="T3_MASs" class="form-control" value="Master" disabled>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 1</span>
                    <input type="number" step="0.01" name="T3_UUTr1" class="form-control">
                    <input type="number" step="0.01" name="T3_Masr1" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 2</span>
                    <input type="number" step="0.01" name="T3_UUTr2" class="form-control">
                    <input type="number" step="0.01" name="T3_Masr2" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 3</span>
                    <input type="number" step="0.01" name="T3_UUTr3" class="form-control">
                    <input type="number" step="0.01" name="T3_Masr3" class="form-control">
                </div>
                <!-- Temp 4 -->
                <label for="hos_code" class="form-label">Temp 4</label>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3"><input type="number" step="0.01" name="T4_Set" placeholder="Set" class="form-control"></span>
                    <input type="text" name="T4_UUTs" class="form-control" value="UUT" disabled>
                    <input type="text" name="T4_MASs" class="form-control" value="Master" disabled>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 1</span>
                    <input type="number" step="0.01" name="T4_UUTr1" class="form-control">
                    <input type="number" step="0.01" name="T4_Masr1" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 2</span>
                    <input type="number" step="0.01" name="T4_UUTr2" class="form-control">
                    <input type="number" step="0.01" name="T4_Masr2" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 3</span>
                    <input type="number" step="0.01" name="T4_UUTr3" class="form-control">
                    <input type="number" step="0.01" name="T4_Masr3" class="form-control">
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