<?php include ('includes/connection.php'); 
include "includes/adminheader.php"; ?>


<?php if($_SESSION['role'] == 'admin') ?>
	 <div id="wrapper">

    
    <?php include "includes/adminnav.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                
                <div class="row">
                    <div class="col-lg-12">

                        
                        <h1 class="page-header">
                            SYSTEM
                        </h1>
 
<?php
$storage=0;

$pdf=0;
$apdf=0;
$npdf=0;

$txt=0;
$atxt=0;
$ntxt=0;

$doc=0;
$adoc=0;
$ndoc=0;

$docx=0;
$adocx=0;
$ndocx=0;

$ppt=0;
$appt=0;
$nppt=0;

$zip=0;
$azip=0;
$nzip=0;

$storageMB=($storage/1024)/1024;

$query = "SELECT * FROM uploads";
$run_query = mysqli_query($conn, $query) or die(mysqli_error($conn));
if (mysqli_num_rows($run_query) > 0) {
while ($row = mysqli_fetch_array($run_query)) {
	$storage+=$row['file_size'];
if($row['file_type']=='pdf'){
    $pdf++;
    if($row['status']=='approved') {$apdf++;}
    else {$npdf++;}
    }
if($row['file_type']=='txt'){
    $txt++;
    if($row['status'=='approved']) {$atxt++;}
    else {$ntxt++;}
    }
if($row['file_type']=='doc'){
    $doc++;
    if($row['status'=='approved']) {$adoc++;}
    else {$ndoc++;}
    }
if($row['file_type']=='docx'){
    $docx++;
    if($row['status']=='approved') {$adocx++;}
    else {$ndocx++;}
    }
if($row['file_type']=='ppt'){
    $ppt++;
    if($row['status']=='approved') {$appt++;}
    else {$nppt++;}
    }
if($row['file_type']=='zip'){
    $zip++;
    if($row['status']=='approved') {$azip++;}
    else {$nzip++;}
}
}
}
$storageMB=($storage/1024);
?>

<head>
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">

      // Load the Visualization API and the piechart package.
      google.load('visualization', '1.0', {'packages':['corechart']});

      google.setOnLoadCallback(ALL);
      google.setOnLoadCallback(PDF);
      google.setOnLoadCallback(TXT);
      google.setOnLoadCallback(DOC);
      google.setOnLoadCallback(DOCX);
      google.setOnLoadCallback(PPT);
      google.setOnLoadCallback(ZIP);

      function ALL() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        // Create columns for the DataTable
        data.addColumn('string');
        data.addColumn('number', 'Devices');
        // Create Rows with data
        data.addRows([
          ['PDF', <?php echo $pdf; ?>],
          ['TXT', <?php echo $txt; ?>],
          ['DOC', <?php echo $doc; ?>],
          ['DOCX', <?php echo $docx; ?>],
          ['PPT', <?php echo $ppt; ?>],
          ['ZIP', <?php echo $zip; ?>]
        ]);
		//Create option for chart
        var options = {
          title: 'FILE statistical',
          'width': 800,
          'height': 600
        };

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('ALL'));
        chart.draw(data, options);
      }

        function PDF() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        // Create columns for the DataTable
        data.addColumn('string');
        data.addColumn('number', 'Devices');
        // Create Rows with data
        data.addRows([
          ['Approved', <?php echo $apdf; ?>],
          ['NOT Approved', <?php echo $npdf; ?>]
        ]);
		//Create option for chart
        var options = {
          title: 'PDF statistical',
          'width': 200,
          'height': 150 
        };

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('PDF'));
        chart.draw(data, options);
      }

        function TXT() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        // Create columns for the DataTable
        data.addColumn('string');
        data.addColumn('number', 'Devices');
        // Create Rows with data
        data.addRows([
          ['Approved', <?php echo $atxt; ?>],
          ['NOT Approved', <?php echo $ntxt; ?>]
        ]);
		//Create option for chart
        var options = {
          title: 'TXT statistical',
          'width': 200,
          'height': 150
        };

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('TXT'));
        chart.draw(data, options);
      }

        function DOC() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        // Create columns for the DataTable
        data.addColumn('string');
        data.addColumn('number', 'Devices');
        // Create Rows with data
        data.addRows([
          ['Approved', <?php echo $adoc; ?>],
          ['NOT Approved', <?php echo $ndoc; ?>]
        ]);
		//Create option for chart
        var options = {
          title: 'DOC statistical',
          'width': 200,
          'height': 150
        };

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('DOC'));
        chart.draw(data, options);
      }

        function DOCX() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        // Create columns for the DataTable
        data.addColumn('string');
        data.addColumn('number', 'Devices');
        // Create Rows with data
        data.addRows([
          ['Approved', <?php echo $adocx; ?>],
          ['NOT Approved', <?php echo $ndocx; ?>]
        ]);
		//Create option for chart
        var options = {
          title: 'DOCX statistical',
          'width': 200,
          'height': 150
        };

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('DOCX'));
        chart.draw(data, options);
      }
        function PPT() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        // Create columns for the DataTable
        data.addColumn('string');
        data.addColumn('number', 'Devices');
        // Create Rows with data
        data.addRows([
          ['Approved', <?php echo $appt; ?>],
          ['NOT Approved', <?php echo $nppt; ?>]
        ]);
		//Create option for chart
        var options = {
          title: 'PPT statistical',
          'width': 200,
          'height': 150
        };

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('PPT'));
        chart.draw(data, options);
      }
        function ZIP() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        // Create columns for the DataTable
        data.addColumn('string');
        data.addColumn('number', 'Devices');
        // Create Rows with data
        data.addRows([
          ['Approved', <?php echo $azip; ?>],
          ['NOT Approved', <?php echo $nzip; ?>]
        ]);
		//Create option for chart
        var options = {
          title: 'ZIP statistical',
          'width': 200,
          'height': 150
        };

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('ZIP'));
        chart.draw(data, options);
      }
    </script>

  </head>




<table border="1" style="100%;">
  <tr>
    <th colspan="4" align="center">FILE</th>
  </tr>
  <tr>
    <td colspan="3"><div id="ALL"></div></td>
    <td rowspan="3">3</td>
  </tr>
  <tr>
    <td><div id="PDF"></div></td>
    <td><div id="TXT"></div></td>
    <td><div id="DOC"></div></td>
  </tr>
  <tr>
    <td><div id="DOCX"></div></td>
    <td><div id="PPT"></div></td>
    <td><div id="ZIP"></div></td>
  </tr>
</table>

<hr>

<table border="1" style="width:100%;">
	<tr>
		<th>STORAGE <?php echo ($storageMB/500)*100; ?>KiB</th>
	</tr>
	<tr>
		<th> <div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo ($storageMB/500)*100; ?>"
  aria-valuemin="0" aria-valuemax="100" style="width:<?php echo ($storageMB/500)*100; ?>%">
    <span class="sr-only"><?php echo $storageMB; ?> Complete</span>
  </div>
</div> 
</th>
	</tr>
</table>
    </div>
    </div>
    </div>
    </div>

    </div>
    <script src="js/jquery.js"></script>

    
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
