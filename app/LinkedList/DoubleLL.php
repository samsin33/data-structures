<?php

namespace DS\LinkedList;

use DS\Nodes\DLLNode;

class DoubleLL
{
	/**
	 * @var DLLNode|null $first_node
	 */
	private DLLNode|null $first_node;

	public function __construct(DLLNode $node = null)
	{
		if (!empty($node)) {
			$this->setFirstNode($node);
		}
	}

	/**
	 * @return DLLNode|null
	 */
	private function getLastNode(): ?DLLNode
	{
		$node = $this->getFirstNode();
		if (!empty($node)) {
			while ($node->getNext() != null) {
				$node = $node->getNext();
			}
			return $node;
		}
		return null;
	}

	/**
	 * @return DLLNode|null
	 */
	public function getFirstNode(): ?DLLNode
	{
		return $this->first_node ?? null;
	}

	/**
	 * @param DLLNode $node
	 * @return void
	 */
	public function setFirstNode(DLLNode $node): void
	{
		$this->first_node = $node;
	}

	/**
	 * @param DLLNode $node
	 * @return void
	 */
	public function addNode(DLLNode $node): void
	{
		$last_node = $this->getLastNode();
		if (empty($last_node)) {
			$this->setFirstNode($node);
		} else {
			$last_node->setNext($node);
			$node->setPrevious($last_node);
		}
	}

	/**
	 * @return void
	 */
	public function showList(): void
	{
		echo '<h3>Double Linked List</h3>';
		$node = $this->getFirstNode();
		if (!empty($node)) {
			for ($i = 1; $node != null; $i++) {
				echo '======================<br />';
				$x = json_encode($node->getPrevious());
				echo "Node $i Previous - $x<br />";
				echo "Node $i Id - {$node->getId()}<br />";
				$x = json_encode($node->getNext());
				echo "Node $i - $x<br />";
				echo '======================<br />';
				$node = $node->getNext();
			}
		} else {
			echo '<h3>Empty Double Linked List</h3>';
		}
	}
}
