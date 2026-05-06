<?php
declare(strict_types=1);
require __DIR__ . "/../src/DomainReview.php";

use Portfolio\DomainReview;
use Portfolio\DomainReviewLens;

$item = new DomainReview(46, 37, 16, 77);
assert(DomainReviewLens::score($item) === 158);
assert(DomainReviewLens::lane($item) === "ship");
