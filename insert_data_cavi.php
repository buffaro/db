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

        //----------------------------NIBP--------------------------------
        $RA_Sys_Raw = $_REQUEST['rar1_sys'] . ',' . $_REQUEST['rar2_sys'] . ',' . $_REQUEST['rar3_sys'];
        $RA_Mean_Raw = $_REQUEST['rar1_mean'] . ',' . $_REQUEST['rar2_mean'] . ',' . $_REQUEST['rar3_mean'];
        $RA_Dia_Raw = $_REQUEST['rar1_dias'] . ',' . $_REQUEST['rar2_dias'] . ',' . $_REQUEST['rar3_dias'];
        $RA_PR_Raw = $_REQUEST['rar1_pr'] . ',' . $_REQUEST['rar2_pr'] . ',' . $_REQUEST['rar3_pr'];

        $RA_Sys_Cal = avg($RA_Sys_Raw);
        $RA_Mean_Cal = avg($RA_Mean_Raw);
        $RA_Dia_Cal = avg($RA_Dia_Raw);
        $RA_PR_Cal = avg($RA_PR_Raw);

        $LA_Sys_Raw = $_REQUEST['lar1_sys'] . ',' . $_REQUEST['lar2_sys'] . ',' . $_REQUEST['lar3_sys'];
        $LA_Mean_Raw = $_REQUEST['lar1_mean'] . ',' . $_REQUEST['lar2_mean'] . ',' . $_REQUEST['lar3_mean'];
        $LA_Dia_Raw = $_REQUEST['lar1_dias'] . ',' . $_REQUEST['lar2_dias'] . ',' . $_REQUEST['lar3_dias'];
        $LA_PR_Raw = $_REQUEST['lar1_pr'] . ',' . $_REQUEST['lar2_pr'] . ',' . $_REQUEST['lar3_pr'];

        $LA_Sys_Cal = avg($LA_Sys_Raw);
        $LA_Mean_Cal = avg($LA_Mean_Raw);
        $LA_Dia_Cal = avg($LA_Dia_Raw);
        $LA_PR_Cal = avg($LA_PR_Raw);

        $RB_Sys_Raw = $_REQUEST['rbr1_sys'] . ',' . $_REQUEST['rbr2_sys'] . ',' . $_REQUEST['rbr3_sys'];
        $RB_Mean_Raw = $_REQUEST['rbr1_mean'] . ',' . $_REQUEST['rbr2_mean'] . ',' . $_REQUEST['rbr3_mean'];
        $RB_Dia_Raw = $_REQUEST['rbr1_dias'] . ',' . $_REQUEST['rbr2_dias'] . ',' . $_REQUEST['rbr3_dias'];
        $RB_PR_Raw = $_REQUEST['rbr1_pr'] . ',' . $_REQUEST['rbr2_pr'] . ',' . $_REQUEST['rbr3_pr'];

        $RB_Sys_Cal = avg($RB_Sys_Raw);
        $RB_Mean_Cal = avg($RB_Mean_Raw);
        $RB_Dia_Cal = avg($RB_Dia_Raw);
        $RB_PR_Cal = avg($RB_PR_Raw);

        $LB_Sys_Raw = $_REQUEST['lbr1_sys'] . ',' . $_REQUEST['lbr2_sys'] . ',' . $_REQUEST['lbr3_sys'];
        $LB_Mean_Raw = $_REQUEST['lbr1_mean'] . ',' . $_REQUEST['lbr2_mean'] . ',' . $_REQUEST['lbr3_mean'];
        $LB_Dia_Raw = $_REQUEST['lbr1_dias'] . ',' . $_REQUEST['lbr2_dias'] . ',' . $_REQUEST['lbr3_dias'];
        $LB_PR_Raw = $_REQUEST['lbr1_pr'] . ',' . $_REQUEST['lbr2_pr'] . ',' . $_REQUEST['lbr3_pr'];

        $LB_Sys_Cal = avg($LB_Sys_Raw);
        $LB_Mean_Cal = avg($LB_Mean_Raw);
        $LB_Dia_Cal = avg($LB_Dia_Raw);
        $LB_PR_Cal = avg($LB_PR_Raw);
        //----------------------------ECG--------------------------------
        $S_HR1_Raw = $_REQUEST['ecgr1_60'] . ',' . $_REQUEST['ecgr2_60'] . ',' . $_REQUEST['ecgr3_60'];
        $S_HR2_Raw = $_REQUEST['ecgr1_90'] . ',' . $_REQUEST['ecgr2_90'] . ',' . $_REQUEST['ecgr3_90'];
        $S_HR3_Raw = $_REQUEST['ecgr1_120'] . ',' . $_REQUEST['ecgr2_120'] . ',' . $_REQUEST['ecgr3_120'];

        $S_HR1_Cal = avg($S_HR1_Raw);
        $S_HR2_Cal = avg($S_HR2_Raw);
        $S_HR3_Cal = avg($S_HR3_Raw);

        //----------------------------SQL--------------------------------
        $sql = "INSERT INTO cal_cavi (
            Code,
            RA_Sys_Raw,RA_Mean_Raw,RA_Dia_Raw,RA_PR_Raw,
            LA_Sys_Raw,LA_Mean_Raw,LA_Dia_Raw,LA_PR_Raw,
            RB_Sys_Raw,RB_Mean_Raw,RB_Dia_Raw,RB_PR_Raw,
            LB_Sys_Raw,LB_Mean_Raw,LB_Dia_Raw,LB_PR_Raw,
            RA_Sys_Cal,RA_Mean_Cal,RA_Dia_Cal,RA_PR_Cal,
            LA_Sys_Cal,LA_Mean_Cal,LA_Dia_Cal,LA_PR_Cal,
            RB_Sys_Cal,RB_Mean_Cal,RB_Dia_Cal,RB_PR_Cal,
            LB_Sys_Cal,LB_Mean_Cal,LB_Dia_Cal,LB_PR_Cal,
            S_HR1_Raw,S_HR2_Raw,S_HR3_Raw,
            S_HR1_Cal,S_HR2_Cal,S_HR3_Cal
            ) VALUES (
            '$hosp_code',
            '$RA_Sys_Raw','$RA_Mean_Raw','$RA_Dia_Raw','$RA_PR_Raw',
            '$LA_Sys_Raw','$LA_Mean_Raw','$LA_Dia_Raw','$LA_PR_Raw',
            '$RB_Sys_Raw','$RB_Mean_Raw','$RB_Dia_Raw','$RB_PR_Raw',
            '$LB_Sys_Raw','$LB_Mean_Raw','$LB_Dia_Raw','$LB_PR_Raw',
            '$RA_Sys_Cal','$RA_Mean_Cal','$RA_Dia_Cal','$RA_PR_Cal',
            '$LA_Sys_Cal','$LA_Mean_Cal','$LA_Dia_Cal','$LA_PR_Cal',
            '$RB_Sys_Cal','$RB_Mean_Cal','$RB_Dia_Cal','$RB_PR_Cal',
            '$LB_Sys_Cal','$LB_Mean_Cal','$LB_Dia_Cal','$LB_PR_Cal',
            '$S_HR1_Raw','$S_HR2_Raw','$S_HR3_Raw',
            '$S_HR1_Cal','$S_HR2_Cal','$S_HR3_Cal'
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