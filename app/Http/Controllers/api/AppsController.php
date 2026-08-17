<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\common\ApiController;
use App\Http\Services\annotation\ControllerAnnotation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

#[ControllerAnnotation(title: 'apps')]
class AppsController extends ApiController
{
    public function initialize()
    {
        parent::initialize();
        $this->model = new \App\Models\Apps();
    }

    public function list()
    {
        $domain = request()->schemeAndHttpHost();
        $apps = $this->model->get();
        foreach ($apps as $app) {
            if (!empty($app->image) && !str_starts_with($app->image, 'http')) {
                $app->image = $domain . '/' . ltrim($app->image, '/');
            }
        }
        return $this->success($apps);
    }

    public function check(Request $request)
    {
        $key = $request->query('key', '');
        $cdkey = DB::table('cdkey')->where('key', $key)->where('status', 2)->first();
        if (!$cdkey) {
            return $this->error('卡密无效');
        }
        return $this->success('校验成功');
    }
}
