<?php
//config.php

//this enables pages to know their own name
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));
define('DEBUG',TRUE); #we want to see all errors

//this clears date errors of all sorts
date_default_timezone_set('America/Los_Angeles');

//this is inside of an H1 in the header.php file
$banner = 'Banner Goes Here';

$nav1['index.php'] = 'Main Page';
$nav1['customers.php'] = 'Customers Page';
$nav1['contact.php'] = 'Contact Us';
$nav1['daily-special.php'] = 'Daily Special';

switch(THIS_PAGE){
        
    case 'index.php':
        $title = 'Main Page';
        $banner = 'Main Page';
        $image = 'home.png';
    break;
    case 'customers.php':
        $title = 'Customers Page';
        $banner = 'Customers Page';
        $image = 'customers.png';
    break;
    case 'contact.php':
        $title = 'Contact Page';
        $banner = 'Contact Us';
        $image = 'email.png';
    break;
    case 'daily-special.php':
        $title = 'Daily Special Page';
        $banner = 'Daily Special';
        $image = 'daily-special.png';
    break;
        
        
    default:
        $title = THIS_PAGE;
}


//stores database login info
include 'credentials.php';
include 'planets.php';


function makeLinks($nav){
    
    $myReturn = "";
    
    foreach($nav as $url => $text){
        
        if(THIS_PAGE == $url){
            
            $myReturn .= '<li class="current"><a href="' . $url . '">' . $text . '</a></li>';
            
        }else{
            
            $myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>';
            
        }
        
        
        
    }
    
    return $myReturn;
    
}


function myerror($myFile, $myLine, $errorMsg)
{
    if(defined('DEBUG') && DEBUG)
    {
       echo "Error in file: <b>" . $myFile . "</b> on line: <b>" . $myLine . "</b><br />";
       echo "Error Message: <b>" . $errorMsg . "</b><br />";
       die();
    }else{
		echo "I'm sorry, we have encountered an error.  Would you like to buy some socks?";
		die();
    }
}

function dailySpecial($myPic,$special,$description){

    $day = date('w');
    
    if($_GET["day"] == 'sun'){
    $day = 0;
}else if($_GET["day"] == 'mon'){
    $day = 1;
}else if($_GET["day"] == 'tue'){
    $day = 2;
}else if($_GET["day"] == 'wed'){
    $day = 3;
}else if($_GET["day"] == 'thu'){
    $day = 4;
}else if($_GET["day"] == 'fri'){
    $day = 5;
}else if($_GET["day"] == 'sat'){
    $day = 6;
}   

    
    
    if($day == "0"){
        
        $myPic = '<img src="images/ham-swiss.jpg" alt="Ham and Swiss sandwich" id="special"/>';
        $special = '<h2>Sunday\'s Daily Special: Ham and Swiss</h2>';
        $description = '<p>Our Ham and Swiss sandwich is killer!  Make sure to come on down and give it a try!</p>';
        
    } else if ($day == "1"){
        
        $myPic = '<img src="images/cordon-bleu.jpg" alt="Cordon Bleu sandwich" id="special"/>';
        $special = '<h2>Monday\'s Daily Special: Cordon Bleu</h2>';
        $description = '<p>We make a wicked cordon bleu!  If you haven\'t tried it, you\'re missing out!</p>';
            
    } else if ($day == "2"){
        
        $myPic = '<img src="images/monte-cristo.jpg" alt="Monte Cristo sandwich" id="special"/>';
        $special = '<h2>Tuesday\'s Daily Special: Monte Cristo</h2>';
        $description = '<p>The best Monte Cristo in town!  From the first bite to the last!</p>'; 
        
    } else if ($day == "3"){    
        
        $myPic = '<img src="images/reuben.jpg" alt="Reuben sandwich" id="special"/>';
        $special = '<h2>Wednesday\'s Daily Special: Reuben</h2>';
        $description = '<p>The best Reuben sandwich west of the mississippi, they say!</p>';
    
    } else if ($day == "4"){
        
        $myPic = '<img src="images/blt.jpg" alt="BLT sandwich" id="special"/>';
        $special = '<h2>Thursday\'s Daily Special: BLT</h2>';
        $description = '<p>What makes our BLT better than everyone elses?  Our special sauce, ofcourse!</p>'; 
        
    } else if ($day == "5"){
        
        $myPic = '<img src="images/roasted-turkey.jpg" alt="Roasted Turkey sandwich" id="special"/>';
        $special = '<h2>Friday\'s Daily Special: Roasted Turkey</h2>';
        $description = '<p>Thanksgiving came early.  Comes with our homemade cranberry relish and a side of mashed potatoes.</p>';
        
    } else {
        
        $myPic = '<img src="images/grilled-cheese.jpg" alt="Grilled Cheese sandwich" id="special"/>';
        $special = '<h2>Saturday\'s Daily Special: Grilled Cheese</h2>';
        $description = '<p>Four kinds of cheese sandwiched in fresh baked bread, buttered and fried like Mom made them.</p>';
        
    }   

    $myReturn = $myPic;
    $myReturn .= $special;
    $myReturn .= $description;
    
    return $myReturn;
    
}

function randomize ($heros)
{//randomize function is called in the right sidebar - an example of random (on page reload)
	if(is_array($heros))
	{//Generate random item from array and return it
		return $heros[mt_rand(0, count($heros) - 1)];
	}else{
		return $heros;
	}
}#end randomize()

function rotate ($planets)
{//rotate function is called in the right sidebar - an example of rotation (on day of month)
	if(is_array($planets))
	{//Generate item in array using date and modulus of count of the array
		return $planets[((int)date("j")) % count($planets)];
	}else{
		return $planets;
	}
}#end rotate

$heros[] = '<img src="images/coulson.png" />';
$heros[] = '<img src="images/fury.png" />';
$heros[] = '<img src="images/hulk.png" />';
$heros[] = '<img src="images/thor.png" />';
$heros[] = '<img src="images/black-widow.png" />';
$heros[] = '<img src="images/captain-america.png" />';
$heros[] = '<img src="images/machine.png" />';
$heros[] = '<img src="images/iron-man.png" />';
$heros[] = '<img src="images/loki.png" />';
$heros[] = '<img src="images/giant.png" />';
$heros[] = '<img src="images/hawkeye.png" />';

