<?php
/**
Plugin Name: SEEDS: Theme Customizer
Description: Adds theme customization options to the WordPress site.
Version: 1.0.0
Author: Seeds Creative Services, LLC.
Author URI: https://seedscreativeservices.com
Text Domain: seeds_customizer
*/

namespace SEEDS\PLUGINS;

class Customizer {

  public function __construct() {

    add_action('customize_register', function($wp_customize) {

      $customizersPlugin = dirname(__FILE__) . "/customizers";
      $customizersTheme = get_stylesheet_directory() . "/theme/customizers";

      remove_theme_mod('colors_primary');

      foreach(scandir($customizersPlugin) as $file) {

        if(!in_array($file, array('.', '..'))) {

          if(is_file($customizersPlugin.'/'.$file)) {

            $section = str_replace('.php', '', $file);
            $section = str_replace('-', '_', $section);

            $customizer = include_once($customizersPlugin.'/'.$file);

            $wp_customize->add_section("customizer_{$section}", array(

              'title' => $customizer['title'],
              'priority' => 30
    
            ));

            foreach($customizer['fields'] as $fieldSlug => $field) {

              $wp_customize->add_setting("{$section}_{$fieldSlug}", array( 

                'transport' => 'postMessage'

              ));
    
              $wp_customize->add_control("{$section}_{$fieldSlug}", array_merge(

                array('section' => "customizer_{$section}"),
                $field
                
              ));
    
            }

          }

        }

      }

      foreach(scandir($customizersTheme) as $file) {

        if(!in_array($file, array('.', '..'))) {

          if(is_file($customizersTheme.'/'.$file)) {

            $section = str_replace('.php', '', $file);
            $section = str_replace('-', '_', $section);

            $customizer = include_once($customizersTheme.'/'.$file);

            $wp_customize->add_section("customizer_{$section}", array(

              'title' => $customizer['title'],
              'priority' => 30
    
            ));

            foreach($customizer['fields'] as $fieldSlug => $field) {

              $wp_customize->add_setting("{$section}_{$fieldSlug}", array( 

                'transport' => 'postMessage'

              ));
    
              $wp_customize->add_control("{$section}_{$fieldSlug}", array_merge(

                array('section' => "customizer_{$section}"),
                $field
                
              ));
    
            }

          }

        }

      }

    });

  }

}

return new Customizer;