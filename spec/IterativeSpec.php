<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class IterativeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Iterative');
    }


    function it_for_empty_array_found_returns_minus_one() 
    {
    	$this->chop(3,  array())->shouldReturn(-1);
    }

    function it_does_not_found_non_existing_element_in_one_element_array()
    {
    	 $this->chop(3,  array(1))->shouldReturn(-1);
    }

    function it_does_found_existing_element_in_one_element_array()
    {
    	$this->chop(1,  array(1))->shouldReturn(0);
    }


    function it_founds_existing_elements_in_odd_length_array() 
    {   
    	$this->chop(1,  array(1, 3, 5))->shouldReturn(0);
    	$this->chop(3,  array(1, 3, 5))->shouldReturn(1);	  	
    	$this->chop(5,  array(1, 3, 5))->shouldReturn(2);
    }

    function it_does_not_found_non_existing_elements_in_odd_length_array() 
    {   

    	$this->chop(0,  array(1, 3, 5))->shouldReturn(-1);
    	$this->chop(2,  array(1, 3, 5))->shouldReturn(-1);	  	
    	$this->chop(4,  array(1, 3, 5))->shouldReturn(-1);
    	$this->chop(6,  array(1, 3, 5))->shouldReturn(-1);
    }


    function it_founds_existing_elements_in_even_length_array() 
    {   
    	$this->chop(1,  array(1, 3, 5, 7))->shouldReturn(0);
    	$this->chop(3,  array(1, 3, 5, 7))->shouldReturn(1);	  	
    	$this->chop(5,  array(1, 3, 5, 7))->shouldReturn(2);
    	$this->chop(7,  array(1, 3, 5, 7))->shouldReturn(3);
    }

    function it_does_not_found_non_existing_elements_in_even_length_array() 
    {   
    	$this->chop(0,  array(1, 3, 5, 7))->shouldReturn(-1);
    	$this->chop(2,  array(1, 3, 5, 7))->shouldReturn(-1);	  	
    	$this->chop(4,  array(1, 3, 5, 7))->shouldReturn(-1);
    	$this->chop(6,  array(1, 3, 5, 7))->shouldReturn(-1);
    	$this->chop(8,  array(1, 3, 5, 7))->shouldReturn(-1);
    }



}
