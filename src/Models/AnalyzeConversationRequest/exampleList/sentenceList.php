<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\AnalyzeConversationRequest\exampleList;

use AlibabaCloud\Tea\Model;

class sentenceList extends Model
{
    /**
     * @example chat-01
     *
     * @var string
     */
    public $chatId;

    /**
     * @description This parameter is required.
     *
     * @example user
     *
     * @var string
     */
    public $role;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $text;
    protected $_name = [
        'chatId' => 'chatId',
        'role'   => 'role',
        'text'   => 'text',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chatId) {
            $res['chatId'] = $this->chatId;
        }
        if (null !== $this->role) {
            $res['role'] = $this->role;
        }
        if (null !== $this->text) {
            $res['text'] = $this->text;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sentenceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['chatId'])) {
            $model->chatId = $map['chatId'];
        }
        if (isset($map['role'])) {
            $model->role = $map['role'];
        }
        if (isset($map['text'])) {
            $model->text = $map['text'];
        }

        return $model;
    }
}
