<?php

/**
 * This file is part of the Chatomz PHP Framework package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author 		Firman Setiawan
 * @copyright	Copyright (c) Firman Setiawan
 *
 */

#############################################################
## HELPER SYSTEM

function warning($teks, $info=null) {
	if (!is_null($info))
		$info = ' - <i>(' . $info . ')</i>';
	echo "<b>Chatomz Berkata : </b>" . $teks . $info;
	die();
}

// -----------------------------------------------------------------------------

## AUTOLOAD BASE_URL
## THIS FUNTION for all class system
## this is funtion system
## !important for not modified

// ---------------------------- WARNING -----------------------------------------
function base_url($link= null) {
	global $Url;
	if (is_null($link)) return $Url['BASE_URL']; 
	
	return $Url['BASE_URL'] . $link;
}

###############################
## CONFIG

function temp_header_admin()
{
	global $Template;
	return $Template['admin']['header'];
}

function temp_footer_admin()
{
	global $Template;
	return $Template['admin']['footer'];
}

function temp_header_home()
{
	global $Template;
	return $Template['homepage']['header'];
}

function temp_footer_home()
{
	global $Template;
	return $Template['homepage']['footer'];
}

###############################

###############################
## CONTROLLER

function filemodel($filemodel=null)
{
	// jika pemanggilan $this->model tanpa parameter maka akan memanggil file crud_model
	$filemodedefault 	= 'Crud';
	if (is_null($filemodel)) {		
		return $filemodedefault;
	} else {
		return $filemodel;
	}
}

###############################

###############################
## OTHER HELPER

###############################