<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AbstractAdminController extends Controller
{
    protected $lang;
    protected $languages = ['uz', 'ru'];

    public function __construct()
    {
        $this->lang = \request()->header('lang', 'ru');
        if (in_array($this->lang, $this->languages))
            $this->lang = 'ru';
    }
}
