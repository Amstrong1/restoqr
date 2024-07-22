<?php

/**
 * Generates a random color in hexadecimal format.
 *
 * @return string The randomly generated color in the format #RRGGBB.
 */
function getRandomColor() {
    $characters = '0123456789abcdef';
    $color = '#';
    for ($i = 0; $i < 6; $i++) {
        $color .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $color;
}


/**
 * Extracts the year from a given date.
 *
 * @param string $date The date in the format YYYY-MM-DD HH:MM:SS.
 * @return int The year extracted from the date.
 */
function getYearFromDate($date) {
    $year = substr($date, 0, 4);
    return intval($year);
}


/**
 * Extracts the month from a given date.
 *
 * @param string $date The date in the format YYYY-MM-DD HH:MM:SS.
 * @return int The month extracted from the date.
 */
function getMonthFromDate($date) {
    $month = substr($date, 5, 2);
    return intval($month);
}

/**
 * Extracts the day from a given date.
 *
 * @param string $date The date in the format YYYY-MM-DD HH:MM:SS.
 * @return int The day extracted from the date.
 */
function getDayFromDate($date) {
    $day = substr($date, 8, 2);
    return intval($day);
}

/**
 * Calculates the week of the year from a given date.
 *
 * @param string $date The date in the format YYYY-MM-DD HH:MM:SS.
 * @return int The week of the year extracted from the date.
 */
function getWeekOfYear($date) {
    $month = intval(substr($date, 5, 2));
    $day = intval(substr($date, 8, 2));

    $timestamp = strtotime($date);
    $week = intval(date('W', $timestamp));

    if ($month == 12 && $day > 28) {
        $week++;
    }

    return $week;
}
