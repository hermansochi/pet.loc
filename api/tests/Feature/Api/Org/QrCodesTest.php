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
                'errors' => ['size' => true],
            ]);
    }

    /**
     * Get QR Code exceeding the minimum size.
     *
     * @return void
     */
    public function test_get_qr_code_exceeding_minimum_size(): void
    {
        $response = $this->json('GET', '/api/v1/org/qrcodes/976b48f0-7fd3-4d03-82ce-395ddeafe5d5',
            ['size' => 9]);

        $response
        ->assertStatus(422)
        ->assertHeader('Content-Type', 'application/json')
        ->assertJson([
            'message' => 'The size must be between 10 and 800.',
            'errors' => ['size' => true],
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
            'errors' => ['size' => true],
        ]);
    }

    /**
     * Get QR Code with string instead integer size.
     *
     * @return void
     */
    public function test_get_qr_code_with_string_instead_integer_size(): void
    {
        $response = $this->json('GET', '/api/v1/org/qrcodes/976b48f0-7fd3-4d03-82ce-395ddeafe5d5',
            ['size' => 'big']);

        $response
        ->assertStatus(422)
        ->assertHeader('Content-Type', 'application/json')
        ->assertJson([
            'message' => 'The size must be an integer. (and 1 more error)',
            'errors' => ['size' => true],
        ]);
    }

    /**
     * Get QR Code with valid style.
     *
     * @return void
     */
    public function test_get_qr_code_with_valid_style(): void
    {
        $response = $this->json('GET', '/api/v1/org/qrcodes/976b48f0-7fd3-4d03-82ce-395ddeafe5d5',
            ['style' => 'dot']);

        $response
        ->assertStatus(200)
        ->assertHeader('Content-Type', 'image/svg+xml');
    }

    /**
     * Get QR Code with invalid style.
     *
     * @return void
     */
    public function test_get_qr_code_with_invalid_style(): void
    {
        $response = $this->json('GET', '/api/v1/org/qrcodes/976b48f0-7fd3-4d03-82ce-395ddeafe5d5',
            ['style' => 13]);

        $response
        ->assertStatus(422)
        ->assertHeader('Content-Type', 'application/json')
        ->assertJson([
            'message' => 'The selected style is invalid.',
            'errors' => ['style' => true],
        ]);
    }

    /**
     * Get QR Code with valid eye style.
     *
     * @return void
     */
    public function test_get_qr_code_with_valid_eye_style(): void
    {
        $response = $this->json('GET', '/api/v1/org/qrcodes/976b48f0-7fd3-4d03-82ce-395ddeafe5d5',
            ['eye' => 'circle']);

        $response
        ->assertStatus(200)
        ->assertHeader('Content-Type', 'image/svg+xml');
    }

    /**
     * Get QR Code with invalid eye style.
     *
     * @return void
     */
    public function test_get_qr_code_with_invalid_eye_style(): void
    {
        $response = $this->json('GET', '/api/v1/org/qrcodes/976b48f0-7fd3-4d03-82ce-395ddeafe5d5',
            ['eye' => 13]);

        $response
        ->assertStatus(422)
        ->assertHeader('Content-Type', 'application/json')
        ->assertJson([
            'message' => 'The selected eye is invalid.',
            'errors' => ['eye' => true],
        ]);
    }

    /**
     * Get QR Code with valid foreground RGBA params.
     *
     * @return void
     */
    public function test_get_qr_code_with_valid_foreground_RGBA_params(): void
    {
        $response = $this->json('GET', '/api/v1/org/qrcodes/976b48f0-7fd3-4d03-82ce-395ddeafe5d5', [
            'r' => 0,
            'g' => 255,
            'b' => 128,
            'a' => 50,
        ]);

        $response
        ->assertStatus(200)
        ->assertHeader('Content-Type', 'image/svg+xml');
    }

    /**
     * Get QR Code with invalid foreground RGBA params.
     *
     * @return void
     */
    public function test_get_qr_code_with_invalid_foreground_RGBA_params(): void
    {
        $response = $this->json('GET', '/api/v1/org/qrcodes/976b48f0-7fd3-4d03-82ce-395ddeafe5d5', [
            'r' => '-5',
            'g' => 1255,
            'b' => 'green',
            'a' => -100,
        ]);

        $response
        ->assertStatus(422)
        ->assertHeader('Content-Type', 'application/json')
        ->assertJson([
            'message' => 'The r must be between 0 and 255. (and 3 more errors)',
            'errors' => ['r' => true, 'g' => true, 'b' => true, 'a' => true],
        ]);
    }

    /**
     * Get QR Code with valid baackground RGBA params.
     *
     * @return void
     */
    public function test_get_qr_code_with_valid_background_RGBA_params(): void
    {
        $response = $this->json('GET', '/api/v1/org/qrcodes/976b48f0-7fd3-4d03-82ce-395ddeafe5d5', [
            'br' => 0,
            'bg' => 255,
            'bb' => 128,
            'ba' => 50,
        ]);

        $response
        ->assertStatus(200)
        ->assertHeader('Content-Type', 'image/svg+xml');
    }

    /**
     * Get QR Code with invalid background RGBA params.
     *
     * @return void
     */
    public function test_get_qr_code_with_invalid_background_RGBA_params(): void
    {
        $response = $this->json('GET', '/api/v1/org/qrcodes/976b48f0-7fd3-4d03-82ce-395ddeafe5d5', [
            'br' => '-5',
            'bg' => 1255,
            'bb' => 'green',
            'ba' => -100,
        ]);

        $response
        ->assertStatus(422)
        ->assertHeader('Content-Type', 'application/json')
        ->assertJson([
            'message' => 'The br must be between 0 and 255. (and 3 more errors)',
            'errors' => ['br' => true, 'bg' => true, 'bb' => true, 'ba' => true],
        ]);
    }
}
