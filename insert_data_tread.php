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
        //----------------------------Belt Speed--------------------------------
        $S_Speed1 = $_REQUEST['Spds1'];
        $S_Speed2 = $_REQUEST['Spds2'];
        $S_Speed3 = $_REQUEST['Spds3'];
        $S_Speed4 = $_REQUEST['Spds4'];
        $S_Speed5 = $_REQUEST['Spds5'];
        $S_Speed6 = $_REQUEST['Spds6'];


        $S_Speed1_Raw = $_REQUEST['Spdr1_1'] . ',' . $_REQUEST['Spdr2_1'] . ',' . $_REQUEST['Spdr3_1'];
        $S_Speed2_Raw = $_REQUEST['Spdr1_2'] . ',' . $_REQUEST['Spdr2_2'] . ',' . $_REQUEST['Spdr3_2'];
        $S_Speed3_Raw = $_REQUEST['Spdr1_3'] . ',' . $_REQUEST['Spdr2_3'] . ',' . $_REQUEST['Spdr3_3'];
        $S_Speed4_Raw = $_REQUEST['Spdr1_4'] . ',' . $_REQUEST['Spdr2_4'] . ',' . $_REQUEST['Spdr3_4'];
        $S_Speed5_Raw = $_REQUEST['Spdr1_5'] . ',' . $_REQUEST['Spdr2_5'] . ',' . $_REQUEST['Spdr3_5'];
        $S_Speed6_Raw = $_REQUEST['Spdr1_6'] . ',' . $_REQUEST['Spdr2_6'] . ',' . $_REQUEST['Spdr3_6'];

        $S_Speed1_Cal = avg($S_Speed1_Raw);
        $S_Speed2_Cal = avg($S_Speed2_Raw);
        $S_Speed3_Cal = avg($S_Speed3_Raw);
        $S_Speed4_Cal = avg($S_Speed4_Raw);
        $S_Speed5_Cal = avg($S_Speed5_Raw);
        $S_Speed6_Cal = avg($S_Speed6_Raw);

        
        //----------------------------SQL--------------------------------
        $sql = "INSERT INTO cal_tread (
            Code,Room_T,Room_H,
            S_Speed1,S_Speed2,S_Speed3,S_Speed4,S_Speed5,S_Speed6,
            S_Speed1_Raw,S_Speed2_Raw,S_Speed3_Raw,S_Speed4_Raw,S_Speed5_Raw,S_Speed6_Raw,
            S_Speed1_Cal,S_Speed2_Cal,S_Speed3_Cal,S_Speed4_Cal,S_Speed5_Cal,S_Speed6_Cal
            ) VALUES (
            '$hosp_code','$Room_T','$Room_H',
            '$S_Speed1','$S_Speed2','$S_Speed3','$S_Speed4','$S_Speed5','$S_Speed6',
            '$S_Speed1_Raw','$S_Speed2_Raw','$S_Speed3_Raw','$S_Speed4_Raw','$S_Speed5_Raw','$S_Speed6_Raw',
            '$S_Speed1_Cal','$S_Speed2_Cal','$S_Speed3_Cal','$S_Speed4_Cal','$S_Speed5_Cal','$S_Speed6_Cal'
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