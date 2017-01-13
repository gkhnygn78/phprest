<?php

/**
 * @author   dzgok  <dgokdunek@tmobtech.com>
 * @license  https://raw.githubusercontent.com/tappz/magento2/master/LICENCE
 *
 * @link     http://t-appz.com/
 */


namespace TmobLabs\Tappz\Basket;
/**
 * Class Category.
 */
class Basket
{
	public $id;
	public $currency;
	public $itemsPriceTotal;
	public $subTotal;
	public $beforeTaxTotal;
	public $taxTotal;
	public $shippingTotal;
	public $total;
	public $errors;
	public $spentGiftChequeTotal;
	public $discountTotal;
	public $usedPoints;
	public $usedPointsAmount;
	public $rewardPoints;
	public $paymentFee;
	public $estimatedSupplyDate;
	public $expirationTime;
	public $lines;
	public $shippingMethods;
	public $delivery;
	public $billingAddress;
	public $paymentOptions;
	public $payment;
	public $giftCheques;
	public $discounts;
	public $isGiftWrappingEnabled;
	public $giftWrapping;
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
	public function getBeforeTaxTotal()
	{
		return $this->beforeTaxTotal;
	}

	/**
	 * @param mixed $beforeTaxTotal
	 */
	public function setBeforeTaxTotal($beforeTaxTotal)
	{
		$this->beforeTaxTotal = $beforeTaxTotal;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getTaxTotal()
	{
		return $this->taxTotal;
	}

	/**
	 * @param mixed $taxTotal
	 */
	public function setTaxTotal($taxTotal)
	{
		$this->taxTotal = $taxTotal;
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
	public function getErrors()
	{
		return $this->errors;
	}

	/**
	 * @param mixed $errors
	 */
	public function setErrors($errors)
	{
		$this->errors = $errors;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getSpentGiftChequeTotal()
	{
		return $this->spentGiftChequeTotal;
	}

	/**
	 * @param mixed $spentGiftChequeTotal
	 */
	public function setSpentGiftChequeTotal($spentGiftChequeTotal)
	{
		$this->spentGiftChequeTotal = $spentGiftChequeTotal;
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
	public function getUsedPoints()
	{
		return $this->usedPoints;
	}

	/**
	 * @param mixed $usedPoints
	 */
	public function setUsedPoints($usedPoints)
	{
		$this->usedPoints = $usedPoints;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getUsedPointsAmount()
	{
		return $this->usedPointsAmount;
	}

	/**
	 * @param mixed $usedPointsAmount
	 */
	public function setUsedPointsAmount($usedPointsAmount)
	{
		$this->usedPointsAmount = $usedPointsAmount;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getRewardPoints()
	{
		return $this->rewardPoints;
	}

	/**
	 * @param mixed $rewardPoints
	 */
	public function setRewardPoints($rewardPoints)
	{
		$this->rewardPoints = $rewardPoints;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getPaymentFee()
	{
		return $this->paymentFee;
	}

	/**
	 * @param mixed $paymentFee
	 */
	public function setPaymentFee($paymentFee)
	{
		$this->paymentFee = $paymentFee;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getEstimatedSupplyDate()
	{
		return $this->estimatedSupplyDate;
	}

	/**
	 * @param mixed $estimatedSupplyDate
	 */
	public function setEstimatedSupplyDate($estimatedSupplyDate)
	{
		$this->estimatedSupplyDate = $estimatedSupplyDate;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getExpirationTime()
	{
		return $this->expirationTime;
	}

	/**
	 * @param mixed $expirationTime
	 */
	public function setExpirationTime($expirationTime)
	{
		$this->expirationTime = $expirationTime;
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
	public function getShippingMethods()
	{
		return $this->shippingMethods;
	}

	/**
	 * @param mixed $shippingMethods
	 */
	public function setShippingMethods($shippingMethods)
	{
		$this->shippingMethods = $shippingMethods;
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
	public function getBillingAddress()
	{
		return $this->billingAddress;
	}

	/**
	 * @param mixed $billingAddress
	 */
	public function setBillingAddress($billingAddress)
	{
		$this->billingAddress = $billingAddress;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getPaymentOptions()
	{
		return $this->paymentOptions;
	}

	/**
	 * @param mixed $paymentOptions
	 */
	public function setPaymentOptions($paymentOptions)
	{
		$this->paymentOptions = $paymentOptions;
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
	public function getDiscounts()
	{
		return $this->discounts;
	}

	/**
	 * @param mixed $discounts
	 */
	public function setDiscounts($discounts)
	{
		$this->discounts = $discounts;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getIsGiftWrappingEnabled()
	{
		return $this->isGiftWrappingEnabled;
	}

	/**
	 * @param mixed $isGiftWrappingEnabled
	 */
	public function setIsGiftWrappingEnabled($isGiftWrappingEnabled)
	{
		$this->isGiftWrappingEnabled = $isGiftWrappingEnabled;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getGiftWrapping()
	{
		return $this->giftWrapping;
	}

	/**
	 * @param mixed $giftWrapping
	 */
	public function setGiftWrapping($giftWrapping)
	{
		$this->giftWrapping = $giftWrapping;
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