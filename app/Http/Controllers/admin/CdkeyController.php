<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\common\AdminController;
use App\Http\Services\annotation\NodeAnnotation;
use App\Http\Services\annotation\ControllerAnnotation;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;

#[ControllerAnnotation(title: 'cdkey')]
class CdkeyController extends AdminController
{

    private array $notes;

    public function initialize()
    {
        parent::initialize();
        $this->model = new \App\Models\Cdkey();
        $this->notes = $notes = $this->model->notes;
        $this->assign(compact('notes'));
    }

    public function add(): View|JsonResponse
    {
        if (request()->ajax()) {
            try {
                $post = request()->post();
                $cdkey = $this->model->where('key', $post['key'])->first();
                if ($cdkey) {
                    return $this->error('卡密已存在');
                }
                $save = insertFields($this->model);
            } catch (\Exception $e) {
                return $this->error('保存失败:' . $e->getMessage());
            }
            return $save ? $this->success('保存成功') : $this->error('保存失败');
        }
        return $this->fetch();
    }
}
