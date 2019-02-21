<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BienesMueblesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BienesMueblesTable Test Case
 */
class BienesMueblesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BienesMueblesTable
     */
    public $BienesMuebles;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.BienesMuebles',
        'app.BienesDetalles'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('BienesMuebles') ? [] : ['className' => BienesMueblesTable::class];
        $this->BienesMuebles = TableRegistry::getTableLocator()->get('BienesMuebles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BienesMuebles);

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
