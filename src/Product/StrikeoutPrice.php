<?php
/**
 * Created by PhpStorm.
 * User: dzgok
 * Date: 26/12/2016
 * Time: 09:37
 */

namespace TmobLabs\Tappz\Product;


class StrikeoutPrice
{
    public $amount ;
    public $currency ;
    public $amountDefaultCurrency ;

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param mixed $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
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
    public function getAmountDefaultCurrency()
    {
        return $this->amountDefaultCurrency;
    }

    /**
     * @param mixed $amountDefaultCurrency
     */
    public function setAmountDefaultCurrency($amountDefaultCurrency)
    {
        $this->amountDefaultCurrency = $amountDefaultCurrency;
        return $this;
    }

}