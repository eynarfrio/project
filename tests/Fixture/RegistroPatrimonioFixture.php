<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RegistroPatrimonioFixture
 *
 */
class RegistroPatrimonioFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'registro_patrimonio';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id_reg_patrimonio' => ['type' => 'integer', 'length' => 15, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'id_usuario' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_municipio' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_provincia' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_departamento' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_patrimonio' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'codigo' => ['type' => 'string', 'length' => 75, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'imagen' => ['type' => 'string', 'length' => 150, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'desc_img' => ['type' => 'string', 'length' => 120, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'denominacion' => ['type' => 'string', 'length' => 120, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'datacion' => ['type' => 'string', 'length' => 70, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'cond_juridica' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'conservacion' => ['type' => 'string', 'length' => 200, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'usos' => ['type' => 'string', 'length' => 200, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'tipo' => ['type' => 'string', 'length' => 15, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'subtipo' => ['type' => 'string', 'length' => 15, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'grado_confi' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'idtipo_patrimonio' => ['type' => 'string', 'length' => 15, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'id_subambito' => ['type' => 'string', 'length' => 15, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'descripcion' => ['type' => 'text', 'length' => 4294967295, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'id_patrimonio' => ['type' => 'index', 'columns' => ['id_patrimonio'], 'length' => []],
            'id_departamento' => ['type' => 'index', 'columns' => ['id_departamento'], 'length' => []],
            'id_provincia' => ['type' => 'index', 'columns' => ['id_provincia'], 'length' => []],
            'id_municipio' => ['type' => 'index', 'columns' => ['id_municipio'], 'length' => []],
            'id_usuario' => ['type' => 'index', 'columns' => ['id_usuario'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id_reg_patrimonio'], 'length' => []],
            'registro_patrimonio_ibfk_1' => ['type' => 'foreign', 'columns' => ['id_patrimonio'], 'references' => ['tipo_patrimonio', 'id_patrimonio'], 'update' => 'cascade', 'delete' => 'noAction', 'length' => []],
            'registro_patrimonio_ibfk_4' => ['type' => 'foreign', 'columns' => ['id_departamento'], 'references' => ['departamento', 'id_departamento'], 'update' => 'cascade', 'delete' => 'noAction', 'length' => []],
            'registro_patrimonio_ibfk_5' => ['type' => 'foreign', 'columns' => ['id_provincia'], 'references' => ['provincia', 'id_provincia'], 'update' => 'cascade', 'delete' => 'noAction', 'length' => []],
            'registro_patrimonio_ibfk_6' => ['type' => 'foreign', 'columns' => ['id_municipio'], 'references' => ['municipio', 'id_municipio'], 'update' => 'cascade', 'delete' => 'noAction', 'length' => []],
            'registro_patrimonio_ibfk_9' => ['type' => 'foreign', 'columns' => ['id_usuario'], 'references' => ['usuario', 'id_usuario'], 'update' => 'cascade', 'delete' => 'noAction', 'length' => []],
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
                'id_reg_patrimonio' => 1,
                'id_usuario' => 1,
                'id_municipio' => 1,
                'id_provincia' => 1,
                'id_departamento' => 1,
                'id_patrimonio' => 1,
                'codigo' => 'Lorem ipsum dolor sit amet',
                'imagen' => 'Lorem ipsum dolor sit amet',
                'desc_img' => 'Lorem ipsum dolor sit amet',
                'denominacion' => 'Lorem ipsum dolor sit amet',
                'datacion' => 'Lorem ipsum dolor sit amet',
                'cond_juridica' => 'Lorem ipsum dolor sit amet',
                'conservacion' => 'Lorem ipsum dolor sit amet',
                'usos' => 'Lorem ipsum dolor sit amet',
                'tipo' => 'Lorem ipsum d',
                'subtipo' => 'Lorem ipsum d',
                'grado_confi' => 'Lorem ipsum dolor sit amet',
                'idtipo_patrimonio' => 'Lorem ipsum d',
                'id_subambito' => 'Lorem ipsum d',
                'descripcion' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
            ],
        ];
        parent::init();
    }
}
