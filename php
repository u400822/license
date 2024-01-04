<?php
class huy
{
	public $data;
	public function __construct($data) {
		$this->data = $data;
	}
}
$huy = new huy("abdkdkdk");
$huy1 = new huy("hi");
print_r($huy);
print_r($huy1);
echo $huy->data."\n";
echo $huy1->data."\n";
eval("echo 1;");
fgets(STDIN);