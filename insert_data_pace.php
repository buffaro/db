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

        //-------------------------------Load-----------------------------------
        $PC_Load = $_REQUEST['PC_Load'];

        //----------------------------Pulse Rate--------------------------------
        $S1_PR1_Raw = $_REQUEST['S1_PR_R1_1'] . ',' . $_REQUEST['S1_PR_R2_1'] . ',' . $_REQUEST['S1_PR_R3_1'];
        $S1_PR2_Raw = $_REQUEST['S1_PR_R1_2'] . ',' . $_REQUEST['S1_PR_R1_2'] . ',' . $_REQUEST['S1_PR_R1_2'];
        $S1_PR3_Raw = $_REQUEST['S1_PR_R1_3'] . ',' . $_REQUEST['S1_PR_R1_3'] . ',' . $_REQUEST['S1_PR_R1_3'];
        $S1_PR4_Raw = $_REQUEST['S1_PR_R1_4'] . ',' . $_REQUEST['S1_PR_R1_4'] . ',' . $_REQUEST['S1_PR_R1_4'];
        $S1_PR5_Raw = $_REQUEST['S1_PR_R1_5'] . ',' . $_REQUEST['S1_PR_R1_5'] . ',' . $_REQUEST['S1_PR_R1_5'];
        $S1_PR6_Raw = $_REQUEST['S1_PR_R1_6'] . ',' . $_REQUEST['S1_PR_R1_6'] . ',' . $_REQUEST['S1_PR_R1_6'];
        $S1_PR7_Raw = $_REQUEST['S1_PR_R1_7'] . ',' . $_REQUEST['S1_PR_R1_7'] . ',' . $_REQUEST['S1_PR_R1_7'];
        $S1_PR8_Raw = $_REQUEST['S1_PR_R1_8'] . ',' . $_REQUEST['S1_PR_R1_8'] . ',' . $_REQUEST['S1_PR_R1_8'];
        $S1_PR9_Raw = $_REQUEST['S1_PR_R1_9'] . ',' . $_REQUEST['S1_PR_R1_9'] . ',' . $_REQUEST['S1_PR_R1_9'];
        $S1_PR10_Raw = $_REQUEST['S1_PR_R1_10'] . ',' . $_REQUEST['S1_PR_R1_10'] . ',' . $_REQUEST['S1_PR_R1_10'];
        $S1_PR11_Raw = $_REQUEST['S1_PR_R1_11'] . ',' . $_REQUEST['S1_PR_R1_11'] . ',' . $_REQUEST['S1_PR_R1_11'];
        $S1_PR1_Cal = avg($S1_PR1_Raw);
        $S1_PR2_Cal = avg($S1_PR2_Raw);
        $S1_PR3_Cal = avg($S1_PR3_Raw);
        $S1_PR4_Cal = avg($S1_PR4_Raw);
        $S1_PR5_Cal = avg($S1_PR5_Raw);
        $S1_PR6_Cal = avg($S1_PR6_Raw);
        $S1_PR7_Cal = avg($S1_PR7_Raw);
        $S1_PR8_Cal = avg($S1_PR8_Raw);
        $S1_PR9_Cal = avg($S1_PR9_Raw);
        $S1_PR10_Cal = avg($S1_PR10_Raw);
        $S1_PR11_Cal = avg($S1_PR11_Raw);

        $S2_PR1_Raw = $_REQUEST['S2_PR_R1_1'] . ',' . $_REQUEST['S2_PR_R2_1'] . ',' . $_REQUEST['S2_PR_R3_1'];
        $S2_PR2_Raw = $_REQUEST['S2_PR_R1_2'] . ',' . $_REQUEST['S2_PR_R1_2'] . ',' . $_REQUEST['S2_PR_R1_2'];
        $S2_PR3_Raw = $_REQUEST['S2_PR_R1_3'] . ',' . $_REQUEST['S2_PR_R1_3'] . ',' . $_REQUEST['S2_PR_R1_3'];
        $S2_PR4_Raw = $_REQUEST['S2_PR_R1_4'] . ',' . $_REQUEST['S2_PR_R1_4'] . ',' . $_REQUEST['S2_PR_R1_4'];
        $S2_PR5_Raw = $_REQUEST['S2_PR_R1_5'] . ',' . $_REQUEST['S2_PR_R1_5'] . ',' . $_REQUEST['S2_PR_R1_5'];
        $S2_PR6_Raw = $_REQUEST['S2_PR_R1_6'] . ',' . $_REQUEST['S2_PR_R1_6'] . ',' . $_REQUEST['S2_PR_R1_6'];
        $S2_PR7_Raw = $_REQUEST['S2_PR_R1_7'] . ',' . $_REQUEST['S2_PR_R1_7'] . ',' . $_REQUEST['S2_PR_R1_7'];
        $S2_PR8_Raw = $_REQUEST['S2_PR_R1_8'] . ',' . $_REQUEST['S2_PR_R1_8'] . ',' . $_REQUEST['S2_PR_R1_8'];
        $S2_PR9_Raw = $_REQUEST['S2_PR_R1_9'] . ',' . $_REQUEST['S2_PR_R1_9'] . ',' . $_REQUEST['S2_PR_R1_9'];
        $S2_PR10_Raw = $_REQUEST['S2_PR_R1_10'] . ',' . $_REQUEST['S2_PR_R1_10'] . ',' . $_REQUEST['S2_PR_R1_10'];
        $S2_PR11_Raw = $_REQUEST['S2_PR_R1_11'] . ',' . $_REQUEST['S2_PR_R1_11'] . ',' . $_REQUEST['S2_PR_R1_11'];
        $S2_PR1_Cal = avg($S2_PR1_Raw);
        $S2_PR2_Cal = avg($S2_PR2_Raw);
        $S2_PR3_Cal = avg($S2_PR3_Raw);
        $S2_PR4_Cal = avg($S2_PR4_Raw);
        $S2_PR5_Cal = avg($S2_PR5_Raw);
        $S2_PR6_Cal = avg($S2_PR6_Raw);
        $S2_PR7_Cal = avg($S2_PR7_Raw);
        $S2_PR8_Cal = avg($S2_PR8_Raw);
        $S2_PR9_Cal = avg($S2_PR9_Raw);
        $S2_PR10_Cal = avg($S2_PR10_Raw);
        $S2_PR11_Cal = avg($S2_PR11_Raw);

        //----------------------------Current------------------------------------
        $S1_Cur1_Raw = $_REQUEST['S1_CUR_R1_1'] . ',' . $_REQUEST['S1_CUR_R2_1'] . ',' . $_REQUEST['S1_CUR_R3_1'];
        $S1_Cur2_Raw = $_REQUEST['S1_CUR_R1_2'] . ',' . $_REQUEST['S1_CUR_R2_2'] . ',' . $_REQUEST['S1_CUR_R3_2'];
        $S1_Cur3_Raw = $_REQUEST['S1_CUR_R1_3'] . ',' . $_REQUEST['S1_CUR_R2_3'] . ',' . $_REQUEST['S1_CUR_R3_3'];
        $S1_Cur4_Raw = $_REQUEST['S1_CUR_R1_4'] . ',' . $_REQUEST['S1_CUR_R2_4'] . ',' . $_REQUEST['S1_CUR_R3_4'];
        $S1_Cur1_Cal = avg($S1_Cur1_Raw);
        $S1_Cur2_Cal = avg($S1_Cur2_Raw);
        $S1_Cur3_Cal = avg($S1_Cur3_Raw);
        $S1_Cur4_Cal = avg($S1_Cur4_Raw);

        $S2_Cur1_Raw = $_REQUEST['S2_CUR_R1_1'] . ',' . $_REQUEST['S2_CUR_R2_1'] . ',' . $_REQUEST['S2_CUR_R3_1'];
        $S2_Cur2_Raw = $_REQUEST['S2_CUR_R1_2'] . ',' . $_REQUEST['S2_CUR_R2_2'] . ',' . $_REQUEST['S2_CUR_R3_2'];
        $S2_Cur3_Raw = $_REQUEST['S2_CUR_R1_3'] . ',' . $_REQUEST['S2_CUR_R2_3'] . ',' . $_REQUEST['S2_CUR_R3_3'];
        $S2_Cur4_Raw = $_REQUEST['S2_CUR_R1_4'] . ',' . $_REQUEST['S2_CUR_R2_4'] . ',' . $_REQUEST['S2_CUR_R3_4'];
        $S2_Cur1_Cal = avg($S2_Cur1_Raw);
        $S2_Cur2_Cal = avg($S2_Cur2_Raw);
        $S2_Cur3_Cal = avg($S2_Cur3_Raw);
        $S2_Cur4_Cal = avg($S2_Cur4_Raw);


        //----------------------------SQL--------------------------------
        $sql = "INSERT INTO cal_pace (
            Code,
            PC_Load,
            S1_PR1_Raw,S1_PR2_Raw,S1_PR3_Raw,S1_PR4_Raw,S1_PR5_Raw,S1_PR6_Raw,S1_PR7_Raw,S1_PR8_Raw,S1_PR9_Raw,S1_PR10_Raw,S1_PR11_Raw,
            S1_PR1_Cal,S1_PR2_Cal,S1_PR3_Cal,S1_PR4_Cal,S1_PR5_Cal,S1_PR6_Cal,S1_PR7_Cal,S1_PR8_Cal,S1_PR9_Cal,S1_PR10_Cal,S1_PR11_Cal,
            S1_Cur1_Raw,S1_Cur2_Raw,S1_Cur3_Raw,S1_Cur4_Raw,
            S1_Cur1_Cal,S1_Cur2_Cal,S1_Cur3_Cal,S1_Cur4_Cal,
            S2_PR1_Raw,S2_PR2_Raw,S2_PR3_Raw,S2_PR4_Raw,S2_PR5_Raw,S2_PR6_Raw,S2_PR7_Raw,S2_PR8_Raw,S2_PR9_Raw,S2_PR10_Raw,S2_PR11_Raw,
            S2_PR1_Cal,S2_PR2_Cal,S2_PR3_Cal,S2_PR4_Cal,S2_PR5_Cal,S2_PR6_Cal,S2_PR7_Cal,S2_PR8_Cal,S2_PR9_Cal,S2_PR10_Cal,S2_PR11_Cal,          
            S2_Cur1_Raw,S2_Cur2_Raw,S2_Cur3_Raw,S2_Cur4_Raw,
            S2_Cur1_Cal,S2_Cur2_Cal,S2_Cur3_Cal,S2_Cur4_Cal
            ) VALUES (
            '$hosp_code',
            '$PC_Load',
            '$S1_PR1_Raw','$S1_PR2_Raw','$S1_PR3_Raw','$S1_PR4_Raw','$S1_PR5_Raw','$S1_PR6_Raw','$S1_PR7_Raw','$S1_PR8_Raw','$S1_PR9_Raw','$S1_PR10_Raw','$S1_PR11_Raw',
            '$S1_PR1_Cal','$S1_PR2_Cal','$S1_PR3_Cal','$S1_PR4_Cal','$S1_PR5_Cal','$S1_PR6_Cal','$S1_PR7_Cal','$S1_PR8_Cal','$S1_PR9_Cal','$S1_PR10_Cal','$S1_PR11_Cal',
            '$S1_Cur1_Raw','$S1_Cur2_Raw','$S1_Cur3_Raw','$S1_Cur4_Raw',
            '$S1_Cur1_Cal','$S1_Cur2_Cal','$S1_Cur3_Cal','$S1_Cur4_Cal',
            '$S2_PR1_Raw','$S2_PR2_Raw','$S2_PR3_Raw','$S2_PR4_Raw','$S2_PR5_Raw','$S2_PR6_Raw','$S2_PR7_Raw','$S2_PR8_Raw','$S2_PR9_Raw','$S2_PR10_Raw','$S2_PR11_Raw',
            '$S2_PR1_Cal','$S2_PR2_Cal','$S2_PR3_Cal','$S2_PR4_Cal','$S2_PR5_Cal','$S2_PR6_Cal','$S2_PR7_Cal','$S2_PR8_Cal','$S2_PR9_Cal','$S2_PR10_Cal','$S2_PR11_Cal',          
            '$S2_Cur1_Raw','$S2_Cur2_Raw','$S2_Cur3_Raw','$S2_Cur4_Raw',
            '$S2_Cur1_Cal','$S2_Cur2_Cal','$S2_Cur3_Cal','$S2_Cur4_Cal'
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