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

        //----------------------------MONO CUT 1--------------------------------
        $M_Cut1_Name = $_REQUEST['Ms_Cut1_Name'];
        $M_Cut1_Load = $_REQUEST['Ms_Cut1_Load'];
        $M_Cut1_1 = $_REQUEST['Ms_Cut1_1'];
        $M_Cut1_2 = $_REQUEST['Ms_Cut1_2'];
        $M_Cut1_3 = $_REQUEST['Ms_Cut1_3'];
        $M_Cut1_4 = $_REQUEST['Ms_Cut1_4'];
        $M_Cut1_5 = $_REQUEST['Ms_Cut1_5'];
        $M_Cut1_6 = $_REQUEST['Ms_Cut1_6'];
        $M_Cut1_1_Raw = $_REQUEST['Mr1_Cut1_1'] . ',' . $_REQUEST['Mr2_Cut1_1'] . ',' . $_REQUEST['Mr3_Cut1_1'];
        $M_Cut1_2_Raw = $_REQUEST['Mr1_Cut1_2'] . ',' . $_REQUEST['Mr2_Cut1_2'] . ',' . $_REQUEST['Mr3_Cut1_2'];
        $M_Cut1_3_Raw = $_REQUEST['Mr1_Cut1_3'] . ',' . $_REQUEST['Mr2_Cut1_3'] . ',' . $_REQUEST['Mr3_Cut1_3'];
        $M_Cut1_4_Raw = $_REQUEST['Mr1_Cut1_4'] . ',' . $_REQUEST['Mr2_Cut1_4'] . ',' . $_REQUEST['Mr3_Cut1_4'];
        $M_Cut1_5_Raw = $_REQUEST['Mr1_Cut1_5'] . ',' . $_REQUEST['Mr2_Cut1_5'] . ',' . $_REQUEST['Mr3_Cut1_5'];
        $M_Cut1_6_Raw = $_REQUEST['Mr1_Cut1_6'] . ',' . $_REQUEST['Mr2_Cut1_6'] . ',' . $_REQUEST['Mr3_Cut1_6'];
        $M_Cut1_1_Cal = avg($M_Cut1_1_Raw);
        $M_Cut1_2_Cal = avg($M_Cut1_2_Raw);
        $M_Cut1_3_Cal = avg($M_Cut1_3_Raw);
        $M_Cut1_4_Cal = avg($M_Cut1_4_Raw);
        $M_Cut1_5_Cal = avg($M_Cut1_5_Raw);
        $M_Cut1_6_Cal = avg($M_Cut1_6_Raw);

        //----------------------------MONO CUT 2--------------------------------
        $M_Cut2_Name = $_REQUEST['Ms_Cut2_Name'];
        $M_Cut2_Load = $_REQUEST['Ms_Cut2_Load'];
        $M_Cut2_1 = $_REQUEST['Ms_Cut2_1'];
        $M_Cut2_2 = $_REQUEST['Ms_Cut2_2'];
        $M_Cut2_3 = $_REQUEST['Ms_Cut2_3'];
        $M_Cut2_4 = $_REQUEST['Ms_Cut2_4'];
        $M_Cut2_5 = $_REQUEST['Ms_Cut2_5'];
        $M_Cut2_6 = $_REQUEST['Ms_Cut2_6'];
        $M_Cut2_1_Raw = $_REQUEST['Mr1_Cut2_1'] . ',' . $_REQUEST['Mr2_Cut2_1'] . ',' . $_REQUEST['Mr3_Cut2_1'];
        $M_Cut2_2_Raw = $_REQUEST['Mr1_Cut2_2'] . ',' . $_REQUEST['Mr2_Cut2_2'] . ',' . $_REQUEST['Mr3_Cut2_2'];
        $M_Cut2_3_Raw = $_REQUEST['Mr1_Cut2_3'] . ',' . $_REQUEST['Mr2_Cut2_3'] . ',' . $_REQUEST['Mr3_Cut2_3'];
        $M_Cut2_4_Raw = $_REQUEST['Mr1_Cut2_4'] . ',' . $_REQUEST['Mr2_Cut2_4'] . ',' . $_REQUEST['Mr3_Cut2_4'];
        $M_Cut2_5_Raw = $_REQUEST['Mr1_Cut2_5'] . ',' . $_REQUEST['Mr2_Cut2_5'] . ',' . $_REQUEST['Mr3_Cut2_5'];
        $M_Cut2_6_Raw = $_REQUEST['Mr1_Cut2_6'] . ',' . $_REQUEST['Mr2_Cut2_6'] . ',' . $_REQUEST['Mr3_Cut2_6'];
        $M_Cut2_1_Cal = avg($M_Cut2_1_Raw);
        $M_Cut2_2_Cal = avg($M_Cut2_2_Raw);
        $M_Cut2_3_Cal = avg($M_Cut2_3_Raw);
        $M_Cut2_4_Cal = avg($M_Cut2_4_Raw);
        $M_Cut2_5_Cal = avg($M_Cut2_5_Raw);
        $M_Cut2_6_Cal = avg($M_Cut2_6_Raw);

        //----------------------------MONO CUT 3--------------------------------
        $M_Cut3_Name = $_REQUEST['Ms_Cut3_Name'];
        $M_Cut3_Load = $_REQUEST['Ms_Cut3_Load'];
        $M_Cut3_1 = $_REQUEST['Ms_Cut3_1'];
        $M_Cut3_2 = $_REQUEST['Ms_Cut3_2'];
        $M_Cut3_3 = $_REQUEST['Ms_Cut3_3'];
        $M_Cut3_4 = $_REQUEST['Ms_Cut3_4'];
        $M_Cut3_5 = $_REQUEST['Ms_Cut3_5'];
        $M_Cut3_6 = $_REQUEST['Ms_Cut3_6'];
        $M_Cut3_1_Raw = $_REQUEST['Mr1_Cut3_1'] . ',' . $_REQUEST['Mr2_Cut3_1'] . ',' . $_REQUEST['Mr3_Cut3_1'];
        $M_Cut3_2_Raw = $_REQUEST['Mr1_Cut3_2'] . ',' . $_REQUEST['Mr2_Cut3_2'] . ',' . $_REQUEST['Mr3_Cut3_2'];
        $M_Cut3_3_Raw = $_REQUEST['Mr1_Cut3_3'] . ',' . $_REQUEST['Mr2_Cut3_3'] . ',' . $_REQUEST['Mr3_Cut3_3'];
        $M_Cut3_4_Raw = $_REQUEST['Mr1_Cut3_4'] . ',' . $_REQUEST['Mr2_Cut3_4'] . ',' . $_REQUEST['Mr3_Cut3_4'];
        $M_Cut3_5_Raw = $_REQUEST['Mr1_Cut3_5'] . ',' . $_REQUEST['Mr2_Cut3_5'] . ',' . $_REQUEST['Mr3_Cut3_5'];
        $M_Cut3_6_Raw = $_REQUEST['Mr1_Cut3_6'] . ',' . $_REQUEST['Mr2_Cut3_6'] . ',' . $_REQUEST['Mr3_Cut3_6'];
        $M_Cut3_1_Cal = avg($M_Cut3_1_Raw);
        $M_Cut3_2_Cal = avg($M_Cut3_2_Raw);
        $M_Cut3_3_Cal = avg($M_Cut3_3_Raw);
        $M_Cut3_4_Cal = avg($M_Cut3_4_Raw);
        $M_Cut3_5_Cal = avg($M_Cut3_5_Raw);
        $M_Cut3_6_Cal = avg($M_Cut3_6_Raw);

        //----------------------------MONO COAG 1--------------------------------
        $M_Coag1_Name = $_REQUEST['Ms_Coag1_Name'];
        $M_Coag1_Load = $_REQUEST['Ms_Coag1_Load'];
        $M_Coag1_1 = $_REQUEST['Ms_Coag1_1'];
        $M_Coag1_2 = $_REQUEST['Ms_Coag1_2'];
        $M_Coag1_3 = $_REQUEST['Ms_Coag1_3'];
        $M_Coag1_4 = $_REQUEST['Ms_Coag1_4'];
        $M_Coag1_5 = $_REQUEST['Ms_Coag1_5'];
        $M_Coag1_6 = $_REQUEST['Ms_Coag1_6'];
        $M_Coag1_1_Raw = $_REQUEST['Mr1_Coag1_1'] . ',' . $_REQUEST['Mr2_Coag1_1'] . ',' . $_REQUEST['Mr3_Coag1_1'];
        $M_Coag1_2_Raw = $_REQUEST['Mr1_Coag1_2'] . ',' . $_REQUEST['Mr2_Coag1_2'] . ',' . $_REQUEST['Mr3_Coag1_2'];
        $M_Coag1_3_Raw = $_REQUEST['Mr1_Coag1_3'] . ',' . $_REQUEST['Mr2_Coag1_3'] . ',' . $_REQUEST['Mr3_Coag1_3'];
        $M_Coag1_4_Raw = $_REQUEST['Mr1_Coag1_4'] . ',' . $_REQUEST['Mr2_Coag1_4'] . ',' . $_REQUEST['Mr3_Coag1_4'];
        $M_Coag1_5_Raw = $_REQUEST['Mr1_Coag1_5'] . ',' . $_REQUEST['Mr2_Coag1_5'] . ',' . $_REQUEST['Mr3_Coag1_5'];
        $M_Coag1_6_Raw = $_REQUEST['Mr1_Coag1_6'] . ',' . $_REQUEST['Mr2_Coag1_6'] . ',' . $_REQUEST['Mr3_Coag1_6'];
        $M_Coag1_1_Cal = avg($M_Coag1_1_Raw);
        $M_Coag1_2_Cal = avg($M_Coag1_2_Raw);
        $M_Coag1_3_Cal = avg($M_Coag1_3_Raw);
        $M_Coag1_4_Cal = avg($M_Coag1_4_Raw);
        $M_Coag1_5_Cal = avg($M_Coag1_5_Raw);
        $M_Coag1_6_Cal = avg($M_Coag1_6_Raw);

        //----------------------------MONO COAG 2--------------------------------
        $M_Coag2_Name = $_REQUEST['Ms_Coag2_Name'];
        $M_Coag2_Load = $_REQUEST['Ms_Coag2_Load'];
        $M_Coag2_1 = $_REQUEST['Ms_Coag2_1'];
        $M_Coag2_2 = $_REQUEST['Ms_Coag2_2'];
        $M_Coag2_3 = $_REQUEST['Ms_Coag2_3'];
        $M_Coag2_4 = $_REQUEST['Ms_Coag2_4'];
        $M_Coag2_5 = $_REQUEST['Ms_Coag2_5'];
        $M_Coag2_6 = $_REQUEST['Ms_Coag2_6'];
        $M_Coag2_1_Raw = $_REQUEST['Mr1_Coag2_1'] . ',' . $_REQUEST['Mr2_Coag2_1'] . ',' . $_REQUEST['Mr3_Coag2_1'];
        $M_Coag2_2_Raw = $_REQUEST['Mr1_Coag2_2'] . ',' . $_REQUEST['Mr2_Coag2_2'] . ',' . $_REQUEST['Mr3_Coag2_2'];
        $M_Coag2_3_Raw = $_REQUEST['Mr1_Coag2_3'] . ',' . $_REQUEST['Mr2_Coag2_3'] . ',' . $_REQUEST['Mr3_Coag2_3'];
        $M_Coag2_4_Raw = $_REQUEST['Mr1_Coag2_4'] . ',' . $_REQUEST['Mr2_Coag2_4'] . ',' . $_REQUEST['Mr3_Coag2_4'];
        $M_Coag2_5_Raw = $_REQUEST['Mr1_Coag2_5'] . ',' . $_REQUEST['Mr2_Coag2_5'] . ',' . $_REQUEST['Mr3_Coag2_5'];
        $M_Coag2_6_Raw = $_REQUEST['Mr1_Coag2_6'] . ',' . $_REQUEST['Mr2_Coag2_6'] . ',' . $_REQUEST['Mr3_Coag2_6'];
        $M_Coag2_1_Cal = avg($M_Coag2_1_Raw);
        $M_Coag2_2_Cal = avg($M_Coag2_2_Raw);
        $M_Coag2_3_Cal = avg($M_Coag2_3_Raw);
        $M_Coag2_4_Cal = avg($M_Coag2_4_Raw);
        $M_Coag2_5_Cal = avg($M_Coag2_5_Raw);
        $M_Coag2_6_Cal = avg($M_Coag2_6_Raw);

        //----------------------------MONO COAG 3--------------------------------
        $M_Coag3_Name = $_REQUEST['Ms_Coag3_Name'];
        $M_Coag3_Load = $_REQUEST['Ms_Coag3_Load'];
        $M_Coag3_1 = $_REQUEST['Ms_Coag3_1'];
        $M_Coag3_2 = $_REQUEST['Ms_Coag3_2'];
        $M_Coag3_3 = $_REQUEST['Ms_Coag3_3'];
        $M_Coag3_4 = $_REQUEST['Ms_Coag3_4'];
        $M_Coag3_5 = $_REQUEST['Ms_Coag3_5'];
        $M_Coag3_6 = $_REQUEST['Ms_Coag3_6'];
        $M_Coag3_1_Raw = $_REQUEST['Mr1_Coag3_1'] . ',' . $_REQUEST['Mr2_Coag3_1'] . ',' . $_REQUEST['Mr3_Coag3_1'];
        $M_Coag3_2_Raw = $_REQUEST['Mr1_Coag3_2'] . ',' . $_REQUEST['Mr2_Coag3_2'] . ',' . $_REQUEST['Mr3_Coag3_2'];
        $M_Coag3_3_Raw = $_REQUEST['Mr1_Coag3_3'] . ',' . $_REQUEST['Mr2_Coag3_3'] . ',' . $_REQUEST['Mr3_Coag3_3'];
        $M_Coag3_4_Raw = $_REQUEST['Mr1_Coag3_4'] . ',' . $_REQUEST['Mr2_Coag3_4'] . ',' . $_REQUEST['Mr3_Coag3_4'];
        $M_Coag3_5_Raw = $_REQUEST['Mr1_Coag3_5'] . ',' . $_REQUEST['Mr2_Coag3_5'] . ',' . $_REQUEST['Mr3_Coag3_5'];
        $M_Coag3_6_Raw = $_REQUEST['Mr1_Coag3_6'] . ',' . $_REQUEST['Mr2_Coag3_6'] . ',' . $_REQUEST['Mr3_Coag3_6'];
        $M_Coag3_1_Cal = avg($M_Coag3_1_Raw);
        $M_Coag3_2_Cal = avg($M_Coag3_2_Raw);
        $M_Coag3_3_Cal = avg($M_Coag3_3_Raw);
        $M_Coag3_4_Cal = avg($M_Coag3_4_Raw);
        $M_Coag3_5_Cal = avg($M_Coag3_5_Raw);
        $M_Coag3_6_Cal = avg($M_Coag3_6_Raw);

        //----------------------------BI CUT 1--------------------------------
        $B_Cut1_Name = $_REQUEST['Bs_Cut1_Name'];
        $B_Cut1_Load = $_REQUEST['Bs_Cut1_Load'];
        $B_Cut1_1 = $_REQUEST['Bs_Cut1_1'];
        $B_Cut1_2 = $_REQUEST['Bs_Cut1_2'];
        $B_Cut1_3 = $_REQUEST['Bs_Cut1_3'];
        $B_Cut1_4 = $_REQUEST['Bs_Cut1_4'];
        $B_Cut1_5 = $_REQUEST['Bs_Cut1_5'];
        $B_Cut1_6 = $_REQUEST['Bs_Cut1_6'];
        $B_Cut1_1_Raw = $_REQUEST['Br1_Cut1_1'] . ',' . $_REQUEST['Br2_Cut1_1'] . ',' . $_REQUEST['Br3_Cut1_1'];
        $B_Cut1_2_Raw = $_REQUEST['Br1_Cut1_2'] . ',' . $_REQUEST['Br2_Cut1_2'] . ',' . $_REQUEST['Br3_Cut1_2'];
        $B_Cut1_3_Raw = $_REQUEST['Br1_Cut1_3'] . ',' . $_REQUEST['Br2_Cut1_3'] . ',' . $_REQUEST['Br3_Cut1_3'];
        $B_Cut1_4_Raw = $_REQUEST['Br1_Cut1_4'] . ',' . $_REQUEST['Br2_Cut1_4'] . ',' . $_REQUEST['Br3_Cut1_4'];
        $B_Cut1_5_Raw = $_REQUEST['Br1_Cut1_5'] . ',' . $_REQUEST['Br2_Cut1_5'] . ',' . $_REQUEST['Br3_Cut1_5'];
        $B_Cut1_6_Raw = $_REQUEST['Br1_Cut1_6'] . ',' . $_REQUEST['Br2_Cut1_6'] . ',' . $_REQUEST['Br3_Cut1_6'];
        $B_Cut1_1_Cal = avg($B_Cut1_1_Raw);
        $B_Cut1_2_Cal = avg($B_Cut1_2_Raw);
        $B_Cut1_3_Cal = avg($B_Cut1_3_Raw);
        $B_Cut1_4_Cal = avg($B_Cut1_4_Raw);
        $B_Cut1_5_Cal = avg($B_Cut1_5_Raw);
        $B_Cut1_6_Cal = avg($B_Cut1_6_Raw);

        //----------------------------BI CUT 2--------------------------------
        $B_Cut2_Name = $_REQUEST['Bs_Cut2_Name'];
        $B_Cut2_Load = $_REQUEST['Bs_Cut2_Load'];
        $B_Cut2_1 = $_REQUEST['Bs_Cut2_1'];
        $B_Cut2_2 = $_REQUEST['Bs_Cut2_2'];
        $B_Cut2_3 = $_REQUEST['Bs_Cut2_3'];
        $B_Cut2_4 = $_REQUEST['Bs_Cut2_4'];
        $B_Cut2_5 = $_REQUEST['Bs_Cut2_5'];
        $B_Cut2_6 = $_REQUEST['Bs_Cut2_6'];
        $B_Cut2_1_Raw = $_REQUEST['Br1_Cut2_1'] . ',' . $_REQUEST['Br2_Cut2_1'] . ',' . $_REQUEST['Br3_Cut2_1'];
        $B_Cut2_2_Raw = $_REQUEST['Br1_Cut2_2'] . ',' . $_REQUEST['Br2_Cut2_2'] . ',' . $_REQUEST['Br3_Cut2_2'];
        $B_Cut2_3_Raw = $_REQUEST['Br1_Cut2_3'] . ',' . $_REQUEST['Br2_Cut2_3'] . ',' . $_REQUEST['Br3_Cut2_3'];
        $B_Cut2_4_Raw = $_REQUEST['Br1_Cut2_4'] . ',' . $_REQUEST['Br2_Cut2_4'] . ',' . $_REQUEST['Br3_Cut2_4'];
        $B_Cut2_5_Raw = $_REQUEST['Br1_Cut2_5'] . ',' . $_REQUEST['Br2_Cut2_5'] . ',' . $_REQUEST['Br3_Cut2_5'];
        $B_Cut2_6_Raw = $_REQUEST['Br1_Cut2_6'] . ',' . $_REQUEST['Br2_Cut2_6'] . ',' . $_REQUEST['Br3_Cut2_6'];
        $B_Cut2_1_Cal = avg($B_Cut2_1_Raw);
        $B_Cut2_2_Cal = avg($B_Cut2_2_Raw);
        $B_Cut2_3_Cal = avg($B_Cut2_3_Raw);
        $B_Cut2_4_Cal = avg($B_Cut2_4_Raw);
        $B_Cut2_5_Cal = avg($B_Cut2_5_Raw);
        $B_Cut2_6_Cal = avg($B_Cut2_6_Raw);

        //----------------------------BI CUT 3--------------------------------
        $B_Cut3_Name = $_REQUEST['Bs_Cut3_Name'];
        $B_Cut3_Load = $_REQUEST['Bs_Cut3_Load'];
        $B_Cut3_1 = $_REQUEST['Bs_Cut3_1'];
        $B_Cut3_2 = $_REQUEST['Bs_Cut3_2'];
        $B_Cut3_3 = $_REQUEST['Bs_Cut3_3'];
        $B_Cut3_4 = $_REQUEST['Bs_Cut3_4'];
        $B_Cut3_5 = $_REQUEST['Bs_Cut3_5'];
        $B_Cut3_6 = $_REQUEST['Bs_Cut3_6'];
        $B_Cut3_1_Raw = $_REQUEST['Br1_Cut3_1'] . ',' . $_REQUEST['Br2_Cut3_1'] . ',' . $_REQUEST['Br3_Cut3_1'];
        $B_Cut3_2_Raw = $_REQUEST['Br1_Cut3_2'] . ',' . $_REQUEST['Br2_Cut3_2'] . ',' . $_REQUEST['Br3_Cut3_2'];
        $B_Cut3_3_Raw = $_REQUEST['Br1_Cut3_3'] . ',' . $_REQUEST['Br2_Cut3_3'] . ',' . $_REQUEST['Br3_Cut3_3'];
        $B_Cut3_4_Raw = $_REQUEST['Br1_Cut3_4'] . ',' . $_REQUEST['Br2_Cut3_4'] . ',' . $_REQUEST['Br3_Cut3_4'];
        $B_Cut3_5_Raw = $_REQUEST['Br1_Cut3_5'] . ',' . $_REQUEST['Br2_Cut3_5'] . ',' . $_REQUEST['Br3_Cut3_5'];
        $B_Cut3_6_Raw = $_REQUEST['Br1_Cut3_6'] . ',' . $_REQUEST['Br2_Cut3_6'] . ',' . $_REQUEST['Br3_Cut3_6'];
        $B_Cut3_1_Cal = avg($B_Cut3_1_Raw);
        $B_Cut3_2_Cal = avg($B_Cut3_2_Raw);
        $B_Cut3_3_Cal = avg($B_Cut3_3_Raw);
        $B_Cut3_4_Cal = avg($B_Cut3_4_Raw);
        $B_Cut3_5_Cal = avg($B_Cut3_5_Raw);
        $B_Cut3_6_Cal = avg($B_Cut3_6_Raw);

        //----------------------------BI COAG 1--------------------------------
        $B_Coag1_Name = $_REQUEST['Bs_Coag1_Name'];
        $B_Coag1_Load = $_REQUEST['Bs_Coag1_Load'];
        $B_Coag1_1 = $_REQUEST['Bs_Coag1_1'];
        $B_Coag1_2 = $_REQUEST['Bs_Coag1_2'];
        $B_Coag1_3 = $_REQUEST['Bs_Coag1_3'];
        $B_Coag1_4 = $_REQUEST['Bs_Coag1_4'];
        $B_Coag1_5 = $_REQUEST['Bs_Coag1_5'];
        $B_Coag1_6 = $_REQUEST['Bs_Coag1_6'];
        $B_Coag1_1_Raw = $_REQUEST['Br1_Coag1_1'] . ',' . $_REQUEST['Br2_Coag1_1'] . ',' . $_REQUEST['Br3_Coag1_1'];
        $B_Coag1_2_Raw = $_REQUEST['Br1_Coag1_2'] . ',' . $_REQUEST['Br2_Coag1_2'] . ',' . $_REQUEST['Br3_Coag1_2'];
        $B_Coag1_3_Raw = $_REQUEST['Br1_Coag1_3'] . ',' . $_REQUEST['Br2_Coag1_3'] . ',' . $_REQUEST['Br3_Coag1_3'];
        $B_Coag1_4_Raw = $_REQUEST['Br1_Coag1_4'] . ',' . $_REQUEST['Br2_Coag1_4'] . ',' . $_REQUEST['Br3_Coag1_4'];
        $B_Coag1_5_Raw = $_REQUEST['Br1_Coag1_5'] . ',' . $_REQUEST['Br2_Coag1_5'] . ',' . $_REQUEST['Br3_Coag1_5'];
        $B_Coag1_6_Raw = $_REQUEST['Br1_Coag1_6'] . ',' . $_REQUEST['Br2_Coag1_6'] . ',' . $_REQUEST['Br3_Coag1_6'];
        $B_Coag1_1_Cal = avg($B_Coag1_1_Raw);
        $B_Coag1_2_Cal = avg($B_Coag1_2_Raw);
        $B_Coag1_3_Cal = avg($B_Coag1_3_Raw);
        $B_Coag1_4_Cal = avg($B_Coag1_4_Raw);
        $B_Coag1_5_Cal = avg($B_Coag1_5_Raw);
        $B_Coag1_6_Cal = avg($B_Coag1_6_Raw);

        //----------------------------BI COAG 2--------------------------------
        $B_Coag2_Name = $_REQUEST['Bs_Coag2_Name'];
        $B_Coag2_Load = $_REQUEST['Bs_Coag2_Load'];
        $B_Coag2_1 = $_REQUEST['Bs_Coag2_1'];
        $B_Coag2_2 = $_REQUEST['Bs_Coag2_2'];
        $B_Coag2_3 = $_REQUEST['Bs_Coag2_3'];
        $B_Coag2_4 = $_REQUEST['Bs_Coag2_4'];
        $B_Coag2_5 = $_REQUEST['Bs_Coag2_5'];
        $B_Coag2_6 = $_REQUEST['Bs_Coag2_6'];
        $B_Coag2_1_Raw = $_REQUEST['Br1_Coag2_1'] . ',' . $_REQUEST['Br2_Coag2_1'] . ',' . $_REQUEST['Br3_Coag2_1'];
        $B_Coag2_2_Raw = $_REQUEST['Br1_Coag2_2'] . ',' . $_REQUEST['Br2_Coag2_2'] . ',' . $_REQUEST['Br3_Coag2_2'];
        $B_Coag2_3_Raw = $_REQUEST['Br1_Coag2_3'] . ',' . $_REQUEST['Br2_Coag2_3'] . ',' . $_REQUEST['Br3_Coag2_3'];
        $B_Coag2_4_Raw = $_REQUEST['Br1_Coag2_4'] . ',' . $_REQUEST['Br2_Coag2_4'] . ',' . $_REQUEST['Br3_Coag2_4'];
        $B_Coag2_5_Raw = $_REQUEST['Br1_Coag2_5'] . ',' . $_REQUEST['Br2_Coag2_5'] . ',' . $_REQUEST['Br3_Coag2_5'];
        $B_Coag2_6_Raw = $_REQUEST['Br1_Coag2_6'] . ',' . $_REQUEST['Br2_Coag2_6'] . ',' . $_REQUEST['Br3_Coag2_6'];
        $B_Coag2_1_Cal = avg($B_Coag2_1_Raw);
        $B_Coag2_2_Cal = avg($B_Coag2_2_Raw);
        $B_Coag2_3_Cal = avg($B_Coag2_3_Raw);
        $B_Coag2_4_Cal = avg($B_Coag2_4_Raw);
        $B_Coag2_5_Cal = avg($B_Coag2_5_Raw);
        $B_Coag2_6_Cal = avg($B_Coag2_6_Raw);

        //----------------------------BI COAG 3--------------------------------
        $B_Coag3_Name = $_REQUEST['Bs_Coag3_Name'];
        $B_Coag3_Load = $_REQUEST['Bs_Coag3_Load'];
        $B_Coag3_1 = $_REQUEST['Bs_Coag3_1'];
        $B_Coag3_2 = $_REQUEST['Bs_Coag3_2'];
        $B_Coag3_3 = $_REQUEST['Bs_Coag3_3'];
        $B_Coag3_4 = $_REQUEST['Bs_Coag3_4'];
        $B_Coag3_5 = $_REQUEST['Bs_Coag3_5'];
        $B_Coag3_6 = $_REQUEST['Bs_Coag3_6'];
        $B_Coag3_1_Raw = $_REQUEST['Br1_Coag3_1'] . ',' . $_REQUEST['Br2_Coag3_1'] . ',' . $_REQUEST['Br3_Coag3_1'];
        $B_Coag3_2_Raw = $_REQUEST['Br1_Coag3_2'] . ',' . $_REQUEST['Br2_Coag3_2'] . ',' . $_REQUEST['Br3_Coag3_2'];
        $B_Coag3_3_Raw = $_REQUEST['Br1_Coag3_3'] . ',' . $_REQUEST['Br2_Coag3_3'] . ',' . $_REQUEST['Br3_Coag3_3'];
        $B_Coag3_4_Raw = $_REQUEST['Br1_Coag3_4'] . ',' . $_REQUEST['Br2_Coag3_4'] . ',' . $_REQUEST['Br3_Coag3_4'];
        $B_Coag3_5_Raw = $_REQUEST['Br1_Coag3_5'] . ',' . $_REQUEST['Br2_Coag3_5'] . ',' . $_REQUEST['Br3_Coag3_5'];
        $B_Coag3_6_Raw = $_REQUEST['Br1_Coag3_6'] . ',' . $_REQUEST['Br2_Coag3_6'] . ',' . $_REQUEST['Br3_Coag3_6'];
        $B_Coag3_1_Cal = avg($B_Coag3_1_Raw);
        $B_Coag3_2_Cal = avg($B_Coag3_2_Raw);
        $B_Coag3_3_Cal = avg($B_Coag3_3_Raw);
        $B_Coag3_4_Cal = avg($B_Coag3_4_Raw);
        $B_Coag3_5_Cal = avg($B_Coag3_5_Raw);
        $B_Coag3_6_Cal = avg($B_Coag3_6_Raw);

        // ----------------------------HF Leakage--------------------------------
        $HF_AE = $_REQUEST['HF_AE'];
        $HF_NE = $_REQUEST['HF_NE'];

        //----------------------------SQL--------------------------------
        $sql1 = "INSERT INTO cal_esu1 (
            Code,
            M_Cut1_Name,M_Cut1_Load,
            M_Cut1_1,M_Cut1_2,M_Cut1_3,M_Cut1_4,M_Cut1_5,M_Cut1_6,
            M_Cut1_1_Raw,M_Cut1_2_Raw,M_Cut1_3_Raw,M_Cut1_4_Raw,M_Cut1_5_Raw,M_Cut1_6_Raw,
            M_Cut1_1_Cal,M_Cut1_2_Cal,M_Cut1_3_Cal,M_Cut1_4_Cal,M_Cut1_5_Cal,M_Cut1_6_Cal,
            M_Cut2_Name,M_Cut2_Load,
            M_Cut2_1,M_Cut2_2,M_Cut2_3,M_Cut2_4,M_Cut2_5,M_Cut2_6,
            M_Cut2_1_Raw,M_Cut2_2_Raw,M_Cut2_3_Raw,M_Cut2_4_Raw,M_Cut2_5_Raw,M_Cut2_6_Raw,
            M_Cut2_1_Cal,M_Cut2_2_Cal,M_Cut2_3_Cal,M_Cut2_4_Cal,M_Cut2_5_Cal,M_Cut2_6_Cal,
            M_Cut3_Name,M_Cut3_Load,
            M_Cut3_1,M_Cut3_2,M_Cut3_3,M_Cut3_4,M_Cut3_5,M_Cut3_6,
            M_Cut3_1_Raw,M_Cut3_2_Raw,M_Cut3_3_Raw,M_Cut3_4_Raw,M_Cut3_5_Raw,M_Cut3_6_Raw,
            M_Cut3_1_Cal,M_Cut3_2_Cal,M_Cut3_3_Cal,M_Cut3_4_Cal,M_Cut3_5_Cal,M_Cut3_6_Cal
            ) VALUES (
            '$hosp_code',
            '$M_Cut1_Name','$M_Cut1_Load',
            '$M_Cut1_1','$M_Cut1_2','$M_Cut1_3','$M_Cut1_4','$M_Cut1_5','$M_Cut1_6',
            '$M_Cut1_1_Raw','$M_Cut1_2_Raw','$M_Cut1_3_Raw','$M_Cut1_4_Raw','$M_Cut1_5_Raw','$M_Cut1_6_Raw',
            '$M_Cut1_1_Cal','$M_Cut1_2_Cal','$M_Cut1_3_Cal','$M_Cut1_4_Cal','$M_Cut1_5_Cal','$M_Cut1_6_Cal',
            '$M_Cut2_Name','$M_Cut2_Load',
            '$M_Cut2_1','$M_Cut2_2','$M_Cut2_3','$M_Cut2_4','$M_Cut2_5','$M_Cut2_6',
            '$M_Cut2_1_Raw','$M_Cut2_2_Raw','$M_Cut2_3_Raw','$M_Cut2_4_Raw','$M_Cut2_5_Raw','$M_Cut2_6_Raw',
            '$M_Cut2_1_Cal','$M_Cut2_2_Cal','$M_Cut2_3_Cal','$M_Cut2_4_Cal','$M_Cut2_5_Cal','$M_Cut2_6_Cal',
            '$M_Cut3_Name','$M_Cut3_Load',
            '$M_Cut3_1','$M_Cut3_2','$M_Cut3_3','$M_Cut3_4','$M_Cut3_5','$M_Cut3_6',
            '$M_Cut3_1_Raw','$M_Cut3_2_Raw','$M_Cut3_3_Raw','$M_Cut3_4_Raw','$M_Cut3_5_Raw','$M_Cut3_6_Raw',
            '$M_Cut3_1_Cal','$M_Cut3_2_Cal','$M_Cut3_3_Cal','$M_Cut3_4_Cal','$M_Cut3_5_Cal','$M_Cut3_6_Cal'
            )";

        $sql2 = "INSERT INTO cal_esu2 (
            Code,
            M_Coag1_Name,M_Coag1_Load,
            M_Coag1_1,M_Coag1_2,M_Coag1_3,M_Coag1_4,M_Coag1_5,M_Coag1_6,
            M_Coag1_1_Raw,M_Coag1_2_Raw,M_Coag1_3_Raw,M_Coag1_4_Raw,M_Coag1_5_Raw,M_Coag1_6_Raw,
            M_Coag1_1_Cal,M_Coag1_2_Cal,M_Coag1_3_Cal,M_Coag1_4_Cal,M_Coag1_5_Cal,M_Coag1_6_Cal,
            M_Coag2_Name,M_Coag2_Load,
            M_Coag2_1,M_Coag2_2,M_Coag2_3,M_Coag2_4,M_Coag2_5,M_Coag2_6,
            M_Coag2_1_Raw,M_Coag2_2_Raw,M_Coag2_3_Raw,M_Coag2_4_Raw,M_Coag2_5_Raw,M_Coag2_6_Raw,
            M_Coag2_1_Cal,M_Coag2_2_Cal,M_Coag2_3_Cal,M_Coag2_4_Cal,M_Coag2_5_Cal,M_Coag2_6_Cal,
            M_Coag3_Name,M_Coag3_Load,
            M_Coag3_1,M_Coag3_2,M_Coag3_3,M_Coag3_4,M_Coag3_5,M_Coag3_6,
            M_Coag3_1_Raw,M_Coag3_2_Raw,M_Coag3_3_Raw,M_Coag3_4_Raw,M_Coag3_5_Raw,M_Coag3_6_Raw,
            M_Coag3_1_Cal,M_Coag3_2_Cal,M_Coag3_3_Cal,M_Coag3_4_Cal,M_Coag3_5_Cal,M_Coag3_6_Cal
            ) VALUES (
            '$hosp_code',
            '$M_Coag1_Name','$M_Coag1_Load',
            '$M_Coag1_1','$M_Coag1_2','$M_Coag1_3','$M_Coag1_4','$M_Coag1_5','$M_Coag1_6',
            '$M_Coag1_1_Raw','$M_Coag1_2_Raw','$M_Coag1_3_Raw','$M_Coag1_4_Raw','$M_Coag1_5_Raw','$M_Coag1_6_Raw',
            '$M_Coag1_1_Cal','$M_Coag1_2_Cal','$M_Coag1_3_Cal','$M_Coag1_4_Cal','$M_Coag1_5_Cal','$M_Coag1_6_Cal',
            '$M_Coag2_Name','$M_Coag2_Load',
            '$M_Coag2_1','$M_Coag2_2','$M_Coag2_3','$M_Coag2_4','$M_Coag2_5','$M_Coag2_6',
            '$M_Coag2_1_Raw','$M_Coag2_2_Raw','$M_Coag2_3_Raw','$M_Coag2_4_Raw','$M_Coag2_5_Raw','$M_Coag2_6_Raw',
            '$M_Coag2_1_Cal','$M_Coag2_2_Cal','$M_Coag2_3_Cal','$M_Coag2_4_Cal','$M_Coag2_5_Cal','$M_Coag2_6_Cal',
            '$M_Coag3_Name','$M_Coag3_Load',
            '$M_Coag3_1','$M_Coag3_2','$M_Coag3_3','$M_Coag3_4','$M_Coag3_5','$M_Coag3_6',
            '$M_Coag3_1_Raw','$M_Coag3_2_Raw','$M_Coag3_3_Raw','$M_Coag3_4_Raw','$M_Coag3_5_Raw','$M_Coag3_6_Raw',
            '$M_Coag3_1_Cal','$M_Coag3_2_Cal','$M_Coag3_3_Cal','$M_Coag3_4_Cal','$M_Coag3_5_Cal','$M_Coag3_6_Cal'
            )";
        $sql3 = "INSERT INTO cal_esu3 (
            Code,
            B_Cut1_Name,B_Cut1_Load,
            B_Cut1_1,B_Cut1_2,B_Cut1_3,B_Cut1_4,B_Cut1_5,B_Cut1_6,
            B_Cut1_1_Raw,B_Cut1_2_Raw,B_Cut1_3_Raw,B_Cut1_4_Raw,B_Cut1_5_Raw,B_Cut1_6_Raw,
            B_Cut1_1_Cal,B_Cut1_2_Cal,B_Cut1_3_Cal,B_Cut1_4_Cal,B_Cut1_5_Cal,B_Cut1_6_Cal,
            B_Cut2_Name,B_Cut2_Load,
            B_Cut2_1,B_Cut2_2,B_Cut2_3,B_Cut2_4,B_Cut2_5,B_Cut2_6,
            B_Cut2_1_Raw,B_Cut2_2_Raw,B_Cut2_3_Raw,B_Cut2_4_Raw,B_Cut2_5_Raw,B_Cut2_6_Raw,
            B_Cut2_1_Cal,B_Cut2_2_Cal,B_Cut2_3_Cal,B_Cut2_4_Cal,B_Cut2_5_Cal,B_Cut2_6_Cal,
            B_Cut3_Name,B_Cut3_Load,
            B_Cut3_1,B_Cut3_2,B_Cut3_3,B_Cut3_4,B_Cut3_5,B_Cut3_6,
            B_Cut3_1_Raw,B_Cut3_2_Raw,B_Cut3_3_Raw,B_Cut3_4_Raw,B_Cut3_5_Raw,B_Cut3_6_Raw,
            B_Cut3_1_Cal,B_Cut3_2_Cal,B_Cut3_3_Cal,B_Cut3_4_Cal,B_Cut3_5_Cal,B_Cut3_6_Cal
            ) VALUES (
            '$hosp_code',
            '$B_Cut1_Name','$B_Cut1_Load',
            '$B_Cut1_1','$B_Cut1_2','$B_Cut1_3','$B_Cut1_4','$B_Cut1_5','$B_Cut1_6',
            '$B_Cut1_1_Raw','$B_Cut1_2_Raw','$B_Cut1_3_Raw','$B_Cut1_4_Raw','$B_Cut1_5_Raw','$B_Cut1_6_Raw',
            '$B_Cut1_1_Cal','$B_Cut1_2_Cal','$B_Cut1_3_Cal','$B_Cut1_4_Cal','$B_Cut1_5_Cal','$B_Cut1_6_Cal',
            '$B_Cut2_Name','$B_Cut2_Load',
            '$B_Cut2_1','$B_Cut2_2','$B_Cut2_3','$B_Cut2_4','$B_Cut2_5','$B_Cut2_6',
            '$B_Cut2_1_Raw','$B_Cut2_2_Raw','$B_Cut2_3_Raw','$B_Cut2_4_Raw','$B_Cut2_5_Raw','$B_Cut2_6_Raw',
            '$B_Cut2_1_Cal','$B_Cut2_2_Cal','$B_Cut2_3_Cal','$B_Cut2_4_Cal','$B_Cut2_5_Cal','$B_Cut2_6_Cal',
            '$B_Cut3_Name','$B_Cut3_Load',
            '$B_Cut3_1','$B_Cut3_2','$B_Cut3_3','$B_Cut3_4','$B_Cut3_5','$B_Cut3_6',
            '$B_Cut3_1_Raw','$B_Cut3_2_Raw','$B_Cut3_3_Raw','$B_Cut3_4_Raw','$B_Cut3_5_Raw','$B_Cut3_6_Raw',
            '$B_Cut3_1_Cal','$B_Cut3_2_Cal','$B_Cut3_3_Cal','$B_Cut3_4_Cal','$B_Cut3_5_Cal','$B_Cut3_6_Cal'
            )";
        $sql4 = "INSERT INTO cal_esu4 (
            Code,
            HF_AE,HF_NE,
            B_Coag1_Name,B_Coag1_Load,
            B_Coag1_1,B_Coag1_2,B_Coag1_3,B_Coag1_4,B_Coag1_5,B_Coag1_6,
            B_Coag1_1_Raw,B_Coag1_2_Raw,B_Coag1_3_Raw,B_Coag1_4_Raw,B_Coag1_5_Raw,B_Coag1_6_Raw,
            B_Coag1_1_Cal,B_Coag1_2_Cal,B_Coag1_3_Cal,B_Coag1_4_Cal,B_Coag1_5_Cal,B_Coag1_6_Cal,
            B_Coag2_Name,B_Coag2_Load,
            B_Coag2_1,B_Coag2_2,B_Coag2_3,B_Coag2_4,B_Coag2_5,B_Coag2_6,
            B_Coag2_1_Raw,B_Coag2_2_Raw,B_Coag2_3_Raw,B_Coag2_4_Raw,B_Coag2_5_Raw,B_Coag2_6_Raw,
            B_Coag2_1_Cal,B_Coag2_2_Cal,B_Coag2_3_Cal,B_Coag2_4_Cal,B_Coag2_5_Cal,B_Coag2_6_Cal,
            B_Coag3_Name,B_Coag3_Load,
            B_Coag3_1,B_Coag3_2,B_Coag3_3,B_Coag3_4,B_Coag3_5,B_Coag3_6,
            B_Coag3_1_Raw,B_Coag3_2_Raw,B_Coag3_3_Raw,B_Coag3_4_Raw,B_Coag3_5_Raw,B_Coag3_6_Raw,
            B_Coag3_1_Cal,B_Coag3_2_Cal,B_Coag3_3_Cal,B_Coag3_4_Cal,B_Coag3_5_Cal,B_Coag3_6_Cal
            ) VALUES (
            '$hosp_code',
            '$HF_AE','$HF_NE',
            '$B_Coag1_Name','$B_Coag1_Load',
            '$B_Coag1_1','$B_Coag1_2','$B_Coag1_3','$B_Coag1_4','$B_Coag1_5','$B_Coag1_6',
            '$B_Coag1_1_Raw','$B_Coag1_2_Raw','$B_Coag1_3_Raw','$B_Coag1_4_Raw','$B_Coag1_5_Raw','$B_Coag1_6_Raw',
            '$B_Coag1_1_Cal','$B_Coag1_2_Cal','$B_Coag1_3_Cal','$B_Coag1_4_Cal','$B_Coag1_5_Cal','$B_Coag1_6_Cal',
            '$B_Coag2_Name','$B_Coag2_Load',
            '$B_Coag2_1','$B_Coag2_2','$B_Coag2_3','$B_Coag2_4','$B_Coag2_5','$B_Coag2_6',
            '$B_Coag2_1_Raw','$B_Coag2_2_Raw','$B_Coag2_3_Raw','$B_Coag2_4_Raw','$B_Coag2_5_Raw','$B_Coag2_6_Raw',
            '$B_Coag2_1_Cal','$B_Coag2_2_Cal','$B_Coag2_3_Cal','$B_Coag2_4_Cal','$B_Coag2_5_Cal','$B_Coag2_6_Cal',
            '$B_Coag3_Name','$B_Coag3_Load',
            '$B_Coag3_1','$B_Coag3_2','$B_Coag3_3','$B_Coag3_4','$B_Coag3_5','$B_Coag3_6',
            '$B_Coag3_1_Raw','$B_Coag3_2_Raw','$B_Coag3_3_Raw','$B_Coag3_4_Raw','$B_Coag3_5_Raw','$B_Coag3_6_Raw',
            '$B_Coag3_1_Cal','$B_Coag3_2_Cal','$B_Coag3_3_Cal','$B_Coag3_4_Cal','$B_Coag3_5_Cal','$B_Coag3_6_Cal'
            )";

        $Caldate = date("Y-m-d");
        $upCaldate = "UPDATE cpy SET Caldate = '$Caldate' WHERE Code = '$hosp_code'";
        if (mysqli_query($conn, $sql1) && mysqli_query($conn, $sql2) && mysqli_query($conn, $sql3) && mysqli_query($conn, $sql4) && mysqli_query($conn, $upCaldate)) {
            echo "<button type='button' class='btn btn-success'>เพิ่มข้อมูลเรียบร้อยแล้ว</button>";
            header('refresh: 3; url=list.php');
        } else {
            echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
            echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
            echo "Error: " . $sql3 . "<br>" . mysqli_error($conn);
            echo "Error: " . $sql4 . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
        ?>
    </center>



</body>

</html>