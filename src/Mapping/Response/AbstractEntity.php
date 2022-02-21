<?php declare(strict_types = 1);

namespace Apitte\Core\Mapping\Response;

use ArrayIterator;
use IteratorAggregate;
use Traversable;

abstract class AbstractEntity implements IResponseEntity, IteratorAggregate
{

	/**
	 * @return mixed[]
	 */
	abstract public function toArray(): array;

	public function getIterator(): Traversable
	{
		return new ArrayIterator($this->toArray());
	}

}
