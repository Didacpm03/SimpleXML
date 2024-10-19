<!DOCTYPE html>
<html>
<body>

<?php
$note=<<<XML
<note>
<to>Tove</to>
<from>Jani</from>
<heading>Reminder</heading>
<body>Do not forget me this weekend!</body>
</note>
XML;

$xml=new SimpleXMLElement($note);
// Add attribute to root element
$xml->addAttribute("type","private");
// Add attribute to body element
$xml->body->addAttribute("date","2014-01-01");

echo $xml->asXML();
?>

<p>Select View Source to see the added "type" and "date" attributes.</p>

</body>
</html>