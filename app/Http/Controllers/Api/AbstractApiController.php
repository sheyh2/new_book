<?php

namespace App\Http\Controllers\Api;

use App\Core\Authenticate;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class AbstractApiController extends Controller{
    protected $lang;
    protected $isAuth;
    protected $languages = ['uz', 'ru'];

    private static $instance;

    public function __construct(){
        self::$instance = $this;

        $this->lang = \request()->header('lang', 'ru');
        if (!in_array($this->lang, $this->languages))
            $this->lang = 'ru';

        if (\request()->hasHeader('token')){
            $this->isAuth = Authenticate::checkToken();
        }
    }

    /**
     * @param $data
     * @param string $message
     * @param int $code
     * @return JsonResponse
     */
    public static function renderJson($data, string $message, int $code = 200): JsonResponse{
        return response()->json([
            'code'    => $code,
            'message' => $message,
            'lang'    => self::$instance->lang,
            'isAuth'  => self::$instance->isAuth,
            'data'    => $data
        ], $code);
    }
}
