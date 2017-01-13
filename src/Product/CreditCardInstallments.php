<?php
/**
 * Created by PhpStorm.
 * User: dzgok
 * Date: 26/12/2016
 * Time: 09:37
 */

namespace TmobLabs\Tappz\Product;


class CreditCardInstallments
{
    public $image ;
    public $type ;
    public $threeDStatus ;
    public $displayName ;
    public $installmentNumber ;
    public $installments ;

    /**
     * CreditCardInstallments constructor.
     * @param $installments
     */
    public function __construct($installments = null)
    {
        $this->installments = $installments;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return mixed
     */
    public function getThreeDStatus()
    {
        return $this->threeDStatus;
    }

    /**
     * @return mixed
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @return mixed
     */
    public function getInstallmentNumber()
    {
        return $this->installmentNumber;
    }

    /**
     * @return mixed
     */
    public function getInstallments()
    {
        return $this->installments;
    }

	/**
	 * @param mixed $image
	 */
	public function setImage($image)
	{
		$this->image = $image;
		return $this;
	}

	/**
	 * @param mixed $type
	 */
	public function setType($type)
	{
		$this->type = $type;
		return $this;
	}

	/**
	 * @param mixed $threeDStatus
	 */
	public function setThreeDStatus($threeDStatus)
	{
		$this->threeDStatus = $threeDStatus;
		return $this;
	}

	/**
	 * @param mixed $displayName
	 */
	public function setDisplayName($displayName)
	{
		$this->displayName = $displayName;
		return $this;
	}

	/**
	 * @param mixed $installmentNumber
	 */
	public function setInstallmentNumber($installmentNumber)
	{
		$this->installmentNumber = $installmentNumber;
		return $this;
	}

	/**
	 * @param mixed $installments
	 */
	public function setInstallments($installments)
	{
		$this->installments = $installments;
		return $this;
	}


}