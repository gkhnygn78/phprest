<?php
/**
 * Created by PhpStorm.
 * User: dzgok
 * Date: 13/01/2017
 * Time: 15:39
 */

namespace TmobLabs\Tappz\Basket;


class ShippingMethods
{
	public  $id;
	public  $displayName;
	public  $trackingAddress;
	public  $price;
	public  $priceForYou;
	public  $imageUrl;

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
	}

	/**
	 * @return mixed
	 */
	public function getDisplayName()
	{
		return $this->displayName;
	}

	/**
	 * @param mixed $displayName
	 */
	public function setDisplayName($displayName)
	{
		$this->displayName = $displayName;
	}

	/**
	 * @return mixed
	 */
	public function getTrackingAddress()
	{
		return $this->trackingAddress;
	}

	/**
	 * @param mixed $trackingAddress
	 */
	public function setTrackingAddress($trackingAddress)
	{
		$this->trackingAddress = $trackingAddress;
	}

	/**
	 * @return mixed
	 */
	public function getPrice()
	{
		return $this->price;
	}

	/**
	 * @param mixed $price
	 */
	public function setPrice($price)
	{
		$this->price = $price;
	}

	/**
	 * @return mixed
	 */
	public function getPriceForYou()
	{
		return $this->priceForYou;
	}

	/**
	 * @param mixed $priceForYou
	 */
	public function setPriceForYou($priceForYou)
	{
		$this->priceForYou = $priceForYou;
	}

	/**
	 * @return mixed
	 */
	public function getImageUrl()
	{
		return $this->imageUrl;
	}

	/**
	 * @param mixed $imageUrl
	 */
	public function setImageUrl($imageUrl)
	{
		$this->imageUrl = $imageUrl;
	}

}