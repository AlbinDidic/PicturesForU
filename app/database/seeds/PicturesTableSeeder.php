<?php

class PicturesTableSeeder extends Seeder {
    public function run()
    {
        DB::table('pictures')->delete();

        for ($i = 0; $i < 30; $i++){
            DB::table('pictures')->insert(array
            (
                'user_id' => 1,
                'path' => 'pictures/IshnaGhandi/Koala.jpg',
                'message' => Str::random(30)
            ));
        }
    }
}