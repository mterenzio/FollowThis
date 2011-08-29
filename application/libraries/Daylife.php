<?php
 if (!defined('BASEPATH')) {exit('No direct script access allowed');}

 class Daylife
 {
 function __construct($class = NULL)
 {
 ini_set('include_path', ini_get('include_path').';'.PATH_SEPARATOR . APPPATH . 'libraries/daylife');
 require_once('publicapi.php');
 }
 }