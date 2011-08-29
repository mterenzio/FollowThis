<?php

class TimeHelper {

    private $properties;
    
    public function __construct() {
    }

    public static function calcElapsedTime($time) {
        // calculate elapsed time (in seconds!)
        $diff = time()-$time;
        $yearsDiff = floor($diff/60/60/24/365);
        $diff -= $yearsDiff*60*60*24*365;
        $daysDiff = floor($diff/60/60/24);
        $diff -= $daysDiff*60*60*24;
        $hrsDiff = floor($diff/60/60);
        $diff -= $hrsDiff*60*60;
        $minsDiff = floor($diff/60);
        $diff -= $minsDiff*60;
        $secsDiff = $diff;
        if ($diff < 0 || $yearsDiff < 0) {
            return ' moments';
        } else {
        if ($yearsDiff != 0) {
            return ($yearsDiff.' year'.(($yearsDiff <> 1) ? "s" : "").', '.$daysDiff.' day'.(($daysDiff <> 1) ? "s" : "").', '.$hrsDiff.' hour'.(($hrsDiff <> 1) ? "s" :              "").', '.$minsDiff.' minute'.(($minsDiff <> 1) ? "s" : ""));
        } elseif ($daysDiff != 0) {
            return ($daysDiff.' day'.(($daysDiff <> 1) ? "s" : "").', '.$hrsDiff.' hour'.(($hrsDiff <> 1) ? "s" : "").', '.$minsDiff.' minute'.(($minsDiff <> 1) ? "s" : ""));
        } elseif ($hrsDiff != 0) {
            return ($hrsDiff.' hour'.(($hrsDiff <> 1) ? "s" : "").', '.$minsDiff.' minute'.(($minsDiff <> 1) ? "s" : ""));
        } else {
            if ($minsDiff == 0) {
                return ' moments';
            } else {
                return ($minsDiff.' minute'.(($minsDiff <> 1) ? "s" : ""));
            }
        }
        }
    }
 
    public static function timesince($rsstime) {
        $timestamp = strtotime($rsstime);
        $date = date('M d, Y', $timestamp);
        $diff = mktime() - $timestamp;
        if ($diff > 86400) {
            $timesincepost = $date;
        } else {
            $timesincepost = TimeHelper::calcElapsedTime($timestamp)." ago";
        }
        return $timesincepost;
    }

    public static function timesincetimestamp($timestamp) {
        $date = date('M d, Y', $timestamp);
        $diff = mktime() - $timestamp;
        if ($diff > 86400) {
            $timesincepost = $date;
        } else {
            $timesincepost = TimeHelper::calcElapsedTime($timestamp)." ago";
        }
        return $timesincepost;
    }

}

?>