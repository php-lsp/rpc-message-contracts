<?php

declare(strict_types=1);

namespace Lsp\Contracts\Message;

interface IdentifiableInterface
{
    /**
     * Returns an unique {@see IdInterface} value object representation of
     * the message identifier.
     */
    public function getId(): IdInterface;
}
