<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SalaryKindsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SalaryKindsTable Test Case
 */
class SalaryKindsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SalaryKindsTable
     */
    public $SalaryKinds;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.salary_kinds'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('SalaryKinds') ? [] : ['className' => SalaryKindsTable::class];
        $this->SalaryKinds = TableRegistry::getTableLocator()->get('SalaryKinds', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SalaryKinds);

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
