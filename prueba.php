<?php
$foo=1
function bar() {
 $foo=2
 echo $foo
 return
}
function baz {
 $foo=3
 echo $foo
 return
}
echo $foo
bar()
baz()
echo $foo
?>
