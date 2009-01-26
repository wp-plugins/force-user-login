<?php
/*
	Plugin Name: Force User Login
	Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
	Description: A really small plugin that forces a user to login before being able to view any blog content. It then redirects them to the relative root (/). You can change where the login redirects by changing line 32 of the plugin file. 
	Version: 1.0
	Author: The Integer Group Development Team
	Author URI: http://www.integer.com



	Copyright 2009 The Integer Group Dev Team  (email : development@integerdenver.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/	
	add_action( 'get_header', 'force_login', 1 );
	add_action( 'get_bloginfo', 'force_login', 1 );
	
	function force_login()
	{
		$redirect_to = '/'; // Change this line to change to where logging in redirects the user.
		
		if ( ! is_user_logged_in() )
	  		header( 'Location: /wp-login.php?redirect_to=' . $redirect_to );

	} // force_login
?>