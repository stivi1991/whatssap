<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HashedDataTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HashedDataTable Test Case
 */
class HashedDataTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HashedDataTable
     */
    public $HashedData;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.hashed_data'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('HashedData') ? [] : ['className' => HashedDataTable::class];
        $this->HashedData = TableRegistry::getTableLocator()->get('HashedData', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->HashedData);

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
