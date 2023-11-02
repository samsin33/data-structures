<?php

namespace DS\Nodes;

class DCLLNode extends Node
{
	/**
	 * @var DCLLNode $previous
	 */
	private DCLLNode $previous;

	/**
	 * @var DCLLNode $next
	 */
	private DCLLNode $next;

	public function __construct(int $id = null)
	{
		parent::__construct($id);
		$this->setPrevious($this);
		$this->setNext($this);
	}

	/**
	 * @return DCLLNode
	 */
	public function getPrevious(): DCLLNode
	{
		return $this->previous;
	}

	/**
	 * @param DCLLNode $previous
	 * @return void
	 */
	public function setPrevious(DCLLNode $previous): void
	{
		$this->previous = &$previous;
	}

	/**
	 * @return DCLLNode
	 */
	public function getNext(): DCLLNode
	{
		return $this->next;
	}

	/**
	 * @param DCLLNode $next
	 * @return void
	 */
	public function setNext(DCLLNode $next): void
	{
		$this->next = &$next;
	}
}
