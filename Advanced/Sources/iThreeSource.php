<?php
declare(strict_types = 1);

namespace Advanced\Sources;

/**
 * Interface iThreeSource
 *
 * @package Advanced\Interfaces
 */
interface iThreeSource
{
    /**
     * @return ...
     */
    public function getThree();

    /**
     * @return ...
     */
    public function getHand(): bool;

}
