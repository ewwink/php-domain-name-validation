PHP Domain Name Validation
==========================
This is PHP Class to check if given name valid domain name or not. 

###history

In the pass when Domain TLDs only `.com .net .org .biz .info .us` to extract domain name you can use Regular expression 

`[-a-z0-9]{1,63}\.[a-z]{2,4}` 

now when more then 500 Domain TLDs registered that regex is not reliable even with if you modified like this one

```
[-a-z0-9]{1,63}\.([a-z]{2,4}\.)?[a-z]{2,4}
or
[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,6}
```

for example with regex above name `cintai.anu.mu` will detected as valid domain not subdomain but its wrong valid domain tlds are `.mu, ac.mu, .co.mu, .com.mu, .org.mu, .net.mu` 

### Use it

```
require_once("is_domain.php");

### Return True if domain valid domain, otherwise false
checkName::is_domain("example.com"); // will return "true"

### Get or Parse domain from URL
checkName::cleanURL("https://github.com/ewwink/php-domain-name-validation"); // will return "github.com"

### Get or Parse domain from URL and validate Domain name
checkName::cleanURL("https://github.com/ewwink/php-domain-name-validation", true); // will return "true"
```


----------
learning and doing is fun [check pagerank](http://www.prpagerank.com)

