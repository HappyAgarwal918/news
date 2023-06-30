<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use jcobhams\NewsApi\NewsApi;

class newsController extends Controller
{
    public function index()
    {
        $newsapi = new NewsApi('8fc8a1401d6148e092f52b311c453341');

        # /v2/everything
        $all_articles = "https://newsapi.org/v2/everything?apiKey=8fc8a1401d6148e092f52b311c453341";

        echo "<pre>";print_r($all_articles);die;
    }
}
