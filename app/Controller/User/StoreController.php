<?php

namespace App\Controller\User;

use App\Controller\AbstractController;
use App\Model\User;
use App\Request\UserRequest;

class StoreController extends AbstractController
{
    public function index(UserRequest $request)
    {
        try {
            $data = $request->validated();

            var_dump($data);
            $user = User::create($data);


            return $this->response->json($user);
        } catch (\Exception $exception) {
            return $this->response->json(['Error'])->withStatus(500);
        }
    }
}
