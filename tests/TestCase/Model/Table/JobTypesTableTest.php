<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\JobTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\JobTypesTable Test Case
 */
class JobTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\JobTypesTable
     */
    public $JobTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.job_types'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('JobTypes') ? [] : ['className' => JobTypesTable::class];
        $this->JobTypes = TableRegistry::getTableLocator()->get('JobTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->JobTypes);

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
