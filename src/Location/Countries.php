<?php
namespace TmobLabs\Tappz\Location;


Class Countries{
	public $countries ;
	public $ErrorCode ;
	public $Message ;
	public $UserFriendly ;


	/**
	 * @return mixed
	 */
	public function getCountries()
	{
		return $this->countries;
	}

	/**
	 * @param mixed $countries
	 */
	public function setCountries($countries)
	{
		$this->countries = $countries;
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