<?php

class Recursive
{

    public function chop($needle, $haystack)
    {
    	$result = -1;

    	if (count($haystack)) {
    		$length = count($haystack);
    		if ($length === 1) {
    			if ($haystack[0] === $needle) {
    				$result = 0;
    			}
    		} else {

    			$min = 0;
    			$max = $length - 1;

    			while ($max  >= $min) {

    				$mid = $min + $this->integerDivision(($max - $min) / 2);

    				if ($haystack[$mid] < $needle ) {
    					$min = $mid + 1;
    				} else if  ($haystack[$mid] > $needle ) {
    					$max = $mid - 1;
    				} else {
    					$result = $mid;
    					break;
    				}
    			}
    		}

    	}

		return $result;
    }

    private function integerDivision($value) 
    {
    	return ~~($value);
    }
}