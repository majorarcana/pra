<?php
/**
 * Custom functions file
 *
 *
 * @package PRA
 * @since 1.0
 */
 class truncate {
     /**
      * Used to include page content in sub-index pages
      * @param string $text Page content to be truncated
      * @param integer $limit Number of characters to truncate to
      * @return string $text Truncated page content
      */
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