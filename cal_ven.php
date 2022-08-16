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

        <form action="insert_data_ven.php" method="post">
            <div class="container">
                <h2>Cal Data : <span style="color:blueviolet">TENS</span></h2>
                <h5>Code : <span><input type="text" name="hosp_code" value="<?php echo $device ?>" readonly></span></h5>
                <!-- Room Condition -->
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Temperature</span>
                    <input type="number" step="0.01" name="Room_T" class="form-control" value="">
                    <span class="input-group-text col-3">Humidity</span>
                    <input type="number" step="0.01" name="Room_H" class="form-control" value="">
                </div>

                <label for="hos_code" class="form-label">Volume Ventilator</label>
                <div class="input-group mb-3">
                <select name="Check" class="form-select" aria-label="" disabled>
                        <option selected>Yes/No</option>
                     </select>
                    <input type="text" name="" class="form-control" value="Rate" disabled>
                    <input type="text" name="" class="form-control" value="Tidal" disabled>
                    <input type="text" name="" class="form-control" value="Minute" disabled>
                    <input type="text" name="" class="form-control" value="Peak" disabled>
                    <input type="text" name="" class="form-control" value="I:E" disabled>
                    <input type="text" name="" class="form-control" value="Oxygen" disabled>
                </div>
                <div class="input-group mb-3">
                    <select name="V1_Check" class="form-select" aria-label="">
                        <option selected>No</option>
                        <option value="Yes">Yes</option>
                     </select>
                    <input type="number" name="V1_Rate_S" class="form-control" value="10">
                    <input type="number" name="V1_Tidal_S" class="form-control" value="800">
                    <input type="number" name="V1_Minute_S" class="form-control" value="8">
                    <input type="number" name="V1_Peak_S" class="form-control" value="24">
                    <input type="text" name="V1_IE_S" class="form-control" value="1:2">
                    <input type="number" name="V1_Oxygen_S" class="form-control" value="60">
                </div>
                <div class="input-group mb-3">
                <select name="V2_Check" class="form-select" aria-label="">
                        <option selected>No</option>
                        <option value="Yes">Yes</option>
                     </select>
                    <input type="number" name="V2_Rate_S" class="form-control" value="20">
                    <input type="number" name="V2_Tidal_S" class="form-control" value="500">
                    <input type="number" name="V2_Minute_S" class="form-control" value="10">
                    <input type="number" name="V2_Peak_S" class="form-control" value="30">
                    <input type="text" name="V2_IE_S" class="form-control" value="1:2">
                    <input type="number" name="V2_Oxygen_S" class="form-control" value="60">
                </div>
                <div class="input-group mb-3">
                <select name="V3_Check" class="form-select" aria-label="">
                        <option selected>No</option>
                        <option value="Yes">Yes</option>
                     </select>
                    <input type="number" name="V3_Rate_S" class="form-control" value="30">
                    <input type="number" name="V3_Tidal_S" class="form-control" value="200">
                    <input type="number" name="V3_Minute_S" class="form-control" value="6">
                    <input type="number" name="V3_Peak_S" class="form-control" value="18">
                    <input type="text" name="V3_IE_S" class="form-control" value="1:2">
                    <input type="number" name="V3_Oxygen_S" class="form-control" value="60">
                </div>
                <div class="input-group mb-3">
                <select name="V4_Check" class="form-select" aria-label="">
                        <option selected>No</option>
                        <option value="Yes">Yes</option>
                     </select>
                    <input type="number" name="V4_Rate_S" class="form-control" value="30">
                    <input type="number" name="V4_Tidal_S" class="form-control" value="50">
                    <input type="number" name="V4_Minute_S" class="form-control" value="1.5">
                    <input type="number" name="V4_Peak_S" class="form-control" value="6">
                    <input type="text" name="V4_IE_S" class="form-control" value="1:1.5">
                    <input type="number" name="V4_Oxygen_S" class="form-control" value="60">
                </div>

                <!-- A -->
                <label for="hos_code" class="form-label">Other 1</label>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Title</span>
                    <input type="text" name="A_Title" class="form-control" value="">
                    <span class="input-group-text col-3">Unit</span>
                    <input type="text" name="A_Unit" class="form-control" value="">
                </div>
                <div div class="input-group mb-3">
                    <span class="input-group-text col-3">Set</span>
                    <input type="number" step="0.01" name="A_S_1" class="form-control" value="">
                    <input type="number" step="0.01" name="A_S_2" class="form-control" value="">
                    <input type="number" step="0.01" name="A_S_3" class="form-control" value="">

                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 1</span>
                    <input type="number" step="0.01" name="A_R1_1" class="form-control">
                    <input type="number" step="0.01" name="A_R1_2" class="form-control">
                    <input type="number" step="0.01" name="A_R1_3" class="form-control">

                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 2</span>
                    <input type="number" step="0.01" name="A_R2_1" class="form-control">
                    <input type="number" step="0.01" name="A_R2_2" class="form-control">
                    <input type="number" step="0.01" name="A_R2_3" class="form-control">

                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 3</span>
                    <input type="number" step="0.01" name="A_R3_1" class="form-control">
                    <input type="number" step="0.01" name="A_R3_2" class="form-control">
                    <input type="number" step="0.01" name="A_R3_3" class="form-control">
                </div>

                <!-- B -->
                <label for="hos_code" class="form-label">Other 2</label>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Title</span>
                    <input type="text" name="B_Title" class="form-control" value="">
                    <span class="input-group-text col-3">Unit</span>
                    <input type="text" name="B_Unit" class="form-control" value="">
                </div>
                <div div class="input-group mb-3">
                    <span class="input-group-text col-3">Set</span>
                    <input type="number" step="0.01" name="B_S_1" class="form-control" value="">
                    <input type="number" step="0.01" name="B_S_2" class="form-control" value="">
                    <input type="number" step="0.01" name="B_S_3" class="form-control" value="">

                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 1</span>
                    <input type="number" step="0.01" name="B_R1_1" class="form-control">
                    <input type="number" step="0.01" name="B_R1_2" class="form-control">
                    <input type="number" step="0.01" name="B_R1_3" class="form-control">
 
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 2</span>
                    <input type="number" step="0.01" name="B_R2_1" class="form-control">
                    <input type="number" step="0.01" name="B_R2_2" class="form-control">
                    <input type="number" step="0.01" name="B_R2_3" class="form-control">

                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 3</span>
                    <input type="number" step="0.01" name="B_R3_1" class="form-control">
                    <input type="number" step="0.01" name="B_R3_2" class="form-control">
                    <input type="number" step="0.01" name="B_R3_3" class="form-control">
                </div>

                <!-- C -->
                <label for="hos_code" class="form-label">Other 3</label>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Title</span>
                    <input type="text" name="C_Title" class="form-control" value="">
                    <span class="input-group-text col-3">Unit</span>
                    <input type="text" name="C_Unit" class="form-control" value="">
                </div>
                <div div class="input-group mb-3">
                    <span class="input-group-text col-3">Set</span>
                    <input type="number" step="0.01" name="C_S_1" class="form-control" value="">
                    <input type="number" step="0.01" name="C_S_2" class="form-control" value="">
                    <input type="number" step="0.01" name="C_S_3" class="form-control" value="">

                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 1</span>
                    <input type="number" step="0.01" name="C_R1_1" class="form-control">
                    <input type="number" step="0.01" name="C_R1_2" class="form-control">
                    <input type="number" step="0.01" name="C_R1_3" class="form-control">

                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 2</span>
                    <input type="number" step="0.01" name="C_R2_1" class="form-control">
                    <input type="number" step="0.01" name="C_R2_2" class="form-control">
                    <input type="number" step="0.01" name="C_R2_3" class="form-control">

                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 3</span>
                    <input type="number" step="0.01" name="C_R3_1" class="form-control">
                    <input type="number" step="0.01" name="C_R3_2" class="form-control">
                    <input type="number" step="0.01" name="C_R3_3" class="form-control">
                </div>

                <!-- D -->
                <label for="hos_code" class="form-label">Other 4</label>
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

                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 1</span>
                    <input type="number" step="0.01" name="D_R1_1" class="form-control">
                    <input type="number" step="0.01" name="D_R1_2" class="form-control">
                    <input type="number" step="0.01" name="D_R1_3" class="form-control">

                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 2</span>
                    <input type="number" step="0.01" name="D_R2_1" class="form-control">
                    <input type="number" step="0.01" name="D_R2_2" class="form-control">
                    <input type="number" step="0.01" name="D_R2_3" class="form-control">
 
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 3</span>
                    <input type="number" step="0.01" name="D_R3_1" class="form-control">
                    <input type="number" step="0.01" name="D_R3_2" class="form-control">
                    <input type="number" step="0.01" name="D_R3_3" class="form-control">
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