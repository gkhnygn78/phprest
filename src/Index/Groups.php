<?php
/**
 * Created by PhpStorm.
 * User: dzgok
 * Date: 02/01/2017
 * Time: 18:07
 */

namespace TmobLabs\Tappz\Index;


class Groups
{

	public $displayName;
	public $image;
	public $items;

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
		return $this;

	}

	/**
	 * @return mixed
	 */
	public function getImage()
	{
		return $this->image;
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
	 * @return mixed
	 */
	public function getItems()
	{
		return $this->items;
	}

	/**
	 * @param mixed $items
	 */
	public function setItems($items)
	{
		$this->items = $items;
		return $this;
	}

}