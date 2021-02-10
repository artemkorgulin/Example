<?php
namespace Advanced;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Advanced\Sources\iThreeSource;
use Advanced\Entity\Tree;

/**
 * Class Example
 * @package Advanced\Example
 */
class Example extends Bundle
{
    public function Example() {
        $tree =  new Tree();
        $tree->getThree();
    }
}
