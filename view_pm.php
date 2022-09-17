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
  <link rel="stylesheet" href="css/main.css">
</head>

<body style="background-color: black;">

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
  include_once("func_pm.php");

  $conn = new mysqli($cpy_server, $cpy_user, $cpy_pass, $cpy_db);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $code = isset($_GET['code']) ? $_GET['code'] : "";



  $sql = "SELECT * FROM pm_checked WHERE Code LIKE '%$code%'";
  $result = mysqli_query($conn, $sql);

  echo "<table class='table table-striped table-dark'>
            <tr href='#' class='header'>
            <th>Code</th>
            <th>Temp <span style='opacity:0.4'>(°C)</span></th>
            <th>Humi <span style='opacity:0.4'>(%RH)</span></th>
            <th class='lTd'>Parameters</th>  
            <th class='lTd'>Result</th>  
            </tr>
            ";
  while ($row = mysqli_fetch_array($result)) {
    $c = $row['Code'];
    $sql2 = "SELECT * FROM cpy WHERE Code = '$c'";
    $result2 = mysqli_query($conn, $sql2);
    if ($row2 = mysqli_fetch_array($result2)) {
    echo "<tr>";
    echo "<td>" . $row['Code'] . "</td>";
    echo "<td>" . $row['Room_T'] . "</td>";
    echo "<td>" . $row['Room_H'] . "</td>";
    echo "<td class='lTd'>" . PM($row2['Name'],1) . "</td>";
    echo "<td class='lTd'>" . Chk($row['PM_V_Checked1']) . "</td>";  
    echo "</tr>";
    // -------------------
    echo "<tr>";
    // Caldate
    echo "<td><span style='color:#0CFF00'>" . $row2['Caldate'] . "</span></td>";
    // -------
    echo "<td colspan='2'>Load = ".$row['GROUND']."</td>";
    echo "<td class='lTd'>" . PM($row2['Name'],2) . "</td>";
    echo "<td class='lTd'>" . Chk($row['PM_V_Checked2']) . "</td>";  
    echo "</tr>";
    // -------------------
    echo "<tr>";
    echo "<td></td>";
    echo "<td>Leakage Curr. = ".$row['LKG']."</td>";
    echo "<td></td>";
    echo "<td class='lTd'>" . PM($row2['Name'],3) . "</td>";
    echo "<td class='lTd'>" . Chk($row['PM_V_Checked3']) . "</td>";  
    echo "</tr>";
    // -------------------
    echo "<tr>";
    echo "<td></td>";
    echo "<td>Comment = ".$row['Comments']."</td>";
    echo "<td></td>";
    echo "<td class='lTd'>" . PM($row2['Name'],4) . "</td>";
    echo "<td class='lTd'>" . Chk($row['PM_V_Checked4']) . "</td>";  
    echo "</tr>";
    // -------------------
    echo "<tr>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td class='lTd'>" . PM($row2['Name'],5) . "</td>";
    echo "<td class='lTd'>" . Chk($row['PM_V_Checked5']) . "</td>";  
    echo "</tr>";
    // -------------------
    echo "<tr>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td class='lTd'>" . PM($row2['Name'],6) . "</td>";
    echo "<td class='lTd'>" . Chk($row['PM_V_Checked5']) . "</td>";  
    echo "</tr>";
    // -------------------
    echo "<tr>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td class='lTd'>" . PM($row2['Name'],7) . "</td>";
    echo "<td class='lTd'>" . Chk($row['PM_V_Checked7']) . "</td>";  
    echo "</tr>";
    // -------------------
    echo "<tr>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td class='lTd'>" . PM($row2['Name'],8) . "</td>";
    echo "<td class='lTd'>" . Chk($row['PM_V_Checked8']) . "</td>";  
    echo "</tr>";
    // -------------------
    echo "<tr>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td class='lTd'>" . PM($row2['Name'],9) . "</td>";
    echo "<td class='lTd'>" . Chk($row['PM_V_Checked9']) . "</td>";  
    echo "</tr>";
    // -------------------
    echo "<tr>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td class='lTd'>" . PM($row2['Name'],10) . "</td>";
    echo "<td class='lTd'>" . Chk($row['PM_V_Checked10']) . "</td>";  
    echo "</tr>";
    // -------------------
    echo "<tr>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td class='lTd'>" . PM($row2['Name'],11) . "</td>";
    echo "<td class='lTd'>" . Chk($row['PM_V_Checked11']) . "</td>";  
    echo "</tr>";
    // -------------------
    echo "<tr>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td class='lTd'>" . PM($row2['Name'],12) . "</td>";
    echo "<td class='lTd'>" . Chk($row['PM_V_Checked12']) . "</td>";  
    echo "</tr>";
    // -------------------
    echo "<tr>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td class='lTd'>" . PM($row2['Name'],13) . "</td>";
    echo "<td class='lTd'>" . Chk($row['PM_V_Checked13']) . "</td>";  
    echo "</tr>";
    // -------------------
    echo "<tr>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td class='lTd'>" . PM($row2['Name'],14) . "</td>";
    echo "<td class='lTd'>" . Chk($row['PM_V_Checked14']) . "</td>";  
    echo "</tr>";
    // -------------------
    echo "<tr>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td class='lTd'>" . PM($row2['Name'],15) . "</td>";
    echo "<td class='lTd'>" . Chk($row['PM_V_Checked15']) . "</td>";  
    echo "</tr>";
    // -------------------
    echo "<tr>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td class='lTd'>" . PM($row2['Name'],16) . "</td>";
    echo "<td class='lTd'>" . Chk($row['PM_V_Checked16']) . "</td>";  
    echo "</tr>";
    // -------------------
    echo "<tr>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td class='lTd'>" . PM($row2['Name'],17) . "</td>";
    echo "<td class='lTd'>" . Chk($row['PM_V_Checked17']) . "</td>";  
    echo "</tr>";
    // -------------------
    echo "<tr>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td class='lTd'>" . PM($row2['Name'],18) . "</td>";
    echo "<td class='lTd'>" . Chk($row['PM_V_Checked18']) . "</td>";  
    echo "</tr>";
    // -------------------
    echo "<tr>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td class='lTd'>" . PM($row2['Name'],19) . "</td>";
    echo "<td class='lTd'>" . Chk($row['PM_V_Checked19']) . "</td>";  
    echo "</tr>";
    // -------------------
    echo "<tr>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td class='lTd'>" . PM($row2['Name'],20) . "</td>";
    echo "<td class='lTd'>" . Chk($row['PM_V_Checked20']) . "</td>";  
    echo "</tr>";
    // -------------------
    echo "<tr>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td class='lTd'>" . PM($row2['Name'],21) . "</td>";
    echo "<td class='lTd'>" . Chk($row['PM_V_Checked21']) . "</td>";  
    echo "</tr>";
    // -------------------
    echo "<tr>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td class='lTd'>" . PM($row2['Name'],22) . "</td>";
    echo "<td class='lTd'>" . Chk($row['PM_V_Checked22']) . "</td>";  
    echo "</tr>";
    // -------------------
    echo "<tr>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td class='lTd'>" . PM($row2['Name'],23) . "</td>";
    echo "<td class='lTd'>" . Chk($row['PM_V_Checked23']) . "</td>";  
    echo "</tr>";
    // -------------------
    echo "<tr>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td class='lTd'>" . PM($row2['Name'],24) . "</td>";
    echo "<td class='lTd'>" . Chk($row['PM_V_Checked24']) . "</td>";  
    echo "</tr>";
    // -------------------
    echo "<tr>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td class='lTd'>" . PM($row2['Name'],25) . "</td>";
    echo "<td class='lTd'>" . Chk($row['PM_V_Checked25']) . "</td>";  
    echo "</tr>";
    // -------------------
    echo "<tr>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td class='lTd'>" . PM($row2['Name'],26) . "</td>";
    echo "<td class='lTd'>" . Chk($row['PM_V_Checked26']) . "</td>";  
    echo "</tr>";
    // -------------------
    echo "<tr>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td class='lTd'>" . PM($row2['Name'],27) . "</td>";
    echo "<td class='lTd'>" . Chk($row['PM_V_Checked27']) . "</td>";  
    echo "</tr>";
    // -------------------
    echo "<tr>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td class='lTd'>" . PM($row2['Name'],28) . "</td>";
    echo "<td class='lTd'>" . Chk($row['PM_V_Checked28']) . "</td>";  
    echo "</tr>";
    // -------------------
    echo "<tr>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td class='lTd'>" . PM($row2['Name'],29) . "</td>";
    echo "<td class='lTd'>" . Chk($row['PM_V_Checked29']) . "</td>";  
    echo "</tr>";
    // -------------------
    echo "<tr class='bTd'>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td class='lTd'>" . PM($row2['Name'],30) . "</td>";
    echo "<td class='lTd'>" . Chk($row['PM_V_Checked30']) . "</td>";  
    echo "</tr>";
    }
  }
  echo "</table>";

  
  mysqli_close($conn);

  ?>


</body>

</html>