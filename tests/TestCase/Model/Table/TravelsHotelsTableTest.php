<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TravelsHotelsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TravelsHotelsTable Test Case
 */
class TravelsHotelsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TravelsHotelsTable
     */
    public $TravelsHotels;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.travels_hotels',
        'app.travels',
        'app.countries',
        'app.hotels',
        'app.hotel_images',
        'app.customers',
        'app.customers_travels'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TravelsHotels') ? [] : ['className' => TravelsHotelsTable::class];
        $this->TravelsHotels = TableRegistry::get('TravelsHotels', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TravelsHotels);

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
