<?php

namespace Spatie\ModelStatus\Tests\Models;

enum TestEnum: string
{
    case pending = 'pending';
    case invalidStatus = 'InvalidStatus';

    case state_a = 'State A';
    case state_b = 'State B';
    case state_c = 'State C';
}
