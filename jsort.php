<pre>
    <h3>Expected result in <a href="a.txt">a.txt</a></h3>
    <?php

    $txt = file_get_contents('f.txt');

    $prices = json_decode($txt, true)['prizes'];

    usort($prices, function ($a, $b) {
        return $a['year'] < $b['year'];
    });

    usort($prices, function ($a, $b) {
        return $a['category'] <=> $b['category'];
    });

    foreach ($prices as $key => $price) {
        foreach (($price['laureates'] ?? []) as $k => $laureate) {
            $prices[$key]['laureates'][$k]['fullname'] = ($laureate['firstname'] ?? '').' '.($laureate['surname'] ?? '');
        }
    }

    foreach ($prices as $key => $price) {
        if (!empty($price['laureates'])) {
            usort($price['laureates'], function ($a, $b) {
                return $a['fullname'] <=> $b['fullname'];
            });
            $prices[$key]['laureates'] = $price['laureates'];
        }
    }

    print_r($prices);

    $result = [];

    foreach ($prices as $key => $price) {
        $result[$price['year']][$price['category']] = $price['laureates'] ?? [];
    }

    print_r($result);

    file_put_contents('ans.txt', json_encode($result))

    ?>
</pre>
