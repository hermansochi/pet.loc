<?php

namespace Tests\Feature\Api\Org;

use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class OrgUsersTest extends TestCase
{
    /**
     * Get valid employee.
     * 
     * @return void
     */
    public function test_get_valid_empoloee(): void
    {
        $response = $this->getJson('/api/v1/org/users/976b48f0-7fd3-4d03-82ce-395ddeafe5d5');
 
        $response
            ->assertStatus(200)
            ->assertJson(fn (AssertableJson $json) =>
                $json
                    ->where('data.first_name', 'Герман')
                    ->where('data.last_name', 'Александров')
                    ->missing('password')
                    ->etc()
            );
    }

    /**
     * Check employee JSON types.
     * 
     * @return void
     */
    public function test_check_employee_json_types(): void
    {
        $response = $this->getJson('/api/v1/org/users/976b48f0-7fd3-4d03-82ce-395ddeafe5d5');
 
        $response
            ->assertStatus(200)
            ->assertJson(fn (AssertableJson $json) =>
                $json->whereAllType([
                    'data.id' => 'string',
                    'data.name' => 'string',
                    'data.hide' => 'boolean',
                    'data.thumbnail' => 'boolean',
                    'data.gender' => 'string',
                    'data.first_name' => 'string|null',
                    'data.last_name' => 'string|null',
                    'data.middle_name' => 'string|null',
                    'data.birthday' => 'string|null',
                    'data.email' => 'string|null',
                    'data.cn' => 'string|null',
                    'data.telephone' => 'string|null',
                    'data.mobile' => 'string|null',
                    'data.title' => 'string|null',
                    'data.department' => 'string|null',
                    'data.company' => 'string|null',
                    'data.city' => 'string|null',
                    'data.created_at' => 'string|null',
                    'data.updated_at' => 'string|null'
                ])
            );
    }

    /**
     * Get invalid employee.
     * 
     * @return void
     */
    public function test_get_invalid_empoloee(): void
    {
        $response = $this->getJson('/api/v1/org/users/976b48f0-7fd3-4d03-82ce-395ddeafe5d1');
 
        $response
            ->assertStatus(404)
            ->assertJson(fn (AssertableJson $json) =>
                $json->where('message', '404 not found')
                     ->where('errors', 'Employee with id 976b48f0-7fd3-4d03-82ce-395ddeafe5d1 not found')
                     ->etc()
            );
    }

    /**
     * Get employee with invalid uuid.
     * 
     * @return void
     */
    public function test_get_empoloee_with_invalid_uuid(): void
    {
        $response = $this->getJson('/api/v1/org/users/976b48f0-7fd3-4d03-82ce-395ddeafe5d111');
 
        $response
            ->assertStatus(422)
            ->assertJson(fn (AssertableJson $json) =>
                $json->where('message', 'id validation error')
                     ->where('errors', '976b48f0-7fd3-4d03-82ce-395ddeafe5d111 not valid uuid')
                     ->etc()
            );
    }
}
