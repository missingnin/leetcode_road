<?php

/*
 * Given a binary array nums,
 * return the maximum number of consecutive 1's in the array.
 */
class FindMaxConsecutiveOnesSolution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findMaxConsecutiveOnes(array $nums): int
    {
        $max = 0;
        foreach ($nums as $num) {
            if ($num === 1) {
                $max++;
            } else {
                $max = 0;
            }
        }

        return $max;
    }
}
