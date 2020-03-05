<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//custom_config.php - a place to save global settings

$config['style'] = 'journal.css';  //current style in bootswatch theme
$config['active'] = ''; //default active model, i.e., Users 
$config['banner'] = 'Arts For You';//shows in top left of nav 
$config['title'] = 'Default Title';  //title tag
$config['copyright'] = 'Default Copyright';
$config['masthead'] = 'Default MastHead';
$config['theme'] = 'themes/bootswatch/';


$config['nav1'] = array(
'users' => 'Users',
'news' => 'News',    
'news/create' => 'Add News',   
'index/about' => 'About',   
'sign up' => 'Sign Up'
);

