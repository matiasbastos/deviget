<?php
class HomeController extends BaseController {
    protected $layout = 'layouts.master';

    public function show() {
        $this->layout->content = View::make('home', ['name'=>'Matias']);
    }
}
