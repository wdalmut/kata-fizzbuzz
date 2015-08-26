<?php
require __DIR__ . '/vendor/autoload.php';

$content = file_get_contents($argv[1]);

foreach (explode("\n", $content) as $line) {

    if (!$line) {
        return;
    }

    list($firstDivider, $secondDivider, $to) = explode(" ", $line);
    $fb = new FizzBuzz($firstDivider, $secondDivider);

    $list = range(1, (int)$to);

    $elements = [];
    foreach ($list as $piece) {
        $elements[] = $fb->say($piece);
    }

    echo sprintf("%s\n", implode(" ", $elements));
}




