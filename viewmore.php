<?php include 'includes/connection.php';?>
<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>

<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;border-color:#aabcfe;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#aabcfe;color:#669;background-color:#e8edff;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#aabcfe;color:#039;background-color:#b9c9fe;}
.tg .tg-hmp3{background-color:#D2E4FC;text-align:left;vertical-align:top}
.tg .tg-0lax{text-align:left;vertical-align:top}
</style>

<?php 
if (isset($_GET['file_id'])) {
$get_id=$_GET['file_id'];
$query = "SELECT * FROM uploads WHERE file_id ='$get_id'";
$run_query = mysqli_query($conn, $query) or die(mysqli_error($conn));
if (mysqli_num_rows($run_query) > 0) {
while ($row = mysqli_fetch_array($run_query)) {
    $file_id = $row['file_id'];
    $file_name = $row['file_name'];
    $file_description = $row['file_description'];
    $file_type = $row['file_type'];
    $file_date = $row['file_uploaded_on'];
    $file_uploader = $row['file_uploader'];
    $file_status = $row['status'];
    $file = $row['file'];
    $file_size = $row['file_size'];
    $file_md5 = $row['file_md5'];
}
}
?>

<table class="tg">
  <tr>
    <td width="300" rowspan="6"><img src="images/icon/<?php echo $file_type; ?>.svg"  size=300x500 alt=""></img></td>
    <th class="tg-0lax">FILE ID: </th>
    <th class="tg-0lax"><?php echo $file_id; ?></th>
  </tr>
  <tr>
    <td class="tg-hmp3">FILE NAME: </td>
    <td class="tg-0lax"><?php echo $file_name; ?></td>
  </tr>
  <tr>
    <td class="tg-hmp3">FILE DESCRIPTION: </td>
    <td class="tg-0lax"><?php echo $file_description; ?></td>
  </tr>
  <tr>
    <td class="tg-hmp3">SIZE: </td>
    <td class="tg-0lax"><?php echo $file_size; ?> kb</td>
  </tr>
  <tr>
    <td class="tg-hmp3">MD5: </td>
    <td class="tg-0lax"><?php echo $file_md5; ?></td>
  </tr>
  <tr>
    <td class="tg-hmp3">DATE: </td>
    <td class="tg-0lax"><?php echo $file_date; ?></td>
  </tr>
  <tr>
    <td class="tg-0lax" colspan="3">14</td>
  </tr>
  <tr>
    <td align="center" class="tg-0lax" colspan="3"> <details>
  <summary><font size="3" color="red">View FILE</font></summary>
  <p> <iframe align="center" src="http://docs.google.com/gview?url=http://www.gamethutheky.cf/en/dashboard/allfiles/<?php echo $file; ?>&embedded=true"style="width:600px;height:500px;"frameborder="0"></iframe></p>
</details> </td>
  </tr>
  <tr>
    <td class="tg-0lax" colspan="3">16</td>
  </tr>
</table>

</body>

</html>

<?php } else {
    header("location:index.php");
    } ?>
