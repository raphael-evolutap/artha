<?php

declare(strict_types=1);

it('may welcome the user', function () {
    $page = visit('/')->on()->iPhone14Pro();
    $page->debug();
    $page->assertSee('Artha');
});
