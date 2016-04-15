<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\QuizzTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\QuizzTable Test Case
 */
class QuizzTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\QuizzTable
     */
    public $Quizz;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.quizz'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Quizz') ? [] : ['className' => 'App\Model\Table\QuizzTable'];
        $this->Quizz = TableRegistry::get('Quizz', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Quizz);

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
