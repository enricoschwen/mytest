<?php

namespace App\Http\Controllers;

use App\Views\FormView as View;
use Illuminate\Http\Request;
use Laravel\Lumen\Http\Redirector;

class FormController extends Controller
{


    protected $view;
    protected $rd;


    public function __construct(View $formView, Redirector $rd)
    {
        $this->view = $formView;
        $this->rd = $rd;
    }

    public function show()
    {
        return $this->view->render();
    }


    /**
     * Store a new user.
     *
     * @param  Request $request
     * @return Response
     */
    public function login(Request $request)
    {

        if ($request->has('uname') && $request->has('psw')) {

            $name = $request->input('uname');
            $password = $request->input('psw');

            if ($name == "Torvalds" && $password == "p3ngu1n") {

                return $this->rd->to('/form');
            }
        }

        return $this->rd->to('/login');
    }
}
