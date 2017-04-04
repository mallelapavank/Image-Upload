<?php
include("imagecreate.php");
echo "<div class='top'";
//if(isset($_POST['file'])){
	if($_POST['txt']==$_POST['hid']){
		if($_FILES['file']['error']==0){
			if($_FILES['file']['type']=="image/jpeg"){
				move_uploaded_file($_FILES['file']['tmp_name'],"images/".$_FILES['file']['name']);
				echo "<h2>Image Uploaded Successfully</h2>";
				echo "<img src='images/".$_FILES['file']['name']."' width='320'>";
			}else{
				echo "format not supported";
			}
		}
	}else{
		echo "Try Again";
	}
//}else{
//	echo "Select an Image";	
//}
echo "</div><span class='gal'><p><a href='gallery.php'>View Gallery</a></p></span>";
?>
<link href="styles.css" type="text/css" rel="stylesheet" />
<div class="form">
<form name="form" id="form" action="<?PHP $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data"> 
Browse an image and click Upload:<br />
<input type="file" name="file" id="file" size="50" /><br />
<img src="../gallery/images/gen.jpeg">

<input type="text" name="txt" id="txt" size="28">
<input type="hidden" name="hid" id="hid" value="<?php echo $str ?>">

<input type="submit" name="sub" id="sub" value="Upload" />
</form></div>

<div class="foot"> Pavan Mallela &copy; Reserved, 2011 </div>