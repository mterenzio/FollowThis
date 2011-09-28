<?php
include_once("../classes/ARC2/ARC2.php");

$config = array('auto_extract' => 0);
$parser = ARC2::getSemHTMLParser();
$parser->parse('http://www.huffingtonpost.com/rep-carolyn-maloney/presidents-policies-are-g_b_975828.html?ir=Yahoo');
$parser->extractRDF('rdfa');

$triples = $parser->getSimpleIndex();
$rdfxml = $parser->toRDFXML($triples);

echo $rdfxml;

?>