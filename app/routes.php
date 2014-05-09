<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//Route::get('/', function()
//{
//	return View::make('hello');
//});

//Route::get('/', function()
//{
//    $data = array();
//
//    if (Auth::check()) {
//        $data = Auth::user();
//    }
//    return View::make('user', array('data'=>$data));
//});

Route::get('/', 'HomeController@index');

Route::get('logout', function() {
    Auth::logout();
    return Redirect::to('/');
});

Route::post('/likes', function() {
    $auth= Auth::user();
    $user = User::whereId($auth->id)->first();
    $user->liked = Input::get('value') === 'true' ? true : false;
    $user->save();
});

Route::post('/uploadPicture', function() {
    $auth= Auth::user();
    $file = Input::file('newPhoto');
    $description = Input::get('description');

    $path = 'pictures/'.$auth->first_name.$auth->last_name;
    $newFileName = Str::random(10).'.'.$file->getClientOriginalExtension();
    $file->move($path, $newFileName);

    $picture = new Picture();
    $picture->user_id = $auth->id;
    $picture->path = $path.'/'.$newFileName;
    $picture->message = $description;
    $picture->save();

    return Redirect::to('/#pictures');
});

Route::get('login/fb', function() {
    $facebook = new Facebook(Config::get('facebook'));
    $params = array(
        'redirect_uri' => url('/login/fb/callback'),
        'scope' => 'user_likes,email,publish_actions,user_birthday',
    );
    return Redirect::to($facebook->getLoginUrl($params));
});

Route::get('login/fb/callback', function() {
    $code = Input::get('code');
    if (strlen($code) == 0)
        return Redirect::to('/')->with('message', 'There was an error communicating with Facebook');

    $facebook = new Facebook(Config::get('facebook'));
    $uid = $facebook->getUser();

    if ($uid == 0)
        return Redirect::to('/')->with('message', 'There was an error');

    $me = $facebook->api('/me');

    $user = User::whereUid($uid)->first();

    if (empty($user)) {

        $user = new User;
        $user->first_name = $me['first_name'];
        $user->last_name = $me['last_name'];
        $user->email = $me['email'];
        $user->gender = $me['gender'];
        $user->uid = $uid;
        $user->username = $me['id'];
        $user->access_token = $facebook->getAccessToken();
        $user->photo = 'https://graph.facebook.com/'.$me['id'].'/picture?type=large';

        $user->save();
    }

    Auth::login($user);

    return Redirect::to('/')->with('message', 'Logged in with Facebook');
});


//Route::get('login/fb/callback', function() {
//    $code = Input::get('code');
//
//    if (strlen($code) == 0)
//        return Redirect::to('/')->with('message', 'There was an error communicating with Facebook');
//
//    $facebook = new Facebook(Config::get('facebook'));
//    $uid = $facebook->getUser();
//
//    if ($uid == 0)
//        return Redirect::to('/')->with('message', 'There was an error');
//
//    $me = $facebook->api('/me');
//
//    dd($me);
//});