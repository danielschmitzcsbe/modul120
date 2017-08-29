<?php
namespace App\Test\TestCase\Controller;

use App\Controller\CustomersTravelsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\CustomersTravelsController Test Case
 */
class CustomersTravelsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.customers_travels',
        'app.customers',
        'app.travels',
        'app.countries',
        'app.hotels',
        'app.hotel_images',
        'app.travels_hotels'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
