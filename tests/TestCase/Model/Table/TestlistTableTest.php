<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TestlistTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TestlistTable Test Case
 */
class TestlistTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TestlistTable
     */
    public $Testlist;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Testlist'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Testlist') ? [] : ['className' => TestlistTable::class];
        $this->Testlist = TableRegistry::getTableLocator()->get('Testlist', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Testlist);

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
