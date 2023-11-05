<?php

namespace DS\Sorting;

class InsertionSort extends Sort
{
	/**
	 * @param array $unsorted
	 * @return void
	 */
	private function insertion(array &$unsorted): void
	{
		for ($i = 1; $i < count($unsorted); $i++) {
			for ($j = $i - 1, $key = $unsorted[$i]; $j >= 0 && $unsorted[$j] > $key; $j--) {
				$unsorted[$j + 1] = $unsorted[$j];
			}
			$unsorted[$j + 1] = $key;
		}
	}

	/**
	 * @return void
	 */
	public function doSort(): void
	{
		echo '=======================<br />';
		echo '<h3>Insertion Sort</h3>';
		echo '<h3>Unsort Array</h3>';
		$data = $this->getSortingData();
		$this->showData($data);
		$this->insertion($data);
		echo '<h3>Sorted Array</h3>';
		$this->setSortingData($data);
		$this->showData($this->getSortingData());
		echo '=======================<br />';
	}
}
