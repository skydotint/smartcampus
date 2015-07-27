<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
  | -------------------------------------------------------------------
  | AUTO-LOADER
  | -------------------------------------------------------------------
  | This file specifies which systems should be loaded by default.
  |
  | In order to keep the framework as light-weight as possible only the
  | absolute minimal resources are loaded by default. For example,
  | the database is not connected to automatically since no assumption
  | is made regarding whether you intend to use it.  This file lets
  | you globally define which systems you would like loaded with every
  | request.
  |
  | -------------------------------------------------------------------
  | Instructions
  | -------------------------------------------------------------------
  |
  | These are the things you can load automatically:
  |
  | 1. Packages
  | 2. Libraries
  | 3. Drivers
  | 4. Helper files
  | 5. Custom config files
  | 6. Language files
  | 7. Models
  |
 */

/*
  | -------------------------------------------------------------------
  |  Auto-load Packages
  | -------------------------------------------------------------------
  | Prototype:
  |
  |  $autoload['packages'] = array(APPPATH.'third_party', '/usr/local/shared');
  |
 */

$autoload['packages'] = array();


/*
  | -------------------------------------------------------------------
  |  Auto-load Libraries
  | -------------------------------------------------------------------
  | These are the classes located in the system/libraries folder
  | or in your application/libraries folder.
  |
  | Prototype:
  |
  |	$autoload['libraries'] = array('database', 'email', 'session');
  |
  | You can also supply an alternative library name to be assigned
  | in the controller:
  |
  |	$autoload['libraries'] = array('user_agent' => 'ua');
 */

$autoload['libraries'] = array('database', 'session', 'email', 'form_validation', 'pagination');


/*
  | -------------------------------------------------------------------
  |  Auto-load Drivers
  | -------------------------------------------------------------------
  | These classes are located in the system/libraries folder or in your
  | application/libraries folder within their own subdirectory. They
  | offer multiple interchangeable driver options.
  |
  | Prototype:
  |
  |	$autoload['drivers'] = array('cache');
 */

$autoload['drivers'] = array();


/*
  | -------------------------------------------------------------------
  |  Auto-load Helper Files
  | -------------------------------------------------------------------
  | Prototype:
  |
  |	$autoload['helper'] = array('url', 'file');
 */

$autoload['helper'] = array('url', 'form', 'scene_helper');


/*
  | -------------------------------------------------------------------
  |  Auto-load Config files
  | -------------------------------------------------------------------
  | Prototype:
  |
  |	$autoload['config'] = array('config1', 'config2');
  |
  | NOTE: This item is intended for use ONLY if you have created custom
  | config files.  Otherwise, leave it blank.
  |
 */

$autoload['config'] = array();


/*
  | -------------------------------------------------------------------
  |  Auto-load Language files
  | -------------------------------------------------------------------
  | Prototype:
  |
  |	$autoload['language'] = array('lang1', 'lang2');
  |
  | NOTE: Do not include the "_lang" part of your file.  For example
  | "codeigniter_lang.php" would be referenced as array('codeigniter');
  |
 */

$autoload['language'] = array();


/*
  | -------------------------------------------------------------------
  |  Auto-load Models
  | -------------------------------------------------------------------
  | Prototype:
  |
  |	$autoload['model'] = array('first_model', 'second_model');
  |
  | You can also supply an alternative model name to be assigned
  | in the controller:
  |
  |	$autoload['model'] = array('first_model' => 'first');
 */

$autoload['model'] = array(
    'accounts_model' => 'accounts_model',
    'applicants_model' => 'applicants_model',
    'basic_model' => 'basic_model',
    'books_model' => 'books_model',
    'classes_model' => 'classes_model',
    'common_model' => 'common_model',
    'downloads_model' => 'downloads_model',
    'financialdepartments_model' => 'financialdepartments_model',
    'galleries_model' => 'galleries_model',
    'guardians_model' => 'guardians_model',
    'ion_auth_model' => 'ion_auth_model',
    'news_model' => 'news_model',
    'notices_model' => 'notices_model',
    'photos_model' => 'photos_model',
    'results_model' => 'results_model',
    'sections_model' => 'sections_model',
    'settings_model' => 'settings_model',
    'staffs_model' => 'staffs_model',
    'students_model' => 'students_model',
    'subjects_model' => 'subjects_model',
    'teachers_model' => 'teachers_model',
    'slides_model' => 'slides_model',
    'webpages_model' => 'webpages_model',
    'talentedstudents_model' => 'talentedstudents_model',
    'academiccouncillors_model' => 'academiccouncillors_model',
    'syllabuss_model' => 'syllabuss_model',
    'tcs_model' => 'tcs_model',
    'othersresults_model' => 'othersresults_model'
);
