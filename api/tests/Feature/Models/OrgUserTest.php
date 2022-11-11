<?php

namespace Tests\Feature\Models;

use App\Models\Org\OrgUser;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class OrgUserTest extends TestCase
{
    use RefreshDatabase;

    /**
     * OrgUser test.
     *
     * @return void
     */
    public function test_models_can_be_instantiated(): void
    {
        $user = OrgUser::factory()->create();
        $this->seed();
        $this->assertModelExists($user);
        $this->assertDatabaseCount('org_users', config('app.employees_total') + 1);
        $this->assertDatabaseHas('org_users', [
            'email' => 'hermansochi@ya.ru',
        ]);
    }
}
