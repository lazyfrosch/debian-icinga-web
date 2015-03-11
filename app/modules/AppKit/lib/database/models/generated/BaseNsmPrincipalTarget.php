<?php
// {{{ICINGA_LICENSE_CODE}}}
// -----------------------------------------------------------------------------
// This file is part of icinga-web.
// 
// Copyright (c) 2009-2014 Icinga Developer Team.
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

Doctrine_Manager::getInstance()->bindComponent('NsmPrincipalTarget', 'icinga_web');

/**
 * BaseNsmPrincipalTarget
 *
 * This class has been auto-generated by the Doctrine ORM Framework
 *
 * @property integer $pt_id
 * @property integer $pt_principal_id
 * @property integer $pt_target_id
 * @property NsmTarget $NsmTarget
 * @property NsmPrincipal $NsmPrincipal
 * @property Doctrine_Collection $NsmTargetValue
 *
 * @package    IcingaWeb
 * @subpackage AppKit
 * @author     Icinga Development Team <info@icinga.org>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseNsmPrincipalTarget extends Doctrine_Record {

    public function setTableDefinition() {
        $this->setTableName('nsm_principal_target');
        $this->hasColumn('pt_id', 'integer', 4, array(
                             'type' => 'integer',
                             'length' => 4,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => true,
                             'autoincrement' => true,
                         ));
        $this->hasColumn('pt_principal_id', 'integer', 4, array(
                             'type' => 'integer',
                             'length' => 4,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'notnull' => true,
                             'autoincrement' => false,
                         ));
        $this->hasColumn('pt_target_id', 'integer', 4, array(
                             'type' => 'integer',
                             'length' => 4,
                             'fixed' => false,
                             'unsigned' => false,
                             'primary' => false,
                             'notnull' => true,
                             'autoincrement' => false,
                         ));

        $this->index('pt_target_id_ix',array('fields'=>array('pt_target_id')));
        $this->index('pt_principal_id_ix',array('fields'=>array('pt_principal_id')));
    }

    public function setUp() {
        parent::setUp();
        $this->hasOne('NsmTarget', array(
                          'local' => 'pt_target_id',
                          'foreign' => 'target_id',
                          'onDelete' => 'CASCADE',
                          'onUpdate' => 'CASCADE'
                      ));

        $this->hasOne('NsmPrincipal', array(
                          'local' => 'pt_principal_id',
                          'foreign' => 'principal_id',
                          'onDelete' => 'CASCADE',
                          'onUpdate' => 'CASCADE'));

        $this->hasMany('NsmTargetValue', array(
                           'local' => 'pt_id',
                           'foreign' => 'tv_pt_id'));
    }

    public static function getInitialData() {
        /*
         * Principal ids
         * guest          = 5 (group)
         * icinga_user    = 4 (group)
         * appkit_admin   = 3 (group)
         * appkit_user    = 2 (group)
         * root           = 1 (user)
         */
        return array(
                   array('pt_id'=>'1','pt_principal_id'=>'2','pt_target_id'=>'8'),
                   array('pt_id'=>'2','pt_principal_id'=>'2','pt_target_id'=>'13'),
                   array('pt_id'=>'3','pt_principal_id'=>'3','pt_target_id'=>'9'),
                   array('pt_id'=>'4','pt_principal_id'=>'3','pt_target_id'=>'10'),
                   array('pt_id'=>'5','pt_principal_id'=>'3','pt_target_id'=>'11'),
                   array('pt_id'=>'6','pt_principal_id'=>'4','pt_target_id'=>'8'),
                   array('pt_id'=>'7','pt_principal_id'=>'5','pt_target_id'=>'7'),
                   array('pt_id'=>'8','pt_principal_id'=>'3','pt_target_id'=>'15'),
                   array('pt_id'=>'9','pt_principal_id'=>'3','pt_target_id'=>'16'),
                   array('pt_id'=>'10','pt_principal_id'=>'3','pt_target_id'=>'17'),
                   array('pt_id'=>'11','pt_principal_id'=>'3','pt_target_id'=>'18'),
                   
                    // icinga.cronk.custom to icinga_user
                   array('pt_id'=>'12','pt_principal_id'=>'4','pt_target_id'=>'20'),
                   
                   // icinga.cronk.admin to icinga_admin
                   array('pt_id'=>'13','pt_principal_id'=>'3','pt_target_id'=>'21'),
               );
    }

    public static function getPgsqlSequenceOffsets() {
        return array("nsm_principal_target_pt_id_seq" => 14);
    }
}
