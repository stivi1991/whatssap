<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CandSkillsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CandSkillsTable Test Case
 */
class CandSkillsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CandSkillsTable
     */
    public $CandSkills;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cand_skills',
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
        $config = TableRegistry::getTableLocator()->exists('CandSkills') ? [] : ['className' => CandSkillsTable::class];
        $this->CandSkills = TableRegistry::getTableLocator()->get('CandSkills', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CandSkills);

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
