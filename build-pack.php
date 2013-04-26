<?php
$packBase = "fzypack_live/";

$dat = date("Y-m-d");

$text = "Uberfuzzy's Mix-and-match pack
uberfuzzy {$dat} LIVE!
@github:uberfuzzy/fzypack
";

$bytes = file_put_contents( $packBase . "pack.txt", $text );
print "-------------------------------\n";
print $text;
print "-------------------------------\n";
print "wrote {$bytes}\n";
