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
        //----------------------------Volume Unit-----------------------------------
        $Vol_Unit = $_REQUEST['Vol_Unit'];
        //-----------------------------Volume------------------------------------
        $Vol1 = $_REQUEST['vol_s1'];
        $Vol2 = $_REQUEST['vol_s2'];
        $Vol3 = $_REQUEST['vol_s3'];
        $Vol4 = $_REQUEST['vol_s4'];
        $Vol5 = $_REQUEST['vol_s5'];
        $Vol6 = $_REQUEST['vol_s6'];
        $Vol7 = $_REQUEST['vol_s7'];
        $Vol8 = $_REQUEST['vol_s8'];
        $Vol9 = $_REQUEST['vol_s9'];
        $Vol10 = $_REQUEST['vol_s10'];

        $Vol1_Raw = $_REQUEST['vol_r1_1'] . ',' . $_REQUEST['vol_r2_1'] . ',' . $_REQUEST['vol_r3_1'];
        $Vol2_Raw = $_REQUEST['vol_r1_2'] . ',' . $_REQUEST['vol_r2_2'] . ',' . $_REQUEST['vol_r3_2'];
        $Vol3_Raw = $_REQUEST['vol_r1_3'] . ',' . $_REQUEST['vol_r2_3'] . ',' . $_REQUEST['vol_r3_3'];
        $Vol4_Raw = $_REQUEST['vol_r1_4'] . ',' . $_REQUEST['vol_r2_4'] . ',' . $_REQUEST['vol_r3_4'];
        $Vol5_Raw = $_REQUEST['vol_r1_5'] . ',' . $_REQUEST['vol_r2_5'] . ',' . $_REQUEST['vol_r3_5'];
        $Vol6_Raw = $_REQUEST['vol_r1_6'] . ',' . $_REQUEST['vol_r2_6'] . ',' . $_REQUEST['vol_r3_6'];
        $Vol7_Raw = $_REQUEST['vol_r1_7'] . ',' . $_REQUEST['vol_r2_7'] . ',' . $_REQUEST['vol_r3_7'];
        $Vol8_Raw = $_REQUEST['vol_r1_8'] . ',' . $_REQUEST['vol_r2_8'] . ',' . $_REQUEST['vol_r3_8'];
        $Vol9_Raw = $_REQUEST['vol_r1_9'] . ',' . $_REQUEST['vol_r2_9'] . ',' . $_REQUEST['vol_r3_9'];
        $Vol10_Raw = $_REQUEST['vol_r1_10'] . ',' . $_REQUEST['vol_r2_10'] . ',' . $_REQUEST['vol_r3_10'];

        $Vol1_Cal = avg($Vol1_Raw);
        $Vol2_Cal = avg($Vol2_Raw);
        $Vol3_Cal = avg($Vol3_Raw);
        $Vol4_Cal = avg($Vol4_Raw);
        $Vol5_Cal = avg($Vol5_Raw);
        $Vol6_Cal = avg($Vol6_Raw);
        $Vol7_Cal = avg($Vol7_Raw);
        $Vol8_Cal = avg($Vol8_Raw);
        $Vol9_Cal = avg($Vol9_Raw);
        $Vol10_Cal = avg($Vol10_Raw);



        //----------------------------SQL--------------------------------
        $sql = "INSERT INTO cal_spiro (
            Code,Room_T,Room_H,
            Vol_Unit,
            Vol1_Raw,Vol2_Raw,Vol3_Raw,Vol4_Raw,Vol5_Raw,Vol6_Raw,Vol7_Raw,Vol8_Raw,Vol9_Raw,Vol10_Raw,
            Vol1_Cal,Vol2_Cal,Vol3_Cal,Vol4_Cal,Vol5_Cal,Vol6_Cal,Vol7_Cal,Vol8_Cal,Vol9_Cal,Vol10_Cal
            ) VALUES (
            '$hosp_code','$Room_T','$Room_H',
            '$Vol_Unit',
            '$Vol1_Raw','$Vol2_Raw','$Vol3_Raw','$Vol4_Raw','$Vol5_Raw','$Vol6_Raw','$Vol7_Raw','$Vol8_Raw','$Vol9_Raw','$Vol10_Raw',
            '$Vol1_Cal','$Vol2_Cal','$Vol3_Cal','$Vol4_Cal','$Vol5_Cal','$Vol6_Cal','$Vol7_Cal','$Vol8_Cal','$Vol9_Cal','$Vol10_Cal'
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