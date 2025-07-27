<?php

use Illuminate\Foundation\Testing\RefreshDatabase as RefreshDatabaseAlias;

uses(
    Tests\TestCase::class,
    RefreshDatabaseAlias::class,

)->in('Feature', 'Unit');
