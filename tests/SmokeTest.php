<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SmokeTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicPages()
    {
        $this->call( 'GET', '/')       ;$this->assertResponseStatus(200);    // check home page
        $this->call( 'GET', '/home')   ;$this->assertResponseStatus(200);    //     --||--
        $this->call( 'GET', '/about')  ;$this->assertResponseStatus(200);    // check about page
        $this->call( 'GET', '/therapy');$this->assertResponseStatus(200);    // check offer page
        $this->call( 'GET', '/teacher');$this->assertResponseStatus(200);    // check teacher page
        $this->call( 'GET', '/contact');$this->assertResponseStatus(200);    // check contact page
    }

    /**
     *
     * @method testNotExistingUrl
     * SmokeTest
     */
    public function testNotExistingUrl()
    {
        $this->call( 'GET', '/abracadabra');
        $this->assertResponseStatus(404);
    }

    /**
     *
     * @method testAdminSetting
     * SmokeTest
     */
    public function testAdminSetting() {

        $this->call( 'GET', '/admin/account')  ;$this->assertResponseStatus(302) ;
        $this->call( 'GET', '/admin/setting')  ;$this->assertResponseStatus(302) ;
    }
}
