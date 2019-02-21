<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SegundoNivelTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SegundoNivelTable Test Case
 */
class SegundoNivelTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SegundoNivelTable
     */
    public $SegundoNivel;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.SegundoNivel'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('SegundoNivel') ? [] : ['className' => SegundoNivelTable::class];
        $this->SegundoNivel = TableRegistry::getTableLocator()->get('SegundoNivel', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SegundoNivel);

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
