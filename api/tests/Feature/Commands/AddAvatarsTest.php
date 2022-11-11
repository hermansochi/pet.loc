<?php

namespace Tests\Feature\Commands;

use Tests\TestCase;

class AddAvatarsTest extends TestCase
{
    /**
     * Avatars:add test.
     *
     * @return void
     */
    public function test_avatars_add(): void
    {
        $this->artisan('avatar:add')->assertSuccessful();
    }
}
