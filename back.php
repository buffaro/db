<?php
$sql4 = "INSERT INTO cal_esu4 (
    Code,
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
    '$B_Coag1_Name','$B_Coag1_Load,
    '$B_Coag1_1','$B_Coag1_2','$B_Coag1_3','$B_Coag1_4','$B_Coag1_5','$B_Coag1_6,
    '$B_Coag1_1_Raw','$B_Coag1_2_Raw','$B_Coag1_3_Raw','$B_Coag1_4_Raw','$B_Coag1_5_Raw','$B_Coag1_6_Raw,
    '$B_Coag1_1_Cal','$B_Coag1_2_Cal','$B_Coag1_3_Cal','$B_Coag1_4_Cal','$B_Coag1_5_Cal','$B_Coag1_6_Cal,
    '$B_Coag2_Name','$B_Coag2_Load,
    '$B_Coag2_1','$B_Coag2_2','$B_Coag2_3','$B_Coag2_4','$B_Coag2_5','$B_Coag2_6,
    '$B_Coag2_1_Raw','$B_Coag2_2_Raw','$B_Coag2_3_Raw','$B_Coag2_4_Raw','$B_Coag2_5_Raw','$B_Coag2_6_Raw,
    '$B_Coag2_1_Cal','$B_Coag2_2_Cal','$B_Coag2_3_Cal','$B_Coag2_4_Cal','$B_Coag2_5_Cal','$B_Coag2_6_Cal,
    '$B_Coag3_Name','$B_Coag3_Load,
    '$B_Coag3_1','$B_Coag3_2','$B_Coag3_3','$B_Coag3_4','$B_Coag3_5','$B_Coag3_6,
    '$B_Coag3_1_Raw','$B_Coag3_2_Raw','$B_Coag3_3_Raw','$B_Coag3_4_Raw','$B_Coag3_5_Raw','$B_Coag3_6_Raw,
    '$B_Coag3_1_Cal','$B_Coag3_2_Cal','$B_Coag3_3_Cal','$B_Coag3_4_Cal','$B_Coag3_5_Cal','$B_Coag3_6_Cal
    )";

if (mysqli_query($conn, $sql3)) {
    echo "<button type='button' class='btn btn-success'>เพิ่มข้อมูลเรียบร้อยแล้ว</button>";
    header('refresh: 3; url=list.php');
} else {
    echo "Error: " . $sql3 . "<br>" . mysqli_error($conn);
}

?>