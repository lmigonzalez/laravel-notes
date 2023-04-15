<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class NotesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $notes = [
            [
                'id' => 1,
                'title' => 'Note 1',
                'description' => 'This is the first note.',
                'date' => '2023-04-14',
            ],
            [
                'id' => 2,
                'title' => 'Note 2',
                'description' => 'This is the second note.',
                'date' => '2023-04-15',
            ],
            [
                'id' => 3,
                'title' => 'Note 3',
                'description' => 'This is the third note.',
                'date' => '2023-04-16',
            ],
            [
                'id' => 4,
                'title' => 'Note 4',
                'description' => 'This is the fourth note.',
                'date' => '2023-04-17',
            ],
            [
                'id' => 5,
                'title' => 'Note 5',
                'description' => 'This is the fifth note.',
                'date' => '2023-04-18',
            ],
        ];

        view()->share('notes', $notes);
    }
}
