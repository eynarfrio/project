<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProvinciaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProvinciaTable Test Case
 */
class ProvinciaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProvinciaTable
     */
    public $Provincia;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Provincia'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Provincia') ? [] : ['className' => ProvinciaTable::class];
        $this->Provincia = TableRegistry::getTableLocator()->get('Provincia', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Provincia);

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
