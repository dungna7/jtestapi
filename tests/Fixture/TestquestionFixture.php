<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TestquestionFixture
 *
 */
class TestquestionFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'testquestion';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'testID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'questionID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'testID_idx' => ['type' => 'index', 'columns' => ['testID'], 'length' => []],
            'questionID_idx' => ['type' => 'index', 'columns' => ['questionID'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'questionID' => ['type' => 'foreign', 'columns' => ['questionID'], 'references' => ['questions', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'testID' => ['type' => 'foreign', 'columns' => ['testID'], 'references' => ['testlist', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'testID' => 1,
                'questionID' => 1
            ],
        ];
        parent::init();
    }
}
