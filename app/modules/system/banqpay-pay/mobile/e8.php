<?php

// HAWHAW example to show HTML display customization
// Norbert Huffschmid
// 8.7.2004

require("../hawhaw.inc");

$myPage = new HAW_deck("Example 8", HAW_ALIGN_CENTER);
$myPage->set_bgcolor("#CCCCFF");
$myPage->set_border("30");
$myPage->set_disp_bgcolor("blue");
$myPage->set_width("80%");
//$myPage->set_height("200");
$myPage->set_size("14pt");
$myPage->set_color("white");
$myPage->set_face("Avalon,Wide Latin");

$myText1 = new HAW_text("This example shows its meaning only with a HTML browser.", HAW_TEXTFORMAT_BOXED);
$myText1->set_color("yellow", "green");
$myText1->set_br(2); // create 2 line breaks

$myText2 = new HAW_text("In WML it is quite boring.", HAW_TEXTFORMAT_SMALL);
$myText2->set_br(2); // create 2 line breaks

$myText3 = new HAW_text("You can customize the HTML display that it fits perfectly into your web site ...");
$myText3->set_color("red");
$myText3->set_br(2); // create 2 line breaks

$myText4 = new HAW_text("... and you can make your PC-based visitors happy with all kind of banners above and beneath the display area.", HAW_TEXTFORMAT_SMALL);
$myText4->set_color("brown");

$myPage->add_text($myText1);
$myPage->add_text($myText2);
$myPage->add_text($myText3);
$myPage->add_text($myText4);

$banner_php = new HAW_banner("php.gif", "http://www.php.net/", "PHP");
$banner_php->set_size(120,67);
$myPage->add_banner($banner_php);

$banner_asf = new HAW_banner("http://www.apache.org/images/asf_logo_wide.gif", "http://www.apache.org/", "Apache");
$banner_asf->set_size(537,51);
$myPage->add_banner($banner_asf);

$banner_hawhaw = new HAW_banner("hawhaw.gif", "http://www.hawhaw.de/index.htm", "HAWHAW");
$banner_hawhaw->set_size(170,70);
$myPage->add_banner($banner_hawhaw, HAW_TOP);

$myPage->create_page();

?>