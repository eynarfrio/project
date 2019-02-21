<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ControlTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ControlTable Test Case
 */
class ControlTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ControlTable
     */
    public $Control;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Control'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Control') ? [] : ['className' => ControlTable::class];
        $this->Control = TableRegistry::getTableLocator()->get('Control', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Control);

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
