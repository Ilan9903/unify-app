<?php

namespace App\Rest\Controllers;

use App\Rest\Resources\UserResource;

class UsersController extends Controller
{
    /**
     * The resource the controller corresponds to.
     *
     * @var class-string<\Lomkit\Rest\Http\Resource>
     */
    public static $resource = UserResource::class;
}
