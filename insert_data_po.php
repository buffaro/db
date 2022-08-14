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
        $S_HR1_Raw = $_REQUEST['ecgr1_60'] . ',' . $_REQUEST['ecgr2_60'] . ',' . $_REQUEST['ecgr3_60'];
        $S_HR2_Raw = $_REQUEST['ecgr1_90'] . ',' . $_REQUEST['ecgr2_90'] . ',' . $_REQUEST['ecgr3_90'];
        $S_HR3_Raw = $_REQUEST['ecgr1_120'] . ',' . $_REQUEST['ecgr2_120'] . ',' . $_REQUEST['ecgr3_120'];
        $S_HR1_Cal = avg($S_HR1_Raw);
        $S_HR2_Cal = avg($S_HR2_Raw);
        $S_HR3_Cal = avg($S_HR3_Raw);
        //----------------------------SpO2--------------------------------
        $S_PO1_Raw = $_REQUEST['por1_90'] . ',' . $_REQUEST['por2_90'] . ',' . $_REQUEST['por3_90'];
        $S_PO2_Raw = $_REQUEST['por1_94'] . ',' . $_REQUEST['por2_94'] . ',' . $_REQUEST['por3_94'];
        $S_PO3_Raw = $_REQUEST['por1_98'] . ',' . $_REQUEST['por2_98'] . ',' . $_REQUEST['por3_98'];
        $S_PO1_Cal = avg($S_PO1_Raw);
        $S_PO2_Cal = avg($S_PO2_Raw);
        $S_PO3_Cal = avg($S_PO3_Raw);
        //----------------------------SQL--------------------------------
        $sql = "INSERT INTO cal_po (
            Code,
            S_HR1_Raw,S_HR2_Raw,S_HR3_Raw,
            S_HR1_Cal,S_HR2_Cal,S_HR3_Cal,
            S_PO1_Raw,S_PO2_Raw,S_PO3_Raw,
            S_PO1_Cal,S_PO2_Cal,S_PO3_Cal
            ) VALUES (
            '$hosp_code',
            '$S_HR1_Raw','$S_HR2_Raw','$S_HR3_Raw',
            '$S_HR1_Cal','$S_HR2_Cal','$S_HR3_Cal',
            '$S_PO1_Raw','$S_PO2_Raw','$S_PO3_Raw',
            '$S_PO1_Cal','$S_PO2_Cal','$S_PO3_Cal'
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