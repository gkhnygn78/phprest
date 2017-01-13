<?php

/**
 * @author   dzgok  <dgokdunek@tmobtech.com>
 * @license  https://raw.githubusercontent.com/tappz/magento2/master/LICENCE
 *
 * @link     http://t-appz.com/
 */


namespace TmobLabs\Tappz\Category;
/**
 * Class Category.
 */
class Category
{
    /**
     * @var
     */
    public $id;
    public $name;
    public $isRoot;
    public $isLeaf;
    public $parentCategoryId;
    public $children;
    public $description;
    public $errorCode;
    public $message;
    public $userFriendly;

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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsRoot()
    {
        return $this->isRoot;
    }

    /**
     * @param mixed $isRoot
     */
    public function setIsRoot($isRoot)
    {
        $this->isRoot = $isRoot;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsLeaf()
    {
        return $this->isLeaf;
    }

    /**
     * @param mixed $isLeaf
     */
    public function setIsLeaf($isLeaf)
    {
        $this->isLeaf = $isLeaf;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getParentCategoryId()
    {
        return $this->parentCategoryId;
    }

    /**
     * @param mixed $parentCategoryId
     */
    public function setParentCategoryId($parentCategoryId)
    {
        $this->parentCategoryId = $parentCategoryId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * @param mixed $children
     */
    public function setChildren($children)
    {
        $this->children = $children;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * @param mixed $errorCode
     */
    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUserFriendly()
    {
        return $this->userFriendly;
    }

    /**
     * @param mixed $userFriendly
     */
    public function setUserFriendly($userFriendly)
    {
        $this->userFriendly = $userFriendly;
        return $this;
    }

}
