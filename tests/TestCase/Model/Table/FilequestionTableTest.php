<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FilequestionTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FilequestionTable Test Case
 */
class FilequestionTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FilequestionTable
     */
    public $Filequestion;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Filequestion'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Filequestion') ? [] : ['className' => FilequestionTable::class];
        $this->Filequestion = TableRegistry::getTableLocator()->get('Filequestion', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Filequestion);

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
