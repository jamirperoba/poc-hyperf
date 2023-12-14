<?php

namespace App\Controller\User;

use App\Controller\AbstractController;
use App\Model\User;

class ListController extends AbstractController
{
    public function index()
    {
        $user = User::all();

        return $this->response->json($user);
    }
}
