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

        <form action="insert_data_es.php" method="post">
            <div class="container">
                <h2>Cal Data : <span style="color:blueviolet">Stimulator</span></h2>
                <h5>Code : <span><input type="text" name="hosp_code" value="<?php echo $device ?>" readonly></span></h5>
                <!-- Room Condition -->
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Temperature</span>
                    <input type="number" step="0.01" name="Room_T" class="form-control" value="">
                    <span class="input-group-text col-3">Humidity</span>
                    <input type="number" step="0.01" name="Room_H" class="form-control" value="">
                </div>
                <!-- A -->
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Title</span>
                    <input type="text" name="A_Title" class="form-control" value="Power Output">
                    <span class="input-group-text col-3">Unit</span>
                    <input type="text" name="A_Unit" class="form-control" value="mA">
                </div>
                <div div class="input-group mb-3">
                    <span class="input-group-text col-3">Set</span>
                    <input type="number" step="0.01" name="A_S_1" class="form-control" value="10">
                    <input type="number" step="0.01" name="A_S_2" class="form-control" value="20">
                    <input type="number" step="0.01" name="A_S_3" class="form-control" value="30">
                    <input type="number" step="0.01" name="A_S_4" class="form-control" value="40">
                    <input type="number" step="0.01" name="A_S_5" class="form-control" value="">
                    <input type="number" step="0.01" name="A_S_6" class="form-control" value="">

                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 1</span>
                    <input type="number" step="0.01" name="A_R1_1" class="form-control">
                    <input type="number" step="0.01" name="A_R1_2" class="form-control">
                    <input type="number" step="0.01" name="A_R1_3" class="form-control">
                    <input type="number" step="0.01" name="A_R1_4" class="form-control">
                    <input type="number" step="0.01" name="A_R1_5" class="form-control">
                    <input type="number" step="0.01" name="A_R1_6" class="form-control">

                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 2</span>
                    <input type="number" step="0.01" name="A_R2_1" class="form-control">
                    <input type="number" step="0.01" name="A_R2_2" class="form-control">
                    <input type="number" step="0.01" name="A_R2_3" class="form-control">
                    <input type="number" step="0.01" name="A_R2_4" class="form-control">
                    <input type="number" step="0.01" name="A_R2_5" class="form-control">
                    <input type="number" step="0.01" name="A_R2_6" class="form-control">

                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 3</span>
                    <input type="number" step="0.01" name="A_R3_1" class="form-control">
                    <input type="number" step="0.01" name="A_R3_2" class="form-control">
                    <input type="number" step="0.01" name="A_R3_3" class="form-control">
                    <input type="number" step="0.01" name="A_R3_4" class="form-control">
                    <input type="number" step="0.01" name="A_R3_5" class="form-control">
                    <input type="number" step="0.01" name="A_R3_6" class="form-control">
                </div>

                <!-- B -->
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Title</span>
                    <input type="text" name="B_Title" class="form-control" value="Frequency">
                    <span class="input-group-text col-3">Unit</span>
                    <input type="text" name="B_Unit" class="form-control" value="Hz">
                </div>
                <div div class="input-group mb-3">
                    <span class="input-group-text col-3">Set</span>
                    <input type="number" step="0.01" name="B_S_1" class="form-control" value="60">
                    <input type="number" step="0.01" name="B_S_2" class="form-control" value="120">
                    <input type="number" step="0.01" name="B_S_3" class="form-control" value="160">
                    <input type="number" step="0.01" name="B_S_4" class="form-control" value="200">
                    <input type="number" step="0.01" name="B_S_5" class="form-control" value="">
                    <input type="number" step="0.01" name="B_S_6" class="form-control" value="">

                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 1</span>
                    <input type="number" step="0.01" name="B_R1_1" class="form-control">
                    <input type="number" step="0.01" name="B_R1_2" class="form-control">
                    <input type="number" step="0.01" name="B_R1_3" class="form-control">
                    <input type="number" step="0.01" name="B_R1_4" class="form-control">
                    <input type="number" step="0.01" name="B_R1_5" class="form-control">
                    <input type="number" step="0.01" name="B_R1_6" class="form-control">

                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 2</span>
                    <input type="number" step="0.01" name="B_R2_1" class="form-control">
                    <input type="number" step="0.01" name="B_R2_2" class="form-control">
                    <input type="number" step="0.01" name="B_R2_3" class="form-control">
                    <input type="number" step="0.01" name="B_R2_4" class="form-control">
                    <input type="number" step="0.01" name="B_R2_5" class="form-control">
                    <input type="number" step="0.01" name="B_R2_6" class="form-control">

                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 3</span>
                    <input type="number" step="0.01" name="B_R3_1" class="form-control">
                    <input type="number" step="0.01" name="B_R3_2" class="form-control">
                    <input type="number" step="0.01" name="B_R3_3" class="form-control">
                    <input type="number" step="0.01" name="B_R3_4" class="form-control">
                    <input type="number" step="0.01" name="B_R3_5" class="form-control">
                    <input type="number" step="0.01" name="B_R3_6" class="form-control">
                </div>

                <!-- C -->
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Title</span>
                    <input type="text" name="C_Title" class="form-control" value="Pulse Width">
                    <span class="input-group-text col-3">Unit</span>
                    <input type="text" name="C_Unit" class="form-control" value="µs">
                </div>
                <div div class="input-group mb-3">
                    <span class="input-group-text col-3">Set</span>
                    <input type="number" step="0.01" name="C_S_1" class="form-control" value="50">
                    <input type="number" step="0.01" name="C_S_2" class="form-control" value="100">
                    <input type="number" step="0.01" name="C_S_3" class="form-control" value="150">
                    <input type="number" step="0.01" name="C_S_4" class="form-control" value="200">
                    <input type="number" step="0.01" name="C_S_5" class="form-control" value="">
                    <input type="number" step="0.01" name="C_S_6" class="form-control" value="">

                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 1</span>
                    <input type="number" step="0.01" name="C_R1_1" class="form-control">
                    <input type="number" step="0.01" name="C_R1_2" class="form-control">
                    <input type="number" step="0.01" name="C_R1_3" class="form-control">
                    <input type="number" step="0.01" name="C_R1_4" class="form-control">
                    <input type="number" step="0.01" name="C_R1_5" class="form-control">
                    <input type="number" step="0.01" name="C_R1_6" class="form-control">

                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 2</span>
                    <input type="number" step="0.01" name="C_R2_1" class="form-control">
                    <input type="number" step="0.01" name="C_R2_2" class="form-control">
                    <input type="number" step="0.01" name="C_R2_3" class="form-control">
                    <input type="number" step="0.01" name="C_R2_4" class="form-control">
                    <input type="number" step="0.01" name="C_R2_5" class="form-control">
                    <input type="number" step="0.01" name="C_R2_6" class="form-control">

                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 3</span>
                    <input type="number" step="0.01" name="C_R3_1" class="form-control">
                    <input type="number" step="0.01" name="C_R3_2" class="form-control">
                    <input type="number" step="0.01" name="C_R3_3" class="form-control">
                    <input type="number" step="0.01" name="C_R3_4" class="form-control">
                    <input type="number" step="0.01" name="C_R3_5" class="form-control">
                    <input type="number" step="0.01" name="C_R3_6" class="form-control">
                </div>

                <!-- D -->
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Title</span>
                    <input type="text" name="D_Title" class="form-control" value="">
                    <span class="input-group-text col-3">Unit</span>
                    <input type="text" name="D_Unit" class="form-control" value="">
                </div>
                <div div class="input-group mb-3">
                    <span class="input-group-text col-3">Set</span>
                    <input type="number" step="0.01" name="D_S_1" class="form-control" value="">
                    <input type="number" step="0.01" name="D_S_2" class="form-control" value="">
                    <input type="number" step="0.01" name="D_S_3" class="form-control" value="">
                    <input type="number" step="0.01" name="D_S_4" class="form-control" value="">
                    <input type="number" step="0.01" name="D_S_5" class="form-control" value="">
                    <input type="number" step="0.01" name="D_S_6" class="form-control" value="">

                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 1</span>
                    <input type="number" step="0.01" name="D_R1_1" class="form-control">
                    <input type="number" step="0.01" name="D_R1_2" class="form-control">
                    <input type="number" step="0.01" name="D_R1_3" class="form-control">
                    <input type="number" step="0.01" name="D_R1_4" class="form-control">
                    <input type="number" step="0.01" name="D_R1_5" class="form-control">
                    <input type="number" step="0.01" name="D_R1_6" class="form-control">

                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 2</span>
                    <input type="number" step="0.01" name="D_R2_1" class="form-control">
                    <input type="number" step="0.01" name="D_R2_2" class="form-control">
                    <input type="number" step="0.01" name="D_R2_3" class="form-control">
                    <input type="number" step="0.01" name="D_R2_4" class="form-control">
                    <input type="number" step="0.01" name="D_R2_5" class="form-control">
                    <input type="number" step="0.01" name="D_R2_6" class="form-control">

                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 3</span>
                    <input type="number" step="0.01" name="D_R3_1" class="form-control">
                    <input type="number" step="0.01" name="D_R3_2" class="form-control">
                    <input type="number" step="0.01" name="D_R3_3" class="form-control">
                    <input type="number" step="0.01" name="D_R3_4" class="form-control">
                    <input type="number" step="0.01" name="D_R3_5" class="form-control">
                    <input type="number" step="0.01" name="D_R3_6" class="form-control">
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