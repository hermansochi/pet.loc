<?php

namespace Tests\Feature\Api\Org;

use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class QrCodesTest extends TestCase
{
    /**
     * Get valid QR code.
     *
     * @return void
     */
    public function test_get_valid_qr_code(): void
    {
        $response = $this->get('/api/v1/org/qrcodes/976b48f0-7fd3-4d03-82ce-395ddeafe5d5');

        $response
            ->assertStatus(200)
            ->assertHeader('Content-Type', 'image/svg+xml');
    }

    /**
     * Get QR code for non existent employee.
     *
     * @return void
     */
public function test_get_qr_code_for_non_existent_employee(): void
    {
        $response = $this->getJson('/api/v1/org/users/976b48f0-7fd3-4d03-82ce-395ddeafe5d1');

        $response
            ->assertStatus(404)
            ->assertHeader('Content-Type', 'application/json')
            ->assertJson(fn (AssertableJson $json) => $json->where('message', '404 not found')
                     ->where('errors', 'Employee with id 976b48f0-7fd3-4d03-82ce-395ddeafe5d1 not found')
                     ->etc()
            );
    }
    /**
     * Get employee with invalid uuid.
     *
     * @return void
     */
    public function test_get_qr_code_with_invalid_employee_uuid(): void
    {
        $response = $this->getJson('/api/v1/org/qrcodes/976b48f0-7fd3-4d03-82ce-395ddeafe5d111');

        $response
            ->assertStatus(422)
            ->assertHeader('Content-Type', 'application/json')
            ->assertJson(fn (AssertableJson $json) => $json->where('message', 'id validation error')
                     ->where('errors', '976b48f0-7fd3-4d03-82ce-395ddeafe5d111 not valid uuid')
                     ->etc()
            );
    }

    /**
     * Get QR Code exceeding the maximum size.
     *
     * @return void
     */
    public function test_get_qr_code_exceeding_maximum_size(): void
    {
        $response = $this->json('GET', '/api/v1/org/qrcodes/976b48f0-7fd3-4d03-82ce-395ddeafe5d5',
        ['size' => 801]);

        $response
            ->assertStatus(422)
            ->assertHeader('Content-Type', 'application/json')
            ->assertJson([
                'message' => 'The size must be between 10 and 800.',
                'errors' => ['size' => true]
            ]);
    }

    /**
    * Get QR Code exceeding the minimum size.
    *
    * @return void
    */
    public function test_get_qr_code_exceeding_mainimum_size(): void
    {
        $response = $this->json('GET', '/api/v1/org/qrcodes/976b48f0-7fd3-4d03-82ce-395ddeafe5d5',
        ['size' => 9]);

        $response
        ->assertStatus(422)
        ->assertHeader('Content-Type', 'application/json')
        ->assertJson([
            'message' => 'The size must be between 10 and 800.',
        'errors' => ['size' => true]
        ]);
    }

    /**
    * Get QR Code with non integer size.
    *
    * @return void
    */
    public function test_get_qr_code_with_non_integer_size(): void
    {
        $response = $this->json('GET', '/api/v1/org/qrcodes/976b48f0-7fd3-4d03-82ce-395ddeafe5d5',
        ['size' => 80.1]);

        $response
        ->assertStatus(422)
        ->assertHeader('Content-Type', 'application/json')
        ->assertJson([
            'message' => 'The size must be an integer.',
        'errors' => ['size' => true]
        ]);
    }

/**
* Get QR Code with string insteand integer size.
*
* @return void
*/
public function test_get_qr_code_with_string_insteand_integer_size(): void
{
    $response = $this->json('GET', '/api/v1/org/qrcodes/976b48f0-7fd3-4d03-82ce-395ddeafe5d5',
    ['size' => 'big']);

    $response
    ->assertStatus(422)
    ->assertHeader('Content-Type', 'application/json')
    ->assertJson([
        'message' => 'The size must be an integer.',
    'errors' => ['size' => true]
    ]);
}
}
