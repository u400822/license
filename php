<?php
class huy
{
	public $data;
	public function __construct($data) {
		$this->data = $data;
	}
}
$huy = new huy("abdkdkdk");
$huy1 = new huy("huy123");
print_r($huy);
print_r($huy1);
echo $huy->data."\n";
echo $huy1->data."\n";
while (true) {
	eval("echo 1;");
}