<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PersonalInfoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PersonalInfoTable Test Case
 */
class PersonalInfoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PersonalInfoTable
     */
    public $PersonalInfo;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.personal_info'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('PersonalInfo') ? [] : ['className' => PersonalInfoTable::class];
        $this->PersonalInfo = TableRegistry::getTableLocator()->get('PersonalInfo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PersonalInfo);

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
