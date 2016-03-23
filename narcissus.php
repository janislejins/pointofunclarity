<?php
error_reporting(E_ERROR | E_PARSE);

require 'php-sdk/src/temboo.php';

// Instantiate the Choreo, using a previously instantiated Temboo_Session object, eg:

$profileFeed = new Facebook_Reading_ProfileFeed($session);

// Get an input object for the Choreo
$profileFeedInputs = $profileFeed->newInputs();

// Set credential to use for execution
$profileFeedInputs->setCredential('Facebook2');

// Set inputs
$profileFeedInputs->setFields("name,message,created_time,from,to,type")->setLimit("10");

// Execute Choreo and get results
$profileFeedResults = $profileFeed->execute($profileFeedInputs)->getResults();


$response_2 = json_decode($profileFeedResults->getResponse());

//print_r($response_2);
foreach ($response_2->{data} as $x) {
 	echo "___________________________"."\n";
	echo "Janis Lejins - Recent "."\n";
	echo "Activity: "."\n";
	echo "posted a ".$x->{'type'}."\n";
	echo "at: ".$x->{'created_time'}."\n";
	foreach ($x->{to}->{data} as $z3) {
		echo "to: ".$z3->{'name'}."\n"; //code...
	}
	$z5 = $x->{'story'}."\n";
	echo $z5; //code...
	$z1 = $x->{'name'}."\n" ;
		echo($z1); //code...
    $z2 = $x->{'message'}."\n";
		echo $z2;
	$z3 = $x->{'caption'}."\n";
		echo $z3; //code...
	$z4 = $x->{'description'}."\n";
	echo $z4; //code...
	
	
}
// 	echo "(ID number: ".$x->{'id'}.")\n";
// 	echo "___________________________"."\n";	# code...
// 	}

// NEWSFEED

$newsFeed = new Facebook_Reading_NewsFeed($session);

// Get an input object for the Choreo
$newsFeedInputs = $newsFeed->newInputs();

// Set credential to use for execution
$newsFeedInputs->setCredential('Facebook2');

// Set inputs
$newsFeedInputs->setFields("name,message,created_time,from,to,type")->setLimit("100");

// Execute Choreo and get results
$newsFeedResults = $newsFeed->execute($newsFeedInputs)->getResults();

$response_1 = json_decode($newsFeedResults->getResponse());

//print_r($response_1);
foreach ($response_1->{data} as $x) {
	echo "___________________________"."\n";
	echo "Newsfeed item"."\n";
	echo "at: ".$x->{'created_time'}."\n";
	echo " ".$x->{from}->{'name'}."\n";
	echo "posted a ".$x->{'type'}."; ".$x->{'name'}."\n";
	echo "\"".$x->{'message'}."\""."\n";
	foreach ($x->{to}->{data} as $z) {
		echo "to: ".$z->{'name'}."\n"; //code...
	}
	echo "(ID number: ".$x->{'id'}.")\n";
	echo "___________________________"."\n";	# code...
	}

//personal messages

$inbox = new Facebook_Reading_Inbox($session);

// Get an input object for the Choreo
$inboxInputs = $inbox->newInputs();

// Set credential to use for execution
$inboxInputs->setCredential('Facebook2');

// Set inputs
$inboxInputs->setFields("message,from,comments");

// Execute Choreo and get results
$inboxResults = $inbox->execute($inboxInputs)->getResults();
//$onetoten = array(0,1,2,3,4,5,6,7,8,9,10);
$response = json_decode($inboxResults->getResponse());

foreach ($response -> {data} as $x) {
	echo "updated time: ".$x->{'updated_time'}."\n";
	echo "___________________________"."\n";
	foreach ($x->{comments}->{data} as $y) {
	echo "from: ".$y->{from}->{'name'}."\n";
	echo "message: ".$y->{'message'}."\n";
	echo "sent at: ".$y->{'created_time'}."\n";
	echo "___________________________"."\n";	# code...
	}
}



echo "________________________________"."\n" ;
echo "___!x!___"."\n";
echo "if arduino reads this first your fucked."	;
?>