<?php

$cfg['blowfish_secret'] = '';
$env = getenv();

$i = 0;

/**
 * First server
 */
$i++;
/* Authentication type */
$cfg['Servers'][$i]['auth_type'] = 'config';

/* Server parameters */
$cfg['Servers'][$i]['host'] = $env["MYSQL_HOST"] ?? 'mysql';
$cfg['Servers'][$i]['compress'] = false;
$cfg['Servers'][$i]['AllowNoPassword'] = false;
$cfg['Servers'][$i]['user'] = $env["MYSQL_USER"] ?? "root";
$cfg['Servers'][$i]['password'] = $env["MYSQL_PASSWORD"] ?? "password";



/**
 * Directories for saving/loading files from server
 */
$cfg['UploadDir'] = '/tmp/pma';
$cfg['SaveDir'] = '/tmp/pma';