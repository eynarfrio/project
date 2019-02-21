<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GeoreferenciaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GeoreferenciaTable Test Case
 */
class GeoreferenciaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GeoreferenciaTable
     */
    public $Georeferencia;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Georeferencia'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Georeferencia') ? [] : ['className' => GeoreferenciaTable::class];
        $this->Georeferencia = TableRegistry::getTableLocator()->get('Georeferencia', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Georeferencia);

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
