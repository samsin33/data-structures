<?php

namespace DS\Sorting;

class BubbleSort extends Sort
{
	/**
	 * @param array $unsorted
	 * @return void
	 */
	private function bubble(array &$unsorted): void
	{
		for ($i = 0; $i < count($unsorted); $i++) {
			$swapped = false;
			for ($j = 0; $j < count($unsorted) - 1; $j++) {
				if ($unsorted[$j] > $unsorted[$j + 1]) {
					$this->swap($unsorted[$j], $unsorted[$j + 1]);
					$swapped = true;
				}
			}
			if (!$swapped) {
				break;
			}
		}
	}

	/**
	 * @return void
	 */
	public function doSort(): void
	{
		echo '=======================<br />';
		echo '<h3>Bubble Sort</h3>';
		echo '<h3>Unsort Array</h3>';
		$data = $this->getSortingData();
		$this->showData($data);
		$this->bubble($data);
		echo '<h3>Sorted Array</h3>';
		$this->setSortingData($data);
		$this->showData($this->getSortingData());
		echo '=======================<br />';
	}
}
