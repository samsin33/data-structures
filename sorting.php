<html lang="en">
	<head>
		<title>Sorting</title>
	</head>
	<body>
        <h3><a href="index.php">Home</a></h3>
		<?php
			include_once 'app/Sorting/Sort.php';
			include_once 'app/Sorting/BubbleSort.php';
			include_once 'app/Sorting/HeapSort.php';
			include_once 'app/Sorting/InsertionSort.php';
			include_once 'app/Sorting/MergeSort.php';
			include_once 'app/Sorting/QuickSort.php';
			include_once 'app/Sorting/SelectionSort.php';
			include_once 'app/Sorting/ShellSort.php';

			$bubble = new \DS\Sorting\BubbleSort();
			$bubble->doSort();

            $selection = new \DS\Sorting\SelectionSort();
            $selection->doSort();

            $insertion = new \DS\Sorting\InsertionSort();
            $insertion->doSort();
		?>
	</body>
</html>
