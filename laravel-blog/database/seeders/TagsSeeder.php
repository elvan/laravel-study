<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = collect([
            'science',
            'sport',
            'politic',
            'entertainment',
            'economy'
        ]);

        $tags->each(function ($tagName) {
            $tag = new Tag();
            $tag->name = $tagName;
            $tag->save();
        });
    }
}
