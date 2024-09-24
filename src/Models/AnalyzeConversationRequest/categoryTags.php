<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\AnalyzeConversationRequest;

use AlibabaCloud\Tea\Model;

class categoryTags extends Model
{
    /**
     * @var string
     */
    public $tagDesc;

    /**
     * @var string
     */
    public $tagName;
    protected $_name = [
        'tagDesc' => 'tagDesc',
        'tagName' => 'tagName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagDesc) {
            $res['tagDesc'] = $this->tagDesc;
        }
        if (null !== $this->tagName) {
            $res['tagName'] = $this->tagName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return categoryTags
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['tagDesc'])) {
            $model->tagDesc = $map['tagDesc'];
        }
        if (isset($map['tagName'])) {
            $model->tagName = $map['tagName'];
        }

        return $model;
    }
}