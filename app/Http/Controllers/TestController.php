<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App;
use TestClass;
use App\Contracts\TestContract;

class TestController extends Controller
{

    public function __construct(TestContract $test){
        $this->test = $test;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $test = App::make('test');
        $test->callMe('TestController');
        $this->test->callMe('TestController');

       // TestClass::doSomething();
    }

    //其他方法
}