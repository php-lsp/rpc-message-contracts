<?php

declare(strict_types=1);

namespace Lsp\Contracts\Message;

/**
 * When the RPC call is made, the Server MUST reply with a
 * {@see ResponseInterface}, except for in the case of
 * {@see NotificationInterface}.
 *
 * The {@see ResponseInterface} is expressed as a single Object, with "id".
 */
interface ResponseInterface extends MessageInterface, IdentifiableInterface {}
