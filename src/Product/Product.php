<?php

/**
 * @author   dzgok  <dgokdunek@tmobtech.com>
 * @license  https://raw.githubusercontent.com/tappz/magento2/master/LICENCE
 *
 * @link     http://t-appz.com/
 */


namespace TmobLabs\Tappz\Product;
/**
 * Class Category.
 */
class Product
{
    public $id;

    public $productName;

    public $listPrice;

    public $noImageUrl;

    public $headline;

    public $strikeoutPrice;

    public $IsCampaign;

    public $creditCardInstallments;

    public $inStock;

    public $shipmentInformation;

    public $isShipmentFree;

    public $features;

    public $variants;

    public $shoutOutTexts;

    public $actions;

    public $picture;

    public $pictures;

    public $productDetailUrl;

    public $productUrl;

    public $points;

    public $isFavorite;

    public  $isBackInStockSubscription;

    public $backInStockSubSelectedVariant;

    public $additionaltexts;

    public $UserFriendly;

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
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @param mixed $productName
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getListPrice()
    {
        return $this->listPrice;
    }

    /**
     * @param mixed $listPrice
     */
    public function setListPrice($listPrice)
    {
        $this->listPrice = $listPrice;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNoImageUrl()
    {
        return $this->noImageUrl;
    }

    /**
     * @param mixed $noImageUrl
     */
    public function setNoImageUrl($noImageUrl)
    {
        $this->noImageUrl = $noImageUrl;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHeadline()
    {
        return $this->headline;
    }

    /**
     * @param mixed $headline
     */
    public function setHeadline($headline)
    {
        $this->headline = $headline;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStrikeoutPrice()
    {
        return $this->strikeoutPrice;
    }

    /**
     * @param mixed $strikeoutPrice
     */
    public function setStrikeoutPrice($strikeoutPrice)
    {
        $this->strikeoutPrice = $strikeoutPrice;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsCampaign()
    {
        return $this->IsCampaign;
    }

    /**
     * @param mixed $IsCampaign
     */
    public function setIsCampaign($IsCampaign)
    {
        $this->IsCampaign = $IsCampaign;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreditCardInstallments()
    {
        return $this->creditCardInstallments;
    }

    /**
     * @param mixed $creditCardInstallments
     */
    public function setCreditCardInstallments($creditCardInstallments)
    {
        $this->creditCardInstallments = $creditCardInstallments;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInStock()
    {
        return $this->inStock;
    }

    /**
     * @param mixed $inStock
     */
    public function setInStock($inStock)
    {
        $this->inStock = $inStock;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getShipmentInformation()
    {
        return $this->shipmentInformation;
    }

    /**
     * @param mixed $shipmentInformation
     */
    public function setShipmentInformation($shipmentInformation)
    {
        $this->shipmentInformation = $shipmentInformation;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsShipmentFree()
    {
        return $this->isShipmentFree;
    }

    /**
     * @param mixed $isShipmentFree
     */
    public function setIsShipmentFree($isShipmentFree)
    {
        $this->isShipmentFree = $isShipmentFree;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFeatures()
    {
        return $this->features;
    }

    /**
     * @param mixed $features
     */
    public function setFeatures($features)
    {
        $this->features = $features;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVariants()
    {
        return $this->variants;
    }

    /**
     * @param mixed $variants
     */
    public function setVariants($variants)
    {
        $this->variants = $variants;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getShoutOutTexts()
    {
        return $this->shoutOutTexts;
    }

    /**
     * @param mixed $shoutOutTexts
     */
    public function setShoutOutTexts($shoutOutTexts)
    {
        $this->shoutOutTexts = $shoutOutTexts;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * @param mixed $actions
     */
    public function setActions($actions)
    {
        $this->actions = $actions;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * @param mixed $picture
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPictures()
    {
        return $this->pictures;
    }

    /**
     * @param mixed $pictures
     */
    public function setPictures($pictures)
    {
        $this->pictures = $pictures;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProductDetailUrl()
    {
        return $this->productDetailUrl;
    }

    /**
     * @param mixed $productDetailUrl
     */
    public function setProductDetailUrl($productDetailUrl)
    {
        $this->productDetailUrl = $productDetailUrl;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProductUrl()
    {
        return $this->productUrl;
    }

    /**
     * @param mixed $productUrl
     */
    public function setProductUrl($productUrl)
    {
        $this->productUrl = $productUrl;
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
    public function getIsFavorite()
    {
        return $this->isFavorite;
    }

    /**
     * @param mixed $isFavorite
     */
    public function setIsFavorite($isFavorite)
    {
        $this->isFavorite = $isFavorite;
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
	public function getIsBackInStockSubscription()
	{
		return $this->isBackInStockSubscription;
	}

	/**
	 * @return mixed
	 */
	public function getBackInStockSubSelectedVariant()
	{
		return $this->backInStockSubSelectedVariant;
	}

	/**
	 * @return mixed
	 */
	public function getAdditionaltexts()
	{
		return $this->additionaltexts;
	}

	/**
	 * @param mixed $isBackInStockSubscription
	 */
	public function setIsBackInStockSubscription($isBackInStockSubscription)
	{
		$this->isBackInStockSubscription = $isBackInStockSubscription;
		return $this;
	}

	/**
	 * @param mixed $backInStockSubSelectedVariant
	 */
	public function setBackInStockSubSelectedVariant($backInStockSubSelectedVariant)
	{
		$this->backInStockSubSelectedVariant = $backInStockSubSelectedVariant;
		return $this;
	}

	/**
	 * @param mixed $additionaltexts
	 */
	public function setAdditionaltexts($additionaltexts)
	{
		$this->additionaltexts = $additionaltexts;
		return $this;
	}




}