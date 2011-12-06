<?php

namespace app\helpers;

/**
 * Date helper
 * 
 * @author    Kanat Gailimov <gailimov@gmail.com>
 * @copyright 2011 Kanat Gailimov (http://kanat.gailimov.kz)
 * @license   http://www.gnu.org/licenses/gpl.html GNU General Public License v3
 */
class Date
{
    /**
     * Russian dates
     *
     * @param  string $date    Date
     * @param  bool   $hasTime hasTime?
     * @return string
     */
    public function russianDate($date, $hasTime = true)
    {
        // Get date and time
        list($day, $time) = explode(' ', $date);
        
        switch($day) {
            // If date coincides with today's
            case date('Y-m-d'):
                $result = 'Сегодня';
                break;
            // If date coincides with yesterday's
            case date('Y-m-d', mktime(0, 0, 0, date("m")  , date("d")-1, date("Y"))):
                $result = 'Вчера';
           	    break;
            default:
                // Splitting date to year, month and day
                list($y, $m, $d) = explode('-', $day);
                $monthStr = array(
                    'января', 'февраля', 'марта',
                    'апреля', 'мая', 'июня',
                    'июля', 'августа', 'сентября',
                    'октября', 'ноября', 'декабря'
                );
                $monthInt = array(
                    '01', '02', '03',
                    '04', '05', '06',
                    '07', '08', '09',
                    '10', '11', '12'
                );
                // Replacing the numeric designation of the month on a verbal (leaning in case)
                $m = str_replace($monthInt, $monthStr, $m);
                // Formation of the final result
                $result = $d . ' ' . $m . ' ' . $y . ' г.';
        }
        
        if ($hasTime) {
            // Getting individual components of time except seconds
            list($h, $m, $s) = explode(':', $time);
            $result .= ' в ' . $h . ':' . $m;
        }
        
        return $result;
    }
}
