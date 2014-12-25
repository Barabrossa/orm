<?php

/**
 * This file is part of the Nextras\ORM library.
 *
 * @license    MIT
 * @link       https://github.com/nextras/orm
 * @author     Jan Skrasek
 */

namespace Nextras\Orm\Entity;

use Nextras\Orm\Entity\Reflection\PropertyMetadata;


interface IProperty
{

	public function __construct(IEntity $entity, PropertyMetadata $propertyMetadata);


	/**
	 * Sets value loaded from database.
	 * @param  mixed $value
	 */
	public function setLoadedValue($value);


	/**
	 * Adds onModify callback notification.
	 * @param  mixed $callback
	 */
	public function onModify($callback);

}
