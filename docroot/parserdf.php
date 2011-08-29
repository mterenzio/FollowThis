<?php
include_once('../classes/ARC2/ARC2.php');

$config = array('auto_extract' => 0);
$parser = ARC2::getSemHTMLParser();
$parser->parse('http://www.thehour.com/story/509857');
$parser->extractRDF('rdfa');

$triples = $parser->getSimpleIndex();
$rdfxml = $parser->toRDFXML($triples);

echo $rdfxml;

?>