<?php
/*
 * Purpose: Turn on output buffering
 * Example:   
 *   <?php
 *   
 *   function callback($buffer)
 *   {
 *     // replace all the apples with oranges
 *     return (str_replace("apples", "oranges", $buffer));
 *   }
 *   
 *   ob_start("callback");
 *   
 *   ?>
 *   <html>
 *   <body>
 *   <p>It's like comparing apples to oranges.</p>
 *   </body>
 *   </html>
 *   <?php
 *   
 *   ob_end_flush();
 *   
 *   ?>
 * 
 * Output:   
 *   <html>
 *   <body>
 *   <p>It's like comparing oranges to oranges.</p>
 *   </body>
 *   </html>
 */
function ob_start(Variant $output_callback = null, Int32 $chunk_size = 0, Boolean $erase = true) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Clean (erase) the output buffer
 * Example: 
 * 
 * Output: 
 */
function ob_clean() {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Flush (send) the output buffer
 * Example: 
 * 
 * Output: 
 */
function ob_flush() {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Clean (erase) the output buffer and turn off output buffering
 * Example:   
 *   <?php
 *   ob_start();
 *   echo 'Text that won\'t get displayed.';
 *   ob_end_clean();
 *   ?>
 * 
 * Output: 
 */
function ob_end_clean() {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Flush (send) the output buffer and turn off output buffering
 * Example:   
 *   <?php
 *     while (@ob_end_flush());
 *   ?>
 * 
 * Output: 
 */
function ob_end_flush() {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Flush the output buffer
 * Example: 
 * 
 * Output: 
 */
function flush() {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Get current buffer contents and delete current output buffer
 * Example:   
 *   <?php
 *   
 *   ob_start();
 *   
 *   echo "Hello World";
 *   
 *   $out = ob_get_clean();
 *   $out = strtolower($out);
 *   
 *   var_dump($out);
 *   ?>
 * 
 * Output:   
 *   
 *   string(11) "hello world"
 *   
 */
function ob_get_clean() {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Return the contents of the output buffer
 * Example:   
 *   <?php
 *   
 *   ob_start();
 *   
 *   echo "Hello ";
 *   
 *   $out1 = ob_get_contents();
 *   
 *   echo "World";
 *   
 *   $out2 = ob_get_contents();
 *   
 *   ob_end_clean();
 *   
 *   var_dump($out1, $out2);
 *   ?>
 * 
 * Output:   
 *   string(6) "Hello "
 *   string(11) "Hello World"
 */
function ob_get_contents() {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Flush the output buffer, return it as a string and turn off output buffering
 * Example:   
 *   <?php
 *   //using output_buffering=On
 *   print_r(ob_list_handlers());
 *   
 *   //save buffer in a file
 *   $buffer = ob_get_flush();
 *   file_put_contents('buffer.txt', $buffer);
 *   
 *   print_r(ob_list_handlers());
 *   ?>
 * 
 * Output:   
 *   Array
 *   (
 *       [0] => default output handler
 *   )
 *   Array
 *   (
 *   )
 */
function ob_get_flush() {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Return the length of the output buffer
 * Example:   
 *   <?php
 *   
 *   ob_start();
 *   
 *   echo "Hello ";
 *   
 *   $len1 = ob_get_length();
 *   
 *   echo "World";
 *   
 *   $len2 = ob_get_length();
 *   
 *   ob_end_clean();
 *   
 *   echo $len1 . ", ." . $len2;
 *   ?>
 * 
 * Output:   
 *   6, 11
 */
function ob_get_length() {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Return the nesting level of the output buffering mechanism
 * Example: 
 * 
 * Output: 
 */
function ob_get_level() {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Get status of output buffers
 * Example: 
 * 
 * Output:   
 *   Array
 *   (
 *       [level] => 2
 *       [type] => 0
 *       [status] => 0
 *       [name] => URL-Rewriter
 *       [del] => 1
 *   )
 */
function ob_get_status(Boolean $full_status = false) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: ob_start callback function to gzip output buffer
 * Example:   
 *   <?php
 *   
 *   ob_start("ob_gzhandler");
 *   
 *   ?>
 *   <html>
 *   <body>
 *   <p>This should be a compressed page.</p>
 *   </html>
 *   <body>
 * 
 * Output: 
 */
function ob_gzhandler(String $buffer, Int32 $mode) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Turn implicit flush on/off
 * Example: 
 * 
 * Output: 
 */
function ob_implicit_flush(Boolean $flag = true) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: List all output handlers in use
 * Example:   
 *   <?php
 *   //using output_buffering=On
 *   print_r(ob_list_handlers());
 *   ob_end_flush();
 *   
 *   ob_start("ob_gzhandler");
 *   print_r(ob_list_handlers());
 *   ob_end_flush();
 *   
 *   // anonymous functions
 *   ob_start(create_function('$string', 'return $string;'));
 *   print_r(ob_list_handlers());
 *   ob_end_flush();
 *   ?>
 * 
 * Output:   
 *   Array
 *   (
 *       [0] => default output handler
 *   )
 *   
 *   Array
 *   (
 *       [0] => ob_gzhandler
 *   )
 *   
 *   Array
 *   (
 *       [0] => default output handler
 *   )
 */
function ob_list_handlers() {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Add URL rewriter values
 * Example:   
 *   <?php
 *   output_add_rewrite_var('var', 'value');
 *   
 *   // some links
 *   echo '<a href="file.php">link</a>
 *   <a href="http://example.com">link2</a>';
 *   
 *   // a form
 *   echo '<form action="script.php" method="post">
 *   <input type="text" name="var2" />
 *   </form>';
 *   
 *   print_r(ob_list_handlers());
 *   ?>
 * 
 * Output:   
 *   <a href="file.php?var=value">link</a>
 *   <a href="http://example.com">link2</a>
 *   
 *   <form action="script.php" method="post">
 *   <input type="hidden" name="var" value="value" />
 *   <input type="text" name="var2" />
 *   </form>
 *   
 *   Array
 *   (
 *       [0] => URL-Rewriter
 *   )
 */
function output_add_rewrite_var(String $name, String $value) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

/*
 * Purpose: Reset URL rewriter values
 * Example:   
 *   <?php
 *   session_start();
 *   output_add_rewrite_var('var', 'value');
 *   
 *   echo '<a href="file.php">link</a>';
 *   ob_flush();
 *   
 *   output_reset_rewrite_vars();
 *   echo '<a href="file.php">link</a>';
 *   ?>
 * 
 * Output:   
 *   <a href="file.php?PHPSESSID=xxx&var=value">link</a>
 *   <a href="file.php">link</a>
 */
function output_reset_rewrite_vars() {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

function hphp_log(String $filename, String $message) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

function hphp_stats(String $name, Int64 $value) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

function hphp_get_stats(String $name) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}

function hphp_output_global_state(String $filename = null_string) {
 // THIS IS AUTOGENERATED BY builtins_php.ml
  
}
