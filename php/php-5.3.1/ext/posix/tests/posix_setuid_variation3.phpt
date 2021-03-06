--TEST--
Test function posix_setuid() by substituting argument 1 with emptyUnsetUndefNull values.
--SKIPIF--
<?php 
        if(!extension_loaded("posix")) print "skip - POSIX extension not loaded"; 
?>
--CREDITS--
Marco Fabbri mrfabbri@gmail.com
Francesco Fullone ff@ideato.it
#PHPTestFest Cesena Italia on 2009-06-20
--FILE--
<?php


echo "*** Test substituting argument 1 with emptyUnsetUndefNull values ***\n";



$unset_var = 10;
unset($unset_var);

$variation_array = array(
  'unset var' => @$unset_var,
  'undefined var' => @$undefined_var,
  'empty string DQ' => "",
  'empty string SQ' => '',
  'uppercase NULL' => NULL,
  'lowercase null' => null,
  );


foreach ( $variation_array as $var ) {
  var_dump(posix_setuid( $var  ) );
}
?>
--EXPECTF--
*** Test substituting argument 1 with emptyUnsetUndefNull values ***
bool(false)
bool(false)

Warning: posix_setuid() expects parameter 1 to be long, string given in %s on line 22
bool(false)

Warning: posix_setuid() expects parameter 1 to be long, string given in %s on line 22
bool(false)
bool(false)
bool(false)
