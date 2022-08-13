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
    <?php
    include_once("conf.php");

    $conn = new mysqli($cpy_server, $cpy_user, $cpy_pass, $cpy_db);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $device = $_GET['id'];
    $sql = "SELECT * FROM cpy WHERE Code = '".$device."'";
    $result = mysqli_query($conn, $sql);
    if ($row = mysqli_fetch_array($result)) {
        if($row['Name'] == "Bedside Monitor"){
            $cal_selector = "bsm";    
        }
        else{
            $cal_selector = "error";
        }
        
    ?>

    <form action="insert_data.php" method="post">
        <div class="container">
                <h2>Devices Data</h2>
                <div class="mb-3">
                    <label for="hos_code" class="form-label">Hospital Code</label>
                    <input type="text" class="form-control" id="hos_code" placeholder="CHC-00000" value="<?php echo $row['Code']; ?>">
                </div>
                <div class="mb-3">
                    <label for="ref_code" class="form-label">Reference Code</label>
                    <input type="text" class="form-control" id="ref_code" placeholder="CPY-XX-00"value="<?php echo $row['Ref']; ?>">
                </div>
                <div class="mb-3">
                    <label for="ref_code" class="form-label">Device Name</label>
                    <input type="text" class="form-control" id="ref_code" placeholder=""value="<?php echo $row['Name']; ?>">
                </div>
                <div class="mb-3">
                    <label for="brand" class="form-label">Brand</label>
                    <input type="text" class="form-control" id="brand" placeholder=""value="<?php echo $row['Brand']; ?>">
                </div>
                <div class="mb-3">
                    <label for="model" class="form-label">Model</label>
                    <input type="text" class="form-control" id="model" placeholder=""value="<?php echo $row['Model']; ?>">
                </div>
                <div class="mb-3">
                    <label for="sn" class="form-label">Serial Number</label>
                    <input type="text" class="form-control" id="sn" placeholder="" value="<?php echo $row['SN']; ?>">
                </div>
                <div class="mb-3">
                    <label for="loc" class="form-label">Location</label>
                    <input type="text" class="form-control" id="loc" placeholder="" value="<?php echo $row['Ward']; ?>">
                </div>
                <div class="d-flex justify-content-between">
                    <button type="button" class="btn btn-success w-100" onclick="window.open('cal_'+'<?php echo $cal_selector ?>'+'.php?Code='+'<?php echo $row['Code']; ?>')">Cal</button>
                    <button type="submit" class="btn btn-outline-warning">Update</button>
                </div>

        </div>
    </form>
    <?php
            }else{
                echo"ไม่พบข้อมูล";
            }
            mysqli_close($conn)
            ?>
</body>

</html>