<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EditTokensTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EditTokensTable Test Case
 */
class EditTokensTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EditTokensTable
     */
    public $EditTokens;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.edit_tokens',
        'app.offers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('EditTokens') ? [] : ['className' => EditTokensTable::class];
        $this->EditTokens = TableRegistry::getTableLocator()->get('EditTokens', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EditTokens);

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
