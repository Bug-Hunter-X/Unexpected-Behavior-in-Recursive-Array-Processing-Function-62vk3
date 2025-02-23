# PHP Recursive Array Processing Bug

This repository demonstrates a bug in a PHP function designed to process and modify nested arrays. The function `processData` uses recursion to iterate through the array and convert string values to lowercase.  However, the current implementation lacks error handling and can lead to unexpected results or infinite loops with certain input types.  A corrected version is provided for comparison.

**Bug:** The original `processData` function does not handle various scenarios correctly which can lead to unexpected behavior. This includes issues with empty arrays, potential exceptions during recursive calls, and the direct modification of input data.

**Solution:** The solution addresses these issues by adding robust error handling and modifying the function to process the input array without directly changing the original array.