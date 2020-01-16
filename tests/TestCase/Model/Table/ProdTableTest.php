<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProdTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProdTable Test Case
 */
class ProdTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProdTable
     */
    protected $Prod;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Prod',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Prod') ? [] : ['className' => ProdTable::class];
        $this->Prod = TableRegistry::getTableLocator()->get('Prod', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Prod);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
