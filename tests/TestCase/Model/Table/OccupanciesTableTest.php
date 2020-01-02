<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OccupanciesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OccupanciesTable Test Case
 */
class OccupanciesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OccupanciesTable
     */
    public $Occupancies;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.occupancies'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Occupancies') ? [] : ['className' => OccupanciesTable::class];
        $this->Occupancies = TableRegistry::getTableLocator()->get('Occupancies', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Occupancies);

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
}
