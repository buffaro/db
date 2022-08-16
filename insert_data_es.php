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
        //----------------------------A_Setting-----------------------------------
        $A_Title = $_REQUEST['A_Title'];
        $A_Unit = $_REQUEST['A_Unit'];
        //-----------------------------A_Test------------------------------------
        $A_S_1 = $_REQUEST['A_S_1'];
        $A_S_2 = $_REQUEST['A_S_2'];
        $A_S_3 = $_REQUEST['A_S_3'];
        $A_S_4 = $_REQUEST['A_S_4'];
        $A_S_5 = $_REQUEST['A_S_5'];
        $A_S_6 = $_REQUEST['A_S_6'];
        $A_S_1_Raw = $_REQUEST['A_R1_1'] . ',' . $_REQUEST['A_R2_1'] . ',' . $_REQUEST['A_R3_1'];
        $A_S_2_Raw = $_REQUEST['A_R1_2'] . ',' . $_REQUEST['A_R2_2'] . ',' . $_REQUEST['A_R3_2'];
        $A_S_3_Raw = $_REQUEST['A_R1_3'] . ',' . $_REQUEST['A_R2_3'] . ',' . $_REQUEST['A_R3_3'];
        $A_S_4_Raw = $_REQUEST['A_R1_4'] . ',' . $_REQUEST['A_R2_4'] . ',' . $_REQUEST['A_R3_4'];
        $A_S_5_Raw = $_REQUEST['A_R1_5'] . ',' . $_REQUEST['A_R2_5'] . ',' . $_REQUEST['A_R3_5'];
        $A_S_6_Raw = $_REQUEST['A_R1_6'] . ',' . $_REQUEST['A_R2_6'] . ',' . $_REQUEST['A_R3_6'];
        $A_S_1_Cal = avg($A_S_1_Raw);
        $A_S_2_Cal = avg($A_S_2_Raw);
        $A_S_3_Cal = avg($A_S_3_Raw);
        $A_S_4_Cal = avg($A_S_4_Raw);
        $A_S_5_Cal = avg($A_S_5_Raw);
        $A_S_6_Cal = avg($A_S_6_Raw);
        //----------------------------B_Setting-----------------------------------
        $B_Title = $_REQUEST['B_Title'];
        $B_Unit = $_REQUEST['B_Unit'];
        //-----------------------------B_Test------------------------------------
        $B_S_1 = $_REQUEST['B_S_1'];
        $B_S_2 = $_REQUEST['B_S_2'];
        $B_S_3 = $_REQUEST['B_S_3'];
        $B_S_4 = $_REQUEST['B_S_4'];
        $B_S_5 = $_REQUEST['B_S_5'];
        $B_S_6 = $_REQUEST['B_S_6'];
        $B_S_1_Raw = $_REQUEST['B_R1_1'] . ',' . $_REQUEST['B_R2_1'] . ',' . $_REQUEST['B_R3_1'];
        $B_S_2_Raw = $_REQUEST['B_R1_2'] . ',' . $_REQUEST['B_R2_2'] . ',' . $_REQUEST['B_R3_2'];
        $B_S_3_Raw = $_REQUEST['B_R1_3'] . ',' . $_REQUEST['B_R2_3'] . ',' . $_REQUEST['B_R3_3'];
        $B_S_4_Raw = $_REQUEST['B_R1_4'] . ',' . $_REQUEST['B_R2_4'] . ',' . $_REQUEST['B_R3_4'];
        $B_S_5_Raw = $_REQUEST['B_R1_5'] . ',' . $_REQUEST['B_R2_5'] . ',' . $_REQUEST['B_R3_5'];
        $B_S_6_Raw = $_REQUEST['B_R1_6'] . ',' . $_REQUEST['B_R2_6'] . ',' . $_REQUEST['B_R3_6'];
        $B_S_1_Cal = avg($B_S_1_Raw);
        $B_S_2_Cal = avg($B_S_2_Raw);
        $B_S_3_Cal = avg($B_S_3_Raw);
        $B_S_4_Cal = avg($B_S_4_Raw);
        $B_S_5_Cal = avg($B_S_5_Raw);
        $B_S_6_Cal = avg($B_S_6_Raw);
        //----------------------------C_Setting-----------------------------------
        $C_Title = $_REQUEST['C_Title'];
        $C_Unit = $_REQUEST['C_Unit'];
        //-----------------------------C_Test------------------------------------
        $C_S_1 = $_REQUEST['C_S_1'];
        $C_S_2 = $_REQUEST['C_S_2'];
        $C_S_3 = $_REQUEST['C_S_3'];
        $C_S_4 = $_REQUEST['C_S_4'];
        $C_S_5 = $_REQUEST['C_S_5'];
        $C_S_6 = $_REQUEST['C_S_6'];
        $C_S_1_Raw = $_REQUEST['C_R1_1'] . ',' . $_REQUEST['C_R2_1'] . ',' . $_REQUEST['C_R3_1'];
        $C_S_2_Raw = $_REQUEST['C_R1_2'] . ',' . $_REQUEST['C_R2_2'] . ',' . $_REQUEST['C_R3_2'];
        $C_S_3_Raw = $_REQUEST['C_R1_3'] . ',' . $_REQUEST['C_R2_3'] . ',' . $_REQUEST['C_R3_3'];
        $C_S_4_Raw = $_REQUEST['C_R1_4'] . ',' . $_REQUEST['C_R2_4'] . ',' . $_REQUEST['C_R3_4'];
        $C_S_5_Raw = $_REQUEST['C_R1_5'] . ',' . $_REQUEST['C_R2_5'] . ',' . $_REQUEST['C_R3_5'];
        $C_S_6_Raw = $_REQUEST['C_R1_6'] . ',' . $_REQUEST['C_R2_6'] . ',' . $_REQUEST['C_R3_6'];
        $C_S_1_Cal = avg($C_S_1_Raw);
        $C_S_2_Cal = avg($C_S_2_Raw);
        $C_S_3_Cal = avg($C_S_3_Raw);
        $C_S_4_Cal = avg($C_S_4_Raw);
        $C_S_5_Cal = avg($C_S_5_Raw);
        $C_S_6_Cal = avg($C_S_6_Raw);
        //----------------------------D_Setting-----------------------------------
        $D_Title = $_REQUEST['D_Title'];
        $D_Unit = $_REQUEST['D_Unit'];
        //-----------------------------D_Test------------------------------------
        $D_S_1 = $_REQUEST['D_S_1'];
        $D_S_2 = $_REQUEST['D_S_2'];
        $D_S_3 = $_REQUEST['D_S_3'];
        $D_S_4 = $_REQUEST['D_S_4'];
        $D_S_5 = $_REQUEST['D_S_5'];
        $D_S_6 = $_REQUEST['D_S_6'];
        $D_S_1_Raw = $_REQUEST['D_R1_1'] . ',' . $_REQUEST['D_R2_1'] . ',' . $_REQUEST['D_R3_1'];
        $D_S_2_Raw = $_REQUEST['D_R1_2'] . ',' . $_REQUEST['D_R2_2'] . ',' . $_REQUEST['D_R3_2'];
        $D_S_3_Raw = $_REQUEST['D_R1_3'] . ',' . $_REQUEST['D_R2_3'] . ',' . $_REQUEST['D_R3_3'];
        $D_S_4_Raw = $_REQUEST['D_R1_4'] . ',' . $_REQUEST['D_R2_4'] . ',' . $_REQUEST['D_R3_4'];
        $D_S_5_Raw = $_REQUEST['D_R1_5'] . ',' . $_REQUEST['D_R2_5'] . ',' . $_REQUEST['D_R3_5'];
        $D_S_6_Raw = $_REQUEST['D_R1_6'] . ',' . $_REQUEST['D_R2_6'] . ',' . $_REQUEST['D_R3_6'];
        $D_S_1_Cal = avg($D_S_1_Raw);
        $D_S_2_Cal = avg($D_S_2_Raw);
        $D_S_3_Cal = avg($D_S_3_Raw);
        $D_S_4_Cal = avg($D_S_4_Raw);
        $D_S_5_Cal = avg($D_S_5_Raw);
        $D_S_6_Cal = avg($D_S_6_Raw);


        //----------------------------SQL--------------------------------
        $sql = "INSERT INTO cal_tens (
            Code,Room_T,Room_H,
            A_Title,A_Unit,
            A_S_1,A_S_2,A_S_3,A_S_4,A_S_5,A_S_6,
            A_S_1_Raw,A_S_2_Raw,A_S_3_Raw,A_S_4_Raw,A_S_5_Raw,A_S_6_Raw,
            A_S_1_Cal,A_S_2_Cal,A_S_3_Cal,A_S_4_Cal,A_S_5_Cal,A_S_6_Cal,
            B_Title,B_Unit,
            B_S_1,B_S_2,B_S_3,B_S_4,B_S_5,B_S_6,
            B_S_1_Raw,B_S_2_Raw,B_S_3_Raw,B_S_4_Raw,B_S_5_Raw,B_S_6_Raw,
            B_S_1_Cal,B_S_2_Cal,B_S_3_Cal,B_S_4_Cal,B_S_5_Cal,B_S_6_Cal,
            C_Title,C_Unit,
            C_S_1,C_S_2,C_S_3,C_S_4,C_S_5,C_S_6,
            C_S_1_Raw,C_S_2_Raw,C_S_3_Raw,C_S_4_Raw,C_S_5_Raw,C_S_6_Raw,
            C_S_1_Cal,C_S_2_Cal,C_S_3_Cal,C_S_4_Cal,C_S_5_Cal,C_S_6_Cal,
            D_Title,D_Unit,
            D_S_1,D_S_2,D_S_3,D_S_4,D_S_5,D_S_6,
            D_S_1_Raw,D_S_2_Raw,D_S_3_Raw,D_S_4_Raw,D_S_5_Raw,D_S_6_Raw,
            D_S_1_Cal,D_S_2_Cal,D_S_3_Cal,D_S_4_Cal,D_S_5_Cal,D_S_6_Cal
            ) VALUES (
            '$hosp_code','$Room_T','$Room_H',
            '$A_Title','$A_Unit',
            '$A_S_1','$A_S_2','$A_S_3','$A_S_4','$A_S_5','$A_S_6',
            '$A_S_1_Raw','$A_S_2_Raw','$A_S_3_Raw','$A_S_4_Raw','$A_S_5_Raw','$A_S_6_Raw',
            '$A_S_1_Cal','$A_S_2_Cal','$A_S_3_Cal','$A_S_4_Cal','$A_S_5_Cal','$A_S_6_Cal',
            '$B_Title','$B_Unit',
            '$B_S_1','$B_S_2','$B_S_3','$B_S_4','$B_S_5','$B_S_6',
            '$B_S_1_Raw','$B_S_2_Raw','$B_S_3_Raw','$B_S_4_Raw','$B_S_5_Raw','$B_S_6_Raw',
            '$B_S_1_Cal','$B_S_2_Cal','$B_S_3_Cal','$B_S_4_Cal','$B_S_5_Cal','$B_S_6_Cal',
            '$C_Title','$C_Unit',
            '$C_S_1','$C_S_2','$C_S_3','$C_S_4','$C_S_5','$C_S_6',
            '$C_S_1_Raw','$C_S_2_Raw','$C_S_3_Raw','$C_S_4_Raw','$C_S_5_Raw','$C_S_6_Raw',
            '$C_S_1_Cal','$C_S_2_Cal','$C_S_3_Cal','$C_S_4_Cal','$C_S_5_Cal','$C_S_6_Cal',
            '$D_Title','$D_Unit',
            '$D_S_1','$D_S_2','$D_S_3','$D_S_4','$D_S_5','$D_S_6',
            '$D_S_1_Raw','$D_S_2_Raw','$D_S_3_Raw','$D_S_4_Raw','$D_S_5_Raw','$D_S_6_Raw',
            '$D_S_1_Cal','$D_S_2_Cal','$D_S_3_Cal','$D_S_4_Cal','$D_S_5_Cal','$D_S_6_Cal'
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