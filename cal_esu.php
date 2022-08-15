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

        <form action="insert_data_esu.php" method="post">
            <div class="container">
                <h2>Cal Data : <span style="color:blueviolet">ESU</span></h2>
                <h5>Code : <span><input type="text" name="hosp_code" value="<?php echo $device ?>" readonly></span></h5>
                <!-- Room Condition -->
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Temperature</span>
                    <input type="number" step="0.01" name="Room_T" class="form-control" value="">
                    <span class="input-group-text col-3">Humidity</span>
                    <input type="number" step="0.01" name="Room_H" class="form-control" value="">
                </div>
                <!-- MONO CUT 1 -->
                <label for="hos_code" class="form-label">Mode 1</label>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Mode</span>
                    <input type="text" name="Ms_Cut1_Name" class="form-control" value="LOW">
                    <span class="input-group-text col-3">Load (Ohms)</span>
                    <input type="number" name="Ms_Cut1_Load" class="form-control" value="">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Set</span>
                    <input type="number" step="0.01" name="Ms_Cut1_1" class="form-control" value="10">
                    <input type="number" step="0.01" name="Ms_Cut1_2" class="form-control" value="40">
                    <input type="number" step="0.01" name="Ms_Cut1_3" class="form-control" value="100">
                    <input type="number" step="0.01" name="Ms_Cut1_4" class="form-control" value="150">
                    <input type="number" step="0.01" name="Ms_Cut1_5" class="form-control" value="200">
                    <input type="number" step="0.01" name="Ms_Cut1_6" class="form-control" value="300">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 1</span>
                    <input type="number" step="0.01" name="Mr1_Cut1_1" class="form-control">
                    <input type="number" step="0.01" name="Mr1_Cut1_2" class="form-control">
                    <input type="number" step="0.01" name="Mr1_Cut1_3" class="form-control">
                    <input type="number" step="0.01" name="Mr1_Cut1_4" class="form-control">
                    <input type="number" step="0.01" name="Mr1_Cut1_5" class="form-control">
                    <input type="number" step="0.01" name="Mr1_Cut1_6" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 2</span>
                    <input type="number" step="0.01" name="Mr2_Cut1_1" class="form-control">
                    <input type="number" step="0.01" name="Mr2_Cut1_2" class="form-control">
                    <input type="number" step="0.01" name="Mr2_Cut1_3" class="form-control">
                    <input type="number" step="0.01" name="Mr2_Cut1_4" class="form-control">
                    <input type="number" step="0.01" name="Mr2_Cut1_5" class="form-control">
                    <input type="number" step="0.01" name="Mr2_Cut1_6" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 3</span>
                    <input type="number" step="0.01" name="Mr3_Cut1_1" class="form-control">
                    <input type="number" step="0.01" name="Mr3_Cut1_2" class="form-control">
                    <input type="number" step="0.01" name="Mr3_Cut1_3" class="form-control">
                    <input type="number" step="0.01" name="Mr3_Cut1_4" class="form-control">
                    <input type="number" step="0.01" name="Mr3_Cut1_5" class="form-control">
                    <input type="number" step="0.01" name="Mr3_Cut1_6" class="form-control">
                </div>
                <!-- MONO CUT 2 -->
                <label for="hos_code" class="form-label">Mode 2</label>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Mode</span>
                    <input type="text" name="Ms_Cut2_Name" class="form-control" value="PURE">
                    <span class="input-group-text col-3">Load (Ohms)</span>
                    <input type="number" name="Ms_Cut2_Load" class="form-control" value="">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Set</span>
                    <input type="number" step="0.01" name="Ms_Cut2_1" class="form-control" value="10">
                    <input type="number" step="0.01" name="Ms_Cut2_2" class="form-control" value="40">
                    <input type="number" step="0.01" name="Ms_Cut2_3" class="form-control" value="100">
                    <input type="number" step="0.01" name="Ms_Cut2_4" class="form-control" value="150">
                    <input type="number" step="0.01" name="Ms_Cut2_5" class="form-control" value="200">
                    <input type="number" step="0.01" name="Ms_Cut2_6" class="form-control" value="300">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 1</span>
                    <input type="number" step="0.01" name="Mr1_Cut2_1" class="form-control">
                    <input type="number" step="0.01" name="Mr1_Cut2_2" class="form-control">
                    <input type="number" step="0.01" name="Mr1_Cut2_3" class="form-control">
                    <input type="number" step="0.01" name="Mr1_Cut2_4" class="form-control">
                    <input type="number" step="0.01" name="Mr1_Cut2_5" class="form-control">
                    <input type="number" step="0.01" name="Mr1_Cut2_6" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 2</span>
                    <input type="number" step="0.01" name="Mr2_Cut2_1" class="form-control">
                    <input type="number" step="0.01" name="Mr2_Cut2_2" class="form-control">
                    <input type="number" step="0.01" name="Mr2_Cut2_3" class="form-control">
                    <input type="number" step="0.01" name="Mr2_Cut2_4" class="form-control">
                    <input type="number" step="0.01" name="Mr2_Cut2_5" class="form-control">
                    <input type="number" step="0.01" name="Mr2_Cut2_6" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 3</span>
                    <input type="number" step="0.01" name="Mr3_Cut2_1" class="form-control">
                    <input type="number" step="0.01" name="Mr3_Cut2_2" class="form-control">
                    <input type="number" step="0.01" name="Mr3_Cut2_3" class="form-control">
                    <input type="number" step="0.01" name="Mr3_Cut2_4" class="form-control">
                    <input type="number" step="0.01" name="Mr3_Cut2_5" class="form-control">
                    <input type="number" step="0.01" name="Mr3_Cut2_6" class="form-control">
                </div>
                <!-- MONO CUT 3 -->
                <label for="hos_code" class="form-label">Mode 3</label>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Mode</span>
                    <input type="text" name="Ms_Cut3_Name" class="form-control" value="BLEND">
                    <span class="input-group-text col-3">Load (Ohms)</span>
                    <input type="number" name="Ms_Cut3_Load" class="form-control" value="">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Set</span>
                    <input type="number" step="0.01" name="Ms_Cut3_1" class="form-control" value="10">
                    <input type="number" step="0.01" name="Ms_Cut3_2" class="form-control" value="40">
                    <input type="number" step="0.01" name="Ms_Cut3_3" class="form-control" value="100">
                    <input type="number" step="0.01" name="Ms_Cut3_4" class="form-control" value="150">
                    <input type="number" step="0.01" name="Ms_Cut3_5" class="form-control" value="200">
                    <input type="number" step="0.01" name="Ms_Cut3_6" class="form-control" value="">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 1</span>
                    <input type="number" step="0.01" name="Mr1_Cut3_1" class="form-control">
                    <input type="number" step="0.01" name="Mr1_Cut3_2" class="form-control">
                    <input type="number" step="0.01" name="Mr1_Cut3_3" class="form-control">
                    <input type="number" step="0.01" name="Mr1_Cut3_4" class="form-control">
                    <input type="number" step="0.01" name="Mr1_Cut3_5" class="form-control">
                    <input type="number" step="0.01" name="Mr1_Cut3_6" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 2</span>
                    <input type="number" step="0.01" name="Mr2_Cut3_1" class="form-control">
                    <input type="number" step="0.01" name="Mr2_Cut3_2" class="form-control">
                    <input type="number" step="0.01" name="Mr2_Cut3_3" class="form-control">
                    <input type="number" step="0.01" name="Mr2_Cut3_4" class="form-control">
                    <input type="number" step="0.01" name="Mr2_Cut3_5" class="form-control">
                    <input type="number" step="0.01" name="Mr2_Cut3_6" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 3</span>
                    <input type="number" step="0.01" name="Mr3_Cut3_1" class="form-control">
                    <input type="number" step="0.01" name="Mr3_Cut3_2" class="form-control">
                    <input type="number" step="0.01" name="Mr3_Cut3_3" class="form-control">
                    <input type="number" step="0.01" name="Mr3_Cut3_4" class="form-control">
                    <input type="number" step="0.01" name="Mr3_Cut3_5" class="form-control">
                    <input type="number" step="0.01" name="Mr3_Cut3_6" class="form-control">
                </div>
                <hr>
                <!-- MONO COAG 1 -->
                <label for="hos_code" class="form-label">Mode 1</label>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Mode</span>
                    <input type="text" name="Ms_Coag1_Name" class="form-control" value="DESICCATE">
                    <span class="input-group-text col-3">Load (Ohms)</span>
                    <input type="number" name="Ms_Coag1_Load" class="form-control" value="">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Set</span>
                    <input type="number" step="0.01" name="Ms_Coag1_1" class="form-control" value="10">
                    <input type="number" step="0.01" name="Ms_Coag1_2" class="form-control" value="40">
                    <input type="number" step="0.01" name="Ms_Coag1_3" class="form-control" value="70">
                    <input type="number" step="0.01" name="Ms_Coag1_4" class="form-control" value="100">
                    <input type="number" step="0.01" name="Ms_Coag1_5" class="form-control" value="120">
                    <input type="number" step="0.01" name="Ms_Coag1_6" class="form-control" value="">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 1</span>
                    <input type="number" step="0.01" name="Mr1_Coag1_1" class="form-control">
                    <input type="number" step="0.01" name="Mr1_Coag1_2" class="form-control">
                    <input type="number" step="0.01" name="Mr1_Coag1_3" class="form-control">
                    <input type="number" step="0.01" name="Mr1_Coag1_4" class="form-control">
                    <input type="number" step="0.01" name="Mr1_Coag1_5" class="form-control">
                    <input type="number" step="0.01" name="Mr1_Coag1_6" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 2</span>
                    <input type="number" step="0.01" name="Mr2_Coag1_1" class="form-control">
                    <input type="number" step="0.01" name="Mr2_Coag1_2" class="form-control">
                    <input type="number" step="0.01" name="Mr2_Coag1_3" class="form-control">
                    <input type="number" step="0.01" name="Mr2_Coag1_4" class="form-control">
                    <input type="number" step="0.01" name="Mr2_Coag1_5" class="form-control">
                    <input type="number" step="0.01" name="Mr2_Coag1_6" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 3</span>
                    <input type="number" step="0.01" name="Mr3_Coag1_1" class="form-control">
                    <input type="number" step="0.01" name="Mr3_Coag1_2" class="form-control">
                    <input type="number" step="0.01" name="Mr3_Coag1_3" class="form-control">
                    <input type="number" step="0.01" name="Mr3_Coag1_4" class="form-control">
                    <input type="number" step="0.01" name="Mr3_Coag1_5" class="form-control">
                    <input type="number" step="0.01" name="Mr3_Coag1_6" class="form-control">
                </div>
                <!-- MONO COAG 2 -->
                <label for="hos_code" class="form-label">Mode 2</label>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Mode</span>
                    <input type="text" name="Ms_Coag2_Name" class="form-control" value="FULGURATE">
                    <span class="input-group-text col-3">Load (Ohms)</span>
                    <input type="number" name="Ms_Coag2_Load" class="form-control" value="">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Set</span>
                    <input type="number" step="0.01" name="Ms_Coag2_1" class="form-control" value="10">
                    <input type="number" step="0.01" name="Ms_Coag2_2" class="form-control" value="40">
                    <input type="number" step="0.01" name="Ms_Coag2_3" class="form-control" value="70">
                    <input type="number" step="0.01" name="Ms_Coag2_4" class="form-control" value="100">
                    <input type="number" step="0.01" name="Ms_Coag2_5" class="form-control" value="120">
                    <input type="number" step="0.01" name="Ms_Coag2_6" class="form-control" value="">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 1</span>
                    <input type="number" step="0.01" name="Mr1_Coag2_1" class="form-control">
                    <input type="number" step="0.01" name="Mr1_Coag2_2" class="form-control">
                    <input type="number" step="0.01" name="Mr1_Coag2_3" class="form-control">
                    <input type="number" step="0.01" name="Mr1_Coag2_4" class="form-control">
                    <input type="number" step="0.01" name="Mr1_Coag2_5" class="form-control">
                    <input type="number" step="0.01" name="Mr1_Coag2_6" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 2</span>
                    <input type="number" step="0.01" name="Mr2_Coag2_1" class="form-control">
                    <input type="number" step="0.01" name="Mr2_Coag2_2" class="form-control">
                    <input type="number" step="0.01" name="Mr2_Coag2_3" class="form-control">
                    <input type="number" step="0.01" name="Mr2_Coag2_4" class="form-control">
                    <input type="number" step="0.01" name="Mr2_Coag2_5" class="form-control">
                    <input type="number" step="0.01" name="Mr2_Coag2_6" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 3</span>
                    <input type="number" step="0.01" name="Mr3_Coag2_1" class="form-control">
                    <input type="number" step="0.01" name="Mr3_Coag2_2" class="form-control">
                    <input type="number" step="0.01" name="Mr3_Coag2_3" class="form-control">
                    <input type="number" step="0.01" name="Mr3_Coag2_4" class="form-control">
                    <input type="number" step="0.01" name="Mr3_Coag2_5" class="form-control">
                    <input type="number" step="0.01" name="Mr3_Coag2_6" class="form-control">
                </div>
                <!-- MONO COAG 3 -->
                <label for="hos_code" class="form-label">Mode 3</label>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Mode</span>
                    <input type="text" name="Ms_Coag3_Name" class="form-control" value="SPRAY">
                    <span class="input-group-text col-3">Load (Ohms)</span>
                    <input type="number" name="Ms_Coag3_Load" class="form-control" value="">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Set</span>
                    <input type="number" step="0.01" name="Ms_Coag3_1" class="form-control" value="10">
                    <input type="number" step="0.01" name="Ms_Coag3_2" class="form-control" value="40">
                    <input type="number" step="0.01" name="Ms_Coag3_3" class="form-control" value="70">
                    <input type="number" step="0.01" name="Ms_Coag3_4" class="form-control" value="100">
                    <input type="number" step="0.01" name="Ms_Coag3_5" class="form-control" value="120">
                    <input type="number" step="0.01" name="Ms_Coag3_6" class="form-control" value="">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 1</span>
                    <input type="number" step="0.01" name="Mr1_Coag3_1" class="form-control">
                    <input type="number" step="0.01" name="Mr1_Coag3_2" class="form-control">
                    <input type="number" step="0.01" name="Mr1_Coag3_3" class="form-control">
                    <input type="number" step="0.01" name="Mr1_Coag3_4" class="form-control">
                    <input type="number" step="0.01" name="Mr1_Coag3_5" class="form-control">
                    <input type="number" step="0.01" name="Mr1_Coag3_6" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 2</span>
                    <input type="number" step="0.01" name="Mr2_Coag3_1" class="form-control">
                    <input type="number" step="0.01" name="Mr2_Coag3_2" class="form-control">
                    <input type="number" step="0.01" name="Mr2_Coag3_3" class="form-control">
                    <input type="number" step="0.01" name="Mr2_Coag3_4" class="form-control">
                    <input type="number" step="0.01" name="Mr2_Coag3_5" class="form-control">
                    <input type="number" step="0.01" name="Mr2_Coag3_6" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 3</span>
                    <input type="number" step="0.01" name="Mr3_Coag3_1" class="form-control">
                    <input type="number" step="0.01" name="Mr3_Coag3_2" class="form-control">
                    <input type="number" step="0.01" name="Mr3_Coag3_3" class="form-control">
                    <input type="number" step="0.01" name="Mr3_Coag3_4" class="form-control">
                    <input type="number" step="0.01" name="Mr3_Coag3_5" class="form-control">
                    <input type="number" step="0.01" name="Mr3_Coag3_6" class="form-control">
                </div>
                <hr>
                <!-- BI CUT 1 -->
                <label for="hos_code" class="form-label">Mode 1</label>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Mode</span>
                    <input type="text" name="Bs_Cut1_Name" class="form-control" value="PRECISE">
                    <span class="input-group-text col-3">Load (Ohms)</span>
                    <input type="number" name="Bs_Cut1_Load" class="form-control" value="">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Set</span>
                    <input type="number" step="0.01" name="Bs_Cut1_1" class="form-control" value="5">
                    <input type="number" step="0.01" name="Bs_Cut1_2" class="form-control" value="10">
                    <input type="number" step="0.01" name="Bs_Cut1_3" class="form-control" value="30">
                    <input type="number" step="0.01" name="Bs_Cut1_4" class="form-control" value="50">
                    <input type="number" step="0.01" name="Bs_Cut1_5" class="form-control" value="70">
                    <input type="number" step="0.01" name="Bs_Cut1_6" class="form-control" value="">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 1</span>
                    <input type="number" step="0.01" name="Br1_Cut1_1" class="form-control">
                    <input type="number" step="0.01" name="Br1_Cut1_2" class="form-control">
                    <input type="number" step="0.01" name="Br1_Cut1_3" class="form-control">
                    <input type="number" step="0.01" name="Br1_Cut1_4" class="form-control">
                    <input type="number" step="0.01" name="Br1_Cut1_5" class="form-control">
                    <input type="number" step="0.01" name="Br1_Cut1_6" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 2</span>
                    <input type="number" step="0.01" name="Br2_Cut1_1" class="form-control">
                    <input type="number" step="0.01" name="Br2_Cut1_2" class="form-control">
                    <input type="number" step="0.01" name="Br2_Cut1_3" class="form-control">
                    <input type="number" step="0.01" name="Br2_Cut1_4" class="form-control">
                    <input type="number" step="0.01" name="Br2_Cut1_5" class="form-control">
                    <input type="number" step="0.01" name="Br2_Cut1_6" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 3</span>
                    <input type="number" step="0.01" name="Br3_Cut1_1" class="form-control">
                    <input type="number" step="0.01" name="Br3_Cut1_2" class="form-control">
                    <input type="number" step="0.01" name="Br3_Cut1_3" class="form-control">
                    <input type="number" step="0.01" name="Br3_Cut1_4" class="form-control">
                    <input type="number" step="0.01" name="Br3_Cut1_5" class="form-control">
                    <input type="number" step="0.01" name="Br3_Cut1_6" class="form-control">
                </div>
                <!-- BI CUT 2 -->
                <label for="hos_code" class="form-label">Mode 2</label>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Mode</span>
                    <input type="text" name="Bs_Cut2_Name" class="form-control" value="STANDARD">
                    <span class="input-group-text col-3">Load (Ohms)</span>
                    <input type="number" name="Bs_Cut2_Load" class="form-control" value="">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Set</span>
                    <input type="number" step="0.01" name="Bs_Cut2_1" class="form-control" value="5">
                    <input type="number" step="0.01" name="Bs_Cut2_2" class="form-control" value="10">
                    <input type="number" step="0.01" name="Bs_Cut2_3" class="form-control" value="30">
                    <input type="number" step="0.01" name="Bs_Cut2_4" class="form-control" value="50">
                    <input type="number" step="0.01" name="Bs_Cut2_5" class="form-control" value="70">
                    <input type="number" step="0.01" name="Bs_Cut2_6" class="form-control" value="">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 1</span>
                    <input type="number" step="0.01" name="Br1_Cut2_1" class="form-control">
                    <input type="number" step="0.01" name="Br1_Cut2_2" class="form-control">
                    <input type="number" step="0.01" name="Br1_Cut2_3" class="form-control">
                    <input type="number" step="0.01" name="Br1_Cut2_4" class="form-control">
                    <input type="number" step="0.01" name="Br1_Cut2_5" class="form-control">
                    <input type="number" step="0.01" name="Br1_Cut2_6" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 2</span>
                    <input type="number" step="0.01" name="Br2_Cut2_1" class="form-control">
                    <input type="number" step="0.01" name="Br2_Cut2_2" class="form-control">
                    <input type="number" step="0.01" name="Br2_Cut2_3" class="form-control">
                    <input type="number" step="0.01" name="Br2_Cut2_4" class="form-control">
                    <input type="number" step="0.01" name="Br2_Cut2_5" class="form-control">
                    <input type="number" step="0.01" name="Br2_Cut2_6" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 3</span>
                    <input type="number" step="0.01" name="Br3_Cut2_1" class="form-control">
                    <input type="number" step="0.01" name="Br3_Cut2_2" class="form-control">
                    <input type="number" step="0.01" name="Br3_Cut2_3" class="form-control">
                    <input type="number" step="0.01" name="Br3_Cut2_4" class="form-control">
                    <input type="number" step="0.01" name="Br3_Cut2_5" class="form-control">
                    <input type="number" step="0.01" name="Br3_Cut2_6" class="form-control">
                </div>
                <!-- BI CUT 3 -->
                <label for="hos_code" class="form-label">Mode 3</label>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Mode</span>
                    <input type="text" name="Bs_Cut3_Name" class="form-control" value="MACRO">
                    <span class="input-group-text col-3">Load (Ohms)</span>
                    <input type="number" name="Bs_Cut3_Load" class="form-control" value="">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Set</span>
                    <input type="number" step="0.01" name="Bs_Cut3_1" class="form-control" value="5">
                    <input type="number" step="0.01" name="Bs_Cut3_2" class="form-control" value="10">
                    <input type="number" step="0.01" name="Bs_Cut3_3" class="form-control" value="30">
                    <input type="number" step="0.01" name="Bs_Cut3_4" class="form-control" value="50">
                    <input type="number" step="0.01" name="Bs_Cut3_5" class="form-control" value="70">
                    <input type="number" step="0.01" name="Bs_Cut3_6" class="form-control" value="">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 1</span>
                    <input type="number" step="0.01" name="Br1_Cut3_1" class="form-control">
                    <input type="number" step="0.01" name="Br1_Cut3_2" class="form-control">
                    <input type="number" step="0.01" name="Br1_Cut3_3" class="form-control">
                    <input type="number" step="0.01" name="Br1_Cut3_4" class="form-control">
                    <input type="number" step="0.01" name="Br1_Cut3_5" class="form-control">
                    <input type="number" step="0.01" name="Br1_Cut3_6" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 2</span>
                    <input type="number" step="0.01" name="Br2_Cut3_1" class="form-control">
                    <input type="number" step="0.01" name="Br2_Cut3_2" class="form-control">
                    <input type="number" step="0.01" name="Br2_Cut3_3" class="form-control">
                    <input type="number" step="0.01" name="Br2_Cut3_4" class="form-control">
                    <input type="number" step="0.01" name="Br2_Cut3_5" class="form-control">
                    <input type="number" step="0.01" name="Br2_Cut3_6" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 3</span>
                    <input type="number" step="0.01" name="Br3_Cut3_1" class="form-control">
                    <input type="number" step="0.01" name="Br3_Cut3_2" class="form-control">
                    <input type="number" step="0.01" name="Br3_Cut3_3" class="form-control">
                    <input type="number" step="0.01" name="Br3_Cut3_4" class="form-control">
                    <input type="number" step="0.01" name="Br3_Cut3_5" class="form-control">
                    <input type="number" step="0.01" name="Br3_Cut3_6" class="form-control">
                </div>
                <hr>
                <!-- BI COAG 1 -->
                <label for="hos_code" class="form-label">Mode 1</label>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Mode</span>
                    <input type="text" name="Bs_Coag1_Name" class="form-control" value="">
                    <span class="input-group-text col-3">Load (Ohms)</span>
                    <input type="number" name="Bs_Coag1_Load" class="form-control" value="">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Set</span>
                    <input type="number" step="0.01" name="Bs_Coag1_1" class="form-control" value="">
                    <input type="number" step="0.01" name="Bs_Coag1_2" class="form-control" value="">
                    <input type="number" step="0.01" name="Bs_Coag1_3" class="form-control" value="">
                    <input type="number" step="0.01" name="Bs_Coag1_4" class="form-control" value="">
                    <input type="number" step="0.01" name="Bs_Coag1_5" class="form-control" value="">
                    <input type="number" step="0.01" name="Bs_Coag1_6" class="form-control" value="">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 1</span>
                    <input type="number" step="0.01" name="Br1_Coag1_1" class="form-control">
                    <input type="number" step="0.01" name="Br1_Coag1_2" class="form-control">
                    <input type="number" step="0.01" name="Br1_Coag1_3" class="form-control">
                    <input type="number" step="0.01" name="Br1_Coag1_4" class="form-control">
                    <input type="number" step="0.01" name="Br1_Coag1_5" class="form-control">
                    <input type="number" step="0.01" name="Br1_Coag1_6" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 2</span>
                    <input type="number" step="0.01" name="Br2_Coag1_1" class="form-control">
                    <input type="number" step="0.01" name="Br2_Coag1_2" class="form-control">
                    <input type="number" step="0.01" name="Br2_Coag1_3" class="form-control">
                    <input type="number" step="0.01" name="Br2_Coag1_4" class="form-control">
                    <input type="number" step="0.01" name="Br2_Coag1_5" class="form-control">
                    <input type="number" step="0.01" name="Br2_Coag1_6" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 3</span>
                    <input type="number" step="0.01" name="Br3_Coag1_1" class="form-control">
                    <input type="number" step="0.01" name="Br3_Coag1_2" class="form-control">
                    <input type="number" step="0.01" name="Br3_Coag1_3" class="form-control">
                    <input type="number" step="0.01" name="Br3_Coag1_4" class="form-control">
                    <input type="number" step="0.01" name="Br3_Coag1_5" class="form-control">
                    <input type="number" step="0.01" name="Br3_Coag1_6" class="form-control">
                </div>
                <!-- BI COAG 2 -->
                <label for="hos_code" class="form-label">Mode 2</label>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Mode</span>
                    <input type="text" name="Bs_Coag2_Name" class="form-control" value="">
                    <span class="input-group-text col-3">Load (Ohms)</span>
                    <input type="number" name="Bs_Coag2_Load" class="form-control" value="">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Set</span>
                    <input type="number" step="0.01" name="Bs_Coag2_1" class="form-control" value="">
                    <input type="number" step="0.01" name="Bs_Coag2_2" class="form-control" value="">
                    <input type="number" step="0.01" name="Bs_Coag2_3" class="form-control" value="">
                    <input type="number" step="0.01" name="Bs_Coag2_4" class="form-control" value="">
                    <input type="number" step="0.01" name="Bs_Coag2_5" class="form-control" value="">
                    <input type="number" step="0.01" name="Bs_Coag2_6" class="form-control" value="">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 1</span>
                    <input type="number" step="0.01" name="Br1_Coag2_1" class="form-control">
                    <input type="number" step="0.01" name="Br1_Coag2_2" class="form-control">
                    <input type="number" step="0.01" name="Br1_Coag2_3" class="form-control">
                    <input type="number" step="0.01" name="Br1_Coag2_4" class="form-control">
                    <input type="number" step="0.01" name="Br1_Coag2_5" class="form-control">
                    <input type="number" step="0.01" name="Br1_Coag2_6" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 2</span>
                    <input type="number" step="0.01" name="Br2_Coag2_1" class="form-control">
                    <input type="number" step="0.01" name="Br2_Coag2_2" class="form-control">
                    <input type="number" step="0.01" name="Br2_Coag2_3" class="form-control">
                    <input type="number" step="0.01" name="Br2_Coag2_4" class="form-control">
                    <input type="number" step="0.01" name="Br2_Coag2_5" class="form-control">
                    <input type="number" step="0.01" name="Br2_Coag2_6" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 3</span>
                    <input type="number" step="0.01" name="Br3_Coag2_1" class="form-control">
                    <input type="number" step="0.01" name="Br3_Coag2_2" class="form-control">
                    <input type="number" step="0.01" name="Br3_Coag2_3" class="form-control">
                    <input type="number" step="0.01" name="Br3_Coag2_4" class="form-control">
                    <input type="number" step="0.01" name="Br3_Coag2_5" class="form-control">
                    <input type="number" step="0.01" name="Br3_Coag2_6" class="form-control">
                </div>
                <!-- BI COAG 3 -->
                <label for="hos_code" class="form-label">Mode 3</label>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Mode</span>
                    <input type="text" name="Bs_Coag3_Name" class="form-control" value="">
                    <span class="input-group-text col-3">Load (Ohms)</span>
                    <input type="number" name="Bs_Coag3_Load" class="form-control" value="">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Set</span>
                    <input type="number" step="0.01" name="Bs_Coag3_1" class="form-control" value="">
                    <input type="number" step="0.01" name="Bs_Coag3_2" class="form-control" value="">
                    <input type="number" step="0.01" name="Bs_Coag3_3" class="form-control" value="">
                    <input type="number" step="0.01" name="Bs_Coag3_4" class="form-control" value="">
                    <input type="number" step="0.01" name="Bs_Coag3_5" class="form-control" value="">
                    <input type="number" step="0.01" name="Bs_Coag3_6" class="form-control" value="">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 1</span>
                    <input type="number" step="0.01" name="Br1_Coag3_1" class="form-control">
                    <input type="number" step="0.01" name="Br1_Coag3_2" class="form-control">
                    <input type="number" step="0.01" name="Br1_Coag3_3" class="form-control">
                    <input type="number" step="0.01" name="Br1_Coag3_4" class="form-control">
                    <input type="number" step="0.01" name="Br1_Coag3_5" class="form-control">
                    <input type="number" step="0.01" name="Br1_Coag3_6" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 2</span>
                    <input type="number" step="0.01" name="Br2_Coag3_1" class="form-control">
                    <input type="number" step="0.01" name="Br2_Coag3_2" class="form-control">
                    <input type="number" step="0.01" name="Br2_Coag3_3" class="form-control">
                    <input type="number" step="0.01" name="Br2_Coag3_4" class="form-control">
                    <input type="number" step="0.01" name="Br2_Coag3_5" class="form-control">
                    <input type="number" step="0.01" name="Br2_Coag3_6" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 3</span>
                    <input type="number" step="0.01" name="Br3_Coag3_1" class="form-control">
                    <input type="number" step="0.01" name="Br3_Coag3_2" class="form-control">
                    <input type="number" step="0.01" name="Br3_Coag3_3" class="form-control">
                    <input type="number" step="0.01" name="Br3_Coag3_4" class="form-control">
                    <input type="number" step="0.01" name="Br3_Coag3_5" class="form-control">
                    <input type="number" step="0.01" name="Br3_Coag3_6" class="form-control">
                </div>
                <hr>
                <!-- HF Leakage 3 -->
                <label for="hos_code" class="form-label">HF Leakage</label>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">HF Leakage – Active to Earth (mA)</span>
                    <input type="number" step="0.01" name="HF_AE" class="form-control" value="">
                    <span class="input-group-text col-3">HF Leakage – Neutral to Earth (mA)</span>
                    <input type="number" step="0.01" name="HF_NE" class="form-control" value="">
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