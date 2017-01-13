<?php


namespace TmobLabs\Tappz\Address;

Class Address{

	public $id;
	public $addressName;
	public $name;
	public $surname;
	public $email;
	public $addressLine;
	public $country;
	public $countryCode;
	public $state;
	public $stateCode;
	public $city;
	public $cityCode;
	public $district;
	public $districtCode;
	public $town;
	public $townCode;
	public $corporate;
	public $companyTitle;
	public $taxDepartment;
	public $taxNo;
	public $phoneNumber;
	public $identityNo;
	public $zipCode;
	public $usCheckoutCity;
	public $ErrorCode;
	public $Message;

	/**
	 * @return mixed
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param mixed $id
	 */
	public function setId($id)
	{
		$this->id = $id;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getAddressName()
	{
		return $this->addressName;
	}

	/**
	 * @param mixed $addressName
	 */
	public function setAddressName($addressName)
	{
		$this->addressName = $addressName;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @param mixed $name
	 */
	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getSurname()
	{
		return $this->surname;
	}

	/**
	 * @param mixed $surname
	 */
	public function setSurname($surname)
	{
		$this->surname = $surname;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getEmail()
	{
		return $this->email;
	}

	/**
	 * @param mixed $email
	 */
	public function setEmail($email)
	{
		$this->email = $email;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getAddressLine()
	{
		return $this->addressLine;
	}

	/**
	 * @param mixed $addressLine
	 */
	public function setAddressLine($addressLine)
	{
		$this->addressLine = $addressLine;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getCountry()
	{
		return $this->country;
	}

	/**
	 * @param mixed $country
	 */
	public function setCountry($country)
	{
		$this->country = $country;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getCountryCode()
	{
		return $this->countryCode;
	}

	/**
	 * @param mixed $countryCode
	 */
	public function setCountryCode($countryCode)
	{
		$this->countryCode = $countryCode;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getState()
	{
		return $this->state;
	}

	/**
	 * @param mixed $state
	 */
	public function setState($state)
	{
		$this->state = $state;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getStateCode()
	{
		return $this->stateCode;
	}

	/**
	 * @param mixed $stateCode
	 */
	public function setStateCode($stateCode)
	{
		$this->stateCode = $stateCode;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getCity()
	{
		return $this->city;
	}

	/**
	 * @param mixed $city
	 */
	public function setCity($city)
	{
		$this->city = $city;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getCityCode()
	{
		return $this->cityCode;
	}

	/**
	 * @param mixed $cityCode
	 */
	public function setCityCode($cityCode)
	{
		$this->cityCode = $cityCode;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getDistrict()
	{
		return $this->district;
	}

	/**
	 * @param mixed $district
	 */
	public function setDistrict($district)
	{
		$this->district = $district;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getDistrictCode()
	{
		return $this->districtCode;
	}

	/**
	 * @param mixed $districtCode
	 */
	public function setDistrictCode($districtCode)
	{
		$this->districtCode = $districtCode;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getTown()
	{
		return $this->town;
	}

	/**
	 * @param mixed $town
	 */
	public function setTown($town)
	{
		$this->town = $town;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getTownCode()
	{
		return $this->townCode;
	}

	/**
	 * @param mixed $townCode
	 */
	public function setTownCode($townCode)
	{
		$this->townCode = $townCode;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getCorporate()
	{
		return $this->corporate;
	}

	/**
	 * @param mixed $corporate
	 */
	public function setCorporate($corporate)
	{
		$this->corporate = $corporate;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getCompanyTitle()
	{
		return $this->companyTitle;
	}

	/**
	 * @param mixed $companyTitle
	 */
	public function setCompanyTitle($companyTitle)
	{
		$this->companyTitle = $companyTitle;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getTaxDepartment()
	{
		return $this->taxDepartment;
	}

	/**
	 * @param mixed $taxDepartment
	 */
	public function setTaxDepartment($taxDepartment)
	{
		$this->taxDepartment = $taxDepartment;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getTaxNo()
	{
		return $this->taxNo;
	}

	/**
	 * @param mixed $taxNo
	 */
	public function setTaxNo($taxNo)
	{
		$this->taxNo = $taxNo;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getPhoneNumber()
	{
		return $this->phoneNumber;
	}

	/**
	 * @param mixed $phoneNumber
	 */
	public function setPhoneNumber($phoneNumber)
	{
		$this->phoneNumber = $phoneNumber;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getIdentityNo()
	{
		return $this->identityNo;
	}

	/**
	 * @param mixed $identityNo
	 */
	public function setIdentityNo($identityNo)
	{
		$this->identityNo = $identityNo;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getZipCode()
	{
		return $this->zipCode;
	}

	/**
	 * @param mixed $zipCode
	 */
	public function setZipCode($zipCode)
	{
		$this->zipCode = $zipCode;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getUsCheckoutCity()
	{
		return $this->usCheckoutCity;
	}

	/**
	 * @param mixed $usCheckoutCity
	 */
	public function setUsCheckoutCity($usCheckoutCity)
	{
		$this->usCheckoutCity = $usCheckoutCity;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getErrorCode()
	{
		return $this->ErrorCode;
	}

	/**
	 * @param mixed $ErrorCode
	 */
	public function setErrorCode($ErrorCode)
	{
		$this->ErrorCode = $ErrorCode;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getMessage()
	{
		return $this->Message;
	}

	/**
	 * @param mixed $Message
	 */
	public function setMessage($Message)
	{
		$this->Message = $Message;
		return $this;
	}


}