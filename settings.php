<?php
 
/**
 * Settings for the demystified theme
 */
defined('MOODLE_INTERNAL') || die;
 
if ($ADMIN->fulltree) {
	
	// Background colour setting
	$name = 'theme_purplemartin/backgroundcolor';
	$title = get_string('backgroundcolor','theme_purplemartin');
	$description = get_string('backgroundcolordesc', 'theme_purplemartin');
	$default = 'rgba(255,0,255,0)';
	$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_CLEAN, 12);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$settings->add($setting);

		// Header Background gradient setting
	$name = 'theme_purplemartin/headerbackgroundone';
	$title = get_string('headerbackgroundone','theme_purplemartin');
	$description = get_string('headerbackgroundone', 'theme_purplemartin');
	$default = '#666655';
	$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_CLEAN, 12);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$settings->add($setting);

	$name = 'theme_purplemartin/headerbackgroundtwo';
	$title = get_string('headerbackgroundtwo','theme_purplemartin');
	$description = get_string('headerbackgroundtwo', 'theme_purplemartin');
	$default = '#336666';
	$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_CLEAN, 12);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$settings->add($setting);

	$name = 'theme_purplemartin/headerbackgroundthree';
	$title = get_string('headerbackgroundthree','theme_purplemartin');
	$description = get_string('headerbackgroundthree', 'theme_purplemartin');
	$default = '#622226';
	$setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_CLEAN, 12);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$settings->add($setting);

	// Logo file setting
	$name = 'theme_purplemartin/logo';
	$title = get_string('logo','theme_purplemartin');
	$description = get_string('logodesc', 'theme_purplemartin');
	$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$settings->add($setting);

	// Block region width
	$name = 'theme_purplemartin/regionwidth';
	$title = get_string('regionwidth','theme_purplemartin');
	$description = get_string('regionwidthdesc', 'theme_purplemartin');
	$default = 200;
	$choices = array(150=>'150px', 170=>'170px', 200=>'200px', 240=>'240px', 290=>'290px', 350=>'350px', 420=>'420px');
	$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
	$setting->set_updatedcallback('theme_reset_all_caches');
	$settings->add($setting);

	// Foot note setting
	$name = 'theme_purplemartin/footnote';
	$title = get_string('footnote','theme_purplemartin');
	$description = get_string('footnotedesc', 'theme_purplemartin');
	$setting = new admin_setting_confightmleditor($name, $title, $description, '');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$settings->add($setting);

	// Custom CSS file
	$name = 'theme_purplemartin/customcss';
	$title = get_string('customcss','theme_purplemartin');
	$description = get_string('customcssdesc', 'theme_purplemartin');
	$setting = new admin_setting_configtextarea($name, $title, $description, '');
	$setting->set_updatedcallback('theme_reset_all_caches');
	$settings->add($setting);

} // This is the closing brace that encloses all the above settings