<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataLimitSetResponseBody\dataLimitSet;
use AlibabaCloud\Tea\Model;

class DescribeDataLimitSetResponseBody extends Model
{
    /**
     * @var dataLimitSet
     */
    public $dataLimitSet;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dataLimitSet' => 'DataLimitSet',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataLimitSet) {
            $res['DataLimitSet'] = null !== $this->dataLimitSet ? $this->dataLimitSet->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDataLimitSetResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataLimitSet'])) {
            $model->dataLimitSet = dataLimitSet::fromMap($map['DataLimitSet']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
