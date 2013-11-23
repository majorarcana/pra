<?php
/**
 * Custom functions file
 *
 *
 * @package PRA
 * @since 1.0
 */
 
 class truncate {
     public static function page_content($text, $limit){
         if(strlen($text) <= $limit) return $text;
         if(false !== ($break = strpos($text, ".", $limit))) {
             if($break < strlen($text) - 1) {
                 $text = substr($text, 0, $break) . "...";
             }
         }
         return $text;
     }
 }