<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\common\ApiController;
use App\Http\Services\annotation\ControllerAnnotation;

#[ControllerAnnotation(title: 'apps')]
class AppsController extends ApiController
{
    public function initialize()
    {
        parent::initialize();
        $this->model = new \App\Models\Apps();
    }

    public function list(){
        $apps = $this->model->get();
        return $this->success($apps);
    }

}
