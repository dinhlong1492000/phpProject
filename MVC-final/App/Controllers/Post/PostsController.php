<?php

namespace App\Controllers\Post;

use \Core\View;
use App\Models\Post;

class PostsController extends \Core\Controller
{

    public function indexAction() {
        $posts = Post::getAll();
        View::renderTemplate('Post/index.html', [
            'posts' => $posts
        ]);
    }

    public function addNewAction() {
        echo 'Hello from the addNew action in the Posts Controlelr';
    }

    public function editAction() {
        echo 'Hello from the edit action in Posts Controller';
        var_dump($this->route_params);
    }
}