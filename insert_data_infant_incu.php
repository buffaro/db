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
        //----------------------------Temp Set-----------------------------------
        $AirT = $_REQUEST['AirT_Set'];
        $SkinT = $_REQUEST['SkinT_Set'];
        //----------------------------Air Temp 1----------------------------------
        $S_UUT1_Raw = $_REQUEST['T1_UUTr1'] . ',' . $_REQUEST['T1_UUTr2'] . ',' . $_REQUEST['T1_UUTr3'];
        $S_Mas1_Raw = $_REQUEST['T1_Masr1'] . ',' . $_REQUEST['T1_Masr2'] . ',' . $_REQUEST['T1_Masr3'];
        $S_UUT1_Cal = avg($S_UUT1_Raw);
        $S_Mas1_Cal = avg($S_Mas1_Raw);
        //----------------------------Skin Temp 2----------------------------------
        $S_UUT2_Raw = $_REQUEST['T2_UUTr1'] . ',' . $_REQUEST['T2_UUTr2'] . ',' . $_REQUEST['T2_UUTr3'];
        $S_Mas2_Raw = $_REQUEST['T2_Masr1'] . ',' . $_REQUEST['T2_Masr2'] . ',' . $_REQUEST['T2_Masr3'];
        $S_UUT2_Cal = avg($S_UUT2_Raw);
        $S_Mas2_Cal = avg($S_Mas2_Raw);
        //----------------------------Other--------------------------------------
        $Sound = $_REQUEST['Sound'];
        $Flow = $_REQUEST['Flow'];
        $HUM = $_REQUEST['HUM'];
        //----------------------------Flow Meter----------------------------------
        $Fl1_Raw = $_REQUEST['flowr1_3'] . ',' . $_REQUEST['flowr2_3'] . ',' . $_REQUEST['flowr3_3'];
        $Fl2_Raw = $_REQUEST['flowr1_5'] . ',' . $_REQUEST['flowr2_5'] . ',' . $_REQUEST['flowr3_5'];
        $Fl3_Raw = $_REQUEST['flowr3_10'] . ',' . $_REQUEST['flowr3_10'] . ',' . $_REQUEST['flowr3_10'];
        $Fl1_Cal = avg($Fl1_Raw);
        $Fl2_Cal = avg($Fl2_Raw);
        $Fl3_Cal = avg($Fl3_Raw);
        //-----------------------------Suction------------------------------------
        $Suc1_Raw = $_REQUEST['sucr1_100'] . ',' . $_REQUEST['sucr2_100'] . ',' . $_REQUEST['sucr3_100'];
        $Suc2_Raw = $_REQUEST['sucr1_200'] . ',' . $_REQUEST['sucr2_200'] . ',' . $_REQUEST['sucr3_200'];
        $Suc3_Raw = $_REQUEST['sucr1_300'] . ',' . $_REQUEST['sucr2_300'] . ',' . $_REQUEST['sucr3_300'];
        $Suc4_Raw = $_REQUEST['sucr1_400'] . ',' . $_REQUEST['sucr2_400'] . ',' . $_REQUEST['sucr3_400'];
        $Suc5_Raw = $_REQUEST['sucr1_500'] . ',' . $_REQUEST['sucr2_500'] . ',' . $_REQUEST['sucr3_500'];
        $SucMax_Raw = $_REQUEST['sucr1_max'] . ',' . $_REQUEST['sucr2_max'] . ',' . $_REQUEST['sucr3_max'];
        $Suc1_Cal = avg($Suc1_Raw);
        $Suc2_Cal = avg($Suc2_Raw);
        $Suc3_Cal = avg($Suc3_Raw);
        $Suc4_Cal = avg($Suc4_Raw);
        $Suc5_Cal = avg($Suc5_Raw);
        $SucMax_Cal = avg($SucMax_Raw);


        //----------------------------SQL--------------------------------
        $sql = "INSERT INTO cal_infant_incu (
            Code,
            AirT,SkinT,
            S_UUT1_Raw,S_Mas1_Raw,
            S_UUT1_Cal,S_Mas1_Cal,
            S_UUT2_Raw,S_Mas2_Raw,
            S_UUT2_Cal,S_Mas2_Cal,
            Sound,Flow,HUM,
            Fl1_Raw,Fl2_Raw,Fl3_Raw,
            Fl1_Cal,Fl2_Cal,Fl3_Cal,
            Suc1_Raw,Suc2_Raw,Suc3_Raw,Suc4_Raw,Suc5_Raw,SucMax_Raw,
            Suc1_Cal,Suc2_Cal,Suc3_Cal,Suc4_Cal,Suc5_Cal,SucMax_Cal
            ) VALUES (
            '$hosp_code',
            '$AirT','$SkinT',
            '$S_UUT1_Raw','$S_Mas1_Raw',
            '$S_UUT1_Cal','$S_Mas1_Cal',
            '$S_UUT2_Raw','$S_Mas2_Raw',
            '$S_UUT2_Cal','$S_Mas2_Cal',
            '$Sound','$Flow','$HUM',
            '$Fl1_Raw','$Fl2_Raw','$Fl3_Raw',
            '$Fl1_Cal','$Fl2_Cal','$Fl3_Cal',
            '$Suc1_Raw','$Suc2_Raw','$Suc3_Raw','$Suc4_Raw','$Suc5_Raw','$SucMax_Raw',
            '$Suc1_Cal','$Suc2_Cal','$Suc3_Cal','$Suc4_Cal','$Suc5_Cal','$SucMax_Cal'
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