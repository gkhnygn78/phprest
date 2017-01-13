<?php
/**
 * Created by PhpStorm.
 * User: dzgok
 * Date: 26/12/2016
 * Time: 09:49
 */

namespace TmobLabs\Tappz\Product;


class Installments
{
    public $installmentNumber;
    public $installmentPayment;
    public $total;

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
    public function getInstallmentPayment()
    {
        return $this->installmentPayment;
    }

    /**
     * @return mixed
     */
    public function getTotal()
    {
        return $this->total;
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
     * @param mixed $installmentPayment
     */
    public function setInstallmentPayment($installmentPayment)
    {
        $this->installmentPayment = $installmentPayment;
        return $this;
    }

    /**
     * @param mixed $total
     */
    public function setTotal($total)
    {
        $this->total = $total;
        return $this;
    }

}