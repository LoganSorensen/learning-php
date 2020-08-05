<?php
    // echo date('d');     // day
    // echo date('m');     // month
    // echo date('Y')      // year
    // echo date('l');     // day of the week

    // echo date('Y/m/d');
    // echo date('m-d-Y');

    // echo date('h');      // hour
    // echo date('i');      // minute
    // echo date('s');      // seconds
    // echo date('a');      // AM or PM

    // Set time zone establishes the timezone we want to work with
    date_default_timezone_set('America/Los_Angeles');

    // echo date('h:i:sa');

    /*
    Unix timestamp is a long integer containing the number of seconds between the Unix Epoch (January 1 1970 00:00:00 GMT) and the time specified.
    */

    $timestamp = mktime(10, 14, 54, 9, 10, 1981);
    //                  h   mi  s  mo  d   year
    // echo $timestamp;

    // this timestamp can be parsed using the following syntax:
    // echo date('m/d/Y h:i:sa', $timestamp)

    $timestamp2 = strtotime('7:00pm March 22 2016');
    $timestamp3 = strtotime('tomorrow');
    $timestamp4 = strtotime('next Sunday');
    $timestamp5 = strtotime('+2 months');

    // echo $timestamp2;

    // echo date('m/d/Y h:i:sa', $timestamp2);
    // echo date('m/d/Y h:i:sa', $timestamp3);
    // echo date('m/d/Y h:i:sa', $timestamp4);
    // echo date('m/d/Y h:i:sa', $timestamp5); 
?>