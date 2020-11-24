<?php
require 'simple_html_dom.php';

$html = file_get_contents('https://www.worldometers.info/coronavirus/');
$totalndeath = explode( '<div class="maincounter-number">' , $html );
$total_s = explode("</div>" , $totalndeath[1] );
$death_s = explode("</div>" , $totalndeath[2] );

$rec = explode('<div class="maincounter-number" style="color:#8ACA2B ">',$html);
$reco = explode('</div>', $rec[1]);
$total = $total_s[0];
$death = $death_s[0];
$recovered = $reco[0];


// No covid cases:

    $no_covid = array("Kiribati","Marshall Islands","Micronesia","Nauru","North Korea","Palau","Samoa","Solomon Islands","Tonga","Turkmenistan","Tuvalu","Vanuatu");



// top 10 affected
    $top10 = array("USA"=>"8,889,183","INDIA"=>"7,909,959","BRAZIL"=>"5,394,128","RUSSIA"=>"1,531,224","FRANCE"=>"1,138,507","SPAIN"=>"1,110,372","ARGENTINA"=>"1,090,589","COLOMBIA"=>"1,015,885","MEXICO"=>"891,160");

// top rec
    $toprec = array("INDIA"=>"6948497","BRAZIL"=>"4797872","USA"=>"3773036","RUSSIA"=>"1119251","COLOMBIA"=>"901652","ARGENTINA"=>"866695","PERU"=>"803846","SOUTH AFRICA"=>"643523","MEXICO"=>"641075","CHILE"=>"641075");

// top death
    $topdeath = array("USA"=>"230,510","BRAZIL"=>"157,163","INDIA"=>"119,030","MEXICO"=>"88,924","UK"=>"44,896","ITALY"=>"37,338","FRANCE"=>"34,761","SPAIN"=>"34,752","PERU"=>"34,149","IRAN"=>"32,616	");

// ind top 10
    $indtop10 = array("MAHARASHTRA"=>"1645020","ANDHRA PRADESH"=>"807023","KARNATAKA"=>"802817","TAMIL NADU"=>"709005","UTTAR PRADESH"=>"470270","KERALA"=>"392931","DELHI"=>"356656","WEST BENGAL"=>"349701","ODISHA"=>"281215","TELANGANA"=>"231834");
?>