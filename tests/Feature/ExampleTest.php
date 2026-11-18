<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_public_pages_return_successful_response(): void
    {
        $routes = [
            '/',
            '/beranda',
            '/kegiatan',
            '/berita',
            '/informasi',
            '/profil',
            '/kabinet',
            '/departemen',
            '/lembaga',
            '/store-ukki',
            '/donasi',
            '/lainnya',
            '/admin/login',
        ];

        foreach ($routes as $route) {
            $response = $this->get($route);
            $response->assertStatus(200);
        }
    }

    public function test_admin_requires_authentication(): void
    {
        $response = $this->get('/admin');
        $response->assertRedirect('/admin/login');
    }

    public function test_admin_can_login_and_access_dashboard(): void
    {
        $response = $this->post('/admin/login', [
            'username' => 'admin',
            'password' => 'ukkiunnes2026',
        ]);

        $response->assertRedirect('/admin');

        $adminResponse = $this->withSession(['is_admin' => true])->get('/admin');
        $adminResponse->assertStatus(200);
    }
}
