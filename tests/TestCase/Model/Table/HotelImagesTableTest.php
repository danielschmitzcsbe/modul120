<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HotelImagesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HotelImagesTable Test Case
 */
class HotelImagesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HotelImagesTable
     */
    public $HotelImages;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.hotel_images',
        'app.hotels',
        'app.countries',
        'app.travels',
        'app.customers',
        'app.customers_travels',
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
        $config = TableRegistry::exists('HotelImages') ? [] : ['className' => HotelImagesTable::class];
        $this->HotelImages = TableRegistry::get('HotelImages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->HotelImages);

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
