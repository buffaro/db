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
        //----------------------------IV SET-----------------------------------
        $IV_Set = $_REQUEST['IV_Set'];
        //-----------------------------Flow Rate------------------------------------
        $Flow_S_1 = $_REQUEST['Flow_S_1'];
        $Flow_S_2 = $_REQUEST['Flow_S_2'];
        $Flow_S_3 = $_REQUEST['Flow_S_3'];
        $Flow_S_4 = $_REQUEST['Flow_S_4'];
        $Flow_R_1 = $_REQUEST['Flow_R_1'];
        $Flow_R_2 = $_REQUEST['Flow_R_2'];
        $Flow_R_3 = $_REQUEST['Flow_R_3'];
        $Flow_R_4 = $_REQUEST['Flow_R_4'];




        //----------------------------SQL--------------------------------
        $sql = "INSERT INTO cal_inf (
            Code,Room_T,Room_H,
            IV_Set,
            Flow_S_1,Flow_S_2,Flow_S_3,Flow_S_4,
            Flow_R_1,Flow_R_2,Flow_R_3,Flow_R_4
            ) VALUES (
            '$hosp_code','$Room_T','$Room_H',
            '$IV_Set',
            '$Flow_S_1','$Flow_S_2','$Flow_S_3','$Flow_S_4',
            '$Flow_R_1','$Flow_R_2','$Flow_R_3','$Flow_R_4'
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