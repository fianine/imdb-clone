<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;
use App\User;
use App\Movie;

class MovieTest extends TestCase
{
    use DatabaseTransactions;
    use WithoutMiddleware;
    /**
     * A basic feature test example.
     *
     * @return void
     */

     /** @test */
    public function testUserCanSeeMovies()
    {
        $user = factory(User::class)->create();
        $movie = factory(Movie::class)->create();

        $this->actingAs($user)
            ->visit('admin/movies')
            ->see($movie->title);
     }

     public function testUserCanCreateMovies()
     {
        $user = factory(User::class)->create();

        $this->actingAs($user)
            ->visit('admin/movies/add')
            ->type('Harry Potter', 'title')
            ->type('2019', 'year')
            ->attach('/public/upload/image/1572359146.jpeg', 'file')
            ->press('Save')
            ->see('Movies Post');
     }
}
