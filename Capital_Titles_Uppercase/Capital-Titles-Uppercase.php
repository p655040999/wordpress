<?php

/*
Plugin Name: Capital-Titles-Uppercase
Plugin URI: www.navnor.co.uk/plugins/Capital-Titles-Uppercase.zip
Description: Convert Lower Case  to Upper Case in all post title in your site
Author: Pablo Jesus Diaz
Version: 1.0
Author URI:  http://www.gnu.org/licenses/gpl-2.0.html
Licence : GPL2

*/

add_filter("the_title","cc_filtrosEditTitulo");

/**
 * 
 * Convert Lower Case  to Upper Case in all post title in your site
 * */
if(!function_exists("cc_filtrosEditTitulo"))
{
    function cc_filtrosEditTitulo($text)
  
    {
   
        return strtoupper($text);

    }
}

 
