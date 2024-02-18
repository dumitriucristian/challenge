<?php

use App\Models\Exercise;
use App\Models\User;
use App\Models\DomainCategory;

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function(){
   
    //how the end response should look for the frontend
   $data = [
        "User id" => 152,
        "Last sessions - max 12" => [
            [ 
                "session_Id" => 1,
                "category_id" => 1,
                "category_name" => "some category",
                "Total nr of points per category" => 50,
                "total number of points per session" => 10,
            ],
            [
                "session_Id" => 2,
                "category_id" => 3,
                "category_name" => "some category",
                "Total nr of points per category" => 20,
                "total number of points per session" => 10,
            ],
            [
                "session_Id" => 3,
                "category_id" => 6,
                "category_name" => "some category",
                "Total nr of points per category" => 10,
                "total number of points per session" => 10,
            ],
               
        ],

    ];
    /* Raw query that will return the data
    Get all sessions 
    SELECT categorys.name, sessions.category_id,sessions.session_id, sum(points) as points
    from sessions
    INNER JOIN categorys ON categorys.id=sessions.category_id
    ... multiple inner joins to take the rest of the data
    where user_id = 2
    group by sessions.category_id , sessions.session_id 
    LIMIT 12
    */

});
