<?php

namespace DS\LinkedList;

use DS\Nodes\SCLLNode;

class SingleCircularLL
{
	/**
	 * @var SCLLNode|null $first_node
	 */
	private SCLLNode|null $first_node;

	public function __construct(SCLLNode $node = null)
	{
		if (!empty($node)) {
			$this->setFirstNode($node);
		}
	}

	/**
	 * @return SCLLNode|null
	 */
	private function getLastNode(): ?SCLLNode
	{
		$node = $this->getFirstNode();
		if (!empty($node)) {
			while ($node->getNext() !== $this->getFirstNode()) {
				$node = $node->getNext();
			}
			return $node;
		}
		return null;
	}

	/**
	 * @param SCLLNode $node
	 * @param int $i
	 * @return SCLLNode
	 */
	private function showNode(SCLLNode $node, int $i = 1): SCLLNode
	{
		echo '======================<br />';
		echo "Node $i Id - {$node->getId()}<br />";
		$x = json_encode($node->getNext());
		echo "Node $i Next - $x<br />";
		echo '======================<br />';
		return $node->getNext();
	}

	/**
	 * @return SCLLNode|null
	 */
	public function getFirstNode(): ?SCLLNode
	{
		return $this->first_node ?? null;
	}

	/**
	 * @param SCLLNode $node
	 * @return void
	 */
	public function setFirstNode(SCLLNode $node): void
	{
		$this->first_node = $node;
	}

	/**
	 * @param SCLLNode $node
	 * @return void
	 */
	public function addNode(SCLLNode $node): void
	{
		$last_node = $this->getLastNode();
		if (empty($last_node)) {
			$this->setFirstNode($node);
		} else {
			$node->setNext($this->getFirstNode());
			$last_node->setNext($node);
		}
	}

	/**
	 * @return void
	 */
	public function showList(): void
	{
		echo '<h3>Single Circular Linked List</h3>';
		$node = $this->getFirstNode();
		if (!empty($node)) {
			$node = $this->showNode($node);
			for ($i = 2; $node !== $this->getFirstNode(); $i++) {
				$node = $this->showNode($node, $i);
			}
		} else {
			echo '<h3>Empty Single Circular Linked List</h3>';
		}
	}
}
