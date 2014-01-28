<?php
#################
#  author : ewwink
#  website: http://www.prpagerank.com
#################

require_once("is_domain.php");

// valid domain name
$name1 = 'google.co.id';

// Not Valid Domain name valid are: .co.id, or.id, web.id ...
$name2 = 'google.id';

// Not Valid Domain name valid are: .co, com.co, net.co, nom.co
$name3 = 'notdomain.en.co';

$name4 = 'http://www.ads-id.com/forums/member.php/736-ewwink';

echo "<html><head><title>PHP Domain Name Validation</title></head><body>";

if( checkName::is_domain($name1)) echo "<strong>$name1</strong> = is Valid domain name<br>";
else echo "<strong>$name1</strong> = is not Valid domain name <br />";

if( checkName::is_domain($name2)) echo "<strong>$name2</strong> = is Valid domain name<br>";
else echo "<strong>$name2</strong> = is not Valid domain name, you can't register with TLD .id<br>";

if( checkName::is_domain($name3)) echo "<strong>$name3</strong> = is Valid domain name<br>";
else echo "<strong>$name3</strong> = is not Valid domain name<br>";

if( checkName::is_domain($name4)) echo "$name4 = is Valid domain name<br>";
else echo "<strong>$name4</strong> = is not Valid domain name because it is URL<br>";

// "true" mean clean or parse domain name from URL
if( checkName::is_domain($name4, true)) {
  echo "**** You can also call checkName::cleanURL() to parse domain from URL or use 'true' **** <br />";
  echo "<strong>".checkName::cleanURL($name4)."</strong> = is Valid domain name <br />";
}
else echo "$name4 = is not Valid domain name <br />";

echo "</body></html>"
?>