<?php

declare(strict_types=1);

namespace Lsp\Contracts\Message\Tests;

use Lsp\Contracts\Message\FailureResponseInterface;
use Lsp\Contracts\Message\IdentifiableInterface;
use Lsp\Contracts\Message\IdInterface;
use Lsp\Contracts\Message\MessageInterface;
use Lsp\Contracts\Message\NotificationInterface;
use Lsp\Contracts\Message\RequestInterface;
use Lsp\Contracts\Message\ResponseInterface;
use Lsp\Contracts\Message\SuccessfulResponseInterface;
use PHPUnit\Framework\Attributes\Group;

/**
 * Note: Changing the behavior of these tests is allowed ONLY when updating
 *       a MAJOR version of the package.
 */
#[Group('php-lsp/rpc-message-contracts')]
final class InterfaceCompatibilityTest extends TestCase
{
    public function testFailureResponseCompatibility(): void
    {
        self::expectNotToPerformAssertions();

        new class () implements FailureResponseInterface {
            public function getErrorCode(): int {}
            public function getErrorMessage(): string {}
            public function getErrorData(): mixed {}
            public function getId(): IdInterface {}
        };
    }

    public function testIdentifiableCompatibility(): void
    {
        self::expectNotToPerformAssertions();

        new class () implements IdentifiableInterface {
            public function getId(): IdInterface {}
        };
    }

    public function testIdCompatibility(): void
    {
        self::expectNotToPerformAssertions();

        new class () implements IdInterface {
            public function equals(IdInterface $id): bool {}
            public function toPrimitive(): mixed {}
            public function __toString(): string {}
        };
    }

    public function testMessageCompatibility(): void
    {
        self::expectNotToPerformAssertions();

        new class () implements MessageInterface {};
    }

    public function testNotificationCompatibility(): void
    {
        self::expectNotToPerformAssertions();

        new class () implements NotificationInterface {
            public function getMethod(): string {}
            public function getParameters(): array {}
        };
    }

    public function testRequestCompatibility(): void
    {
        self::expectNotToPerformAssertions();

        new class () implements RequestInterface {
            public function getId(): IdInterface {}
            public function getMethod(): string {}
            public function getParameters(): array {}
        };
    }

    public function testResponseCompatibility(): void
    {
        self::expectNotToPerformAssertions();

        new class () implements ResponseInterface {
            public function getId(): IdInterface {}
        };
    }

    public function testSuccessfulResponseCompatibility(): void
    {
        self::expectNotToPerformAssertions();

        new class () implements SuccessfulResponseInterface {
            public function getId(): IdInterface {}
            public function getResult(): mixed {}
        };
    }
}
