<?php
require_once('simple_html_dom.php');

$info = array("Description/Taste", 
"Seasons/Availability", 
"Current Facts", 
"Applications", 
"Geography/History"
);

echo "--------------------------------------------------------------------------------\n";
$html = file_get_html('http://www.specialtyproduce.com/produce/Cranberries_210.php');
$img = $html -> find('#prodPic', 0);
$img_link = $img -> src;
echo 'http://www.specialtyproduce.com/produce/' . $img_link . "\n";
echo "------------------------------------------------\n\n";

//$prodInfo = $html -> find('#prodInfo', 0);
$header_h2 = $html -> find('h2'); 
$text = $html -> find('text');

$flag = 0;
$idx = 0;

for ($j = 0; $j < count($text); ++$j) {
	for ($k = 0; $k < 5; ++$k) {
		if ( strcmp(trim($text[$j]), $info[$k]) == 0 ) {
			$flag = 1;
			$idx = $j;
			break;
		}
	}
	
	if ($flag == 1)
		break;
}

for ($j = 0; $j < 3 * count($header_h2); ++$j) 
	echo trim($text[$idx + $j]) . "\n";


?>

