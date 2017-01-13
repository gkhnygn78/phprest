<?php
/**
 * Created by PhpStorm.
 * User: dzgok
 * Date: 02/01/2017
 * Time: 18:07
 */

namespace TmobLabs\Tappz\Index;


class Index
{
	public $groups;
	public $ads;
	public $ErrorCode;
	public $Message;
	public $UserFriendly;
	/**
	 * @return mixed
	 */
	public function getGroups()
	{
		return $this->groups;
	}

	/**
	 * @param mixed $groups
	 */
	public function setGroups($groups)
	{
		$this->groups = $groups;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getAds()
	{
		return $this->ads;
	}

	/**
	 * @param mixed $ads
	 */
	public function setAds($ads)
	{
		$this->ads = $ads;
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