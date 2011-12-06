<?php

namespace app\helpers;

/**
 * Numbers helper
 * 
 * @author    Kanat Gailimov <gailimov@gmail.com>
 * @copyright 2011 Kanat Gailimov (http://kanat.gailimov.kz)
 * @license   http://www.gnu.org/licenses/gpl.html GNU General Public License v3
 */
class Numbers
{
    /**
     * Right russian endings of words
     *
     * @param  int    $number  Number of enything
     * @param  string $ending0 "ов, ев" ending. Example - 5 голов, 12 стульев.
     * @param  string $ending1 Example - 1 гол, 21 стул.
     * @param  string $ending2 Example - 3 гола, 24 стула.
     * @return string
     */
    public function getRussianNumberEndings($number, $ending0, $ending1, $ending2)
    {
        $num100 = $number % 100;
        $num10 = $number % 10;
        if ($num100 >= 5 && $num100 <= 20) {
            return $ending0;
        } else if ($num10 == 0) {
            return $ending0;
        } else if ($num10 == 1) {
            return $ending1;
        } else if ($num10 >= 2 && $num10 <= 4) {
            return $ending2;
        } else if ($num10 >= 5 && $num10 <= 9) {
            return $ending0;
        } else {
            return $ending2;
        }
    }
}
