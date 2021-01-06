<?php
    class Pages extends Controller {
        public function __construct(){

        }

        public function index(){

            $data = [
                'title' => 'Blogger',
                'description' => 'Simple blog page build by foxie mvc framework',
            ];

            $this->view('pages/index',$data);
        }

        public function about(){
            $data = [
                'title' => 'About Us',
                'description' => 'Share blogs with otherd ....',
            ];

            $this->view('pages/about',$data);
        }
    }