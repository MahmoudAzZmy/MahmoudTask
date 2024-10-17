<?php

namespace Tests\Unit;

test('true_is_true', function () {
    $this->assertTrue(true);
});

test('sum', function () {
    $result = 1+2;
    expect($result)->toBe(3);
});
