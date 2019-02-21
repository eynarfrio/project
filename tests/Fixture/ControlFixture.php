<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ControlFixture
 *
 */
class ControlFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'control';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id_control' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'id_patrimonio' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'ent_inves' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'registrado_por' => ['type' => 'string', 'length' => 80, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'revisado_por' => ['type' => 'string', 'length' => 80, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'aprobado_por' => ['type' => 'string', 'length' => 80, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'reg_foto' => ['type' => 'string', 'length' => 80, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'f_registro' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'f_revision' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'f_aprovacion' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id_control'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
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
                'id_control' => 1,
                'id_patrimonio' => 'Lorem ip',
                'ent_inves' => 'Lorem ipsum dolor sit amet',
                'registrado_por' => 'Lorem ipsum dolor sit amet',
                'revisado_por' => 'Lorem ipsum dolor sit amet',
                'aprobado_por' => 'Lorem ipsum dolor sit amet',
                'reg_foto' => 'Lorem ipsum dolor sit amet',
                'f_registro' => '2019-02-19',
                'f_revision' => '2019-02-19',
                'f_aprovacion' => '2019-02-19'
            ],
        ];
        parent::init();
    }
}
