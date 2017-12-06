<?php
namespace Test\ArticleBundle\Tests\Tva;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TvaTest extends WebTestCase
{
    public function testAdd()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        $this->assertContains('Hello World', $client->getResponse()->getContent());
    }
}
