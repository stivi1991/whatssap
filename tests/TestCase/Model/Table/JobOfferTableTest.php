<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\JobOfferTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\JobOfferTable Test Case
 */
class JobOfferTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\JobOfferTable
     */
    public $JobOffer;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.job_offer'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('JobOffer') ? [] : ['className' => JobOfferTable::class];
        $this->JobOffer = TableRegistry::getTableLocator()->get('JobOffer', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->JobOffer);

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
