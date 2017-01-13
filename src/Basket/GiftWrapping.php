<?php

namespace TmobLabs\Tappz\Basket;

class GiftWrapping
{
	public $id;
	public $trackingNumber;
	public $orderDate;
	public $shippingStatus;
	public $paymentStatus;
	public $lines;
	public $delivery;
	public $payment;
	public $currency;
	public $itemsPriceTotal;
	public $discountTotal;
	public $subTotal;
	public $shippingTotal;
	public $total;
	public $taxTotalValue;
	public $shippingTotalValue;
	public $totalValue;
	public $canChangeAddress;
	public $ErrorCode;
	public $Message;
	public $UserFriendly;
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
	public function getTrackingNumber()
	{
		return $this->trackingNumber;
	}

	/**
	 * @param mixed $trackingNumber
	 */
	public function setTrackingNumber($trackingNumber)
	{
		$this->trackingNumber = $trackingNumber;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getOrderDate()
	{
		return $this->orderDate;
	}

	/**
	 * @param mixed $orderDate
	 */
	public function setOrderDate($orderDate)
	{
		$this->orderDate = $orderDate;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getShippingStatus()
	{
		return $this->shippingStatus;
	}

	/**
	 * @param mixed $shippingStatus
	 */
	public function setShippingStatus($shippingStatus)
	{
		$this->shippingStatus = $shippingStatus;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getPaymentStatus()
	{
		return $this->paymentStatus;
	}

	/**
	 * @param mixed $paymentStatus
	 */
	public function setPaymentStatus($paymentStatus)
	{
		$this->paymentStatus = $paymentStatus;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getLines()
	{
		return $this->lines;
	}

	/**
	 * @param mixed $lines
	 */
	public function setLines($lines)
	{
		$this->lines = $lines;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getDelivery()
	{
		return $this->delivery;
	}

	/**
	 * @param mixed $delivery
	 */
	public function setDelivery($delivery)
	{
		$this->delivery = $delivery;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getPayment()
	{
		return $this->payment;
	}

	/**
	 * @param mixed $payment
	 */
	public function setPayment($payment)
	{
		$this->payment = $payment;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getCurrency()
	{
		return $this->currency;
	}

	/**
	 * @param mixed $currency
	 */
	public function setCurrency($currency)
	{
		$this->currency = $currency;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getItemsPriceTotal()
	{
		return $this->itemsPriceTotal;
	}

	/**
	 * @param mixed $itemsPriceTotal
	 */
	public function setItemsPriceTotal($itemsPriceTotal)
	{
		$this->itemsPriceTotal = $itemsPriceTotal;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getDiscountTotal()
	{
		return $this->discountTotal;
	}

	/**
	 * @param mixed $discountTotal
	 */
	public function setDiscountTotal($discountTotal)
	{
		$this->discountTotal = $discountTotal;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getSubTotal()
	{
		return $this->subTotal;
	}

	/**
	 * @param mixed $subTotal
	 */
	public function setSubTotal($subTotal)
	{
		$this->subTotal = $subTotal;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getShippingTotal()
	{
		return $this->shippingTotal;
	}

	/**
	 * @param mixed $shippingTotal
	 */
	public function setShippingTotal($shippingTotal)
	{
		$this->shippingTotal = $shippingTotal;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getTotal()
	{
		return $this->total;
	}

	/**
	 * @param mixed $total
	 */
	public function setTotal($total)
	{
		$this->total = $total;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getTaxTotalValue()
	{
		return $this->taxTotalValue;
	}

	/**
	 * @param mixed $taxTotalValue
	 */
	public function setTaxTotalValue($taxTotalValue)
	{
		$this->taxTotalValue = $taxTotalValue;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getShippingTotalValue()
	{
		return $this->shippingTotalValue;
	}

	/**
	 * @param mixed $shippingTotalValue
	 */
	public function setShippingTotalValue($shippingTotalValue)
	{
		$this->shippingTotalValue = $shippingTotalValue;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getTotalValue()
	{
		return $this->totalValue;
	}

	/**
	 * @param mixed $totalValue
	 */
	public function setTotalValue($totalValue)
	{
		$this->totalValue = $totalValue;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getCanChangeAddress()
	{
		return $this->canChangeAddress;
	}

	/**
	 * @param mixed $canChangeAddress
	 */
	public function setCanChangeAddress($canChangeAddress)
	{
		$this->canChangeAddress = $canChangeAddress;
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