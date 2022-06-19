<?php

namespace App\Controllers\Home;

use \Core\View;

class HomeController extends \Core\Controller
{
    public function indexAction()
    {
        // echo "Hello from index of Home Controller";
        
        // View::render('Home/index.php',[
        //     'name'=>'Ben',
        //     'colours'=>['red','green','blue']
        // ]);

        View::renderTemplate('Home/index.html',[
            'name'=>'Ben',
            'colours'=>['red','green','blue']
        ]);
    }

    protected function after()
    {
        // echo "(after)";
    }

    protected function before()
    {
        // echo "(before)";
        return true;
    }
}