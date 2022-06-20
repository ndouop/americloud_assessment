<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Http\Response;
use Tests\TestCase;


class NoteControllerTest extends TestCase
{
    public function initData() : void {

        Artisan::call('migrate:refresh');

        User::factory()
            ->count(15)
            ->hasNotes(rand(4,10))
            ->create();
    }
    /**
     * @test
     */
    public function test_notes_list_controller()
    {
        $this->initData();

        $this->json('get', 'api/notes')
            ->assertStatus(Response::HTTP_OK)
            ->assertJsonStructure(
                [
                    'data' => [
                        '*' => [
                            'content', 'created_at',
                            'id',
                            'resource_id',
                            'resource_type',
                            'updated_at'
                        ]
                    ]
                ]
            );
    }
}
