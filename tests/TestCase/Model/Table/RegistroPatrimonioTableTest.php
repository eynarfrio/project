<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RegistroPatrimonioTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RegistroPatrimonioTable Test Case
 */
class RegistroPatrimonioTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RegistroPatrimonioTable
     */
    public $RegistroPatrimonio;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.RegistroPatrimonio'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('RegistroPatrimonio') ? [] : ['className' => RegistroPatrimonioTable::class];
        $this->RegistroPatrimonio = TableRegistry::getTableLocator()->get('RegistroPatrimonio', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RegistroPatrimonio);

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
