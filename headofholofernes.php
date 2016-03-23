
<?php
//cost of war in Afghanistan
$warAFGwebsite = 'http://nationalpriorities.org/en/cost-of/war-in-afghanistan/' ;
//$UKurl =  'https://www.mi5.gov.uk/UKThreatLevel/UKThreatLevel.xml';
$warAFGcost = file_get_contents($warAFGwebsite);
$pattern = '/data-current-amount="(.*)"/';
$info = preg_match( $pattern, $warAFGcost, $warAFGcostmatches);
foreach ($warAFGcostmatches as $warAFGcostmatch => $warAFGtotal) {
    }
//PRINT UK & AUS THREAT STATUS AND TIME EAST
echo "________________________________"."\n" ;
echo "Total Cost of War in Afghanistan"."\n" ;
echo "for US since 2001:"."\n" ;
echo "$".$warAFGtotal."\n"; 
echo "________________________________"."\n"  ;

//PRint out New York Times Headlines from September 12 2001.
$SEPTurl = "http://api.nytimes.com/svc/search/v1/article?format=json&query=Terror&begin_date=20010912&end_date=20010913&fields=body%2C+date%2C+title&rank=oldest&api-key=2b6009cd01f9fb2df3b3e96ac6cda5ea:10:63205082";
$json = file_get_contents($SEPTurl,0,null,null);
$json_output = json_decode($json);

foreach ( $json_output->results as $trend )
{
echo "________________________________"."\n" ; //this line is exactly the lenght of the printer
echo "Date: September 12 , 2001."."\n";
echo "{$trend->title}\n";
echo "New York Times:\n" ;
echo "{$trend->body}..."."\n";
echo "________________________________"."\n" ;
}

// END NYT SECTION



//cost of Department of homeland security.
$DHSwebsite = 'http://nationalpriorities.org/cost-of/homeland-security-since-911/' ;
//$UKurl =  'https://www.mi5.gov.uk/UKThreatLevel/UKThreatLevel.xml';
$DHScost = file_get_contents($DHSwebsite);
$pattern = '/data-current-amount="(.*)"/';
$info = preg_match( $pattern, $DHScost, $DHScostmatches);
foreach ($DHScostmatches as $DHScostmatch => $DHStotal) {
    }
//PRINT UK & AUS THREAT STATUS AND TIME EAST
echo "________________________________"."\n" ;
echo "Total Cost of Department of Homeland Security"."\n" ;
echo "since September 11 2001:"."\n" ;
echo "$".$DHStotal."\n";  
echo "________________________________"."\n"  ;

// GET NATIONAL SECURITY STATUS AUSTRALIA
date_default_timezone_set ("Australia/Sydney");
$AUSurl = 'http://www.nationalsecurity.gov.au/agd/WWW/NationalSecurity.nsf/Page/Information_for_Individuals_National_Security_Alert_System_National_Counter-Terrorism_Alert_System';
$AUShomepage = file_get_contents($AUSurl);
#echo($homepage);
$pattern = '/Australia (.*)<\/p>/i';
$info = preg_match( $pattern, $AUShomepage, $AUSmatches);
foreach ($AUSmatches as $AUSmatch => $AUSstatus) {	# code...
}

//GET MI5 UK SECURITY STATUS
$UKurl =  'https://www.mi5.gov.uk/UKThreatLevel/UKThreatLevel.xml';
$UKhomepage = file_get_contents($UKurl);
$pattern = '/current UK threat level is (.*)/i';
$info = preg_match( $pattern, $UKhomepage, $UKmatches);
foreach ($UKmatches as $UKmatch => $UKstatus) {
		}
//PRINT UK & AUS THREAT STATUS AND TIME EAST
echo "________________________________"."\n" ;
echo "_______TERROR ALERT UPDATE______"."\n" ;
echo "________________________________"."\n" ;
echo "Sydney Local Time: ".date("l jS \of F Y h:i:s A")."\n";
echo "Australian National Security Status - Australia ".$AUSstatus."\n";

echo "UK Terror Threat Status - ".$UKstatus."\n";	

echo "______TERROR ALERT UPDATE_______"."\n"	;
echo "________________________________"."\n"  ;



//END THREAT SECTION//
//cost of Department of homeland security.
$DHSwebsite = 'http://nationalpriorities.org/cost-of/homeland-security-since-911/' ;
//$UKurl =  'https://www.mi5.gov.uk/UKThreatLevel/UKThreatLevel.xml';
$DHScost = file_get_contents($DHSwebsite);
$pattern = '/data-current-amount="(.*)"/';
$info = preg_match( $pattern, $DHScost, $DHScostmatches);
foreach ($DHScostmatches as $DHScostmatch => $DHStotal) {
    }
//PRINT UK & AUS THREAT STATUS AND TIME EAST
echo "________________________________"."\n" ;
echo "Total Cost of Department of Homeland Security"."\n" ;
echo "since September 11 2001:"."\n" ;
echo "$".$DHStotal."\n";  
echo "________________________________"."\n"  ;


//MI5 RSS NEWS
//Gets and prints MI5 news RSS stream editing out webpages, copyright etc and formats for printing.
$MI5newsxmlDoc = new DOMDocument();
$MI5newsxmlDoc->load('https://www.mi5.gov.uk/rss/news.xml');

$MI5newsx = $MI5newsxmlDoc->documentElement;
foreach ($MI5newsx->childNodes AS $MI5newsitem)
  {
    $MI5newsnodename = $MI5newsitem->nodeName ;

    $MI5newsresults = $MI5newsitem->nodeValue ; //gives node results of search aka all the infor like the http, title etc.
  

$MI5newspatterns[1] = '/https(.*)/' ;
$MI5newspatterns[2] = '/MI5/' ;
$MI5newspatterns[3] = '/en-gb/';
$MI5newspatterns[4] = '/(.*) Crown Copyright 2008/' ;

$MI5newsreplace[1]= '___________________________'. "\n";
$MI5newsreplace[2]= ' ';
$MI5newsreplace[3]= ' ' ."\n";
$MI5newsreplace[4]= '___________________________'. "\n" ;

$MI5newsreplaceresults = preg_replace($MI5newspatterns, $MI5newsreplace, $MI5newsresults) ;
echo "___________________________"."\n" ;
echo "MI5 ".$MI5newsreplaceresults ;
echo "___________________________"."\n" ;
  }

$warIRQwebsite = 'http://nationalpriorities.org/en/cost-of/war-in-iraq/' ;
//$UKurl =  'https://www.mi5.gov.uk/UKThreatLevel/UKThreatLevel.xml';
$warIRQcost = file_get_contents($warIRQwebsite);
$pattern = '/data-current-amount="(.*)"/';
$info = preg_match( $pattern, $warIRQcost, $warIRQcostmatches);
foreach ($warIRQcostmatches as $warIRQcostmatch => $warIRQtotal) {
    }
//PRINT UK & AUS THREAT STATUS AND TIME EAST
echo "________________________________"."\n" ;
echo "Total Cost of War in Iraq"."\n" ;
echo "for US since 2001:"."\n" ;
echo "$".$warIRQtotal."\n"; 
echo "________________________________"."\n"  ;

$warwebsite = 'http://nationalpriorities.org/en/cost-of/war/' ;
//$UKurl =  'https://www.mi5.gov.uk/UKThreatLevel/UKThreatLevel.xml';
$warcost = file_get_contents($warwebsite);
$pattern = '/data-current-amount="(.*)"/';
$info = preg_match( $pattern, $warcost, $warcostmatches);
foreach ($warcostmatches as $warcostmatch => $wartotal) {
    }
//PRINT UK & AUS THREAT STATUS AND TIME EAST
echo "________________________________"."\n" ;
echo "Total Cost of US War"."\n" ;
echo "since 2001:"."\n" ;
echo "$".$wartotal."\n";  
echo "________________________________"."\n"  ;
//end MI5 News RSS section.


// Yahoo Stock data.
  include_once('class.yahoostock.php');
$objYahooStock = new YahooStock;

/*
    Add format/parameters to be fetched
     
    s = Symbol
    n = Name
    l1 = Last Trade (Price Only)
    d1 = Last Trade Date
    t1 = Last Trade Time
    c = Change and Percent Change
    v = Volume
 */

$objYahooStock->addFormat("snl1d1t1cv");
//Company data to collect
$objYahooStock->addStock("RTN");
$objYahooStock->addStock("HAL"); //Halliburton
$objYahooStock->addStock("OSK");
$objYahooStock->addStock("LLL");
$objYahooStock->addStock("UTX");
$objYahooStock->addStock("BA.L");
$objYahooStock->addStock("GD");
$objYahooStock->addStock("UTX");
$objYahooStock->addStock("WSGI");
$objYahooStock->addStock("BA"); // Boeing
$objYahooStock->addStock("LMT");
$objYahooStock->addStock("NOC");
$objYahooStock->addStock("ATK");
$objYahooStock->addStock("TXT");
$objYahooStock->addStock("RGR"); //Ruger
$objYahooStock->addStock("SWHC"); 
$objYahooStock->addStock("OLN");
$objYahooStock->addStock("SAI");
$objYahooStock->addStock("HII");
$objYahooStock->addStock("ITT");

/**
 * Printing out the data
 */
foreach( $objYahooStock->getQuotes() as $code => $stock)
{
   echo "________________________________"."\n" ;
    echo "LIVE STOCK UPDATE!"."\n";
   echo "________________________________"."\n" ;
    echo "Trading Code: " . $stock[0] . "\n"; 
    echo "Name: " . $stock[1] . "\n"; 
    echo "Last Trade Price: $" . $stock[2] . "\n";
    echo "Last Traded:" . $stock[3] . "at"  .  $stock[4] . "\n";
    echo "Change and % Change: " . $stock[5] . "\n"; 
    echo "Volume: " . $stock[6] . "\n";
    echo "________________________________"."\n" ;
    echo "Level of Terror in Australia ".$AUSstatus."\n";
    echo "Cost of War for the US"."$".$wartotal."\n";  
   echo "________________________________"."\n" ;
}

$nclrwebsite = 'http://nationalpriorities.org/en/cost-of/nuclear-weapons/' ;
//$UKurl =  'https://www.mi5.gov.uk/UKThreatLevel/UKThreatLevel.xml';
$nclrcost = file_get_contents($nclrwebsite);
$pattern = '/data-current-amount="(.*)"/';
$info = preg_match( $pattern, $nclrcost, $nclrcostmatches);
foreach ($nclrcostmatches as $nclrcostmatch => $nclrtotal) {
    }
//PRINT UK & AUS THREAT STATUS AND TIME EAST
echo "________________________________"."\n" ;
echo "Total Cost of US Nuclear Weapons"."\n" ;
echo "since Janurary this year:"."\n" ;
echo "$".$nclrtotal."\n"; 
echo "________________________________"."\n"  ;

$schlwebsite = 'http://nationalpriorities.org/en/cost-of/education/' ;
//$UKurl =  'https://www.mi5.gov.uk/UKThreatLevel/UKThreatLevel.xml';
$schlcost = file_get_contents($schlwebsite);
$pattern = '/data-current-amount="(.*)"/';
$info = preg_match( $pattern, $schlcost, $schlcostmatches);
foreach ($schlcostmatches as $schlcostmatch => $schltotal) {
    }
//PRINT UK & AUS THREAT STATUS AND TIME EAST
echo "________________________________"."\n" ;
echo "Amount spent on Education"."\n" ;
echo "by the US since Janurary this year:"."\n" ;
echo "$".$schltotal."\n"; 
echo "________________________________"."\n"  ;
//CURRENT WORLD HEADLINES FOR THE LAST 10 items FROM THE NYT/IHT/AP ETC
$WORLDurl = "http://api.nytimes.com/svc/news/v3/content/NYT/World/.json?&limit=10&api-key=290b0cb021ea69499ef5d3b0555eb515:0:63205082";
$json = file_get_contents($WORLDurl,0,null,null);
$json_output = json_decode($json);
//print_r($json_output);
foreach ( $json_output->results as $results )
{
    echo "________________________________"."\n" ;
    echo "Published today(".date('l jS \of F Y').")"."\n";
    echo "{$results->title}\n";
    echo "{$results->source}\n" ;
    echo "{$results->abstract}".".....\n";
    echo "________________________________"."\n" ;
    echo "Level of Terror in Australia ".$AUSstatus."\n";
    echo "Cost of War for the US"."$".$wartotal."\n";
     echo "________________________________"."\n" ;

}
  echo "________________________________"."\n" ;
echo "Australia ".$AUSstatus."\n";
echo "________________________________"."\n" ;
echo "________________________________"."\n" ;
echo "UK Terror Threat Status - ".$UKstatus."\n";
echo "________________________________"."\n" ;
echo "________________________________"."\n" ;
//END CURRENT WORLD HEADLINES

$objYahooStock2 = new YahooStock;
$objYahooStock2->addFormat("snl1d1t1cv");
$objYahooStock2->addStock("RTN");
$objYahooStock2->addStock("HAL"); //Halliburton
$objYahooStock2->addStock("WSGI");
foreach( $objYahooStock2->getQuotes() as $code => $stock)
{
   echo "________________________________"."\n" ;
    echo "LIVE STOCK UPDATE!"."\n";
   echo "________________________________"."\n" ;
    echo "Trading Code: " . $stock[0] . "\n"; 
    echo "Company Name: " . $stock[1] . "\n"; 
    echo "Last Trade Price: $" . $stock[2] . "\n";
    echo "Last Trade on: " . $stock[3] . "at"  .  $stock[4] . "\n";
    echo "Change and Percent Change: " . $stock[5] . "\n"; 
    echo "Volume: " . $stock[6] . "\n";
    echo "________________________________"."\n" ;
    echo "Australia ".$AUSstatus."\n";
   echo "________________________________"."\n" ;
}
//cost of Department of homeland security.
$DHSwebsite = 'http://nationalpriorities.org/cost-of/homeland-security-since-911/' ;
//$UKurl =  'https://www.mi5.gov.uk/UKThreatLevel/UKThreatLevel.xml';
$DHScost = file_get_contents($DHSwebsite);
$pattern = '/data-current-amount="(.*)"/';
$info = preg_match( $pattern, $DHScost, $DHScostmatches);
foreach ($DHScostmatches as $DHScostmatch => $DHStotal) {
    }
//PRINT UK & AUS THREAT STATUS AND TIME EAST
echo "________________________________"."\n" ;
echo "Total Cost of Department of Homeland Security"."\n" ;
echo "since September 11 2001:"."\n" ;
echo "$".$DHStotal."\n";  
echo "________________________________"."\n"  ;

//END STOCK SECTION!
echo "________________________________"."\n" ;
echo "___!x!___"."\n";
?>
