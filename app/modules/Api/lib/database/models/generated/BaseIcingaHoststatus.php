<?php
// {{{ICINGA_LICENSE_CODE}}}
// -----------------------------------------------------------------------------
// This file is part of icinga-web.
// 
// Copyright (c) 2009-present Icinga Developer Team.
// All rights reserved.
// 
// icinga-web is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
// 
// icinga-web is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
// 
// You should have received a copy of the GNU General Public License
// along with icinga-web.  If not, see <http://www.gnu.org/licenses/>.
// -----------------------------------------------------------------------------
// {{{ICINGA_LICENSE_CODE}}}

// Connection Component Binding
/**
 * BaseIcingaHoststatus
 *
 * This class has been auto-generated by the Doctrine ORM Framework
 *
 * @property integer $hoststatus_id
 * @property integer $instance_id
 * @property integer $host_object_id
 * @property timestamp $status_update_time
 * @property string $output
 * @property string $long_output
 * @property string $perfdata
 * @property integer $current_state
 * @property integer $has_been_checked
 * @property integer $should_be_scheduled
 * @property integer $current_check_attempt
 * @property integer $max_check_attempts
 * @property timestamp $last_check
 * @property timestamp $next_check
 * @property integer $check_type
 * @property timestamp $last_state_change
 * @property timestamp $last_hard_state_change
 * @property integer $last_hard_state
 * @property timestamp $last_time_up
 * @property timestamp $last_time_down
 * @property timestamp $last_time_unreachable
 * @property integer $state_type
 * @property timestamp $last_notification
 * @property timestamp $next_notification
 * @property integer $no_more_notifications
 * @property integer $notifications_enabled
 * @property integer $problem_has_been_acknowledged
 * @property integer $acknowledgement_type
 * @property integer $current_notification_number
 * @property integer $passive_checks_enabled
 * @property integer $active_checks_enabled
 * @property integer $event_handler_enabled
 * @property integer $flap_detection_enabled
 * @property integer $is_flapping
 * @property float $percent_state_change
 * @property float $latency
 * @property float $execution_time
 * @property integer $scheduled_downtime_depth
 * @property integer $failure_prediction_enabled
 * @property integer $process_performance_data
 * @property integer $obsess_over_host
 * @property integer $modified_host_attributes
 * @property string $event_handler
 * @property string $check_command
 * @property float $normal_check_interval
 * @property float $retry_check_interval
 * @property integer $check_timeperiod_object_id
 * @property string $check_source
 *
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseIcingaHoststatus extends Doctrine_Record {
    public function setTableDefinition() {
        $conn = $this->getTable()->getConnection();
        if(!$conn)
            $conn = Doctrine_Manager::getInstance()->getConnection(IcingaDoctrineDatabase::CONNECTION_ICINGA);
        $prefix = $conn->getPrefix();
        $this->setTableName($prefix.'hoststatus');
        $this->hasColumn('hoststatus_id', 'integer', 4, array(
                             'type' => 'integer',
                             'length' => 4,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => true,
                             'autoincrement' => true,
                         ));
        $this->hasColumn('instance_id', 'integer', 2, array(
                             'type' => 'integer',
                             'length' => 2,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('host_object_id', 'integer', 4, array(
                             'type' => 'integer',
                             'length' => 4,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('status_update_time', 'timestamp', null, array(
                             'type' => 'timestamp',
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0000-00-00 00:00:00',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('output', 'string', 255, array(
                             'type' => 'string',
                             'length' => 255,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('long_output', 'string', null, array(
                             'type' => 'string',
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('perfdata', 'string', null, array(
                             'type' => 'string',
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('current_state', 'integer', 2, array(
                             'type' => 'integer',
                             'length' => 2,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('has_been_checked', 'integer', 2, array(
                             'type' => 'integer',
                             'length' => 2,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('should_be_scheduled', 'integer', 2, array(
                             'type' => 'integer',
                             'length' => 2,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('current_check_attempt', 'integer', 2, array(
                             'type' => 'integer',
                             'length' => 2,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('max_check_attempts', 'integer', 2, array(
                             'type' => 'integer',
                             'length' => 2,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('last_check', 'timestamp', null, array(
                             'type' => 'timestamp',
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0000-00-00 00:00:00',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('next_check', 'timestamp', null, array(
                             'type' => 'timestamp',
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0000-00-00 00:00:00',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('check_type', 'integer', 2, array(
                             'type' => 'integer',
                             'length' => 2,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('last_state_change', 'timestamp', null, array(
                             'type' => 'timestamp',
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0000-00-00 00:00:00',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('last_hard_state_change', 'timestamp', null, array(
                             'type' => 'timestamp',
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0000-00-00 00:00:00',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('last_hard_state', 'integer', 2, array(
                             'type' => 'integer',
                             'length' => 2,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('last_time_up', 'timestamp', null, array(
                             'type' => 'timestamp',
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0000-00-00 00:00:00',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('last_time_down', 'timestamp', null, array(
                             'type' => 'timestamp',
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0000-00-00 00:00:00',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('last_time_unreachable', 'timestamp', null, array(
                             'type' => 'timestamp',
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0000-00-00 00:00:00',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('state_type', 'integer', 2, array(
                             'type' => 'integer',
                             'length' => 2,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('last_notification', 'timestamp', null, array(
                             'type' => 'timestamp',
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0000-00-00 00:00:00',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('next_notification', 'timestamp', null, array(
                             'type' => 'timestamp',
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0000-00-00 00:00:00',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('no_more_notifications', 'integer', 2, array(
                             'type' => 'integer',
                             'length' => 2,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('notifications_enabled', 'integer', 2, array(
                             'type' => 'integer',
                             'length' => 2,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('problem_has_been_acknowledged', 'integer', 2, array(
                             'type' => 'integer',
                             'length' => 2,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('acknowledgement_type', 'integer', 2, array(
                             'type' => 'integer',
                             'length' => 2,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('current_notification_number', 'integer', 2, array(
                             'type' => 'integer',
                             'length' => 2,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('passive_checks_enabled', 'integer', 2, array(
                             'type' => 'integer',
                             'length' => 2,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('active_checks_enabled', 'integer', 2, array(
                             'type' => 'integer',
                             'length' => 2,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('event_handler_enabled', 'integer', 2, array(
                             'type' => 'integer',
                             'length' => 2,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('flap_detection_enabled', 'integer', 2, array(
                             'type' => 'integer',
                             'length' => 2,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('is_flapping', 'integer', 2, array(
                             'type' => 'integer',
                             'length' => 2,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('percent_state_change', 'float', null, array(
                             'type' => 'float',
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('latency', 'float', null, array(
                             'type' => 'float',
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('execution_time', 'float', null, array(
                             'type' => 'float',
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('scheduled_downtime_depth', 'integer', 2, array(
                             'type' => 'integer',
                             'length' => 2,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('failure_prediction_enabled', 'integer', 2, array(
                             'type' => 'integer',
                             'length' => 2,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('process_performance_data', 'integer', 2, array(
                             'type' => 'integer',
                             'length' => 2,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('obsess_over_host', 'integer', 2, array(
                             'type' => 'integer',
                             'length' => 2,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('modified_host_attributes', 'integer', 4, array(
                             'type' => 'integer',
                             'length' => 4,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('event_handler', 'string', 255, array(
                             'type' => 'string',
                             'length' => 255,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('check_command', 'string', 255, array(
                             'type' => 'string',
                             'length' => 255,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('normal_check_interval', 'float', null, array(
                             'type' => 'float',
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('retry_check_interval', 'float', null, array(
                             'type' => 'float',
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('check_timeperiod_object_id', 'integer', 4, array(
                             'type' => 'integer',
                             'length' => 4,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'default' => '0',
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('check_source', 'string', 255, array(
                            'type' => 'string',
                            'length' => 255,
                            'fixed' => false,
                            'unsigned' => false,
                            'primary' => false,
                            'default' => '',
                            'notnull' => true,
                            'autoincrement' => false,
                        ));
    }

    public function setUp() {
        $this->hasOne('IcingaInstances as instance', array(
                          'local' => 'instance_id',
                          'foreign' => 'instance_id'
                      ));

        $this->hasOne('IcingaHosts as host', array(
                          'local' => 'host_object_id',
                          'foreign' => 'host_object_id'
                      ));

        $this->hasOne("IcingaObjects as hostobject", array(
                          'local' => 'host_object_id',
                          'foreign' => 'object_id'
                      ));

        $this->hasOne('IcingaTimeperiods as checkTimeperiod', array(
                          'local' => 'check_timeperiod_object_id',
                          'foreign' => 'timeperiod_object_id'
                      ));


        parent::setUp();

    }
}
