<?php
/*
Plugin Name: Bangla Numbers in Time and Date
Version: 0.5
Plugin URI: http://www.wpart.tk/
Description: This plugins helps to dispaly the Date and Time of post publishing in Bangla Numbers. But doesn't show date acroding to Bangla calender. The plugin doesn't need Bangla language pack installation, it can work by itself.
Author: Arif Nezami
Author URI: http://www.wpart.tk/
*/
 
function BanglaNumDate ($text) {
$text = str_replace('1', '১', $text);
$text = str_replace('2', '২', $text);
$text = str_replace('3', '৩', $text);
$text = str_replace('4', '৪', $text);
$text = str_replace('5', '৫', $text);
$text = str_replace('6', '৬', $text);
$text = str_replace('7', '৭', $text);
$text = str_replace('8', '৮', $text);
$text = str_replace('9', '৯', $text);
$text = str_replace('0', '০', $text); 
$text = str_replace('th', '-এ', $text); 
$text = str_replace('st', '-এ', $text);
$text = str_replace('rd', '-এ', $text);
$text = str_replace('th', '-এ', $text);
$text = str_replace('January', 'জানুয়ারী', $text);
$text = str_replace('February', 'ফেব্রুয়ারী', $text);
$text = str_replace('March', 'মার্চ', $text);
$text = str_replace('April', 'এপ্রিল', $text);
$text = str_replace('May', 'মে', $text);
$text = str_replace('June', 'জুন', $text);
$text = str_replace('July', 'জুলাই', $text);
$text = str_replace('August', 'অগাষ্ট', $text);
$text = str_replace('September', 'সেপ্টেম্বার', $text);
$text = str_replace('October', 'অক্টোবার', $text); 
$text = str_replace('November', 'নভেম্বার', $text); 
$text = str_replace('December', 'ডিসেম্বার', $text);
$text = str_replace('Jan', 'জানুয়ারী', $text);
$text = str_replace('Feb', 'ফেব্রুয়ারী', $text);
$text = str_replace('Mar', 'মার্চ', $text);
$text = str_replace('Apr', 'এপ্রিল', $text);
$text = str_replace('May', 'মে', $text);
$text = str_replace('Jun', 'জুন', $text);
$text = str_replace('Jul', 'জুলাই', $text);
$text = str_replace('Aug', 'অগাষ্ট', $text);
$text = str_replace('Sep', 'সেপ্টেম্বার', $text);
$text = str_replace('Oct', 'অক্টোবার', $text); 
$text = str_replace('Nov', 'নভেম্বার', $text); 
$text = str_replace('Dec', 'ডিসেম্বার', $text);
$text = str_replace('Saturday', 'শনিবার', $text);
$text = str_replace('Sunday', 'রবিবার', $text);
$text = str_replace('Monday', 'সোমবার', $text);
$text = str_replace('Tuesday', 'মঙ্গলবার', $text);
$text = str_replace('Wednesday', 'বুধবার', $text);
$text = str_replace('Thursday', 'বৃহস্পতিবার', $text);
$text = str_replace('Friday', 'শুক্রবার', $text);
$text = str_replace('Sat', 'শনি', $text);
$text = str_replace('Sun', 'রবি', $text);
$text = str_replace('Mon', 'সোম', $text);
$text = str_replace('Tue', 'মঙ্গল', $text);
$text = str_replace('Tues', 'মঙ্গল', $text);
$text = str_replace('Wed', 'বুধ', $text);
$text = str_replace('Thurs', 'বৃহস্পতি', $text);
$text = str_replace('Thu', 'বৃহস্পতি', $text);
$text = str_replace('Fri', 'শুক্র', $text);
return $text;
}
 
 
 
add_filter('the_date', 'BanglaNumDate');
add_filter('the_time', 'BanglaNumDate');
 
?>