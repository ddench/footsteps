<?php
class TestClass
{
	public $property1 = "I'm a class property!";
	public function __construct()
	{
		echo'The class"', __CLASS__, '" was initiated!<br/>';
	}
	public function setProperty($newvalue)
	{
		$this->property1 = $newvalue;
	}
	public function getProperty()
	{
		return $this->property1 . "<br />";
	}
}
$object1 = new TestClass;

echo $object1->getProperty();

echo "End of file.<br/>";
phpinfo();
?>
