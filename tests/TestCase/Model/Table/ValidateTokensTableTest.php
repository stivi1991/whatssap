<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ValidateTokensTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ValidateTokensTable Test Case
 */
class ValidateTokensTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ValidateTokensTable
     */
    public $ValidateTokens;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.validate_tokens',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ValidateTokens') ? [] : ['className' => ValidateTokensTable::class];
        $this->ValidateTokens = TableRegistry::getTableLocator()->get('ValidateTokens', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ValidateTokens);

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
