<?php

namespace Mcfedr\UuidParamConverterBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ApiControllerTest extends WebTestCase
{
    public function testSimple()
    {
        $client = self::createClient();

        $client->request('GET', '/simple/f13a5b20-9741-4b15-8120-138009d8e0c7');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testOptional()
    {
        $client = self::createClient();

        $client->request('GET', '/optional/f13a5b20-9741-4b15-8120-138009d8e0c7');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testOptionalNull()
    {
        $client = self::createClient();

        $client->request('GET', '/optional');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}