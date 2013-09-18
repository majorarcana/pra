<?php
/**
 * Footer template
 *
 * Brings Javascript into the page if possible.
 *
 * @package PRA
 * @since 1.0
 */
?>        <script id="script-block">
            /* <![CDATA[ */
            // mustard test
            if('querySelector' in document
                 && 'localStorage' in window
                 && 'addEventListener' in window) {

                  var loadScript = function(url) {
                      var js = document.createElement("script");
                      js.src = url;
                      var sb = document.getElementById("script-block");
                      sb.parentNode.insertBefore(js, sb);
                  }
                  var jQueryReady = function(time_elapsed) {    
                      if (typeof $ == "undefined") { 
                          if (time_elapsed <= 5000) {   
                              setTimeout("jQueryReady(" + (time_elapsed + 200) + ")", 200);
                          } 
                      } else { 
                          loadScript("/wp-content/themes/pra/scripts/backstretch.min.js");
                          loadScript("/wp-content/themes/pra/scripts/main.js");
                      }
                  }
                  loadScript("http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js");
                  jQueryReady(0);
            };
            /* ]]> */
        </script>
        <?php wp_footer(); ?>
    </body>
</html>