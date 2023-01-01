<?php

/*
 * This file is part of the Predis package.
 *
 * (c) Daniele Alessandri <suppakilla@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Mohamed205\voxum\lib\predis\Command\Redis;

/**
 * @link http://redis.io/commands/zrevrangebyscore
 *
 * @author Daniele Alessandri <suppakilla@gmail.com>
 */
class ZREVRANGEBYSCORE extends ZRANGEBYSCORE
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return 'ZREVRANGEBYSCORE';
    }
}