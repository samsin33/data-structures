<?php

namespace DS\Nodes;

class QNode extends Node
{
	/**
	 * @var QNode|null $previous
	 */
	private ?QNode $previous = null;

	/**
	 * @var QNode|null $next
	 */
	private ?QNode $next = null;

	/**
	 * @return QNode|null
	 */
	public function getPrevious(): ?QNode
	{
		return $this->previous;
	}

	/**
	 * @param QNode|null $previous
	 */
	public function setPrevious(?QNode $previous): void
	{
		if (!empty($previous)) {
			$this->previous = &$previous;
		} else {
			$this->previous = null;
		}
	}

	/**
	 * @return QNode|null
	 */
	public function getNext(): ?QNode
	{
		return $this->next;
	}

	/**
	 * @param QNode|null $next
	 */
	public function setNext(?QNode $next): void
	{
		if (!empty($next)) {
			$this->next = &$next;
		} else {
			$this->next = null;
		}
	}
}
