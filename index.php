<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * TODO describe file index
 *
 * @package    tool_autoconfig
 * @copyright  2024 2024 Marcus Green
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require('../../../config.php');

require_login();

$url = new moodle_url('/admin/tool/autoconfig/index.php', []);
//$PAGE->set_url($url);
//$PAGE->set_context(context_system::instance());


echo $OUTPUT->header();
$ltiprovider = new moodle_url('/admin/tool/autoconfig/ltiprovider.php');
// Create a clickable link using html_writer
echo html_writer::link($ltiprovider, get_string('ltiprovider', 'tool_autoconfig', null, true) ?: 'LTI Provider');
echo $OUTPUT->footer();


