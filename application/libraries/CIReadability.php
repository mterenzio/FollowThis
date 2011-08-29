<?php
 if (!defined('BASEPATH')) {exit('No direct script access allowed');}

 class CIReadability
 {
 function __construct($class = NULL)
 {
 ini_set('include_path', ini_get('include_path').';'.PATH_SEPARATOR . APPPATH . 'libraries/readability');
 require_once('Readability.php');
 }
 }