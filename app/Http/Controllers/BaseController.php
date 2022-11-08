<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;

class BaseController extends Controller
{
    protected $data = [];
    protected $logged = false;
    protected $uid = 0;

    public function __construct() {
        $this->loadDefaults();
    }

    public function loadDefaults() {
        $this->data['title'] = 'PageController Title';
        $this->data['heading'] = 'PageController Heading';
        $this->data['content'] = '';
        $this->data['path'] = [];
        $this->data['submenu'] = [];
    }
}
