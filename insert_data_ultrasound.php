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
        //----------------------------Setting--------------------------------
        $A_Head = $_REQUEST['A_Head'];
        $A_Unit = $_REQUEST['A_Unit'];
        $B_Head = $_REQUEST['B_Head'];
        $B_Unit = $_REQUEST['B_Unit'];

        //--------------------------Power Set------------------------------
        $A_Watt_S_1 = $_REQUEST['A_Watt_S_1'];
        $A_Watt_S_2 = $_REQUEST['A_Watt_S_2'];
        $A_Watt_S_3 = $_REQUEST['A_Watt_S_3'];
        $A_Watt_S_4 = $_REQUEST['A_Watt_S_4'];
        $A_Watt_S_5 = $_REQUEST['A_Watt_S_5'];
        $B_Watt_S_1 = $_REQUEST['B_Watt_S_1'];
        $B_Watt_S_2 = $_REQUEST['B_Watt_S_2'];
        $B_Watt_S_3 = $_REQUEST['B_Watt_S_3'];
        $B_Watt_S_4 = $_REQUEST['B_Watt_S_4'];
        $B_Watt_S_5 = $_REQUEST['B_Watt_S_5'];
        //----------------------------Power--------------------------------
        $A_Watt_Raw_1 = $_REQUEST['A_Watt_R1_1'] . ',' . $_REQUEST['A_Watt_R2_1'] . ',' . $_REQUEST['A_Watt_R3_1'];
        $A_Watt_Raw_2 = $_REQUEST['A_Watt_R1_2'] . ',' . $_REQUEST['A_Watt_R2_2'] . ',' . $_REQUEST['A_Watt_R3_2'];
        $A_Watt_Raw_3 = $_REQUEST['A_Watt_R1_3'] . ',' . $_REQUEST['A_Watt_R2_3'] . ',' . $_REQUEST['A_Watt_R3_3'];
        $A_Watt_Raw_4 = $_REQUEST['A_Watt_R1_4'] . ',' . $_REQUEST['A_Watt_R2_4'] . ',' . $_REQUEST['A_Watt_R3_4'];
        $A_Watt_Raw_5 = $_REQUEST['A_Watt_R1_5'] . ',' . $_REQUEST['A_Watt_R2_5'] . ',' . $_REQUEST['A_Watt_R3_5'];
        $A_Watt_Cal_1 = avg($A_Watt_Raw_1);
        $A_Watt_Cal_2 = avg($A_Watt_Raw_2);
        $A_Watt_Cal_3 = avg($A_Watt_Raw_3);
        $A_Watt_Cal_4 = avg($A_Watt_Raw_4);
        $A_Watt_Cal_5 = avg($A_Watt_Raw_5);
        $B_Watt_Raw_1 = $_REQUEST['B_Watt_R1_1'] . ',' . $_REQUEST['B_Watt_R2_1'] . ',' . $_REQUEST['B_Watt_R3_1'];
        $B_Watt_Raw_2 = $_REQUEST['B_Watt_R1_2'] . ',' . $_REQUEST['B_Watt_R2_2'] . ',' . $_REQUEST['B_Watt_R3_2'];
        $B_Watt_Raw_3 = $_REQUEST['B_Watt_R1_3'] . ',' . $_REQUEST['B_Watt_R2_3'] . ',' . $_REQUEST['B_Watt_R3_3'];
        $B_Watt_Raw_4 = $_REQUEST['B_Watt_R1_4'] . ',' . $_REQUEST['B_Watt_R2_4'] . ',' . $_REQUEST['B_Watt_R3_4'];
        $B_Watt_Raw_5 = $_REQUEST['B_Watt_R1_5'] . ',' . $_REQUEST['B_Watt_R2_5'] . ',' . $_REQUEST['B_Watt_R3_5'];
        $B_Watt_Cal_1 = avg($B_Watt_Raw_1);
        $B_Watt_Cal_2 = avg($B_Watt_Raw_2);
        $B_Watt_Cal_3 = avg($B_Watt_Raw_3);
        $B_Watt_Cal_4 = avg($B_Watt_Raw_4);
        $B_Watt_Cal_5 = avg($B_Watt_Raw_5);

        //----------------------------SQL--------------------------------
        $sql = "INSERT INTO cal_ultrasound (
            Code,Room_T,Room_H,
            A_Head,A_Unit,B_Head,B_Unit,
            A_Watt_S_1,A_Watt_S_2,A_Watt_S_3,A_Watt_S_4,A_Watt_S_5,
            B_Watt_S_1,B_Watt_S_2,B_Watt_S_3,B_Watt_S_4,B_Watt_S_5,
            A_Watt_Raw_1,A_Watt_Raw_2,A_Watt_Raw_3,A_Watt_Raw_4,A_Watt_Raw_5,
            A_Watt_Cal_1,A_Watt_Cal_2,A_Watt_Cal_3,A_Watt_Cal_4,A_Watt_Cal_5,
            B_Watt_Raw_1,B_Watt_Raw_2,B_Watt_Raw_3,B_Watt_Raw_4,B_Watt_Raw_5,
            B_Watt_Cal_1,B_Watt_Cal_2,B_Watt_Cal_3,B_Watt_Cal_4,B_Watt_Cal_5
            ) VALUES (
            '$hosp_code','$Room_T','$Room_H',
            '$A_Head','$A_Unit','$B_Head','$B_Unit',
            '$A_Watt_S_1','$A_Watt_S_2','$A_Watt_S_3','$A_Watt_S_4','$A_Watt_S_5',
            '$B_Watt_S_1','$B_Watt_S_2','$B_Watt_S_3','$B_Watt_S_4','$B_Watt_S_5',
            '$A_Watt_Raw_1','$A_Watt_Raw_2','$A_Watt_Raw_3','$A_Watt_Raw_4','$A_Watt_Raw_5',
            '$A_Watt_Cal_1','$A_Watt_Cal_2','$A_Watt_Cal_3','$A_Watt_Cal_4','$A_Watt_Cal_5',
            '$B_Watt_Raw_1','$B_Watt_Raw_2','$B_Watt_Raw_3','$B_Watt_Raw_4','$B_Watt_Raw_5',
            '$B_Watt_Cal_1','$B_Watt_Cal_2','$B_Watt_Cal_3','$B_Watt_Cal_4','$B_Watt_Cal_5'
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