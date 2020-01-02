<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FuncTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FuncTable Test Case
 */
class FuncTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FuncTable
     */
    public $Func;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.func'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Func') ? [] : ['className' => FuncTable::class];
        $this->Func = TableRegistry::getTableLocator()->get('Func', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Func);

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
