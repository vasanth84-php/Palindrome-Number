class Solution {
    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
       $stringconvert = str_split(strval($x));
       $count = 0; 
       $outputArray = array_reverse($stringconvert);
       foreach($stringconvert as $key => $value){
        if ($outputArray[$key] == $stringconvert[$key]) {
            $count++;
        }
       }
       return ($count == count($stringconvert)) ? true : false;
    }
}
$result = new Solution();
$result->isPalindrome($x);
