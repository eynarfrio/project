<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BienesDetallesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BienesDetallesTable Test Case
 */
class BienesDetallesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BienesDetallesTable
     */
    public $BienesDetalles;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.BienesDetalles',
        'app.BienesMuebles'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('BienesDetalles') ? [] : ['className' => BienesDetallesTable::class];
        $this->BienesDetalles = TableRegistry::getTableLocator()->get('BienesDetalles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BienesDetalles);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
