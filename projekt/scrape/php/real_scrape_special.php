<?php
require_once('simple_html_dom.php');

$links = array("http://www.specialtyproduce.com/produce/Akebi_Fruit_9541.php",
"http://www.specialtyproduce.com/produce/Apricots_2030.php",
"http://www.specialtyproduce.com/produce/Hass_Avocados_949.php",
"http://www.specialtyproduce.com/produce/Florida_Avocados_365.php",
"http://www.specialtyproduce.com/produce/Bilva_Fruit_10639.php",
"http://www.specialtyproduce.com/produce/Yellow_Bananas_919.php",
"http://www.specialtyproduce.com/produce/Baby_Bananas_9496.php",
"http://www.specialtyproduce.com/produce/Black_Currants_4283.php",
"http://www.specialtyproduce.com/produce/Red_Currant_Berries_2007.php",
"http://www.specialtyproduce.com/produce/Blackberries_102.php",
"http://www.specialtyproduce.com/produce/Blue_Crown_Fruit_9582.php",
"http://www.specialtyproduce.com/produce/Blueberries_103.php",
"http://www.specialtyproduce.com/produce/Breadfruit_8746.php",
"http://www.specialtyproduce.com/produce/Cantaloupe_Melon_788.php",
"http://www.specialtyproduce.com/produce/Star_Fruit_2002.php",
"http://www.specialtyproduce.com/produce/Cavaillon_Melon_4291.php",
"http://www.specialtyproduce.com/produce/Cherimoya_944.php",
"http://www.specialtyproduce.com/produce/Cherries_295.php",
"http://www.specialtyproduce.com/produce/Clementine_Tangerines_4669.php",
"http://www.specialtyproduce.com/produce/Husked_Coconuts_943.php",
"http://www.specialtyproduce.com/produce/Cranberries_210.php",
"http://www.specialtyproduce.com/produce/Acai_8784.php",
"http://www.specialtyproduce.com/produce/Red_Delicious_Apples_2011.php",
"http://www.specialtyproduce.com/produce/Golden_Delicious_Apples_120.php",
"http://www.specialtyproduce.com/produce/Granny_Smith_Apples_2021.php",
"http://www.specialtyproduce.com/produce/Fuji_Apples_914.php",
"http://www.specialtyproduce.com/produce/Gala_Apples_20111.php",
"http://www.specialtyproduce.com/produce/Dates_On_the_Vine_456.php",
"http://www.specialtyproduce.com/produce/Dragon_Fruit_1439.php",
"http://www.specialtyproduce.com/produce/Durian_619.php",
"http://www.specialtyproduce.com/produce/Egg_Fruit_12312.php",
"http://www.specialtyproduce.com/produce/Elderberries_1902.php",
"http://www.specialtyproduce.com/produce/Feijoas_878.php",
"http://www.specialtyproduce.com/produce/Green_Figs_7221.php",
"http://www.specialtyproduce.com/produce/Black_Mission_Figs_6571.php",
"http://www.specialtyproduce.com/produce/Gac_Fruit_12844.php",
"http://www.specialtyproduce.com/produce/Gooseberries_108.php",
"http://www.specialtyproduce.com/produce/Grapefruit_12317.php",
"http://www.specialtyproduce.com/produce/Green_Seedless_Grapes_1224.php",
"http://www.specialtyproduce.com/produce/Seedless_Grapes_Red_1223.php",
"http://www.specialtyproduce.com/produce/Concord_Grapes_20251.php",
"http://www.specialtyproduce.com/produce/Guavas_873.php",
"http://www.specialtyproduce.com/produce/Honeydew_Melon_1705.php",
"http://www.specialtyproduce.com/produce/Jack_Fruit_693.php",
"http://www.specialtyproduce.com/produce/Jelly_Palm_Fruit_10845.php",
"http://www.specialtyproduce.com/produce/JuJube_2099.php",
"http://www.specialtyproduce.com/produce/Kiwi_920.php",
"http://www.specialtyproduce.com/produce/Lemons_853.php",
"http://www.specialtyproduce.com/produce/Limes_851.php",
"http://www.specialtyproduce.com/produce/Longan_674.php",
"http://www.specialtyproduce.com/produce/Loquats_5423.php",
"http://www.specialtyproduce.com/produce/Lychees_550.php",
"http://www.specialtyproduce.com/produce/Mangoes_2004.php",
"http://www.specialtyproduce.com/produce/Mulberries_1030.php",
"http://www.specialtyproduce.com/produce/Nectarines_1806.php",
"http://www.specialtyproduce.com/produce/Noni_Fruit_12269.php",
"http://www.specialtyproduce.com/produce/Oranges_12315.php",
"http://www.specialtyproduce.com/produce/Mexican_Papaya_947.php",
"http://www.specialtyproduce.com/produce/Passionfruit_341.php",
"http://www.specialtyproduce.com/produce/Peaches_1805.php",
"http://www.specialtyproduce.com/produce/Asian_Pears_922.php",
"http://www.specialtyproduce.com/produce/Bosc_Pears_334.php",
"http://www.specialtyproduce.com/produce/Bartlett_Pears_3341.php",
"http://www.specialtyproduce.com/produce/Fuyu_Persimmons_9071.php",
"http://www.specialtyproduce.com/produce/Pineapple_4482.php",
"http://www.specialtyproduce.com/produce/Black_Plantains_888.php",
"http://www.specialtyproduce.com/produce/Plums_4244.php",
"http://www.specialtyproduce.com/produce/Pomegranates_1000.php",
"http://www.specialtyproduce.com/produce/Pomelos_6706.php",
"http://www.specialtyproduce.com/produce/Mangosteen_4764.php",
"http://www.specialtyproduce.com/produce/Quince_587.php",
"http://www.specialtyproduce.com/produce/Raspberries_104.php",
"http://www.specialtyproduce.com/produce/Sapodilla_8433.php",
"http://www.specialtyproduce.com/produce/Sapote_871.php",
"http://www.specialtyproduce.com/produce/Shea_Fruit_12903.php",
"http://www.specialtyproduce.com/produce/Snake_Fruit_10790.php",
"http://www.specialtyproduce.com/produce/Guanabana_8631.php",
"http://www.specialtyproduce.com/produce/Strawberries_87943.php",
"http://www.specialtyproduce.com/produce/Sugar_Apples_441.php",
"http://www.specialtyproduce.com/produce/Gold_Tamarillo_877.php",
"http://www.specialtyproduce.com/produce/Red_Tamarillo_876.php",
"http://www.specialtyproduce.com/produce/Tangerines_12316.php",
"http://www.specialtyproduce.com/produce/Tomatillos_224.php",
"http://www.specialtyproduce.com/produce/Ugli_Fruit_296.php",
"http://www.specialtyproduce.com/produce/Seedless_Watermelon_661.php",
"http://www.specialtyproduce.com/produce/Watermelon_691.php"
);

$names = array("Akebi Fruit",
"Apricot",
"Hass Avocado",
"Florida Avocado",
"Bilva Fruit",
"Banana",
"Baby Banana",
"Black Currant",
"Red Currant",
"Blackberry",
"Blue Crown Fruit",
"Blueberry",
"Breadfruit",
"Cantaloupe",
"Star Fruit",
"Cavaillon",
"Cherimoya",
"Cherry",
"Clementine",
"Husked Coconut",
"Cranberry",
"Acai",
"Red Delicious Apple",
"Golden Delicious Apple",
"Granny Smith Apple",
"Fuji Apple",
"Gala Apple",
"Date",
"Dragon Fruit",
"Durian",
"Egg Fruit",
"Elderberry",
"Feijoa",
"Green Fig",
"Black Fig",
"Gac",
"Gooseberry",
"Grapefruit",
"Green Grape",
"Red Grape",
"Concord Grape",
"Guava",
"Honeydew",
"Jack Fruit",
"Jelly Palm",
"Jujube",
"Kiwi",
"Lemon",
"Lime",
"Longan",
"Loquat",
"Lychee",
"Mango",
"Mulberry",
"Nectarine",
"Noni Fruit",
"Orange",
"Mexican Papaya",
"Passionfruit",
"Peach",
"Asian Pear",
"Bosc Pear",
"Bartlett Pear",
"Fuyu Persimmon",
"Pineapple",
"Black Plantain",
"Plum",
"Pomegranate",
"Pomelo",
"Mangosteen",
"Quince",
"Raspberry",
"Sapodilla",
"Sapote",
"Shea Fruit",
"Snake Fruit",
"Guanabana",
"Strawberry",
"Sugar Apple",
"Gold Tamarillo",
"Red Tamarillo",
"Tangerine",
"Tomatillo",
"Ugli Fruit",
"Seedless Watermelon",
"Watermelon"
);

$info = array("Description/Taste", 
"Seasons/Availability", 
"Current Facts", 
"Applications", 
"Geography/History"
);


for ($i = 0; $i < count($links); ++$i) {
	echo "--------------------------------------------------------------------------------\n";
	echo $names[$i] . "\n";
	$html = file_get_html($links[$i]);
	
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
		
/*	
	for ($j = 0; $j < 4 * count($header_h2); ++$j) {
		$line = trim( $prodInfo -> children($j) -> plaintext );	
		echo $line . "\n";
	}
*/	
	//echo "\n";
	
	$html -> clear();
	unset($html);
}


?>
