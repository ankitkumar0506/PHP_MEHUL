


<!-- • Write a PHP script which decodes the following JSON string.  -->

<!-- Decoding JSON data is as simple as encoding it.
You can use the PHP json_decode() function to convert the JSON encoded string into appropriate PHP data type. 
The following example demonstrates how to decode or convert a JSON object to PHP object. -->

<?php
// Store JSON data in a PHP variable
$json = '{"Peter":65,"Harry":80,"John":78,"Clark":90}';
echo "<pre>";
var_dump(json_decode($json));
echo "</pre>";
?>

<!-- However, you can optionally specify a second parameter $assoc which accepts a boolean value that when set 
as true JSON objects are decoded into associative arrays. 
It is false by default. Here's an example: -->


<?php
// Store JSON data in a PHP variable
$json = '{"Peter":65,"Harry":80,"John":78,"Clark":90}';
echo "<pre>";
var_dump(json_decode($json, true));
echo "</pre>";
?>

<!-- Now let's check out an example that will show you how to decode 
the JSON data and access individual elements of the JSON object or array in PHP. -->

<?php
// Assign JSON encoded string to a PHP variable
$json = '{"Peter":65,"Harry":80,"John":78,"Clark":90}';
 
// Decode JSON data to PHP associative array
$arr = json_decode($json, true);
// Access values from the associative array
echo $arr["Peter"];  // Output: 65
echo $arr["Harry"];  // Output: 80
echo $arr["John"];   // Output: 78
echo $arr["Clark"];  // Output: 90
 
// Decode JSON data to PHP object
$obj = json_decode($json);
// Access values from the returned object
echo $obj->Peter;   // Output: 65
echo $obj->Harry;   // Output: 80
echo $obj->John;    // Output: 78
echo $obj->Clark;   // Output: 90
?>

