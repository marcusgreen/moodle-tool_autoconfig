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
$PAGE->set_url($url);
$PAGE->set_context(context_system::instance());

$PAGE->set_heading($SITE->fullname);
echo $OUTPUT->header();
// Publish as LTI tool.
$class = \core_plugin_manager::resolve_plugininfo_class('enrol');
$class::enable_plugin('lti', true);
echo 'Publish as LTI Tools is enabled</br>';


// Publish as LTI tool template
$class = \core_plugin_manager::resolve_plugininfo_class('enrol');
$class::enable_plugin('lticoursetemplate', true);
echo  'Publish as LTI Course Template is enabled</br>';

//LTI Authentication
$class = \core_plugin_manager::resolve_plugininfo_class('auth');
$class::enable_plugin('lti', true);
echo 'LTI Authentication is enabled</br>';

set_config('allowframembedding', true);
echo 'Frame embedding enabled<br/>';

$registrationurl = new moodle_url('/admin/settings.php?section=enrolsettingslti_registrations');
echo 'Now go to '.html_writer::link($registrationurl, $registrationurl->out());


echo $OUTPUT->footer();
echo 'Now go to '.$registrationurl->out();


//There was a problem fetching the OpenID configuration from the platform. The result was not valid JSON. This may also be caused by blocked hosts configuration. Please make sure your site is configured to connect
//to the platform domain and try again using a new registration URL.
//http://p53/lticonsume/admin/settings.php?section=httpsecurity
//http://p53/main/enrol/lti/register.php?token=23c7875d261047f01512a85f33923ef3d433393d5f5a35eaa56fe4a635c3

//update mdl_config set value = ''  where name = 'curlsecurityblockedhosts';


