<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CommentTableSeeder extends DatabaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      {
        // DB::table('comments')->delete();

        // Comment::create(array(
        //     'author' => 'Chris Sevilleja',
        //     'text' => 'Look I am a test comment.'
        // ));
        //
        // Comment::create(array(
        //     'author' => 'Nick Cerminara',
        //     'text' => 'This is going to be super crazy.'
        // ));
        //
        // Comment::create(array(
        //     'author' => 'Holly Lloyd',
        //     'text' => 'I am a master of Laravel and Angular.'
        // ));
        //
        DB::table('comments')->insert([
          'author' => 'Chris Sevilleja',
          'text' => 'Look I am a test comment.'
        ]);
        DB::table('comments')->insert([
          'author' => 'Nick Cerminara',
          'text' => 'This is going to be super crazy.'
        ]);
        DB::table('comments')->insert([
          'author' => 'Holly Lloyd',
          'text' => 'I am a master of Laravel and Angular.'
        ]);
        DB::table('comments')->delete();

      }

    }
}
