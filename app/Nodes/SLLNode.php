<?php

namespace DS\Nodes;

class SLLNode extends Node
{
	/**
	 * @var SLLNode|null
	 */
	private ?SLLNode $next = null;

	/**
	 * @return SLLNode|null
	 */
	public function getNext(): ?SLLNode
	{
		return $this->next;
	}

	/**
	 * @param SLLNode $next
	 * @return void
	 */
	public function setNext(SLLNode $next): void
	{
		$this->next = &$next;
	}
}
