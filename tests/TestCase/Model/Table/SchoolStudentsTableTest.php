<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SchoolStudentsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SchoolStudentsTable Test Case
 */
class SchoolStudentsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SchoolStudentsTable
     */
    public $SchoolStudents;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.school_students',
        'app.school_classes',
        'app.school_teachers',
        'app.school_exams',
        'app.school_subjects'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('SchoolStudents') ? [] : ['className' => 'App\Model\Table\SchoolStudentsTable'];
        $this->SchoolStudents = TableRegistry::get('SchoolStudents', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SchoolStudents);

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
