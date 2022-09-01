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
  <link rel="stylesheet" href="main.css">
</head>

<body style="background-color: black;">
  <style>
    .header {
      position: sticky;
      top: 0px;
    }
    .lTd{
        border-left: 1px solid white;
    }
    .bTd{
        border-bottom: 1px solid white;
    }
  </style>
  <div class="row g-0">
    <div class="col-10">
      <input id="inSearch" value="" class="form-control" placeholder="Enter Code or Ref">
    </div>
    <div class="col-2">
      <button type='button' id="btnSearch" onclick="goSearch()" class="btn btn-dark w-100"><i class="fa fa-search" aria-hidden="true"></i></button>
    </div>
  </div>


  <script>
    var input = document.getElementById("inSearch");
    input.addEventListener("keypress", function(event) {
      if (event.key === "Enter") {
        event.preventDefault();
        document.getElementById("btnSearch").click();
      }
    });

    function goSearch() {
      let q = document.getElementById("inSearch").value;
      window.open('?code=' + q, '_self')
    }

  </script>

  <?php
  include_once("conf.php");
  include_once("func.php");

  $conn = new mysqli($cpy_server, $cpy_user, $cpy_pass, $cpy_db);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $code = isset($_GET['code']) ? $_GET['code'] : "";



  $sql = "SELECT * FROM cal_esu1,cal_esu2,cal_esu3,cal_esu4 WHERE cal_esu1.Code = cal_esu2.Code AND cal_esu1.Code = cal_esu3.Code AND cal_esu1.Code = cal_esu4.Code AND cal_esu1.Code LIKE '%$code%'";
  $result = mysqli_query($conn, $sql);

  echo "<table class='table table-striped table-dark'>
            <tr href='#' class='header'>
            <th>Code</th>
            <th>Temp <span style='opacity:0.4'>(°C)</span></th>
            <th>Humi <span style='opacity:0.4'>(%RH)</span></th>
            <th class='lTd'>M_Cut-1 <span style='opacity:0.4'>(W)</span></th>
            <th class='lTd'>M_Cut-2 <span style='opacity:0.4'>(W)</span></th>
            <th class='lTd'>M_Cut-3 <span style='opacity:0.4'>(W)</span></th>
            <th class='lTd'>M_Coag-1 <span style='opacity:0.4'>(W)</span></th>
            <th class='lTd'>M_Coag-2 <span style='opacity:0.4'>(W)</span></th>
            <th class='lTd'>M_Coag-3 <span style='opacity:0.4'>(W)</span></th>
            <th class='lTd'>Bi-1 <span style='opacity:0.4'>(W)</span></th>
            <th class='lTd'>Bi-2 <span style='opacity:0.4'>(W)</span></th>
            <th class='lTd'>Bi-3 <span style='opacity:0.4'>(W)</span></th>
            <th class='lTd'>4 <span style='opacity:0.4'>(W)</span></th>
            <th class='lTd'>5 <span style='opacity:0.4'>(W)</span></th>
            <th class='lTd'>6 <span style='opacity:0.4'>(W)</span></th>

            </tr>
            ";
  while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['Code'] . "</td>";
    echo "<td>" . $row['Room_T'] . "</td>";
    echo "<td>" . $row['Room_H'] . "</td>";
    echo "<td class='lTd'><span style='color:red'>" . N0($row['M_Cut1_Name']) . "</span></td>";
    echo "<td class='lTd'><span style='color:red'>" . N0($row['M_Cut2_Name']) . "</span></td>";
    echo "<td class='lTd'><span style='color:red'>" . N0($row['M_Cut3_Name']) . "</span></td>";
    echo "<td class='lTd'><span style='color:red'>" . N0($row['M_Coag1_Name']) . "</span></td>";
    echo "<td class='lTd'><span style='color:red'>" . N0($row['M_Coag2_Name']) . "</span></td>";
    echo "<td class='lTd'><span style='color:red'>" . N0($row['M_Coag3_Name']) . "</span></td>";
    echo "<td class='lTd'><span style='color:red'>" . N0($row['B_Cut1_Name']) . "</span></td>";
    echo "<td class='lTd'><span style='color:red'>" . N0($row['B_Cut2_Name']) . "</span></td>";
    echo "<td class='lTd'><span style='color:red'>" . N0($row['B_Cut3_Name']) . "</span></td>";
    echo "<td class='lTd'><span style='color:red'>" . N0($row['B_Coag1_Name']) . "</span></td>";
    echo "<td class='lTd'><span style='color:red'>" . N0($row['B_Coag2_Name']) . "</span></td>";
    echo "<td class='lTd'><span style='color:red'>" . N0($row['B_Coag3_Name']) . "</span></td>";

    echo "</tr>";
    // -------------------
    echo "<tr>";
    echo "<td></td>";
    echo "<td>HF A-E <span style='opacity:0.4'>(mA)</span></td>";
    echo "<td>" . P1($row['HF_AE']) . "</td>";
    echo "<td class='lTd'><span style='color:yellow'>" . P0($row['M_Cut1_Load']) . "</span></td>";
    echo "<td class='lTd'><span style='color:yellow'>" . P0($row['M_Cut2_Load']) . "</span></td>";
    echo "<td class='lTd'><span style='color:yellow'>" . P0($row['M_Cut3_Load']) . "</span></td>";
    echo "<td class='lTd'><span style='color:yellow'>" . P0($row['M_Coag1_Load']) . "</span></td>";
    echo "<td class='lTd'><span style='color:yellow'>" . P0($row['M_Coag2_Load']) . "</span></td>";
    echo "<td class='lTd'><span style='color:yellow'>" . P0($row['M_Coag3_Load']) . "</span></td>";
    echo "<td class='lTd'><span style='color:yellow'>" . P0($row['B_Cut1_Load']) . "</span></td>";
    echo "<td class='lTd'><span style='color:yellow'>" . P0($row['B_Cut2_Load']) . "</span></td>";
    echo "<td class='lTd'><span style='color:yellow'>" . P0($row['B_Cut3_Load']) . "</span></td>";
    echo "<td class='lTd'><span style='color:yellow'>" . P0($row['B_Coag1_Load']) . "</span></td>";
    echo "<td class='lTd'><span style='color:yellow'>" . P0($row['B_Coag2_Load']) . "</span></td>";
    echo "<td class='lTd'><span style='color:yellow'>" . P0($row['B_Coag3_Load']) . "</span></td>";

    echo "</tr>";
    // -------------------
    echo "<tr>";
    echo "<td></td>";
    echo "<td>HF N-E <span style='opacity:0.4'>(mA)</span></td></td>";
    echo "<td>" . P1($row['HF_NE']) . "</td>";
    echo "<td class='lTd'>" . P2($row['M_Cut1_1_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['M_Cut2_1_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['M_Cut3_1_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['M_Coag1_1_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['M_Coag2_1_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['M_Coag3_1_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['B_Cut1_1_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['B_Cut2_1_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['B_Cut3_1_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['B_Coag1_1_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['B_Coag2_1_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['B_Coag3_1_Cal']) . "</td>";

    echo "</tr>";
    // -------------------
    echo "<tr>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td class='lTd'>" . P2($row['M_Cut1_2_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['M_Cut2_2_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['M_Cut3_2_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['M_Coag1_2_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['M_Coag2_2_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['M_Coag3_2_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['B_Cut1_2_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['B_Cut2_2_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['B_Cut3_2_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['B_Coag1_2_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['B_Coag2_2_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['B_Coag3_2_Cal']) . "</td>";

    echo "</tr>";
    // -------------------
    echo "<tr>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td class='lTd'>" . P2($row['M_Cut1_3_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['M_Cut2_3_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['M_Cut3_3_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['M_Coag1_3_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['M_Coag2_3_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['M_Coag3_3_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['B_Cut1_3_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['B_Cut2_3_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['B_Cut3_3_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['B_Coag1_3_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['B_Coag2_3_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['B_Coag3_3_Cal']) . "</td>";

    echo "</tr>";
    // -------------------
    echo "<tr>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td class='lTd'>" . P2($row['M_Cut1_4_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['M_Cut2_4_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['M_Cut3_4_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['M_Coag1_4_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['M_Coag2_4_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['M_Coag3_4_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['B_Cut1_4_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['B_Cut2_4_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['B_Cut3_4_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['B_Coag1_4_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['B_Coag2_4_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['B_Coag3_4_Cal']) . "</td>";

    echo "</tr>";
    // -------------------
    echo "<tr>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td class='lTd'>" . P2($row['M_Cut1_5_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['M_Cut2_5_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['M_Cut3_5_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['M_Coag1_5_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['M_Coag2_5_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['M_Coag3_5_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['B_Cut1_5_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['B_Cut2_5_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['B_Cut3_5_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['B_Coag1_5_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['B_Coag2_5_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['B_Coag3_5_Cal']) . "</td>";

    echo "</tr>";
    // -------------------
    echo "<tr class='bTd'>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td class='lTd'>" . P2($row['M_Cut1_6_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['M_Cut2_6_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['M_Cut3_6_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['M_Coag1_6_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['M_Coag2_6_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['M_Coag3_6_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['B_Cut1_6_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['B_Cut2_6_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['B_Cut3_6_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['B_Coag1_6_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['B_Coag2_6_Cal']) . "</td>";
    echo "<td class='lTd'>" . P2($row['B_Coag3_6_Cal']) . "</td>";

    echo "</tr>";
  }
  echo "</table>";

  
  mysqli_close($conn);

  ?>


</body>

</html>