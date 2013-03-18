<?php
/*
Plugin Name: TinyMCE Paste in Plain Text by Default
Version: 1.0
Description: Changes the default behavior on TinyMCE so that all text is pasted plain by default.
Author: Raphael Lorenzeto de Abreu
Author URI: http://blog.raphaelabreu.com/

Copyright (c) 2013
Released under the GPL license
http://www.gnu.org/licenses/gpl.txt

    This file is part of WordPress.
    WordPress is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

	INSTALL: 
	Just install the plugin in your blog and activate
*/

/*
Thanks to Dariusz Lyson for the solution on Stack Overflow
http://stackoverflow.com/questions/2695731/how-to-make-tinymce-paste-in-plain-text-by-default
*/
function plainpaste_tinymce_settings($settings)
{
    $settings['paste_text_sticky'] = 'true';
    $settings['setup'] = 'function(ed) { ed.onInit.add(function(ed) { ed.pasteAsPlainText = true; }); }';

    return $settings;
}
add_filter('tiny_mce_before_init','plainpaste_tinymce_settings');

?>
