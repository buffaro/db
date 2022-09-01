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

        //----------------------------Setting--------------------------------
        $S_ES = $_REQUEST['ES'];
        $S_Sensor = $_REQUEST['PO_Sensor'];
        $S_Lead = $_REQUEST['Resp_Lead'];
        //----------------------------NIBP--------------------------------
        $SM_Sys_Raw = $_REQUEST['nmr1_sys'] . ',' . $_REQUEST['nmr2_sys'] . ',' . $_REQUEST['nmr3_sys'];
        $SM_Mean_Raw = $_REQUEST['nmr1_mean'] . ',' . $_REQUEST['nmr2_mean'] . ',' . $_REQUEST['nmr3_mean'];
        $SM_Dia_Raw = $_REQUEST['nmr1_dias'] . ',' . $_REQUEST['nmr2_dias'] . ',' . $_REQUEST['nmr3_dias'];
        $SM_PR_Raw = $_REQUEST['nmr1_pr'] . ',' . $_REQUEST['nmr2_pr'] . ',' . $_REQUEST['nmr3_pr'];

        $SM_Sys_Cal = avg($SM_Sys_Raw);
        $SM_Mean_Cal = avg($SM_Mean_Raw);
        $SM_Dia_Cal = avg($SM_Dia_Raw);
        $SM_PR_Cal = avg($SM_PR_Raw);

        $SH_Sys_Raw = $_REQUEST['hir1_sys'] . ',' . $_REQUEST['hir2_sys'] . ',' . $_REQUEST['hir3_sys'];
        $SH_Mean_Raw = $_REQUEST['hir1_mean'] . ',' . $_REQUEST['hir2_mean'] . ',' . $_REQUEST['hir3_mean'];
        $SH_Dia_Raw = $_REQUEST['hir1_dias'] . ',' . $_REQUEST['hir2_dias'] . ',' . $_REQUEST['hir3_dias'];
        $SH_PR_Raw = $_REQUEST['hir1_pr'] . ',' . $_REQUEST['hir2_pr'] . ',' . $_REQUEST['hir3_pr'];

        $SH_Sys_Cal = avg($SH_Sys_Raw);
        $SH_Mean_Cal = avg($SH_Mean_Raw);
        $SH_Dia_Cal = avg($SH_Dia_Raw);
        $SH_PR_Cal = avg($SH_PR_Raw);

        $SL_Sys_Raw = $_REQUEST['lor1_sys'] . ',' . $_REQUEST['lor2_sys'] . ',' . $_REQUEST['lor3_sys'];
        $SL_Mean_Raw = $_REQUEST['lor1_mean'] . ',' . $_REQUEST['lor2_mean'] . ',' . $_REQUEST['lor3_mean'];
        $SL_Dia_Raw = $_REQUEST['lor1_dias'] . ',' . $_REQUEST['lor2_dias'] . ',' . $_REQUEST['lor3_dias'];
        $SL_PR_Raw = $_REQUEST['lor1_pr'] . ',' . $_REQUEST['lor2_pr'] . ',' . $_REQUEST['lor3_pr'];   

        $SL_Sys_Cal = avg($SL_Sys_Raw);
        $SL_Mean_Cal = avg($SL_Mean_Raw);
        $SL_Dia_Cal = avg($SL_Dia_Raw);
        $SL_PR_Cal = avg($SL_PR_Raw);
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
        //-------------------------Respiration-----------------------------
        $S_Res1_Raw = $_REQUEST['resr1_20'] . ',' . $_REQUEST['resr2_20'] . ',' . $_REQUEST['resr3_20'];
        $S_Res2_Raw = $_REQUEST['resr1_30'] . ',' . $_REQUEST['resr2_30'] . ',' . $_REQUEST['resr3_30'];
        $S_Res3_Raw = $_REQUEST['resr1_40'] . ',' . $_REQUEST['resr2_40'] . ',' . $_REQUEST['resr3_40'];

        $S_Res1_Cal = avg($S_Res1_Raw);
        $S_Res2_Cal = avg($S_Res2_Raw);
        $S_Res3_Cal = avg($S_Res3_Raw);


        //----------------------------SQL--------------------------------
        $sql = "INSERT INTO cal_fetal_multi (
            Code,Room_T,Room_H,
            S1_HR1_Raw,S1_HR2_Raw,S1_HR3_Raw,S1_HR4_Raw,S1_HR5_Raw,S1_HR6_Raw,
            S1_HR1_Cal,S1_HR2_Cal,S1_HR3_Cal,S1_HR4_Cal,S1_HR5_Cal,S1_HR6_Cal,
            S2_HR1_Raw,S2_HR2_Raw,S2_HR3_Raw,S2_HR4_Raw,S2_HR5_Raw,S2_HR6_Raw,
            S2_HR1_Cal,S2_HR2_Cal,S2_HR3_Cal,S2_HR4_Cal,S2_HR5_Cal,S2_HR6_Cal,
            S_ES,S_Sensor,S_Lead,
            SM_Sys_Raw,SM_Mean_Raw,SM_Dia_Raw,SM_PR_Raw,
            SH_Sys_Raw,SH_Mean_Raw,SH_Dia_Raw,SH_PR_Raw,
            SL_Sys_Raw,SL_Mean_Raw,SL_Dia_Raw,SL_PR_Raw,
            SM_Sys_Cal,SM_Mean_Cal,SM_Dia_Cal,SM_PR_Cal,
            SH_Sys_Cal,SH_Mean_Cal,SH_Dia_Cal,SH_PR_Cal,
            SL_Sys_Cal,SL_Mean_Cal,SL_Dia_Cal,SL_PR_Cal,
            S_HR1_Raw,S_HR2_Raw,S_HR3_Raw,
            S_HR1_Cal,S_HR2_Cal,S_HR3_Cal,
            S_PO1_Raw,S_PO2_Raw,S_PO3_Raw,
            S_PO1_Cal,S_PO2_Cal,S_PO3_Cal,
            S_Res1_Raw,S_Res2_Raw,S_Res3_Raw,
            S_Res1_Cal,S_Res2_Cal,S_Res3_Cal
            ) VALUES (
            '$hosp_code','$Room_T','$Room_H',
            '$S1_HR1_Raw','$S1_HR2_Raw','$S1_HR3_Raw','$S1_HR4_Raw','$S1_HR5_Raw','$S1_HR6_Raw',
            '$S1_HR1_Cal','$S1_HR2_Cal','$S1_HR3_Cal','$S1_HR4_Cal','$S1_HR5_Cal','$S1_HR6_Cal',
            '$S2_HR1_Raw','$S2_HR2_Raw','$S2_HR3_Raw','$S2_HR4_Raw','$S2_HR5_Raw','$S2_HR6_Raw',
            '$S2_HR1_Cal','$S2_HR2_Cal','$S2_HR3_Cal','$S2_HR4_Cal','$S2_HR5_Cal','$S2_HR6_Cal',
            '$S_ES','$S_Sensor','$S_Lead',
            '$SM_Sys_Raw','$SM_Mean_Raw','$SM_Dia_Raw','$SM_PR_Raw',
            '$SH_Sys_Raw','$SH_Mean_Raw','$SH_Dia_Raw','$SH_PR_Raw',
            '$SL_Sys_Raw','$SL_Mean_Raw','$SL_Dia_Raw','$SL_PR_Raw',
            '$SM_Sys_Cal','$SM_Mean_Cal','$SM_Dia_Cal','$SM_PR_Cal',
            '$SH_Sys_Cal','$SH_Mean_Cal','$SH_Dia_Cal','$SH_PR_Cal',
            '$SL_Sys_Cal','$SL_Mean_Cal','$SL_Dia_Cal','$SL_PR_Cal',
            '$S_HR1_Raw','$S_HR2_Raw','$S_HR3_Raw',
            '$S_HR1_Cal','$S_HR2_Cal','$S_HR3_Cal',
            '$S_PO1_Raw','$S_PO2_Raw','$S_PO3_Raw',
            '$S_PO1_Cal','$S_PO2_Cal','$S_PO3_Cal',
            '$S_Res1_Raw','$S_Res2_Raw','$S_Res3_Raw',
            '$S_Res1_Cal','$S_Res2_Cal','$S_Res3_Cal'
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