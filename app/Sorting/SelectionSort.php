<?php

namespace DS\Sorting;

class SelectionSort extends Sort
{
	/**
	 * @param array $unsorted
	 * @return void
	 */
	public function selection(array &$unsorted): void
	{
		for ($i = 0; $i < count($unsorted) - 1; $i++) {
			$min = $i;
			for ($j = $i + 1; $j < count($unsorted); $j++) {
				$min = $unsorted[$j] < $unsorted[$min] ? $j : $min;
			}
			if ($min != $i) {
				$this->swap($unsorted[$i], $unsorted[$min]);
			}
		}
	}

	/**
	 * @return void
	 */
	public function doSort(): void
	{
		echo '=======================<br />';
		echo '<h3>Selection Sort</h3>';
		echo '<h3>Unsort Array</h3>';
		$data = $this->getSortingData();
		$this->showData($data);
		$this->selection($data);
		echo '<h3>Sorted Array</h3>';
		$this->setSortingData($data);
		$this->showData($this->getSortingData());
		echo '=======================<br />';
	}
}
