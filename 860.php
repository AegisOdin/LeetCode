<?php
class Solution {

    /**
     * @param Integer[] $bills
     * @return Boolean
     */




    function lemonadeChange($bills) {
        $bill5 = 0;
        $bill10 = 0;
        foreach ($bills as $bill) {
            switch ($bill) {
                case 5:
                    $bill5++;
                    break;
                case 10:
                    if ($bill5 > 0) {
                        $bill10++;
                        $bill5--;
                    } else {
                        return false;
                    }
                    break;
                case 20:
                    if ($bill10 > 0 && $bill5 > 0) {
                        $bill10--;
                        $bill5--;
                    } elseif ($bill5 > 2) {
                        $bill5 -= 3;
                    } else {
                        return false;
                    }
                    break;
                default:
                    return false;
            }
        }
        return true;
    }
}