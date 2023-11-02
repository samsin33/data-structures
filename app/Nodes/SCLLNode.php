<?php

namespace DS\Nodes;

class SCLLNode extends Node
{
	/**
	 * @var SCLLNode $next
	 */
	private SCLLNode $next;

	public function __construct(int $id = null)
	{
		parent::__construct($id);
		$this->setNext($this);
	}

	/**
	 * @return SCLLNode
	 */
	public function getNext(): SCLLNode
	{
		return $this->next;
	}

	/**
	 * @param SCLLNode $next
	 * @return void
	 */
	public function setNext(SCLLNode $next): void
	{
		$this->next = &$next;
	}
}
