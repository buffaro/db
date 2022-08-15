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
        //----------------------------Rate 10----------------------------------
        $A_UUT1_Cal = $_REQUEST['A_R1_UUT'];
        $A_Mas1_Cal = $_REQUEST['A_R1_MASTER'];
        $A_UUT2_Cal = $_REQUEST['A_R2_UUT'];
        $A_Mas2_Cal = $_REQUEST['A_R2_MASTER'];
        $A_UUT3_Cal = $_REQUEST['A_R3_UUT'];
        $A_Mas3_Cal = $_REQUEST['A_R3_MASTER'];
        $A_UUT4_Cal = $_REQUEST['A_R4_UUT'];
        $A_Mas4_Cal = $_REQUEST['A_R4_MASTER'];
        //----------------------------Rate 20----------------------------------
        $B_UUT1_Cal = $_REQUEST['B_R1_UUT'];
        $B_Mas1_Cal = $_REQUEST['B_R1_MASTER'];
        $B_UUT2_Cal = $_REQUEST['B_R2_UUT'];
        $B_Mas2_Cal = $_REQUEST['B_R2_MASTER'];
        $B_UUT3_Cal = $_REQUEST['B_R3_UUT'];
        $B_Mas3_Cal = $_REQUEST['B_R3_MASTER'];
        $B_UUT4_Cal = $_REQUEST['B_R4_UUT'];
        $B_Mas4_Cal = $_REQUEST['B_R4_MASTER'];
        //----------------------------Rate 30----------------------------------
        $C_UUT1_Cal = $_REQUEST['C_R1_UUT'];
        $C_Mas1_Cal = $_REQUEST['C_R1_MASTER'];
        $C_UUT2_Cal = $_REQUEST['C_R2_UUT'];
        $C_Mas2_Cal = $_REQUEST['C_R2_MASTER'];
        $C_UUT3_Cal = $_REQUEST['C_R3_UUT'];
        $C_Mas3_Cal = $_REQUEST['C_R3_MASTER'];
        $C_UUT4_Cal = $_REQUEST['C_R4_UUT'];
        $C_Mas4_Cal = $_REQUEST['C_R4_MASTER'];

        //----------------------------SQL--------------------------------
        $sql = "INSERT INTO cal_infant_ven (
            Code,Room_T,Room_H,
            A_UUT1_Cal,A_Mas1_Cal,A_UUT2_Cal,A_Mas2_Cal,A_UUT3_Cal,A_Mas3_Cal,A_UUT4_Cal,A_Mas4_Cal,
            B_UUT1_Cal,B_Mas1_Cal,B_UUT2_Cal,B_Mas2_Cal,B_UUT3_Cal,B_Mas3_Cal,B_UUT4_Cal,B_Mas4_Cal,
            C_UUT1_Cal,C_Mas1_Cal,C_UUT2_Cal,C_Mas2_Cal,C_UUT3_Cal,C_Mas3_Cal,C_UUT4_Cal,C_Mas4_Cal
            ) VALUES (
            '$hosp_code','$Room_T','$Room_H',
            '$A_UUT1_Cal','$A_Mas1_Cal','$A_UUT2_Cal','$A_Mas2_Cal','$A_UUT3_Cal','$A_Mas3_Cal','$A_UUT4_Cal','$A_Mas4_Cal',
            '$B_UUT1_Cal','$B_Mas1_Cal','$B_UUT2_Cal','$B_Mas2_Cal','$B_UUT3_Cal','$B_Mas3_Cal','$B_UUT4_Cal','$B_Mas4_Cal',
            '$C_UUT1_Cal','$C_Mas1_Cal','$C_UUT2_Cal','$C_Mas2_Cal','$C_UUT3_Cal','$C_Mas3_Cal','$C_UUT4_Cal','$C_Mas4_Cal'
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