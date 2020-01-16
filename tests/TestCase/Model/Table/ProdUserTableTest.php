<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProdUserTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProdUserTable Test Case
 */
class ProdUserTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProdUserTable
     */
    protected $ProdUser;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.ProdUser',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ProdUser') ? [] : ['className' => ProdUserTable::class];
        $this->ProdUser = TableRegistry::getTableLocator()->get('ProdUser', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->ProdUser);

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
