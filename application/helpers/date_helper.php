<?php

/**
 * Convert  DATE (YYYY-MM-DD) or DATETIME (YYYY-MM-DD hh:mm:ss) to timestamp
 *
 * Returns the timestamp equivalent of a given DATE/DATETIME
 *
 * @todo add regex to validate given datetime
 * @access      public
 * @return      integer
 */
function datetime_to_timestamp($datetime = "")
{
    if (!empty($datetime)) {
        $date = trim($datetime);
        $hours = 0;
        $minutes = 0;
        $seconds = '00';
        // DATETIME only
        @list($date, $time) = explode(" ", $datetime);
        if ($time != '') {
            @list($hours, $minutes) = explode(":", $time);
        }
        @list($day, $month, $year) = explode("-", $date);
        return mktime($hours, $minutes, $seconds, $month, $day, $year);
    }
}


/**
 * Convert timestamp to Human Date
 *
 * Returns the date (format according to given string) of a given timestamp
 *
 * @access      public
 * @param        string
 * @param        string
 * @return      string
 */
function timestamp_to_date($timestamp, $format = DATETIME_FORMAT)
{
    return date(trim($format), $timestamp);
}

/**
 * Convert Human Date to Timestamp
 *
 * Returns the timestamp equivalent of a given HUMAN DATE/DATETIME
 *
 * @access      public
 * @param        string
 * @return      integer
 */
function date_to_timestamp($datetime = "")
{
    if (!preg_match("/^(\d{2}(\d{2})?)[.\- \/N](\d{1,2})[.\- \/](\d{1,2})ú?( (\d{1,2})(|[:](\d{1,2})(|ª|([:ª](\d{1,2})b?)?)))?$/iu", $datetime, $date)) {
        return FALSE;
    }

    $year = $date[1];
    $month = $date[3];
    $day = $date[4];

    $hour = (empty($date[6])) ? 0 : $date[6];
    $min = (empty($date[8])) ? 0 : $date[8];
    $sec = (empty($date[11])) ? 0 : $date[11];

    return mktime($hour, $min, $sec, $month, $day, $year);
}


function get_age($birth)
{
    if ($birth) {
        $ty = date("Y");
        $tm = date("m");
        $td = date("d");
        list($by, $bm, $bd) = explode('-', datetime_to_date($birth, "Y-m-d"));
        $age = $ty - $by;
        if ($tm * 100 + $td < $bm * 100 + $bd) $age--;
        return $age;
    } else {
        return "H";
    }
}