<?php

declare(strict_types=1);

namespace Lsp\Contracts\Message;

/**
 * A rpc call is represented by sending a request object to a server.
 */
interface RequestInterface extends NotificationInterface, IdentifiableInterface {}
