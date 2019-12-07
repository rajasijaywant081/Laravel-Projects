<?php

use Illuminate\Database\Seeder;

use LaravelForum\Channel;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $channels =Channel::create([
            'name' => 'Laravel 5.8',

            'slug' => str_slug('Laravel 5.8')

        ]);

        $channels =Channel::create([
            'name' => 'Angular 6',

            'slug' => str_slug('Angular 6')

        ]);

        $channels =Channel::create([
            'name' => 'Node js',

            'slug' => str_slug('Node js')

        ]);

        $channels =Channel::create([
            'name' => 'React',

            'slug' => str_slug('React')

        ]);
    }
}
