<?php

namespace DS\Sorting;

abstract class Sort
{
	/**
	 * @var array $sorting_data
	 */
	protected array $sorting_data = [];

	public function __construct()
	{
		$this->setSortingData([6, 3, 8, 2, 5, 1, 9, 4, 10, 7]);
	}

	/**
	 * @return void
	 */
	abstract public function doSort(): void;

	/**
	 * @return array
	 */
	public function getSortingData(): array
	{
		return $this->sorting_data;
	}

	/**
	 * @param array $sorting_data
	 */
	public function setSortingData(array $sorting_data): void
	{
		$this->sorting_data = $sorting_data;
	}

	/**
	 * @param int $a
	 * @param int $b
	 * @return void
	 */
	protected function swap(int &$a, int &$b): void
	{
		$temp = $a;
		$a = $b;
		$b = $temp;
	}

	/**
	 * @param array $data
	 * @return void
	 */
	protected function showData(array $data): void
	{
		echo '=======================<br />';
		foreach ($data as $i => $value) {
			echo "Index $i - $value<br />";
		}
		echo '=======================<br />';
	}
}
