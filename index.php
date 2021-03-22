<?php

function includedInDomainSimple($domain, $target_domain)
{
	$target_domain_parts = array_reverse(explode(".", $target_domain));
	$domain_parts = array_reverse(explode(".", $domain));

	foreach ($target_domain_parts as $idx => $domain) {
		if ($domain_parts[$idx] !== $domain) return false;
	}

	return true;
}

$target = "foo.com";
$list = ["x.foo.com", "y.foo.com", "foo.com", "bar.com", "x.baz.com"];
foreach ($list as $line) {
	echo sprintf("%s - %s", $line, includedInDomainSimple($line, $target) ? "Y" : "N") . "\n";
}
