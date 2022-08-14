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

        //----------------------------Force--------------------------------
        $S_Force1_Raw = $_REQUEST['force_r1_1'] . ',' . $_REQUEST['force_r2_1'] . ',' . $_REQUEST['force_r3_1'];
        $S_Force2_Raw = $_REQUEST['force_r1_2'] . ',' . $_REQUEST['force_r2_2'] . ',' . $_REQUEST['force_r3_2'];
        $S_Force3_Raw = $_REQUEST['force_r1_3'] . ',' . $_REQUEST['force_r2_3'] . ',' . $_REQUEST['force_r3_3'];
        $S_Force4_Raw = $_REQUEST['force_r1_4'] . ',' . $_REQUEST['force_r2_4'] . ',' . $_REQUEST['force_r3_4'];

        $S_Force1_Cal = avg($S_Force1_Raw);
        $S_Force2_Cal = avg($S_Force2_Raw);
        $S_Force3_Cal = avg($S_Force3_Raw);
        $S_Force4_Cal = avg($S_Force4_Raw);
        //----------------------------Rest--------------------------------
        $S_Rest1_Raw = $_REQUEST['rest_r1_1'] . ',' . $_REQUEST['rest_r2_1'] . ',' . $_REQUEST['rest_r3_1'];
        $S_Rest2_Raw = $_REQUEST['rest_r1_2'] . ',' . $_REQUEST['rest_r2_2'] . ',' . $_REQUEST['rest_r3_2'];
        $S_Rest3_Raw = $_REQUEST['rest_r1_3'] . ',' . $_REQUEST['rest_r2_3'] . ',' . $_REQUEST['rest_r3_3'];
        $S_Rest4_Raw = $_REQUEST['rest_r1_4'] . ',' . $_REQUEST['rest_r2_4'] . ',' . $_REQUEST['rest_r3_4'];

        $S_Rest1_Cal = avg($S_Rest1_Raw);
        $S_Rest2_Cal = avg($S_Rest2_Raw);
        $S_Rest3_Cal = avg($S_Rest3_Raw);
        $S_Rest4_Cal = avg($S_Rest4_Raw);
        //----------------------------Force Time--------------------------
        $T_Force1_Raw = $_REQUEST['tforce_r1_1'] . ',' . $_REQUEST['tforce_r2_1'] . ',' . $_REQUEST['tforce_r3_1'];
        $T_Force2_Raw = $_REQUEST['tforce_r1_2'] . ',' . $_REQUEST['tforce_r2_2'] . ',' . $_REQUEST['tforce_r3_2'];
        $T_Force3_Raw = $_REQUEST['tforce_r1_3'] . ',' . $_REQUEST['tforce_r2_3'] . ',' . $_REQUEST['tforce_r3_3'];
        $T_Force4_Raw = $_REQUEST['tforce_r1_4'] . ',' . $_REQUEST['tforce_r2_4'] . ',' . $_REQUEST['tforce_r3_4'];

        $T_Force1_Cal = avg($T_Force1_Raw);
        $T_Force2_Cal = avg($T_Force2_Raw);
        $T_Force3_Cal = avg($T_Force3_Raw);
        $T_Force4_Cal = avg($T_Force4_Raw);
        //----------------------------Rest Time----------------------------
        $T_Rest1_Raw = $_REQUEST['trest_r1_1'] . ',' . $_REQUEST['trest_r2_1'] . ',' . $_REQUEST['trest_r3_1'];
        $T_Rest2_Raw = $_REQUEST['trest_r1_2'] . ',' . $_REQUEST['trest_r2_2'] . ',' . $_REQUEST['trest_r3_2'];
        $T_Rest3_Raw = $_REQUEST['trest_r1_3'] . ',' . $_REQUEST['trest_r2_3'] . ',' . $_REQUEST['trest_r3_3'];
        $T_Rest4_Raw = $_REQUEST['trest_r1_4'] . ',' . $_REQUEST['trest_r2_4'] . ',' . $_REQUEST['trest_r3_4'];

        $T_Rest1_Cal = avg($T_Rest1_Raw);
        $T_Rest2_Cal = avg($T_Rest2_Raw);
        $T_Rest3_Cal = avg($T_Rest3_Raw);
        $T_Rest4_Cal = avg($T_Rest4_Raw);


        //----------------------------SQL--------------------------------
        $sql = "INSERT INTO cal_traction (
            Code,
            S_Force1_Raw,S_Force2_Raw,S_Force3_Raw,S_Force4_Raw,
            S_Force1_Cal,S_Force2_Cal,S_Force3_Cal,S_Force4_Cal,
            S_Rest1_Raw,S_Rest2_Raw,S_Rest3_Raw,S_Rest4_Raw,
            S_Rest1_Cal,S_Rest2_Cal,S_Rest3_Cal,S_Rest4_Cal,
            T_Force1_Raw,T_Force2_Raw,T_Force3_Raw,T_Force4_Raw,
            T_Force1_Cal,T_Force2_Cal,T_Force3_Cal,T_Force4_Cal,
            T_Rest1_Raw,T_Rest2_Raw,T_Rest3_Raw,T_Rest4_Raw,
            T_Rest1_Cal,T_Rest2_Cal,T_Rest3_Cal,T_Rest4_Cal
            ) VALUES (
            '$hosp_code',
            '$S_Force1_Raw','$S_Force2_Raw','$S_Force3_Raw','$S_Force4_Raw',
            '$S_Force1_Cal','$S_Force2_Cal','$S_Force3_Cal','$S_Force4_Cal',
            '$S_Rest1_Raw','$S_Rest2_Raw','$S_Rest3_Raw','$S_Rest4_Raw',
            '$S_Rest1_Cal','$S_Rest2_Cal','$S_Rest3_Cal','$S_Rest4_Cal',
            '$T_Force1_Raw','$T_Force2_Raw','$T_Force3_Raw','$T_Force4_Raw',
            '$T_Force1_Cal','$T_Force2_Cal','$T_Force3_Cal','$T_Force4_Cal',
            '$T_Rest1_Raw','$T_Rest2_Raw','$T_Rest3_Raw','$T_Rest4_Raw',
            '$T_Rest1_Cal','$T_Rest2_Cal','$T_Rest3_Cal','$T_Rest4_Cal'
            )";

        $Caldate = date("Y-m-d");
        $upCaldate = "UPDATE cpy SET Caldate = '$Caldate' WHERE Code = '$hosp_code'";
        if (mysqli_query($conn, $sql) && mysqli_query($conn, $upCaldate)) {
            echo "<button type='button' class='btn btn-success'>เพิ่มข้อมูลเรียบร้อยแล้ว</button>";
            header('refresh: 3; url=list.php');
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
        ?>
    </center>



</body>

</html>