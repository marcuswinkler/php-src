--TEST--
zend multibyte (7)
--SKIPIF--
--INI--
zend.multibyte=On
zend.script_encoding=ISO-8859-1
mbstring.internal_encoding=EUC-JP
--FILE--
<?php
declare(encoding="UTF-8");
var_dump(bin2hex("テスト"));
?>
--EXPECT--
string(12) "a5c6a5b9a5c8"
