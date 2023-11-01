<?php

namespace DS\Nodes;

class SNode extends Node
{
	private ?SNode $previous = null;

	/**
	 * @return SNode|null
	 */
	public function getPrevious(): ?SNode
	{
		return $this->previous;
	}

	/**
	 * @param SNode|null $previous
	 * @return void
	 */
	public function setPrevious(?SNode $previous): void
	{
		if (!empty($previous)) {
			$this->previous = &$previous;
		} else {
			$this->previous = null;
		}
	}
}
