<?php
namespace App\Test\TestCase\View\Helper;

use App\View\Helper\PersonalInfoHelper;
use Cake\TestSuite\TestCase;
use Cake\View\View;

/**
 * App\View\Helper\PersonalInfoHelper Test Case
 */
class PersonalInfoHelperTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\View\Helper\PersonalInfoHelper
     */
    public $PersonalInfo;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $view = new View();
        $this->PersonalInfo = new PersonalInfoHelper($view);
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
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
