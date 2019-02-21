<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * GeoreferenciaFixture
 *
 */
class GeoreferenciaFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'georeferencia';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id_georeferencia' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'id_reg_patrimonio' => ['type' => 'integer', 'length' => 15, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'x' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Y' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'id_reg_patrimonio' => ['type' => 'index', 'columns' => ['id_reg_patrimonio'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id_georeferencia'], 'length' => []],
            'georeferencia_ibfk_1' => ['type' => 'foreign', 'columns' => ['id_reg_patrimonio'], 'references' => ['registro_patrimonio', 'id_reg_patrimonio'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
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
                'id_georeferencia' => 1,
                'id_reg_patrimonio' => 1,
                'x' => 'Lorem ipsum dolor sit amet',
                'Y' => 'Lorem ipsum dolor sit amet'
            ],
        ];
        parent::init();
    }
}
