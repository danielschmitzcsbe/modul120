<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CustomersTravelsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CustomersTravelsTable Test Case
 */
class CustomersTravelsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CustomersTravelsTable
     */
    public $CustomersTravels;

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
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CustomersTravels') ? [] : ['className' => CustomersTravelsTable::class];
        $this->CustomersTravels = TableRegistry::get('CustomersTravels', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CustomersTravels);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
