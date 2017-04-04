<?php
$open=opendir("images");
while($read=readdir($open)){
	if(preg_match('/.jpg/',$read)||preg_match('/.JPG/',$read)){
		$im_path="images/".$read;
		$im=imagecreatefromjpeg($im_path);
		$ow=imagesx($im);
		$oh=imagesy($im);
		//echo "<p>WxH: ".$ow."x".$oh;
		$nw=150;
		$nh=($oh/$ow)*$nw;
		//echo "<p>NWxNH: ".$nw."x".$nh;
		$ic=imagecreatetruecolor($nw,$nh);
		imagecopyresized($ic,$im,0,0,0,0,$nw,$nh,$ow,$oh);
		$dest="thumbs/".basename($read,".jpg")."_thumb.jpg";
		imagejpeg($ic,$dest);
		echo "<form name='fm' id='fm' action='' method='post'>";
		echo "<div class='im'><a href='".$im_path."' target='_blank'><img src='".$dest."'><p>$read</p></a><input type='checkbox' name='read[]' value='$read'><a href='details.php?img=$read'>Details</a></div>";
	}
if(isset($_POST['read'])){
	foreach($_POST['read'] as $read){
		unlink("images/".$read) or die("Failed to delete");
		header("location:".$_SERVER['REQUEST_URI']);
	}
}
}
?><head>
<link href="styles.css" type="text/css" rel="stylesheet" >
</head>


<div class="del"><input type="submit" name="sub" id="sub" value="Delete" />
</form>
<a href="index.php">Home</a></div>
<div class="foot"> Pavan Mallela &copy; 2011 </div>