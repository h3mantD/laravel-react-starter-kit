<?php

declare(strict_types=1);
uses(Illuminate\Foundation\Testing\RefreshDatabase::class);

test('that true is true', function (): void {
    expect(true)->toBeTrue();
});
