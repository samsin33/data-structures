<?php

namespace DS\Stack;

use DS\Nodes\SNode;

class Stack
{
	private ?SNode $top = null;

	public function __construct(SNode $node = null)
	{
		$this->setTop($node);
	}

	/**
	 * @return SNode|null
	 */
	public function getTop(): ?SNode
	{
		return $this->top;
	}

	/**
	 * @param SNode|null $node
	 * @return void
	 */
	public function setTop(?SNode $node): void
	{
		$this->top = $node;
	}

	/**
	 * @param SNode $node
	 * @return void
	 */
	public function push(SNode $node): void
	{
		$node->setPrevious($this->getTop());
		$this->setTop($node);
		echo "<br />Pushed node - {$node->getId()}<br />";
	}

	/**
	 * @return void
	 */
	public function pop(): void
	{
		if (!empty($this->getTop())) {
			echo "<br />Popped node - {$this->getTop()->getId()}<br />";
			$this->setTop($this->getTop()->getPrevious());
		} else {
			echo "<br />Cannot Pop Empty Stack<br />";
		}
	}

	/**
	 * @return void
	 */
	public function showStack(): void
	{
		$node = $this->getTop();
		if (!empty($node)) {
			echo '<h3>Stack List</h3>';
			for ($i = 1; $node != null; $i++) {
				echo '======================<br />';
				$x = json_encode($node->getPrevious());
				echo "Node $i Previous - $x<br />";
				echo "Node $i Id - {$node->getId()}<br />";
				echo '======================<br />';
				$node = $node->getPrevious();
			}
		} else {
			echo '<h3>Empty Stack</h3>';
		}
	}
}
