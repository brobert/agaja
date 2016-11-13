<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Http\Repositories\TeacherRepository;

class TeacherTest extends TestCase
{

	public function setUp(  ) {
		$this->assertTrue(true, 'setUp: test true false');
		
	}
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true, 'test true');
    }
}
