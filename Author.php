<?php
final class Author {
	public $id;
	public $name;
	public $country;
	public $dateOfBirth;
	public function __construct($id, $name, $country, DateTime $dateOfBirth) {
		$this->id = $id;
		$this->name = $name;
		$this->country = $country;
		$this->dateOfBirth = $dateOfBirth;
	}
}

?>