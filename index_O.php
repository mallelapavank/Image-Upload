<img src="images/gallery-icon copy.png" border="none" />

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
		}else{
			echo "Error in file";
		}
	}else{
		echo "Captcha mismatched. Try Again";
	}
//}else{
	//echo "Select an Image";	
//}
echo "</div>";
?>
<link href="styles.css" type="text/css" rel="stylesheet" />
<center>
<div class="form">
	<form name="form" id="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data"> 
	Browse an image and click Upload:<br />
	<input type="file" name="file" id="file" size="50" /><br />
		<div class="cap"><img src="../gallery/images/gen.jpeg">
		</div>
	
		<div class="capbx">
		<input type="text" name="txt" id="txt" size="10">
		<input type="hidden" name="hid" id="hid" value="<?php echo $str ?>">

		<input type="submit" name="sub" id="sub" value="Upload" />
		</form>
	</div>	
</div>
</center>
<?php
echo "<div class='gal'><p><a href='gallery.php'>View Gallery</a></p></div>";

?>
<div class="foot"> Pavan Mallela &copy; 2011 </div>