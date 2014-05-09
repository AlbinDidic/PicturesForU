<?php

class UserTableSeeder extends Seeder {
    public function run()
    {
        DB::table('users')->delete();

        DB::table('users')->insert(array
        (
            'uid' => '1398283937122185',
            'username' => '1398283937122185',
            'access_token' => 'CAADZAzZA86XbkBAFlGf6z8fHtu3ggi97nMYCpBikKjYg3eqLbEIP6ZCRJZAskZC0KxycoY7lKiNooQVEx3bkUeH6DGNj6kUcUqNXZC6VZBBRlETtZCekFe4jixZBZAcdUuOIaAqZAH0jWJ40K5jKNarRv7ipNnbLT9LnX9qt8tozZA5mf562PTAcISRT1pdxMwEDgTP6p5EZBKwUa8gZDZD',
            'email' => 'pictures4utest@gmail.com',
            'first_name' => 'Ishna',
            'last_name' => 'Ghandi',
            'photo' => 'https://graph.facebook.com/1398283937122185/picture?type=large',
            'gender' => 'female',
            'liked' => false,
            'remember_token' => '494jpYAdGa6xfp6znDgDMnxQ05DH9yFYFzqcSxVct3hDls22f1mxEs5WLSXM'
        ));

        for ($i = 0; $i < 100; $i++){
            DB::table('users')->insert(array
            (
                'uid' => rand(),
                'username' => Str::random(10),
                'access_token' => 'CAADZAzZA86XbkBAFlGf6z8fHtu3ggi97nMYCpBikKjYg3eqLbEIP6ZCRJZAskZC0KxycoY7lKiNooQVEx3bkUeH6DGNj6kUcUqNXZC6VZBBRlETtZCekFe4jixZBZAcdUuOIaAqZAH0jWJ40K5jKNarRv7ipNnbLT9LnX9qt8tozZA5mf562PTAcISRT1pdxMwEDgTP6p5EZBKwUa8gZDZD',
                'email' => Str::random(10).'@gmail.com',
                'first_name' => Str::random(10),
                'last_name' => Str::random(10),
                'photo' => 'https://graph.facebook.com/1398283937122185/picture?type=large',
                'gender' => ((rand(0,10) % 2) === 0) ? 'female' : 'male',
                'liked' => false,
                'remember_token' => ''
            ));
        }
    }
}