<?php 
/* Given an array of integers nums and an integer target, return indices of the two numbers such that they add up to target.
You may assume that each input would have exactly one solution, and you may not use the same element twice.
You can return the answer in any order.

Example 1:

Input: nums = [2,7,11,15], target = 9
Output: [0,1]
Explanation: Because nums[0] + nums[1] == 9, we return [0, 1].
Example 2:

Input: nums = [3,2,4], target = 6
Output: [1,2]
Example 3:

Input: nums = [3,3], target = 6
Output: [0,1] */

// A slightly optimized version of Approach 3 - One Pass Hash Table
// 8ms, 99%tile speed, 8%tile memory
class Solution {
	function twoSum(array $nums, int $target) {
		$map = []; // Important to not have count($nums) in the `for` loop. Else it will get executed every iteration.
		$size = count($nums);
		for ($i = 0; $i < $size; $i++) {
			$complement = $target - $nums[$i];

            echo $i.' '. $complement;
            
			if ( array_key_exists($complement, $map) ) {
				return [ $i, $map[$complement] ]; 
            } 
                
            $map[ $nums[$i] ] = $i;

            print_r($map);
            echo "<br>";
		}
	}
}

$obj = new Solution;

$arr = [2,11,15,7];
$t = 9;

$res = $obj->twoSum($arr, $t);
echo "<hr>";
print_r($res);
echo "<hr>";