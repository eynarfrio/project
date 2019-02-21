<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SegundoNivelFixture
 *
 */
class SegundoNivelFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'segundo_nivel';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id_segundo_nivel' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'id_reg_patrimonio' => ['type' => 'integer', 'length' => 15, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'codigo_p' => ['type' => 'string', 'length' => 70, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'reconocido' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'deterioro_nat' => ['type' => 'string', 'length' => 60, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'deterioro_ant' => ['type' => 'string', 'length' => 60, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'fuente' => ['type' => 'string', 'length' => 70, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'grado_confi' => ['type' => 'string', 'length' => 40, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'fact_obj' => ['type' => 'string', 'length' => 40, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'percep_tur' => ['type' => 'string', 'length' => 40, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'obser' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'jerarquia' => ['type' => 'string', 'length' => 70, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'cap_carga' => ['type' => 'string', 'length' => 70, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'id_reg_patrimonio' => ['type' => 'index', 'columns' => ['id_reg_patrimonio'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id_segundo_nivel'], 'length' => []],
            'segundo_nivel_ibfk_1' => ['type' => 'foreign', 'columns' => ['id_reg_patrimonio'], 'references' => ['registro_patrimonio', 'id_reg_patrimonio'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
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
                'id_segundo_nivel' => 1,
                'id_reg_patrimonio' => 1,
                'codigo_p' => 'Lorem ipsum dolor sit amet',
                'reconocido' => 'Lorem ip',
                'deterioro_nat' => 'Lorem ipsum dolor sit amet',
                'deterioro_ant' => 'Lorem ipsum dolor sit amet',
                'fuente' => 'Lorem ipsum dolor sit amet',
                'grado_confi' => 'Lorem ipsum dolor sit amet',
                'fact_obj' => 'Lorem ipsum dolor sit amet',
                'percep_tur' => 'Lorem ipsum dolor sit amet',
                'obser' => 'Lorem ipsum dolor sit amet',
                'jerarquia' => 'Lorem ipsum dolor sit amet',
                'cap_carga' => 'Lorem ipsum dolor sit amet'
            ],
        ];
        parent::init();
    }
}
