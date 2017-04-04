<?php
$img = $_GET['img'];
// Get the exif data
/*$exif_data = exif_read_data( 'images/'.$img );
echo '<pre>';
print_r($exif_data);
echo '</pre>';*/
?>

<?php
$exif = exif_read_data('images/'.$img, 'IFD0');
if($exif===false){
	echo "No header data found.<br />\n" ;
	}
else{
	$exif = exif_read_data('images/'.$img, 0, true);
	echo "<h3>$img:</h3>";
	foreach ($exif as $key => $section) {
		foreach ($section as $name => $val) {
			echo "$key.$name: $val<br />\n";
		}
	}
}
?>