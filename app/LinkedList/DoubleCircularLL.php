<?php

namespace DS\LinkedList;

use DS\Nodes\DCLLNode;

class DoubleCircularLL
{
	/**
	 * @var DCLLNode|null $first_node
	 */
	private DCLLNode|null $first_node;

	public function __construct(DCLLNode $node = null)
	{
		if (!empty($node)) {
			$this->setFirstNode($node);
		}
	}

	/**
	 * @return DCLLNode|null
	 */
	private function getLastNode(): ?DCLLNode
	{
		$node = $this->getFirstNode();
		if (!empty($node)) {
			return $node->getPrevious();
		}
		return null;
	}

	/**
	 * @param DCLLNode $node
	 * @param int $i
	 * @return DCLLNode
	 */
	private function showNode(DCLLNode $node, int $i = 1): DCLLNode
	{
		echo '======================<br />';
		$x = json_encode($node->getPrevious());
		echo "Node $i Previous - $x<br />";
		echo "Node $i Id - {$node->getId()}<br />";
		$x = json_encode($node->getNext());
		echo "Node $i Next - $x<br />";
		echo '======================<br />';
		return $node->getNext();
	}

	/**
	 * @return DCLLNode|null
	 */
	public function getFirstNode(): ?DCLLNode
	{
		return $this->first_node ?? null;
	}

	/**
	 * @param DCLLNode $node
	 * @return void
	 */
	public function setFirstNode(DCLLNode $node): void
	{
		$this->first_node = $node;
	}

	/**
	 * @param DCLLNode $node
	 * @return void
	 */
	public function addNode(DCLLNode $node): void
	{
		$last_node = $this->getLastNode();
		if (empty($last_node)) {
			$this->setFirstNode($node);
		} else {
			$node->setPrevious($last_node);
			$node->setNext($this->getFirstNode());
			$last_node->setNext($node);
			$this->getFirstNode()->setPrevious($node);
		}
	}

	/**
	 * @return void
	 */
	public function showList(): void
	{
		echo '<h3>Double Circular Linked List</h3>';
		$node = $this->getFirstNode();
		if (!empty($node)) {
			$node = $this->showNode($node);
			for ($i = 2; $node !== $this->getFirstNode(); $i++) {
				$node = $this->showNode($node, $i);
			}
		} else {
			echo '<h3>Empty Double Circular Linked List</h3>';
		}
	}
}
