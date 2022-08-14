<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>บริษัท ไอโซเทค อินสตรูเมนท์ (ไทยแลนด์) จำกัด</title>
    <link rel="icon" type="image/x-icon" href="../assets/images/isorbgo.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.crbudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
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

        //----------------------------Speed--------------------------------
        $S_Cen1 = $_REQUEST['Spds1'];
        $S_Cen2 = $_REQUEST['Spds2'];
        $S_Cen3 = $_REQUEST['Spds3'];
        $S_Cen4 = $_REQUEST['Spds4'];


        $S_Cen1_Raw = $_REQUEST['Spdr1_1'] . ',' . $_REQUEST['Spdr2_1'] . ',' . $_REQUEST['Spdr3_1'];
        $S_Cen2_Raw = $_REQUEST['Spdr1_2'] . ',' . $_REQUEST['Spdr2_2'] . ',' . $_REQUEST['Spdr3_2'];
        $S_Cen3_Raw = $_REQUEST['Spdr1_3'] . ',' . $_REQUEST['Spdr2_3'] . ',' . $_REQUEST['Spdr3_3'];
        $S_Cen4_Raw = $_REQUEST['Spdr1_4'] . ',' . $_REQUEST['Spdr2_4'] . ',' . $_REQUEST['Spdr3_4'];

        $S_Cen1_Cal = avg($S_Cen1_Raw);
        $S_Cen2_Cal = avg($S_Cen2_Raw);
        $S_Cen3_Cal = avg($S_Cen3_Raw);
        $S_Cen4_Cal = avg($S_Cen4_Raw);
        //----------------------------Timer--------------------------------
        $S_Time1_Raw = $_REQUEST['Timer1_5'] . ',' . $_REQUEST['Timer2_5'] . ',' . $_REQUEST['Timer3_5'];
        $S_Time2_Raw = $_REQUEST['Timer1_10'] . ',' . $_REQUEST['Timer2_10'] . ',' . $_REQUEST['Timer3_10'];

        $S_Time1_Cal = avg($S_Time1_Raw);
        $S_Time2_Cal = avg($S_Time2_Raw);

        //----------------------------SQL--------------------------------
        $sql = "INSERT INTO cal_cen (
            Code,
            S_Cen1,S_Cen2,S_Cen3,S_Cen4,
            S_Cen1_Raw,S_Cen2_Raw,S_Cen3_Raw,S_Cen4_Raw,
            S_Cen1_Cal,S_Cen2_Cal,S_Cen3_Cal,S_Cen4_Cal,
            S_Time1_Raw,S_Time2_Raw,
            S_Time1_Cal,S_Time2_Cal
            ) VALUES (
            '$hosp_code',
            '$S_Cen1','$S_Cen2','$S_Cen3','$S_Cen4',
            '$S_Cen1_Raw','$S_Cen2_Raw','$S_Cen3_Raw','$S_Cen4_Raw',
            '$S_Cen1_Cal','$S_Cen2_Cal','$S_Cen3_Cal','$S_Cen4_Cal',
            '$S_Time1_Raw','$S_Time2_Raw',
            '$S_Time1_Cal','$S_Time2_Cal'

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