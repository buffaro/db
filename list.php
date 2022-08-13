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

<body>
<style>
    .header{
        position:sticky;
        top: 0 ;
    }
</style>
<div class="row g-0">
        <div class="col-10">
            <input id="inSearch" value="" class="form-control" placeholder="Enter Code or SN">
        </div>
        <div class="col-2">
            <button id="btnSearch" onclick="goSearch()" class="btn btn-dark w-100">ค้นหา</button>
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

function goSearch(){
    let q = document.getElementById("inSearch").value;
    window.open('?code='+q,'_self')
}

$(document).ready(function(){
    $('table tr').click(function(){
        window.location = $(this).attr('href');
        return false;
    });
});

</script>

<?php
include_once("conf.php");

$conn = new mysqli($cpy_server, $cpy_user, $cpy_pass, $cpy_db);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$code = isset($_GET['code'])? $_GET['code'] : "";



$sql="SELECT * FROM cpy WHERE Code LIKE '%$code%' OR SN LIKE '%$code%'";
$result = mysqli_query($conn, $sql);

echo "<table class='table table-striped table-dark'>
<tr class='header'>
<th>Code</th>
<th>Name</th>
<th>Brand</th>
<th>Model</th>
<th>SN</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr href='device.php?id=". $row['Code'] ."'>";
  echo "<td>" . $row['Code'] . "</td>";
  echo "<td>" . $row['Name'] . "</td>";
  echo "<td>" . $row['Brand'] . "</td>";
  echo "<td>" . $row['Model'] . "</td>";
  echo "<td>" . $row['SN'] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($conn);

?>


</body>

</html>