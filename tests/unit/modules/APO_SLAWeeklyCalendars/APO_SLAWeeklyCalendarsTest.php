<?php

class APO_SLAWeeklyCalendarsTest extends PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        global $current_user;
        get_sugar_config_defaults();
        $current_user = new User();
    }

    public function testAPO_SLAWeeklyCalendars()
    {

        //execute the contructor and check for the Object type and  attributes
        $apoSlaWeeklyCalendars = new APO_SLAWeeklyCalendars();
        $this->assertInstanceOf('APO_SLAWeeklyCalendars', $apoSlaWeeklyCalendars);
        $this->assertInstanceOf('Basic', $apoSlaWeeklyCalendars);
        $this->assertInstanceOf('SugarBean', $apoSlaWeeklyCalendars);

        $this->assertAttributeEquals('APO_SLAWeeklyCalendars', 'module_dir', $apoSlaWeeklyCalendars);
        $this->assertAttributeEquals('APO_SLAWeeklyCalendars', 'object_name', $apoSlaWeeklyCalendars);
        $this->assertAttributeEquals('apo_slaweeklycalendars', 'table_name', $apoSlaWeeklyCalendars);
        $this->assertAttributeEquals(true, 'new_schema', $apoSlaWeeklyCalendars);
        $this->assertAttributeEquals(true, 'importable', $apoSlaWeeklyCalendars);
    }

    public function testSaveAndMark_deleted()
    {
        error_reporting(E_ERROR | E_PARSE);

        $apoSlaWeeklyCalendars = new APO_SLAWeeklyCalendars();

        $apoSlaWeeklyCalendars->name = 'test';
        $apoSlaWeeklyCalendars->dayoftheweek = '1';
        $apoSlaWeeklyCalendars->description = 'testDescription';

        $apoSlaWeeklyCalendars->save();

        //test for record ID to verify that record is saved
        $this->assertTrue(isset($apoSlaWeeklyCalendars->id));
        $this->assertEquals(36, strlen($apoSlaWeeklyCalendars->id));

        //mark the record as deleted and verify that this record cannot be retrieved anymore.
        $apoSlaWeeklyCalendars->mark_deleted($apoSlaWeeklyCalendars->id);
        $result = $apoSlaWeeklyCalendars->retrieve($apoSlaWeeklyCalendars->id);
        $this->assertEquals(null, $result);
    }
}
