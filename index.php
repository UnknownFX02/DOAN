<?php include 'includes/connection.php';?>
<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>

<br><br>
<link rel="stylesheet" type="text/css" href="styles.css" media="all" />
    <link rel="stylesheet" type="text/css" href="demo.css" media="all" />
    <!-- jQuery -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- FlexSlider -->
    <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" charset="utf-8">
    var $ = jQuery.noConflict();
    $(window).load(function() {
    $('.flexslider').flexslider({
          animation: "fade"
    });
	
	$(function() {
		$('.show_menu').click(function(){
				$('.menu').fadeIn();
				$('.show_menu').fadeOut();
				$('.hide_menu').fadeIn();
		});
		$('.hide_menu').click(function(){
				$('.menu').fadeOut();
				$('.show_menu').fadeIn();
				$('.hide_menu').fadeOut();
		});
	});
  });
</script>



<br />
<table border="1" width="100%">
  <tr>
    <th colspan="3">1</th>
  </tr>
  <tr>
    <td rowspan="2" width="15%">

<table border="1" width="100%">
  <tr>
    <th colspan="3"><br>TOP UPLOAD<br></th>
  </tr>
  <tr>
    <td>1</td>
    <td>USER</td>
<td>NUM</td>
  </tr>
  <tr>
    <td>2</td>
    <td>USER</td>
<td>NUM</td>
  </tr>
  <tr>
    <td>3</td>
    <td>USER</td>
<td>NUM</td>
  </tr>
  <tr>
    <td>4</td>
    <td>USER</td>
<td>NUM</td>
  </tr>
  <tr>
    <td>5</td>
    <td>USER</td>
<td>NUM</td>
  </tr>
  <tr>
    <td>6</td>
    <td>USER</td>
<td>NUM</td>
  </tr>
  <tr>
    <td>7</td>
    <td>USER</td>
<td>NUM</td>
  </tr>
  <tr>
    <td>8</td>
    <td>USER</td>
<td>NUM</td>
  </tr>
  <tr>
    <td>9</td>
    <td>USER</td>
<td>NUM</td>
  </tr>
  <tr>
    <td>10</td>
    <td>USER</td>
<td>NUM</td>
  </tr>
</table>

</td>
    <td rowspan="2" width="70%">

  <div class="slider_container">
		<div class="flexslider">
	      <ul class="slides">
	    	<li>
	    		<a href="#"><img src="images/slider/slide1.jpg" alt="" title=""/></a>
	    		<div class="flex-caption">
                     <div class="caption_title_line"><h2>Easy Notes Management</h2><p>Now easily manage all kind of notes by uploading them here.</p></div>
                </div>
	    	</li>
	    	<li>
	    		<a href="#"><img src="images/slider/slide2.jpg" alt="" title=""/></a>
	    		<div class="flex-caption">
                     <div class="caption_title_line"><h2>Upload Various Files</h2><p>User can upload various types of files like PDF, PPT, DOC etc..</p></div>
                </div>
	    	</li>
	    	<li>
	    		<a href="#"><img src="images/slider/slide3.jpg" alt="" title=""/></a>
	    		<div class="flex-caption">
                     <div class="caption_title_line"><h2>Controled By Admin</h2><p>Everying is managed and controled by administrator</p></div>
                </div>
	    	</li>
	    	<li>
	    		<a href="#"><img src="images/slider/slide4.jpg" alt="" title=""/></a>
	    		<div class="flex-caption">
                     <div class="caption_title_line"><h2>Login For Both Teacher and Student</h2><p>Both teacher and student can login and upload notes </p></div>
                </div>
	    	</li>
	    </ul>
	  </div>
   </div>
    </div>  
</div>

</td>
    <td rowspan="2" width="15%">

<table border="1" width="100%">
  <tr>
    <th colspan="3"><br>TOP DOWNLOAD<br></th>
  </tr>
  <tr>
    <td>1</td>
    <td>FILE</td>
<td>NUM</td>
  </tr>
  <tr>
    <td>2</td>
    <td>FILE</td>
<td>NUM</td>
  </tr>
  <tr>
    <td>3</td>
    <td>FILE</td>
<td>NUM</td>
  </tr>
  <tr>
    <td>4</td>
    <td>FILE</td>
<td>NUM</td>
  </tr>
  <tr>
    <td>5</td>
    <td>FILE</td>
<td>NUM</td>
  </tr>
 <tr>
    <td>6</td>
    <td>FILE</td>
<td>NUM</td>
  </tr>
  <tr>
    <td>7</td>
    <td>FILE</td>
<td>NUM</td>
  </tr>
  <tr>
    <td>8</td>
    <td>FILE</td>
<td>NUM</td>
  </tr>
  <tr>
    <td>9</td>
    <td>FILE</td>
<td>NUM</td>
  </tr>
  <tr>
    <td>10</td>
    <td>FILE</td>
<td>NUM</td>
  </tr>
</table>


</td>
  </tr>
  <tr>
  </tr>
  <tr>
    <td colspan="3">5</td>
  </tr>
</table>


</body>
</html>









































<?php include 'includes/footer.php';?>

        