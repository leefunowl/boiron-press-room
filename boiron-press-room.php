<?php
/*
 * Plugin Name: Boiron Press Room
 * Version: 0.0.1
 * Plugin URI: https://www.leefun.us/
 * Description: Modify press release archive
 * Author: Leefun
 * Author URI: https://www.leefun.us/
 * Text Domain: boiron-press-room
 * Domain Path: /languages
 *
 * Copyright 2009-2023 Oliver Schlöbe (email : wordpress@schloebe.de)
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
 */

function boiron_enqueue_css_js() {
	wp_enqueue_script( 'yearly-js', plugins_url( 'js/yearly.js', __FILE__ ));
}
add_action( 'wp_enqueue_scripts', 'boiron_enqueue_css_js' );
