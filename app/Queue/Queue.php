<?php

namespace DS\Queue;

use DS\Nodes\QNode;

class Queue
{
	/**
	 * @var QNode|null $head
	 */
	private ?QNode $head = null;

	/**
	 * @var QNode|null $tail
	 */
	private ?QNode $tail = null;

	public function __construct(QNode $node = null)
	{
		$this->setHead($node);
		$this->setTail($node);
	}

	/**
	 * @return QNode|null
	 */
	public function getHead(): ?QNode
	{
		return $this->head;
	}

	/**
	 * @param QNode|null $head
	 */
	public function setHead(?QNode $head): void
	{
		$this->head = $head;
	}

	/**
	 * @return QNode|null
	 */
	public function getTail(): ?QNode
	{
		return $this->tail;
	}

	/**
	 * @param QNode|null $tail
	 */
	public function setTail(?QNode $tail): void
	{
		$this->tail = $tail;
	}

	/**
	 * @param QNode $node
	 * @return void
	 */
	public function enqueue(QNode $node): void
	{
		if (!empty($this->getTail())) {
			$node->setPrevious($this->getTail());
			$this->getTail()->setNext($node);
		} else {
			$this->setHead($node);
		}
		$this->setTail($node);
		echo "<br />Enqueued node - {$node->getId()}<br />";
	}

	/**
	 * @return void
	 */
	public function dequeue(): void
	{
		if ($this->getHead() === $this->getTail()) {
			echo "<br />Dequeued node - {$this->getHead()->getId()}<br />";
			$this->setHead(null);
			$this->setTail(null);
		} elseif (!empty($this->getHead())) {
			echo "<br />Dequeued node - {$this->getHead()->getId()}<br />";
			$this->setHead($this->getHead()->getNext());
			$this->getHead()->setPrevious(null);
		} else {
			echo '<h3>Cannot Dequeue Empty Queue</h3>';
		}
	}

	/**
	 * @return void
	 */
	public function showQueue(): void
	{
		$node = $this->getHead();
		if (!empty($node)) {
			echo '<h3>Queue List</h3>';
			for ($i = 1; $node != null; $i++) {
				echo '======================<br />';
				$x = json_encode($node->getPrevious());
				echo "Node $i Previous - $x<br />";
				echo "Node $i Id - {$node->getId()}<br />";
				$x = json_encode($node->getNext());
				echo "Node $i Next - $x<br />";
				echo '======================<br />';
				$node = $node->getNext();
			}
		} else {
			echo '<h3>Empty Queue</h3>';
		}
	}
}
