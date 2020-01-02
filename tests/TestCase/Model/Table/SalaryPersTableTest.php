<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SalaryPersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SalaryPersTable Test Case
 */
class SalaryPersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SalaryPersTable
     */
    public $SalaryPers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.salary_pers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('SalaryPers') ? [] : ['className' => SalaryPersTable::class];
        $this->SalaryPers = TableRegistry::getTableLocator()->get('SalaryPers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SalaryPers);

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
