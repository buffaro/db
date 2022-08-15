<!DOCTYPE html>
<html>

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
    <center>
        <?php
        // Connect-------------
        include_once("conf.php");
        include_once("func.php");
        $conn = new mysqli($cpy_server, $cpy_user, $cpy_pass, $cpy_db);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        //---------------------
        $hosp_code = $_REQUEST['hosp_code'];
        $Room_T = $_REQUEST['Room_T'];
        $Room_H = $_REQUEST['Room_H'];
        //----------------------------ECG--------------------------------
        $S_HR1_Raw = $_REQUEST['ecgr1_60'] . ',' . $_REQUEST['ecgr2_60'] . ',' . $_REQUEST['ecgr3_60'];
        $S_HR2_Raw = $_REQUEST['ecgr1_90'] . ',' . $_REQUEST['ecgr2_90'] . ',' . $_REQUEST['ecgr3_90'];
        $S_HR3_Raw = $_REQUEST['ecgr1_120'] . ',' . $_REQUEST['ecgr2_120'] . ',' . $_REQUEST['ecgr3_120'];
        $S_HR4_Raw = $_REQUEST['ecgr1_180'] . ',' . $_REQUEST['ecgr2_180'] . ',' . $_REQUEST['ecgr3_180'];

        $S_HR1_Cal = avg($S_HR1_Raw);
        $S_HR2_Cal = avg($S_HR2_Raw);
        $S_HR3_Cal = avg($S_HR3_Raw);
        $S_HR4_Cal = avg($S_HR4_Raw);
        //----------------------------Speed--------------------------------
        $S_Spd1_Raw = $_REQUEST['spdr1_25'] . ',' . $_REQUEST['spdr2_25'] . ',' . $_REQUEST['spdr3_25'];
        $S_Spd2_Raw = $_REQUEST['spdr1_50'] . ',' . $_REQUEST['spdr2_50'] . ',' . $_REQUEST['spdr3_50'];

        $S_Spd1_Cal = avg($S_Spd1_Raw);
        $S_Spd2_Cal = avg($S_Spd2_Raw);
        //--------------------------Sensitivity-----------------------------
        $S_Sen1_Raw = $_REQUEST['senr1_5'] . ',' . $_REQUEST['senr2_5'] . ',' . $_REQUEST['senr3_5'];
        $S_Sen2_Raw = $_REQUEST['senr1_10'] . ',' . $_REQUEST['senr2_10'] . ',' . $_REQUEST['senr3_10'];
        $S_Sen3_Raw = $_REQUEST['senr1_20'] . ',' . $_REQUEST['senr2_20'] . ',' . $_REQUEST['senr3_20'];

        $S_Sen1_Cal = avg($S_Sen1_Raw);
        $S_Sen2_Cal = avg($S_Sen2_Raw);
        $S_Sen3_Cal = avg($S_Sen3_Raw);

        //----------------------------SQL--------------------------------
        $sql = "INSERT INTO cal_ecg (
            Code,Room_T,Room_H,
            S_HR1_Raw,S_HR2_Raw,S_HR3_Raw,S_HR4_Raw,
            S_HR1_Cal,S_HR2_Cal,S_HR3_Cal,S_HR4_Cal,
            S_Spd1_Raw,S_Spd2_Raw,
            S_Spd1_Cal,S_Spd2_Cal,
            S_Sen1_Raw,S_Sen2_Raw,S_Sen3_Raw,
            S_Sen1_Cal,S_Sen2_Cal,S_Sen3_Cal
            ) VALUES (
            '$hosp_code','$Room_T','$Room_H',
            '$S_HR1_Raw','$S_HR2_Raw','$S_HR3_Raw','$S_HR4_Raw',
            '$S_HR1_Cal','$S_HR2_Cal','$S_HR3_Cal','$S_HR4_Cal',
            '$S_Spd1_Raw','$S_Spd2_Raw',
            '$S_Spd1_Cal','$S_Spd2_Cal',
            '$S_Sen1_Raw','$S_Sen2_Raw','$S_Sen3_Raw',
            '$S_Sen1_Cal','$S_Sen2_Cal','$S_Sen3_Cal'
            )";

        $Caldate = date("Y-m-d");
        $upCaldate = "UPDATE cpy SET Caldate = '$Caldate' WHERE Code = '$hosp_code'";
        if (mysqli_query($conn, $sql) && mysqli_query($conn, $upCaldate)) {
            echo "<button type='button' class='btn btn-success'>เพิ่มข้อมูลเรียบร้อยแล้ว</button>
            <script type='text/javascript'>setTimeout('window.close();', 3000);</script>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
        ?>
    </center>



</body>

</html>