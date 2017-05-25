<?php

namespace HackerNewsApi\Tests\Client;

use GuzzleHttp\Command\Result;
use HackerNewsApi\Client\HackerNewsClient;
use HackerNewsApi\Models\Item;
use HackerNewsApi\Models\User;
use HackerNewsApi\Service\HackerNewsServiceClient;
use PHPUnit\Framework\TestCase;

/**
 * @covers HackerNewsClient
 */
class HackerNewsClientTest extends TestCase
{
    public function testGetItem()
    {
        $mock = $this->createMock(HackerNewsServiceClient::class);
        $mock->expects($this->any())
            ->method('__call')
            ->with('getItem', [['id' => 12]])
            ->willReturn(new Result());
        $client = new HackerNewsClient($mock);

        $this->assertInstanceOf(Item::class, $client->getItem(12));
    }

    public function testGetUser()
    {
        $mock = $this->createMock(HackerNewsServiceClient::class);
        $mock->expects($this->any())
            ->method('__call')
            ->with('getUser', [['name' => 'username']])
            ->willReturn(new Result());
        $client = new HackerNewsClient($mock);

        $this->assertInstanceOf(User::class, $client->getUser('username'));
    }
}
