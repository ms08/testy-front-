<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class frontControllerTest extends WebTestCase
{
    public function testMainpage()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/mainPage');
    }

    public function testEmployees()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/employees');
    }

    public function testWorktime()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/workTime');
    }

}
