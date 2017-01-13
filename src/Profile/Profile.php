<?php

namespace TmobLabs\Tappz\Profile;

Class Profile{

	public $accessToken;
	public $fullName;
	public $firstName;
	public $lastName;
	public $gender;
	public $IsSubscribe;
	public $isSMSSubscribe;
	public $birthDate;
	public $accept;
	public $email;
	public $phone;
	public $password;
	public $addresses;
	public $giftCheques;
	public $points;
	public $ErrorCode;
	public $Message;
	public $UserFriendly;

	/**
	 * @return mixed
	 */
	public function getAccessToken()
	{
		return $this->accessToken;
	}

	/**
	 * @param mixed $accessToken
	 */
	public function setAccessToken($accessToken)
	{
		$this->accessToken = $accessToken;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getFullName()
	{
		return $this->fullName;
	}

	/**
	 * @param mixed $fullName
	 */
	public function setFullName($fullName)
	{
		$this->fullName = $fullName;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getFirstName()
	{
		return $this->firstName;
	}

	/**
	 * @param mixed $firstName
	 */
	public function setFirstName($firstName)
	{
		$this->firstName = $firstName;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getLastName()
	{
		return $this->lastName;
	}

	/**
	 * @param mixed $lastName
	 */
	public function setLastName($lastName)
	{
		$this->lastName = $lastName;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getGender()
	{
		return $this->gender;
	}

	/**
	 * @param mixed $gender
	 */
	public function setGender($gender)
	{
		$this->gender = $gender;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getIsSubscribe()
	{
		return $this->IsSubscribe;
	}

	/**
	 * @param mixed $IsSubscribe
	 */
	public function setIsSubscribe($IsSubscribe)
	{
		$this->IsSubscribe = $IsSubscribe;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getIsSMSSubscribe()
	{
		return $this->isSMSSubscribe;
	}

	/**
	 * @param mixed $isSMSSubscribe
	 */
	public function setIsSMSSubscribe($isSMSSubscribe)
	{
		$this->isSMSSubscribe = $isSMSSubscribe;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getBirthDate()
	{
		return $this->birthDate;
	}

	/**
	 * @param mixed $birthDate
	 */
	public function setBirthDate($birthDate)
	{
		$this->birthDate = $birthDate;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getAccept()
	{
		return $this->accept;
	}

	/**
	 * @param mixed $accept
	 */
	public function setAccept($accept)
	{
		$this->accept = $accept;
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
	public function getPhone()
	{
		return $this->phone;
	}

	/**
	 * @param mixed $phone
	 */
	public function setPhone($phone)
	{
		$this->phone = $phone;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getPassword()
	{
		return $this->password;
	}

	/**
	 * @param mixed $password
	 */
	public function setPassword($password)
	{
		$this->password = $password;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getAddresses()
	{
		return $this->addresses;
	}

	/**
	 * @param mixed $addresses
	 */
	public function setAddresses($addresses)
	{
		$this->addresses = $addresses;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getGiftCheques()
	{
		return $this->giftCheques;
	}

	/**
	 * @param mixed $giftCheques
	 */
	public function setGiftCheques($giftCheques)
	{
		$this->giftCheques = $giftCheques;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getPoints()
	{
		return $this->points;
	}

	/**
	 * @param mixed $points
	 */
	public function setPoints($points)
	{
		$this->points = $points;
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

	/**
	 * @return mixed
	 */
	public function getUserFriendly()
	{
		return $this->UserFriendly;
	}

	/**
	 * @param mixed $UserFriendly
	 */
	public function setUserFriendly($UserFriendly)
	{
		$this->UserFriendly = $UserFriendly;
		return $this;
	}



}