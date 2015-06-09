<?php
// {{{ICINGA_LICENSE_CODE}}}
// -----------------------------------------------------------------------------
// This file is part of icinga-web.
// 
// Copyright (c) 2009-2015 Icinga Developer Team.
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


/**
 * NsmUserPreference
 *
 * This class has been auto-generated by the Doctrine ORM Framework
 *
 * @package    IcingaWeb
 * @subpackage AppKit
 * @author     Icinga Development Team <info@icinga.org>
 * @version    SVN: $Id: Builder.php 5441 2009-01-30 22:58:43Z jwage $
 */
class NsmUserPreference extends BaseNsmUserPreference {
    public function get($val, $load=true) {
        $val = parent::get($val, $load);

        if (is_resource($val)) {
            return stream_get_contents($val);
        }

        return $val;
    }

    public function setTableDefinition() {

        parent::setTableDefinition();


    }

    public function setUp() {
        parent::setUp();

        $this->actAs('Timestampable', array(
                         'created' =>  array('name' => 'upref_created'),
                         'updated' =>  array('name' => 'upref_modified'),
                     ));
    }

}