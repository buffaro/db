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
        //----------------------------Temp Set--------------------------------
        $S1 = $_REQUEST['T1_Set'];
        $S2 = $_REQUEST['T2_Set'];
        $S3 = $_REQUEST['T3_Set'];
        $S4 = $_REQUEST['T4_Set'];
        //----------------------------Temp 1----------------------------------
        $S_UUT1_Raw = $_REQUEST['T1_UUTr1'] . ',' . $_REQUEST['T1_UUTr2'] . ',' . $_REQUEST['T1_UUTr3'];
        $S_Mas1_Raw = $_REQUEST['T1_Masr1'] . ',' . $_REQUEST['T1_Masr2'] . ',' . $_REQUEST['T1_Masr3'];

        $S_UUT1_Cal = avg($S_UUT1_Raw);
        $S_Mas1_Cal = avg($S_Mas1_Raw);
        //----------------------------Temp 2----------------------------------
        $S_UUT2_Raw = $_REQUEST['T2_UUTr1'] . ',' . $_REQUEST['T2_UUTr2'] . ',' . $_REQUEST['T2_UUTr3'];
        $S_Mas2_Raw = $_REQUEST['T2_Masr1'] . ',' . $_REQUEST['T2_Masr2'] . ',' . $_REQUEST['T2_Masr3'];

        $S_UUT2_Cal = avg($S_UUT2_Raw);
        $S_Mas2_Cal = avg($S_Mas2_Raw);
        //----------------------------Temp 3----------------------------------
        $S_UUT3_Raw = $_REQUEST['T3_UUTr1'] . ',' . $_REQUEST['T3_UUTr2'] . ',' . $_REQUEST['T3_UUTr3'];
        $S_Mas3_Raw = $_REQUEST['T3_Masr1'] . ',' . $_REQUEST['T3_Masr2'] . ',' . $_REQUEST['T3_Masr3'];

        $S_UUT3_Cal = avg($S_UUT3_Raw);
        $S_Mas3_Cal = avg($S_Mas3_Raw);
        //----------------------------Temp 4----------------------------------
        $S_UUT4_Raw = $_REQUEST['T4_UUTr1'] . ',' . $_REQUEST['T4_UUTr2'] . ',' . $_REQUEST['T4_UUTr3'];
        $S_Mas4_Raw = $_REQUEST['T4_Masr1'] . ',' . $_REQUEST['T4_Masr2'] . ',' . $_REQUEST['T4_Masr3'];

        $S_UUT4_Cal = avg($S_UUT4_Raw);
        $S_Mas4_Cal = avg($S_Mas4_Raw);


        //----------------------------SQL--------------------------------
        $sql = "INSERT INTO cal_temp (
            Code,Room_T,Room_H,
            S1,S2,S3,S4,
            S_UUT1_Raw,S_Mas1_Raw,
            S_UUT1_Cal,S_Mas1_Cal,
            S_UUT2_Raw,S_Mas2_Raw,
            S_UUT2_Cal,S_Mas2_Cal,
            S_UUT3_Raw,S_Mas3_Raw,
            S_UUT3_Cal,S_Mas3_Cal,
            S_UUT4_Raw,S_Mas4_Raw,
            S_UUT4_Cal,S_Mas4_Cal


            ) VALUES (
            '$hosp_code','$Room_T','$Room_H',
            '$S1','$S2','$S3','$S4',
            '$S_UUT1_Raw','$S_Mas1_Raw',
            '$S_UUT1_Cal','$S_Mas1_Cal',
            '$S_UUT2_Raw','$S_Mas2_Raw',
            '$S_UUT2_Cal','$S_Mas2_Cal',
            '$S_UUT3_Raw','$S_Mas3_Raw',
            '$S_UUT3_Cal','$S_Mas3_Cal',
            '$S_UUT4_Raw','$S_Mas4_Raw',
            '$S_UUT4_Cal','$S_Mas4_Cal'
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