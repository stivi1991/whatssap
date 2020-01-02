<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CompanyInfoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CompanyInfoTable Test Case
 */
class CompanyInfoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CompanyInfoTable
     */
    public $CompanyInfo;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.company_info'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('CompanyInfo') ? [] : ['className' => CompanyInfoTable::class];
        $this->CompanyInfo = TableRegistry::getTableLocator()->get('CompanyInfo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CompanyInfo);

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
