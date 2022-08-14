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

        //----------------------------ECG--------------------------------
        $S1_HR1_Raw = $_REQUEST['ecgr11_60'] . ',' . $_REQUEST['ecgr21_60'] . ',' . $_REQUEST['ecgr31_60'];
        $S1_HR2_Raw = $_REQUEST['ecgr11_90'] . ',' . $_REQUEST['ecgr21_90'] . ',' . $_REQUEST['ecgr31_90'];
        $S1_HR3_Raw = $_REQUEST['ecgr11_120'] . ',' . $_REQUEST['ecgr21_120'] . ',' . $_REQUEST['ecgr31_120'];
        $S1_HR4_Raw = $_REQUEST['ecgr11_150'] . ',' . $_REQUEST['ecgr21_150'] . ',' . $_REQUEST['ecgr31_150'];
        $S1_HR5_Raw = $_REQUEST['ecgr11_180'] . ',' . $_REQUEST['ecgr21_180'] . ',' . $_REQUEST['ecgr31_180'];
        $S1_HR6_Raw = $_REQUEST['ecgr11_210'] . ',' . $_REQUEST['ecgr21_210'] . ',' . $_REQUEST['ecgr31_210'];

        $S1_HR1_Cal = avg($S1_HR1_Raw);
        $S1_HR2_Cal = avg($S1_HR2_Raw);
        $S1_HR3_Cal = avg($S1_HR3_Raw);
        $S1_HR4_Cal = avg($S1_HR4_Raw);
        $S1_HR5_Cal = avg($S1_HR5_Raw);
        $S1_HR6_Cal = avg($S1_HR6_Raw);

        $S2_HR1_Raw = $_REQUEST['ecgr12_60'] . ',' . $_REQUEST['ecgr22_60'] . ',' . $_REQUEST['ecgr32_60'];
        $S2_HR2_Raw = $_REQUEST['ecgr12_90'] . ',' . $_REQUEST['ecgr22_90'] . ',' . $_REQUEST['ecgr32_90'];
        $S2_HR3_Raw = $_REQUEST['ecgr12_120'] . ',' . $_REQUEST['ecgr22_120'] . ',' . $_REQUEST['ecgr32_120'];
        $S2_HR4_Raw = $_REQUEST['ecgr12_150'] . ',' . $_REQUEST['ecgr22_150'] . ',' . $_REQUEST['ecgr32_150'];
        $S2_HR5_Raw = $_REQUEST['ecgr12_180'] . ',' . $_REQUEST['ecgr22_180'] . ',' . $_REQUEST['ecgr32_180'];
        $S2_HR6_Raw = $_REQUEST['ecgr12_210'] . ',' . $_REQUEST['ecgr22_210'] . ',' . $_REQUEST['ecgr32_210'];

        $S2_HR1_Cal = avg($S2_HR1_Raw);
        $S2_HR2_Cal = avg($S2_HR2_Raw);
        $S2_HR3_Cal = avg($S2_HR3_Raw);
        $S2_HR4_Cal = avg($S2_HR4_Raw);
        $S2_HR5_Cal = avg($S2_HR5_Raw);
        $S2_HR6_Cal = avg($S2_HR6_Raw);


        //----------------------------SQL--------------------------------
        $sql = "INSERT INTO cal_fetal (
            Code,
            S1_HR1_Raw,S1_HR2_Raw,S1_HR3_Raw,S1_HR4_Raw,S1_HR5_Raw,S1_HR6_Raw,
            S1_HR1_Cal,S1_HR2_Cal,S1_HR3_Cal,S1_HR4_Cal,S1_HR5_Cal,S1_HR6_Cal,
            S2_HR1_Raw,S2_HR2_Raw,S2_HR3_Raw,S2_HR4_Raw,S2_HR5_Raw,S2_HR6_Raw,
            S2_HR1_Cal,S2_HR2_Cal,S2_HR3_Cal,S2_HR4_Cal,S2_HR5_Cal,S2_HR6_Cal
            ) VALUES (
            '$hosp_code',
            '$S1_HR1_Raw','$S1_HR2_Raw','$S1_HR3_Raw','$S1_HR4_Raw','$S1_HR4_Raw','$S1_HR5_Raw',
            '$S1_HR1_Cal','$S1_HR2_Cal','$S1_HR3_Cal','$S1_HR4_Cal','$S1_HR4_Cal','$S1_HR5_Cal',
            '$S2_HR1_Raw','$S2_HR2_Raw','$S2_HR3_Raw','$S2_HR4_Raw','$S2_HR4_Raw','$S2_HR5_Raw',
            '$S2_HR1_Cal','$S2_HR2_Cal','$S2_HR3_Cal','$S2_HR4_Cal','$S2_HR4_Cal','$S2_HR5_Cal'
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