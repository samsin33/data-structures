<?php

namespace DS\Nodes;

class DLLNode extends Node
{
	/**
	 * @var DLLNode|null $previous
	 */
	private ?DLLNode $previous =  null;

	/**
	 * @var DLLNode|null $next
	 */
	private ?DLLNode $next = null;

	/**
	 * @return DLLNode|null
	 */
	public function getPrevious(): ?DLLNode
	{
		return $this->previous;
	}

	/**
	 * @param DLLNode $previous
	 * @return void
	 */
	public function setPrevious(DLLNode $previous): void
	{
		$this->previous = &$previous;
	}

	/**
	 * @return DLLNode|null
	 */
	public function getNext(): ?DLLNode
	{
		return $this->next;
	}

	/**
	 * @param DLLNode $next
	 * @return void
	 */
	public function setNext(DLLNode $next): void
	{
		$this->next = &$next;
	}
}
