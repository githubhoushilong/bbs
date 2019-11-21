<?php

namespace App\Http\Requests;

class ReplyRequest extends Request
{
    public function rules()
    {
        return [
            // 创建规则
            'content' => 'required|min:2',
        ];
    }

    public function messages()
    {
        return [
            // 验证信息
        ];
    }
}
