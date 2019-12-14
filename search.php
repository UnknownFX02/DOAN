<?php include 'includes/connection.php';?>
<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>

<?php
$sql="SELECT * FROM `uploads` WHERE ";
if(isset($_POST['send'])){
    if($_POST['keyword']!=''){
    $keyword=$_POST['keyword'];
    $checkbox=$_POST['checkboxvar'];
    $box=" ( ";
        switch ($_POST['type']){
            case "name":
                $sql.="`file_name` = N'%$keyword%' ";
                break;
            case "des":
                $sql.="`file_description` = N'%$keyword%' ";
                break;
            default:
                $sql.="(`file_name` = N'%$keyword%' OR `file_description` = N'%$keyword%') ";
        }
        for($i = 0; $i < count($checkbox); $i++){
            $box.="`file_type` = '$checkbox[$i]' ";
            if($i < count($checkbox)-1){
                $box.=" OR ";
                }
        }
if($box!=" ( "){
$sql=$sql."AND".$box." )";}
echo $sql;
    }
    else{
        echo "<script type='text/javascript'>alert('please input sonething');</script>";
    }
}
?>



<form method='POST'>
<div style="text-align:center">
<img src="images/search.png" alt="img search"> <br />
<input type="text" name="keyword" value="<?php if(isset($_POST['send'])) { echo $_POST['keyword']; } ?>">

<select name="type">
  <option <?php if ($_POST['type'] == 'all') { ?>selected="true" <?php }; ?> value="all">ALL</option>
  <option <?php if ($_POST['type'] == 'name') { ?>selected="true" <?php }; ?> value="name">Name</option>
  <option <?php if ($_POST['type'] == 'des') { ?>selected="true" <?php }; ?> value="des">Description</option>
</select>
  

<input type='submit' name='send' value="Search files"><br />
<input type='checkbox' name='checkboxvar[]' value='pdf' <?php if (in_array("pdf", $_POST['checkboxvar'])) echo "checked='checked'"; ?>> PDF
<input type='checkbox' name='checkboxvar[]' value='txt' <?php if (in_array("txt", $_POST['checkboxvar'])) echo "checked='checked'"; ?>> TXT
<input type='checkbox' name='checkboxvar[]' value='doc' <?php if (in_array("doc", $_POST['checkboxvar'])) echo "checked='checked'"; ?>> DOC
<input type='checkbox' name='checkboxvar[]' value='docx' <?php if (in_array("docx", $_POST['checkboxvar'])) echo "checked='checked'"; ?>> DOCX
<input type='checkbox' name='checkboxvar[]' value='ppt' <?php if (in_array("ppt", $_POST['checkboxvar'])) echo "checked='checked'"; ?>> PPT
<input type='checkbox' name='checkboxvar[]' value='zip' <?php if (in_array("zip", $_POST['checkboxvar'])) echo "checked='checked'"; ?>> ZIP
<hr>
</div>
</form>
</body>
</html>