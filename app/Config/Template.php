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

##############################################################
## ADMINISTRATOR
/**
* Template Administrator || HALAMAN ADMIN
* konfigurasi theme admin
* Ubah halaman dengan tema yang digunakan
* index header untuk menginisialisasi header theme
* index footer untuk menginisialisasi footer theme
* isi nilai dengan link lokasi templat yang berada pada folder view
*/
$Template['admin'] = [	'header' => 'admin/header',
												'footer' => 'admin/footer'];
##############################################################

##############################################################
## HOMEPAGE
/**
* Template Homepage || HALAMAN USER GENERAL
* konfigurasi homepage
* Ubah halaman dengan tema yang digunakan
* index header untuk menginisialisasi header homapage
* index footer untuk menginisialisasi footer homepage
* isi nilai dengan link lokasi templat yang berada pada folder view
*/

$Template['homepage'] = [	'header' => 'user/header',
													'footer' => 'user/footer'];
// --------------------------------------------------------------------------------------------