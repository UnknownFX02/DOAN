<?php include 'includes/connection.php';?>
<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>

<script type="text/javascript" src="tag.js"></script>
<link rel="stylesheet" type="text/css" href="tag.css"> 


<h1>SEARCH TAG</h1>
<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" onclick="filterSelection('pdf')"> PDF</button>
  <button class="btn" onclick="filterSelection('txt')"> TXT</button>
  <button class="btn" onclick="filterSelection('doc')"> DOC</button>
  <button class="btn" onclick="filterSelection('docx')"> DOCX</button>
  <button class="btn" onclick="filterSelection('ppt')"> PPT</button>
  <button class="btn" onclick="filterSelection('zip')"> ZIP</button>
</div>

<?php
$query = "SELECT * FROM uploads WHERE status = 'approved'";
$run_query = mysqli_query($conn, $query) or die(mysqli_error($conn));
if (mysqli_num_rows($run_query) > 0) {
echo "<div class=\"row\">";
while ($row = mysqli_fetch_array($run_query)) {
    $file_id = $row['file_id'];
    $file_name = $row['file_name'];
    $file_description = $row['file_description'];
    $file_type = $row['file_type'];
    $file_date = $row['file_uploaded_on'];
    $file_uploader = $row['file_uploader'];
    $file_status = $row['status'];
    $file = $row['file'];

 echo "<div class=\"column $file_type\">";
   echo "<div class=\"content\">";
     echo "<img src=\"images/icon/$file_type.svg\" alt=\"IMG TYPE FILE\" style=\"width:100%\"> <br /><br />";
     echo "<h4><center>$file_name</center></h4>";
        echo "<br />";
     echo "<p>$file_description</p>";
     echo "<p align=\"right\"><a href=\"viewmore.php?file_id=$file_id\">View more</a></p>";
   echo "</div>";
  echo "</div>";

}
}
?>
</div>
</body>
</html>