<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TestquestionTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TestquestionTable Test Case
 */
class TestquestionTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TestquestionTable
     */
    public $Testquestion;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Testquestion'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Testquestion') ? [] : ['className' => TestquestionTable::class];
        $this->Testquestion = TableRegistry::getTableLocator()->get('Testquestion', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Testquestion);

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
