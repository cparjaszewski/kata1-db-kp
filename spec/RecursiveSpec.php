<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RecursiveSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Recursive');
    }
}
