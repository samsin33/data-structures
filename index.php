<html lang='en'>
	<head>
		<title>Data Structures</title>
	</head>
	<body>
        <h3><a href="jsort.php">Json Sort</a></h3>
        <?php
            include_once "app/Nodes/Node.php";
            include_once "app/LinkedList/SingleLL.php";
            include_once "app/Nodes/SLLNode.php";
            include_once "app/LinkedList/SingleCircularLL.php";
            include_once "app/Nodes/SCLLNode.php";
            include_once "app/LinkedList/DoubleLL.php";
            include_once "app/Nodes/DLLNode.php";
            include_once "app/LinkedList/DoubleCircularLL.php";
            include_once "app/Nodes/DCLLNode.php";
            include_once "app/Nodes/SNode.php";
            include_once "app/Stack/Stack.php";
            include_once "app/Nodes/QNode.php";
            include_once "app/Queue/Queue.php";

            $sll_node = new \DS\Nodes\SLLNode(100);
            $sll = new \DS\LinkedList\SingleLL($sll_node);
            $sll_node = new \DS\Nodes\SLLNode(200);
            $sll->addNode($sll_node);
            $sll->showList();

            $scll_node = new \DS\Nodes\SCLLNode(1100);
            $scll = new \DS\LinkedList\SingleCircularLL();
            $scll->showList();
            $scll->addNode($scll_node);
            $scll->showList();
            $scll_node = new \DS\Nodes\SCLLNode(2200);
            $scll->addNode($scll_node);
            $scll->showList();
            $scll_node = new \DS\Nodes\SCLLNode(3300);
            $scll->addNode($scll_node);
            $scll->showList();

            $dll_node = new \DS\Nodes\DLLNode(10);
            $dll = new \DS\LinkedList\DoubleLL($dll_node);
            $dll_node = new \DS\Nodes\DLLNode(20);
            $dll->addNode($dll_node);
            $dll_node = new \DS\Nodes\DLLNode(30);
            $dll->addNode($dll_node);
            $dll->showList();

            $dcll_node = new \DS\Nodes\DCLLNode(1122);
            $dcll = new \DS\LinkedList\DoubleCircularLL();
            $dcll->showList();
            $dcll->addNode($dcll_node);
            $dcll->showList();
            $dcll_node = new \DS\Nodes\DCLLNode(2233);
            $dcll->addNode($dcll_node);
            $dcll->showList();
            $dcll_node = new \DS\Nodes\DCLLNode(3344);
            $dcll->addNode($dcll_node);
            $dcll->showList();

            $s_node = new \DS\Nodes\SNode(111);
            $stack = new \DS\Stack\Stack($s_node);
            $stack->showStack();
            $stack->pop();
            $stack->showStack();
            $s_node = new \DS\Nodes\SNode(222);
            $stack->push($s_node);
            $s_node = new \DS\Nodes\SNode(333);
            $stack->push($s_node);
            $s_node = new \DS\Nodes\SNode(444);
            $stack->push($s_node);
            $stack->showStack();
            $stack->pop();
            $stack->showStack();

            $q_node = new \DS\Nodes\QNode(123);
            $queue = new \DS\Queue\Queue($q_node);
            $queue->showQueue();
            $queue->dequeue();
            $queue->showQueue();
            $q_node = new \DS\Nodes\QNode(234);
            $queue->enqueue($q_node);
            $queue->showQueue();
            $q_node = new \DS\Nodes\QNode(345);
            $queue->enqueue($q_node);
            $queue->showQueue();
            $q_node = new \DS\Nodes\QNode(456);
            $queue->enqueue($q_node);
            $queue->showQueue();
            $queue->dequeue();
            $queue->showQueue();
            $q_node = new \DS\Nodes\QNode(567);
            $queue->enqueue($q_node);
            $queue->showQueue();

        ?>
	</body>
</html>
