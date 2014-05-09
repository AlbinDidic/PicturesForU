<?php

class HomeController extends BaseController {

    // Definition of layout
    protected $layout = 'layouts.main';

	public function index()
	{
        $data = array();

        if (Auth::check())
        {
            $data = Auth::user();
        }

//        dd(Picture::whereUser_id($data['id'])->count());
        $view  = View::make('Home.index');
        $view->data = $data;
        $view->loginUri = empty($data) ? 'login/fb' : 'logout';
        $view->loginText = empty($data) ? 'Login' : 'Logout';
        $view->gender = empty($data) ? '' : $data['gender'];
        $view->display = empty($data) ? 'none' : $data['liked'] ? 'select_like' : 'container_notlike';
        $view->displayNotLiked = empty($data) ? 'none' : $data['liked'] ? 'container_notlike' : 'select_like';
        $view->displayOther = ( empty($data) || !$data['liked'] ) ? 'container_notlike' : 'select_other';

        $view->pictures = empty($data) ? null : User::find($data->id)->pictures;

        $view->amount = User::count();
        $view->male = User::where('gender', '=', 'male' )->count();
        $view->female = User::where('gender', '=', 'female' )->count();
        $this->layout->content = $view;
	}
}