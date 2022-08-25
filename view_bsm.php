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
    <link rel="stylesheet" href="http://localhost/db/css/main.css">
</head>

<body>
    <div class="container">
        <h2 style="text-align:center; margin: 1em;">ใบรายงานผลการสอบเทียบ</h2>
        <?php
        include_once("conf.php");
        include_once("func.php");

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
                $date = date_create($row2['Caldate']);
                echo "
            <table class='table table-bordered'>
            <tbody>
                <tr>
                    <td><strong>เลขที่อ้างอิง</strong></td>
                    <td>CPY-" . $row2['Ref'] . "</td>
                    <td><strong>รหัสประจำเครื่อง</strong></td>
                    <td>" . $row2['Code'] . "</td>
                </tr>
                <tr>
                    <td><strong>ชื่อเครื่อง</strong></td>
                    <td>" . $row2['Name'] . "</td>
                    <td><strong>หมายเลขเครื่อง</strong></td>
                    <td>" . $row2['SN'] . "</td>
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
            <table class='table table-bordered'>
            <tbody>
                <tr>
                    <td>อุณหภูมิ</td>
                    <td>" . $row['Room_T'] . "</td>
                    <td>ความชื้น</td>
                    <td>" . $row['Room_H'] . "</td>
                    <td>วันที่สอบเทียบ</td>
                    <td>" . date_format($date, "d/m/Y") . "</td>
                </tr>
            </tbody>
            </table>
            ";
            }
            // ผลการสอบเทียบ
            // ECG
            echo "
            <h5 style='margin-top: 1em;'>อัตราการเต้นของหัวใจ</h5>
            <table class='table table-bordered' style='text-align: center;'>
            <thead>
                <tr>
                    <th width='25%'>Set (bpm)</th>
                    <th width='25%'>UUT Read (bpm)</th>
                    <th width='25%'>Error (bpm)</th>
                    <th width='25%'>Uncertainty ± (bpm)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>" . $row['S_HR1'] . "</td>
                    <td>" . P1($row['S_HR1_Cal']) . "</td>
                    <td>" . C1($row['S_HR1'], $row['S_HR1_Cal']) . "</td>
                    <td>0.15</td>
                </tr>
                <tr>
                    <td>" . $row['S_HR2'] . "</td>
                    <td>" . P1($row['S_HR2_Cal']) . "</td>
                    <td>" . C1($row['S_HR2'], $row['S_HR2_Cal']) . "</td>
                    <td>0.21</td>
                </tr>
                <tr>
                    <td>" . $row['S_HR3'] . "</td>
                    <td>" . P1($row['S_HR3_Cal']) . "</td>
                    <td>" . C1($row['S_HR3'], $row['S_HR3_Cal']) . "</td>
                    <td>0.29</td>
                </tr>
            </tbody>
            </table>
            ";
            // SpO2
            echo "
            <h5 style='margin-top: 1em;'>ค่าความอิ่มตัวของออกซิเจนในเลือด</h5>
            <p style='margin-top: 1em;'>Setting Type: <span>" . $row['S_Sensor'] . "</span></p>
            <table class='table table-bordered' style='text-align: center;'>
            <thead>
                <tr>
                    <th width='25%'>Set (%SpO2)</th>
                    <th width='25%'>UUT Read (%SpO2)</th>
                    <th width='25%'>Deviation (%SpO2)</th>
                    <th width='25%'>Acceptance ± (%SpO2)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>" . $row['S_PO1'] . "</td>
                    <td>" . P1($row['S_PO1_Cal']) . "</td>
                    <td>" . C1($row['S_PO1'], $row['S_PO1_Cal']) . "</td>
                    <td>0.15</td>
                </tr>
                <tr>
                    <td>" . $row['S_PO2'] . "</td>
                    <td>" . P1($row['S_PO2_Cal']) . "</td>
                    <td>" . C1($row['S_PO2'], $row['S_PO2_Cal']) . "</td>
                    <td>0.21</td>
                </tr>
                <tr>
                    <td>" . $row['S_PO3'] . "</td>
                    <td>" . P1($row['S_PO3_Cal']) . "</td>
                    <td>" . C1($row['S_PO3'], $row['S_PO3_Cal']) . "</td>
                    <td>0.29</td>
                </tr>
            </tbody>
            </table>
            ";
            // NIBP
            echo "
        <h5 style='margin-top: 1em;'>ค่าความดันเลือด NIBP ที่ระดับ ปกติ, สูง และ ต่ำ</h5>
        <p style='margin-top: 1em;'>Setting Shift: <span>" . $row['S_ES'] . "%</span></p>
        <table class='table table-bordered' style='text-align: center;'>
        <thead>
            <tr>
                <th width='20%'>Level Set</th>
                <th width='20%'>Systolic (mmHg)</th>
                <th width='20%'>Mean (mmHg)</th>
                <th width='20%'>Diastolic (mmHg)</th>
                <th width='20%'>Pulse Rate (bpm)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Level 1</td>
                <td>" . $row['SL_Sys'] . "</td>
                <td>" . $row['SL_Mean'] . "</td>
                <td>" . $row['SL_Dia'] . "</td>
                <td>" . $row['SL_PR'] . "</td>
            </tr>
            <tr>
                <td>Read</td>
                <td>" . P1($row['SM_Sys_Cal']) . " (" . C1($row['SL_Sys'], $row['SM_Sys_Cal']) . ")</td>
                <td>" . P1($row['SM_Mean_Cal']) . " (" . C1($row['SL_Mean'], $row['SM_Mean_Cal']) . ")</td>
                <td>" . P1($row['SM_Dia_Cal']) . " (" . C1($row['SL_Dia'], $row['SM_Dia_Cal']) . ")</td>
                <td>" . P1($row['SM_PR_Cal']) . " (" . C1($row['SL_PR'], $row['SM_PR_Cal']) . ")</td>
            </tr>
            <tr>
                <td>Level 2</td>
                <td>" . $row['SH_Sys'] . "</td>
                <td>" . $row['SH_Mean'] . "</td>
                <td>" . $row['SH_Dia'] . "</td>
                <td>" . $row['SH_PR'] . "</td>
            </tr>
            <tr>
                <td>Read</td>
                <td>" . P1($row['SH_Sys_Cal']) . " (" . C1($row['SH_Sys'], $row['SH_Sys_Cal']) . ")</td>
                <td>" . P1($row['SH_Mean_Cal']) . " (" . C1($row['SH_Mean'], $row['SH_Mean_Cal']) . ")</td>
                <td>" . P1($row['SH_Dia_Cal']) . " (" . C1($row['SH_Dia'], $row['SH_Dia_Cal']) . ")</td>
                <td>" . P1($row['SH_PR_Cal']) . " (" . C1($row['SH_PR'], $row['SH_PR_Cal']) . ")</td>
            </tr>
            <tr>
                <td>Level 3</td>
                <td>" . $row['SM_Sys'] . "</td>
                <td>" . $row['SM_Mean'] . "</td>
                <td>" . $row['SM_Dia'] . "</td>
                <td>" . $row['SM_PR'] . "</td>
            </tr>
            <tr>
                <td>Read</td>
                <td>" . P1($row['SL_Sys_Cal']) . " (" . C1($row['SM_Sys'], $row['SL_Sys_Cal']) . ")</td>
                <td>" . P1($row['SL_Mean_Cal']) . " (" . C1($row['SM_Mean'], $row['SL_Mean_Cal']) . ")</td>
                <td>" . P1($row['SL_Dia_Cal']) . " (" . C1($row['SM_Dia'], $row['SL_Dia_Cal']) . ")</td>
                <td>" . P1($row['SL_PR_Cal']) . " (" . C1($row['SM_PR'], $row['SL_PR_Cal']) . ")</td>
            </tr>
        </tbody>
        </table>
        ";
            // Resipiration
            echo "
            <h5 style='margin-top: 1em;'>อัตราการหายใจ</h5>
            <p style='margin-top: 1em;'>Setting Lead: <span>" . $row['S_Lead'] . "</span></p>
            <table class='table table-bordered' style='text-align: center;'>
            <thead>
                <tr>
                    <th width='25%'>Set (brpm)</th>
                    <th width='25%'>UUT Read (brpm)</th>
                    <th width='25%'>Error (brpm)</th>
                    <th width='25%'>Uncertainty ± (brpm)</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                <td>" . $row['S_Res1'] . "</td>
                <td>" . P1($row['S_Res1_Cal']) . "</td>
                <td>" . C1($row['S_Res1'], $row['S_Res1_Cal']) . "</td>
                <td>0.18</td>
            </tr>
            <tr>
                <td>" . $row['S_Res2'] . "</td>
                <td>" . P1($row['S_Res2_Cal']) . "</td>
                <td>" . C1($row['S_Res2'], $row['S_Res2_Cal']) . "</td>
                <td>0.18</td>
            </tr>
            <tr>
                <td>" . $row['S_Res3'] . "</td>
                <td>" . P1($row['S_Res3_Cal']) . "</td>
                <td>" . C1($row['S_Res3'], $row['S_Res3_Cal']) . "</td>
                <td>0.18</td>
            </tr>
            </tbody>
            </table>
            ";
        }
        mysqli_close($conn);
        ?>
    </div>
    <div></div>
</body>

</html>