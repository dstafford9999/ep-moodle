<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = getenv('moodle_db_server') ;
$CFG->dbname    = getenv('moodle_db_name') ;
$CFG->dbuser    = getenv('moodle_db_user') ;
$CFG->dbpass    = getenv('moodle_db_password') ;
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_unicode_ci',
);

$CFG->wwwroot   = getenv('moodle_wwwroot') ;
$CFG->dataroot  = getenv('moodle_dataroot') ;
$CFG->admin     = getenv('moodle_admin') ;
$CFG->sslproxy	= true;
$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
