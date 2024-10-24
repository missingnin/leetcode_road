/*
 * Given a binary array nums,
 * return the maximum number of consecutive 1's in the array.
 */
function findMaxConsecutiveOnes(nums: number[]): number {
    let max = 0;

    nums.forEach(num => {
        if(num) {
            max++;
        } else {
            max = 0;
        }
    })

    return max;
}