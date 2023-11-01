<?php

namespace DS\Nodes;

abstract class Node
{
	/**
	 * @var int $id
	 */
	private int $id;

	public function __construct(int $id = null)
	{
		$this->setId($id);
	}

	/**
	 * @return int
	 */
	public function getId(): int
	{
		return $this->id;
	}

	/**
	 * @param int $id
	 * @return void
	 */
	public function setId(int $id): void
	{
		$this->id = $id;
	}
}
