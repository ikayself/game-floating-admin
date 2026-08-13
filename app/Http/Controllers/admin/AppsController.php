<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\common\AdminController;
use App\Http\Services\annotation\NodeAnnotation;
use App\Http\Services\annotation\ControllerAnnotation;

#[ControllerAnnotation(title: 'apps')]
class AppsController extends AdminController
{

    private array $notes;

    public function initialize()
    {
        parent::initialize();
        $this->model = new \App\Models\Apps();
        $this->notes = $notes = $this->model->notes;
        $this->assign(compact('notes'));
    }

}
