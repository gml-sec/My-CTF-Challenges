<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Messenger\Bridge\Redis\Transport;

use Symfony\Component\Messenger\Stamp\NonSendableStampInterface;

/**
 * @author Alexander Schranz <alexander@sulu.io>
 */
class RedisReceivedStamp implements NonSendableStampInterface
{
    private $id;

    public function __construct(string $id)
    {
        $this->id = $id;
    }

    public function getId(): string
    {
        return $this->id;
    }
}

if (!class_exists(\Symfony\Component\Messenger\Transport\RedisExt\RedisReceivedStamp::class, false)) {
    class_alias(RedisReceivedStamp::class, \Symfony\Component\Messenger\Transport\RedisExt\RedisReceivedStamp::class);
}
