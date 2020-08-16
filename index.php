<?php
/*
	(C) Copyright 2009-2010 myTinyTodo by Max Pozdeev <maxpozdeev@gmail.com>
	(C) Copyright 2017      fork myTDX by Jérémie FRANCOIS <jeremie.francois@gmail.com>
	Licensed under the GNU GPL v2 license. See file COPYRIGHT for details.
*/

if(!is_file('db/config.php') || !is_file('db/todolist.db'))
    die('Bad or missing configuration. Did you run the <a href="setup.php">setup?</a>');

require_once('./init.php');

$lang = Lang::instance();

if($lang->rtl()) Config::set('rtl', 1);

if(!is_int(Config::get('firstdayofweek')) || Config::get('firstdayofweek')<0 || Config::get('firstdayofweek')>6) Config::set('firstdayofweek', 1);

define('TEMPLATEPATH', MTTPATH. 'themes/'.Config::get('template').'/');

require(TEMPLATEPATH. 'index.php');

