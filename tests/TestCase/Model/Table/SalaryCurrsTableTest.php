<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SalaryCurrsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SalaryCurrsTable Test Case
 */
class SalaryCurrsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SalaryCurrsTable
     */
    public $SalaryCurrs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.salary_currs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('SalaryCurrs') ? [] : ['className' => SalaryCurrsTable::class];
        $this->SalaryCurrs = TableRegistry::getTableLocator()->get('SalaryCurrs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SalaryCurrs);

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
