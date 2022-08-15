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
        //----------------------------Pressure Unit-----------------------------------
        $Press_Unit = $_REQUEST['Press_Unit'];
        //-----------------------------Pressure------------------------------------
        $Press1 = $_REQUEST['press_s1'];
        $Press2 = $_REQUEST['press_s2'];
        $Press3 = $_REQUEST['press_s3'];
        $Press4 = $_REQUEST['press_s4'];
        $Press5 = $_REQUEST['press_s5'];
        $Press6 = $_REQUEST['press_s6'];
        $Press7 = $_REQUEST['press_s7'];
        $Press8 = $_REQUEST['press_s8'];
        $Press9 = $_REQUEST['press_s9'];
        $Press10 = $_REQUEST['press_s10'];

        $Press1_Raw = $_REQUEST['press_r1_1'] . ',' . $_REQUEST['press_r2_1'] . ',' . $_REQUEST['press_r3_1'];
        $Press2_Raw = $_REQUEST['press_r1_2'] . ',' . $_REQUEST['press_r2_2'] . ',' . $_REQUEST['press_r3_2'];
        $Press3_Raw = $_REQUEST['press_r1_3'] . ',' . $_REQUEST['press_r2_3'] . ',' . $_REQUEST['press_r3_3'];
        $Press4_Raw = $_REQUEST['press_r1_4'] . ',' . $_REQUEST['press_r2_4'] . ',' . $_REQUEST['press_r3_4'];
        $Press5_Raw = $_REQUEST['press_r1_5'] . ',' . $_REQUEST['press_r2_5'] . ',' . $_REQUEST['press_r3_5'];
        $Press6_Raw = $_REQUEST['press_r1_6'] . ',' . $_REQUEST['press_r2_6'] . ',' . $_REQUEST['press_r3_6'];
        $Press7_Raw = $_REQUEST['press_r1_7'] . ',' . $_REQUEST['press_r2_7'] . ',' . $_REQUEST['press_r3_7'];
        $Press8_Raw = $_REQUEST['press_r1_8'] . ',' . $_REQUEST['press_r2_8'] . ',' . $_REQUEST['press_r3_8'];
        $Press9_Raw = $_REQUEST['press_r1_9'] . ',' . $_REQUEST['press_r2_9'] . ',' . $_REQUEST['press_r3_9'];
        $Press10_Raw = $_REQUEST['press_r1_10'] . ',' . $_REQUEST['press_r2_10'] . ',' . $_REQUEST['press_r3_10'];

        $Press1_Cal = avg($Press1_Raw);
        $Press2_Cal = avg($Press2_Raw);
        $Press3_Cal = avg($Press3_Raw);
        $Press4_Cal = avg($Press4_Raw);
        $Press5_Cal = avg($Press5_Raw);
        $Press6_Cal = avg($Press6_Raw);
        $Press7_Cal = avg($Press7_Raw);
        $Press8_Cal = avg($Press8_Raw);
        $Press9_Cal = avg($Press9_Raw);
        $Press10_Cal = avg($Press10_Raw);



        //----------------------------SQL--------------------------------
        $sql = "INSERT INTO cal_pressure (
            Code,Room_T,Room_H,
            Press_Unit,
            Press1_Raw,Press2_Raw,Press3_Raw,Press4_Raw,Press5_Raw,Press6_Raw,Press7_Raw,Press8_Raw,Press9_Raw,Press10_Raw,
            Press1_Cal,Press2_Cal,Press3_Cal,Press4_Cal,Press5_Cal,Press6_Cal,Press7_Cal,Press8_Cal,Press9_Cal,Press10_Cal
            ) VALUES (
            '$hosp_code','$Room_T','$Room_H',
            '$Press_Unit',
            '$Press1_Raw','$Press2_Raw','$Press3_Raw','$Press4_Raw','$Press5_Raw','$Press6_Raw','$Press7_Raw','$Press8_Raw','$Press9_Raw','$Press10_Raw',
            '$Press1_Cal','$Press2_Cal','$Press3_Cal','$Press4_Cal','$Press5_Cal','$Press6_Cal','$Press7_Cal','$Press8_Cal','$Press9_Cal','$Press10_Cal'
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