<?php

class APO_SLACalendarsTest extends PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        global $current_user;
        get_sugar_config_defaults();
        $current_user = new User();
    }

    public function testAPO_SLACalendars()
    {

        //execute the contructor and check for the Object type and  attributes
        $apoSlaCalendars = new APO_SLACalendars();
        $this->assertInstanceOf('APO_SLACalendars', $apoSlaCalendars);
        $this->assertInstanceOf('Basic', $apoSlaCalendars);
        $this->assertInstanceOf('SugarBean', $apoSlaCalendars);

        $this->assertAttributeEquals('APO_SLACalendars', 'module_dir', $apoSlaCalendars);
        $this->assertAttributeEquals('APO_SLACalendars', 'object_name', $apoSlaCalendars);
        $this->assertAttributeEquals('apo_slacalendars', 'table_name', $apoSlaCalendars);
        $this->assertAttributeEquals(true, 'new_schema', $apoSlaCalendars);
        $this->assertAttributeEquals(true, 'importable', $apoSlaCalendars);
    }

    public function testSaveAndMark_deleted()
    {
        error_reporting(E_ERROR | E_PARSE);

        $apoSlaCalendars = new APO_SLACalendars();

        $apoSlaCalendars->name = 'test';
        $apoSlaCalendars->description = 'testDescription';

        $apoSlaCalendars->save();

        //test for record ID to verify that record is saved
        $this->assertTrue(isset($apoSlaCalendars->id));
        $this->assertEquals(36, strlen($apoSlaCalendars->id));

        //mark the record as deleted and verify that this record cannot be retrieved anymore.
        $apoSlaCalendars->mark_deleted($apoSlaCalendars->id);
        $result = $apoSlaCalendars->retrieve($apoSlaCalendars->id);
        $this->assertEquals(null, $result);
    }
}
