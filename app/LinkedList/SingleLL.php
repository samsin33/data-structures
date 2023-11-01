<?php

namespace DS\LinkedList;

use DS\Nodes\SLLNode;

class SingleLL
{
	/**
	 * @var SLLNode|null $first_node
	 */
	private SLLNode|null $first_node;

	public function __construct(SLLNode $node = null)
	{
		if (!empty($node)) {
			$this->setFirstNode($node);
		}
	}

	/**
	 * @return SLLNode|null
	 */
	private function getLastNode(): ?SLLNode
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
	 * @return SLLNode|null
	 */
	public function getFirstNode(): ?SLLNode
	{
		return $this->first_node ?? null;
	}

	/**
	 * @param SLLNode $node
	 * @return void
	 */
	public function setFirstNode(SLLNode $node): void
	{
		$this->first_node = $node;
	}

	/**
	 * @param SLLNode $node
	 * @return void
	 */
	public function addNode(SLLNode $node): void
	{
		$last_node = $this->getLastNode();
		if (empty($last_node)) {
			$this->setFirstNode($node);
		} else {
			$last_node->setNext($node);
		}
	}

	/**
	 * @return void
	 */
	public function showList(): void
	{
		echo '<h3>Single Linked List</h3>';
		$node = $this->getFirstNode();
		if (!empty($node)) {
			for ($i = 1; $node != null; $i++) {
				echo '======================<br />';
				echo "Node $i - {$node->getId()}<br />";
				$x = json_encode($node->getNext());
				echo "Node $i - $x<br />";
				echo '======================<br />';
				$node = $node->getNext();
			}
		} else {
			echo '<h3>Empty Single Linked List</h3>';
		}
	}
}
