<?php

define('DIR_BASE',  $_SERVER['DOCUMENT_ROOT']);

include_once(DIR_BASE . '/_includes/config.php');
include_once(DIR_BASE . '/_includes/functions.php');

// start session
session_start();

// automatically connect to database
connect_db();

// if user is logged in, load their profile
load_user();
