<?php
declare(strict_types=1);
require __DIR__ . "/../src/Policy.php";

use Portfolio\Policy;
use Portfolio\Signal;

$signal_case_1 = new Signal(61, 100, 14, 15, 10);
assert(Policy::score($signal_case_1) === 106);
assert(Policy::classify($signal_case_1) === "review");
$signal_case_2 = new Signal(81, 89, 20, 21, 12);
assert(Policy::score($signal_case_2) === 81);
assert(Policy::classify($signal_case_2) === "review");
$signal_case_3 = new Signal(82, 81, 16, 22, 4);
assert(Policy::score($signal_case_3) === 61);
assert(Policy::classify($signal_case_3) === "review");
