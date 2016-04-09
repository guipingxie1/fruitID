<?php
require_once('simple_html_dom.php');

// Getting the links
/*
$html = file_get_html('http://world-crops.com/category/crops/fruits/');

$links = $html -> find('a[rel=bookmark]');
for ($i = 0; $i < count($links); ++$i) {
	//echo trim($links[$i] -> plaintext) . "\n";
	echo '"' . $links[$i] -> href . "\",\n"; 
}

$html -> clear();
unset($html);

for ($i = 2; $i < 24; ++$i) {
	$html = file_get_html('http://world-crops.com/category/crops/fruits/page/' . $i .'/');

	$links = $html -> find('a[rel=bookmark]');
	for ($j = 0; $j < count($links); ++$j) {
		//echo trim($links[$i] -> plaintext) . "\n";
		echo '"' . $links[$j] -> href . "\",\n"; 
	}

	$html -> clear();
	unset($html);
}
*/

$links = array("http://world-crops.com/sweet-briar/",
"http://world-crops.com/ugli/",
"http://world-crops.com/mango/",
"http://world-crops.com/velvet-apple/",
"http://world-crops.com/cherimoya/",
"http://world-crops.com/great-morinda/",
"http://world-crops.com/strawberry-tree/",
"http://world-crops.com/acai-palm/",
"http://world-crops.com/tangerine/",
"http://world-crops.com/olive/",
"http://world-crops.com/cempedak/",
"http://world-crops.com/miracle-fruit/",
"http://world-crops.com/asian-pear/",
"http://world-crops.com/cantaloupe/",
"http://world-crops.com/key-lime/",
"http://world-crops.com/guayabilla/",
"http://world-crops.com/tangelo/",
"http://world-crops.com/pond-apple/",
"http://world-crops.com/avocado/",
"http://world-crops.com/marang/",
"http://world-crops.com/dengen/",
"http://world-crops.com/wax-apple/",
"http://world-crops.com/salak/",
"http://world-crops.com/bilimbi/",
"http://world-crops.com/bignay/",
"http://world-crops.com/white-currant/",
"http://world-crops.com/cashew-nut/",
"http://world-crops.com/buddhas-hand/",
"http://world-crops.com/quince/",
"http://world-crops.com/kiwifruit/",
"http://world-crops.com/gac/",
"http://world-crops.com/cacao/",
"http://world-crops.com/pulasan/",
"http://world-crops.com/false-mangosteen/",
"http://world-crops.com/cowa/",
"http://world-crops.com/phalsa/",
"http://world-crops.com/raspberry/",
"http://world-crops.com/strawberry/",
"http://world-crops.com/dragonfruit/",
"http://world-crops.com/black-currant/",
"http://world-crops.com/mangosteen/",
"http://world-crops.com/apricot/",
"http://world-crops.com/asian-palmyra-palm/",
"http://world-crops.com/bael/",
"http://world-crops.com/bilberry/",
"http://world-crops.com/blackberry/",
"http://world-crops.com/breadfruit/",
"http://world-crops.com/canistel/",
"http://world-crops.com/cherry/",
"http://world-crops.com/banana/",
"http://world-crops.com/cherry-plum/",
"http://world-crops.com/custard-apple/",
"http://world-crops.com/date/",
"http://world-crops.com/durian/",
"http://world-crops.com/american-gooseberry/",
"http://world-crops.com/fig/",
"http://world-crops.com/gooseberry/",
"http://world-crops.com/grape/",
"http://world-crops.com/grapefruit/",
"http://world-crops.com/lychee/",
"http://world-crops.com/guava/",
"http://world-crops.com/burmese-grape/",
"http://world-crops.com/maprang/",
"http://world-crops.com/mulberry/",
"http://world-crops.com/passionfruit/",
"http://world-crops.com/papaya/",
"http://world-crops.com/orange/",
"http://world-crops.com/langsat/",
"http://world-crops.com/peach/",
"http://world-crops.com/pear/",
"http://world-crops.com/jujube/",
"http://world-crops.com/tamarind/",
"http://world-crops.com/jackfruit/",
"http://world-crops.com/sugar-apple/",
"http://world-crops.com/starfruit/",
"http://world-crops.com/star-apple/",
"http://world-crops.com/soursop/",
"http://world-crops.com/sour-cherry/",
"http://world-crops.com/santol/",
"http://world-crops.com/pomelo/",
"http://world-crops.com/azarole/",
"http://world-crops.com/rose-apple/",
"http://world-crops.com/roselle/",
"http://world-crops.com/red-currant/",
"http://world-crops.com/rambutan/",
"http://world-crops.com/pineapple/",
"http://world-crops.com/watermelon/",
"http://world-crops.com/plum/",
"http://world-crops.com/apple/",
"http://world-crops.com/longan/",
"http://world-crops.com/yellow-pitaya/",
"http://world-crops.com/yellow-fruited-strawberry-guava/",
"http://world-crops.com/wolfberry-lycium-barbarum/",
"http://world-crops.com/wolfberry-lycium-chinense/",
"http://world-crops.com/yangmei/",
"http://world-crops.com/yellow-mombin/",
"http://world-crops.com/white-sapote/",
"http://world-crops.com/white-star-apple/",
"http://world-crops.com/white-mulberry/",
"http://world-crops.com/watery-rose-apple/",
"http://world-crops.com/wampee/",
"http://world-crops.com/tucuma-palm/",
"http://world-crops.com/tomatillo/",
"http://world-crops.com/tamarillo/",
"http://world-crops.com/sweet-lime/",
"http://world-crops.com/sweet-granadilla/",
"http://world-crops.com/surinam-cherry/",
"http://world-crops.com/strawberry-guava/",
"http://world-crops.com/spanish-lime/",
"http://world-crops.com/spanish-tamarind/",
"http://world-crops.com/soncoya/",
"http://world-crops.com/satsuma/",
"http://world-crops.com/seagrape/",
"http://world-crops.com/salmonberry/",
"http://world-crops.com/sapodilla/",
"http://world-crops.com/safou/",
"http://world-crops.com/red-fruited-strawberry-guava/",
"http://world-crops.com/red-mulberry/",
"http://world-crops.com/red-chokeberry/",
"http://world-crops.com/ramontchi/",
"http://world-crops.com/purple-chokeberry/",
"http://world-crops.com/pitomba-eugenia-luschnathiana/",
"http://world-crops.com/pitomba-talisia-esculenta/",
"http://world-crops.com/pomegranate/",
"http://world-crops.com/pepino/",
"http://world-crops.com/peach-palm/",
"http://world-crops.com/pawpaw/",
"http://world-crops.com/para-guava/",
"http://world-crops.com/otaheite-gooseberry/",
"http://world-crops.com/oval-kumquat/",
"http://world-crops.com/northern-highbush-blueberry/",
"http://world-crops.com/naranjilla/",
"http://world-crops.com/natal-plum/",
"http://world-crops.com/nance/",
"http://world-crops.com/mountain-soursop/",
"http://world-crops.com/mountain-papaya/",
"http://world-crops.com/moriche-palm/",
"http://world-crops.com/monk-fruit/",
"http://world-crops.com/monkey-jack/",
"http://world-crops.com/mirabelle-plum/",
"http://world-crops.com/melon/",
"http://world-crops.com/medlar/",
"http://world-crops.com/mammee-apple/",
"http://world-crops.com/mamey-sapote/",
"http://world-crops.com/malay-apple/",
"http://world-crops.com/loquat/",
"http://world-crops.com/lemon/",
"http://world-crops.com/large-cranberry/",
"http://world-crops.com/kwai-muk/",
"http://world-crops.com/kuwini-mango/",
"http://world-crops.com/kubal-vine/",
"http://world-crops.com/korlan/",
"http://world-crops.com/kepel-apple/",
"http://world-crops.com/kitembilla/",
"http://world-crops.com/kaffir-lime/",
"http://world-crops.com/karanda/",
"http://world-crops.com/kei-apple/",
"http://world-crops.com/japanese-wineberry/",
"http://world-crops.com/jocote/",
"http://world-crops.com/japanese-persimmon/",
"http://world-crops.com/jambul/",
"http://world-crops.com/jackalberry/",
"http://world-crops.com/jabuticaba/",
"http://world-crops.com/indian-fig/",
"http://world-crops.com/indian-jujube/",
"http://world-crops.com/horse-mango/",
"http://world-crops.com/horned-melon/",
"http://world-crops.com/hardy-kiwi/",
"http://world-crops.com/greengage/",
"http://world-crops.com/grumichama/",
"http://world-crops.com/goumi/",
"http://world-crops.com/giant-granadilla/",
"http://world-crops.com/genipapo/",
"http://world-crops.com/feijoa/",
"http://world-crops.com/european-wild-apple/",
"http://world-crops.com/european-nettle-tree/",
"http://world-crops.com/ethiopian-eggplant/",
"http://world-crops.com/elderberry/",
"http://world-crops.com/elephant-apple/",
"http://world-crops.com/date-plum/",
"http://world-crops.com/dog-rose/",
"http://world-crops.com/currants/",
"http://world-crops.com/costa-rica-pitahaya/",
"http://world-crops.com/cocona/",
"http://world-crops.com/cocoplum/",
"http://world-crops.com/coconut/",
"http://world-crops.com/citron/",
"http://world-crops.com/chinese-hawthorn/",
"http://world-crops.com/chokeberry/",
"http://world-crops.com/chinese-white-pear/",
"http://world-crops.com/cherry-of-the-rio-grande/",
"http://world-crops.com/charichuelo/",
"http://world-crops.com/cassabanana/",
"http://world-crops.com/carob/",
"http://world-crops.com/cape-gooseberry/",
"http://world-crops.com/calamondin/",
"http://world-crops.com/button-mangosteen/",
"http://world-crops.com/borojo/",
"http://world-crops.com/vaccinium-spp/",
"http://world-crops.com/blue-berried-honeysuckle/",
"http://world-crops.com/black-sapote/",
"http://world-crops.com/black-mulberry/",
"http://world-crops.com/bitter-orange/",
"http://world-crops.com/black-chokeberry/",
"http://world-crops.com/biriba/",
"http://world-crops.com/binjai/",
"http://world-crops.com/betel-nut/",
"http://world-crops.com/bergamot/",
"http://world-crops.com/barbados-gooseberry/",
"http://world-crops.com/babaco/",
"http://world-crops.com/atemoya/",
"http://world-crops.com/australian-desert-raisin/",
"http://world-crops.com/american-persimmon/",
"http://world-crops.com/araza/",
"http://world-crops.com/ambarella/",
"http://world-crops.com/alpine-currant/",
"http://world-crops.com/african-mangosteen/",
"http://world-crops.com/achacha/",
"http://world-crops.com/acerola/",
"http://world-crops.com/abiu/",
"http://world-crops.com/plantain/",
"http://world-crops.com/indian-gooseberry/"
);

for ($i = 0; $i < count($links); ++$i) {
	echo "--------------------------------------------------------------------------------\n";
	$html = file_get_html($links[$i]);
	$title = $html -> find('h1[class=entry-title]', 0);
	echo $title -> plaintext . "\n";
	
	$photo_links = $html -> find('#cropimg');
	for ($j = 0; $j < count($photo_links); ++$j) 
		echo $photo_links[$j] -> children(0) -> href . "\n";
	echo "------------------------------------------------\n\n";
	
	$intro = $html -> find('p');
	$idx = 1;
	
	while ( strpos($intro[$idx], 'Scientific') == FALSE ) {
		echo html_entity_decode(trim($intro[$idx] -> plaintext)) . "\n\n";
		++$idx;
	}
/*	
	$text = $html -> find('text');
	$idx = 0;
	
	for ($j = 0; $j < count($text); ++$j) {
		if ( strcmp(trim($text[$j]), 'Basic information and facts') == 0 ) {
			$idx = $j;
			break;
		}
	}
*/

	$html -> clear();
	unset($html);	
	
/*	
	// skip last one
	$headers = $html -> find('h2');
	
	$small_head = $html -> find ('h4');
	
	for ($j = 0; $j < min(count($paragraphs), count($headers) + count($small_head)); ++$j) 
		echo $paragraphs[$j + 1] -> plaintext . "\n";
*/
}

?>

