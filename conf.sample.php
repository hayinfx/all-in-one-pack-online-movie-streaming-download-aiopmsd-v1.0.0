<?php

	/************************************************
	*												*
	* ALL YOU HAD TO DO, EDIT THE DAMN CONFIG, CJ	*
	*												*
	************************************************/
				
				
				
				
	// IMPORTANT CONFIG (REQUIRED)

	// Site URL. 
	
	// importan: if you want to install to sub folder ex, http://site.com/subfolder edit file  .htaccess and find "RewriteBase /" change to "RewriteBase /subfolder" without backslah "/" at the end.
	
	$siteurl = 'http://movie.animecity.xyz'; // your website address with http:// or https://
	
	$sitename = 'Movie Anime City'; // Your site name.
	$fb = 'AnimeCity.xyz'; // replace with your facebook Page username or ID. (Required)
	
	// Mysql Database
	
	$dbhost ='localhost'; 
	$dbuser = 'root'; 
	$dbpass = ''; 
	$dbname = 'moviedb';	
	
	
	// MISC CONFIG (OPTIONAL)
	
	$sitedescription = 'Online Movie Streaming'; // your site descritpion. ex. "Online Movie Streaming"	
	
	$sharebutton = 'on'; // if you dont realy need facebook, google+, twitter share button fill with "off"
	
	$maxmovieperpage = '15'; // maximum movie per page. default "15". set between 10 - 20. please becarefull if u set higher than 20 its mmake your site very slow and make bad experience to your visitor. 
	
	$maxmoviesearchperpage = '30'; // maximum movie search per page. default "30". set between 10 - 30. please becarefull if u set higher than 30 its mmake your site very slow and make bad experience to your visitor. 
	
	// we know online TV Streaming is cool and important feature. but not really important and anoying to non Indonesian visitor :v so, we add on of configuration now!
	
	$tvstreaming = 'on'; // set to "on" or "off". 
	
	
	// ADS Code / Banner 
	
	$ads = 'on'; // set to "on" or "off" . // this setting for your ads banner top side, and bottom  
	
	// Top and bottom ads banner. code or banner ads will show on all site page at midle or top page, expect on watch page, code banner will placed at bottom. important: ads place are optimized for 728x90 px ads banner
	
	$adscode728x90 = '<img src="http://res.cloudinary.com/vcc/image/upload/ads/728x90.jpg" alt="728 x 90 ADS BANNER. Responsive ADS Banner Sample by AiOPMSD">';
	
	// Side ads banner. show on all page at side corner. but sometime at bottom when someone acessing your site from small screen width less than 320 pixel. important: this ads place are opimized for 250x250 px ads banner
	
	$adscode250x250 = '<img src="http://res.cloudinary.com/vcc/image/upload/ads/250x250.jpg" alt="250 x 250 ADS BANNER. Responsive ADS Banner Sample by AiOPMSD">';
	
	// Language 
	
	$lang = 'en'; // "id" deprecated
	
	// impotant notice: we remove non english language. language setting "id" are no longer suported on AiOPMSD v.1.0.0. final version. i'm feel sorry but i dont have time to tranlating to Indonesian. but if you (for all from all country not only for Indonesian) want to tranlsate to your local language, send email to hayinfx@gmail.com we'll apreciate it. 

	
	// EXTENDED CONFIG
	
	// remove code bellow or add single line comment "//" or multi line comment "/* */" if you want to run your site on debug / maintain / develop / editing mode. better for tracking whats wrong with your site but very bad for live mode! 

	error_reporting(0);	
	
	
	
	
	/****************************************************
	*													*
	* ALL YOU HAD TO DO, STOP EDIT THE DAMN CONFIG, CJ	*
	*													*
	****************************************************/

	
	
	$covercdn = 'http://res.cloudinary.com/vcc/image/upload/cover';
		
	$spatern=array("http://","https://");
	$rpatern=array("","");
	
	$siteurls = str_replace($spatern,$rpatern,$siteurl);
	
	
	/* 
	
		AiOPMSD v1.0.0 FINAL VERSION BUILD 4
		
		yeah, this is FINAL version. its mean, 99% no bug. but we still need your suport. please send bug to email hayinfx@yahoo.com. thanks 
	
	*/
	
?>	