<?php declare(strict_types=1);
use Tasks\MaxSubarrayFinder;
use PHPUnit\Framework\TestCase;

class MaxSubArrayTest extends TestCase
{
    public function testMaxSubarray()
    {
        $maxSubarrayFinder = new MaxSubarrayFinder;

        // Test case: array with positive and negative numbers
        $arr1 = [-1, 1, 5, -6, 3];
        $this->assertEquals(6, $maxSubarrayFinder->contiguous($arr1));

        // Test case: array with all positive numbers
        $arr2 = [1, 2, 3, 4, 5];
        $this->assertEquals(15, $maxSubarrayFinder->contiguous($arr2));

        // Test case: array with all negative numbers
        $arr3 = [-1, -2, -3, -4, -5];
        $this->assertEquals(-1, $maxSubarrayFinder->contiguous($arr3));

        // Test case: array with one element
        $arr4 = [5];
        $this->assertEquals(5, $maxSubarrayFinder->contiguous($arr4));

        // Test case: array with empty array
        $arr5 = [];
        $this->assertEquals(0, $maxSubarrayFinder->contiguous($arr5));

        // Test case: array with zero
        $arr6 = [0];
        $this->assertEquals(0, $maxSubarrayFinder->contiguous($arr6));
    }
}
