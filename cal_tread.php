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

        <form action="insert_data_tread.php" method="post">
            <div class="container">
                <h2>Cal Data : <span style="color:blueviolet">Treadmill</span></h2>
                <h5>Code : <span><input type="text" name="hosp_code" value="<?php echo $device ?>" readonly></span></h5>
                <label for="hos_code" class="form-label">Room Condition</label>
                <!-- Room Condition -->
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Temperature</span>
                    <input type="number" step="0.01" name="Room_T" class="form-control" value="">
                    <span class="input-group-text col-3">Humidity</span>
                    <input type="number" step="0.01" name="Room_H" class="form-control" value="">
                </div>
                <!-- Speed -->
                <label for="hos_code" class="form-label">Belt Speed (km/h)</label>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Set</span>
                    <input type="number" step="0.001" name="Spds1" class="form-control" value="2" placeholder="Set Value">
                    <input type="number" step="0.001" name="Spds2" class="form-control" value="4" placeholder="Set Value">
                    <input type="number" step="0.001" name="Spds3" class="form-control" value="6" placeholder="Set Value">
                    <input type="number" step="0.001" name="Spds4" class="form-control" value="8" placeholder="Set Value">
                    <input type="number" step="0.001" name="Spds5" class="form-control" value="10" placeholder="Set Value">
                    <input type="number" step="0.001" name="Spds6" class="form-control" value="12" placeholder="Set Value">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 1</span>
                    <input type="number" step="0.001" name="Spdr1_1" class="form-control">
                    <input type="number" step="0.001" name="Spdr1_2" class="form-control">
                    <input type="number" step="0.001" name="Spdr1_3" class="form-control">
                    <input type="number" step="0.001" name="Spdr1_4" class="form-control">
                    <input type="number" step="0.001" name="Spdr1_5" class="form-control">
                    <input type="number" step="0.001" name="Spdr1_6" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 2</span>
                    <input type="number" step="0.001" name="Spdr2_1" class="form-control">
                    <input type="number" step="0.001" name="Spdr2_2" class="form-control">
                    <input type="number" step="0.001" name="Spdr2_3" class="form-control">
                    <input type="number" step="0.001" name="Spdr2_4" class="form-control">
                    <input type="number" step="0.001" name="Spdr2_5" class="form-control">
                    <input type="number" step="0.001" name="Spdr2_6" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text col-3">Read 3</span>
                    <input type="number" step="0.001" name="Spdr3_1" class="form-control">
                    <input type="number" step="0.001" name="Spdr3_2" class="form-control">
                    <input type="number" step="0.001" name="Spdr3_3" class="form-control">
                    <input type="number" step="0.001" name="Spdr3_4" class="form-control">
                    <input type="number" step="0.001" name="Spdr3_5" class="form-control">
                    <input type="number" step="0.001" name="Spdr3_6" class="form-control">
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