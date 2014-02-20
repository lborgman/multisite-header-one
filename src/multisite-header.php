<?php
/*
  Plugin Name: Multisite Header One
  Plugin URI: http://ourcomments.org/psyblog/IT
  Description: Implements a network wide header
  Version: 0.1
  Author: Lennart Borgman
  Author URI: http://ourcomments.org/
  License: GPL3
  Network: true

*/
/*  Copyright: (C) 2014  Lennart Borgman, All rights reserved.

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/
/* Credit to
   http://www.yaconiello.com/blog/how-to-write-wordpress-plugin/ */

if(!class_exists('Multisite_Header1'))
  {
    class Multisite_Header1
    {
      private $found_admin_bar_in_footer = false;
      public $html_top_margin = 70;

      /**
       * Construct the plugin object
       */
      public function __construct()
      {
        // var_dump('$html_top_margin');
        // Initialize User's Contents
        // require_once(sprintf("%s/user-content.php", dirname(__FILE__)));
        // $Multisite_Header1_UserContent = new Multisite_Header1_UserContent();
        
        // Register custom post types
        // require_once(sprintf("%s/post-types/post_type_template.php", dirname(__FILE__)));
        // $Post_Type_Template = new Post_Type_Template();

        add_action( 'wp_footer', array(&$this, 'footer_action_1001'), 1001 ); // admin_bar has priority 1000.
        // var_dump('$html_top_margin');
      } // END public function __construct

      /**
       * Activate the plugin
       */
      public static function activate()
      {
        // Do nothing
      } // END public static function activate

      /**
       * Deactivate the plugin
       */		
      public static function deactivate()
      {
        // Do nothing
      } // END public static function deactivate

      /*********************************
       * Do things */
      public function footer_action_1001() {
        $this->render();
      }
      function render() {
        $user_file = dirname(__FILE__) . '/your-header.php';
        if (!is_file($user_file))
          $user_file = dirname(__FILE__) . '/your-header-sample.php';
        $user_header = $this->get_include_contents($user_file);
        echo $user_header;
      }
      function get_include_contents($filename) {
        if (is_file($filename)) {
          ob_start();
          include $filename;
          return ob_get_clean();
        }
        return false;
      }
    } // END class Multisite_Header1
  } // END if(!class_exists('Multisite_Header1'))


if(class_exists('Multisite_Header1'))
  {
    // Installation and uninstallation hooks
    register_activation_hook(__FILE__, array('Multisite_Header1', 'activate'));
    register_deactivation_hook(__FILE__, array('Multisite_Header1', 'deactivate'));

    // instantiate the plugin class
    $Multisite_Header1 = new Multisite_Header1();

    //// Can't be done currently for network
    // Add a link to the settings page onto the plugin page
    // if(isset($Multisite_Header1))
    //   {
    //     // Add the settings link to the plugins page
    //     function plugin_settings_link($links)
    //     { 
    //       $settings_link = '<a href="options-general.php?page=Multisite_Header1">Settings</a>'; 
    //       array_unshift($links, $settings_link); 
    //       return $links; 
    //     }

    //     $plugin = plugin_basename(__FILE__); 
    //     add_filter("plugin_action_links_$plugin", 'plugin_settings_link');
    //   }
  }
