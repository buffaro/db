<!DOCTYPE html>
<html lang="en">

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
    <div class="container">
        <h2 style="text-align:center; margin: 1em;">ใบรายงานผลการสอบเทียบ</h2>
    <?php
    include_once("conf.php");

    $conn = new mysqli($cpy_server, $cpy_user, $cpy_pass, $cpy_db);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $device = $_GET['id'];
    $sql = "SELECT * FROM cal_bsm WHERE Code = '" . $device . "'";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $deviceCode = $row['Code'];
        $sql2 = "SELECT * FROM cpy WHERE Code = '" . $deviceCode . "'";
        $result2 = mysqli_query($conn, $sql2);

        // ข้อมูลเครื่องมือที่สอบเทียบ
        if ($row2 = mysqli_fetch_array($result2)) {
            echo "
            <table class='table table-bordered'>
            <tbody>
                <tr>
                    <td><strong>ชื่อเครื่อง</strong></td>
                    <td>" . $row2['Name'] . "</td>
                    <td><strong>หมายเลขเครื่อง</strong></td>
                    <td>" . $row2['SN'] . "</td>
                </tr>
                <tr>
                    <td><strong>เลขที่อ้างอิง</strong></td>
                    <td>" . $row2['Ref'] . "</td>
                    <td><strong>รหัสประจำเครื่อง</strong></td>
                    <td>" . $row2['Code'] . "</td>
                </tr>
                <tr>
                    <td><strong>ยี่ห้อ</strong></td>
                    <td>" . $row2['Brand'] . "</td>
                    <td><strong>รุ่น</strong></td>
                    <td>" . $row2['Model'] . "</td>
                </tr>
                <tr>
                    <td><strong>ใช้งานที่</strong></td>
                    <td>" . $row2['Ward'] . "</td>
                    <td><strong>โรงพยาบาล</strong></td>
                    <td>เจ้าพระยา</td>
                </tr>
            </tbody>
            </table>
            ";
        }
        // ผลการสอบเทียบ
        
        echo "
            <h5 style='margin-top: 1em;'>อัตราการเต้นของหัวใจ</h5>
            <table class='table table-bordered' style='text-align: center;'>
            <thead>
                <tr>
                    <th>Set</th>
                    <th>UUT Read (bpm)</th>
                    <th>Error (bpm)</th>
                    <th>Uncertainty ± (bpm)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td width='25%'>" . $row['S_HR1'] . "</td>
                    <td width='25%'>" . $row['S_HR1_Cal'] . "</td>
                    <td width='25%'>" . $row['S_HR1_Cal']-$row['S_HR1'] . "</td>
                    <td width='25%'>0.15</td>
                </tr>
                <tr>
                    <td>" . $row['S_HR2'] . "</td>
                    <td>" . $row['S_HR2_Cal'] . "</td>
                    <td>" . $row['S_HR2_Cal']-$row['S_HR2'] . "</td>
                    <td>0.21</td>
                </tr>
                <tr>
                    <td>" . $row['S_HR3'] . "</td>
                    <td>" . $row['S_HR3_Cal'] . "</td>
                    <td>" . $row['S_HR3_Cal']-$row['S_HR3'] . "</td>
                    <td>0.29</td>
                </tr>
            </tbody>
            </table>
            ";

    }
    mysqli_close($conn);
    ?>
    </div>
</body>

</html>