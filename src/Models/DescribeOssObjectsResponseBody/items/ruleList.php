<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeOssObjectsResponseBody\items;

use AlibabaCloud\Tea\Model;

class ruleList extends Model
{
    /**
     * @description The number of times that the rule is hit.
     *
     * @example 100
     *
     * @var int
     */
    public $count;

    /**
     * @description The search keyword. Fuzzy match is supported.
     *
     * @example ID card
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the sensitivity level of the OSS object. Valid values:
     *
     *   **1**: N/A, which indicates that no sensitive data is detected.
     *   **2**: S1, which indicates the low sensitivity level.
     *   **3**: S2, which indicates the medium sensitivity level.
     *   **4**: S3, which indicates the high sensitivity level.
     *   **5**: S4, which indicates the highest sensitivity level.
     *
     * @example 2
     *
     * @var int
     */
    public $riskLevelId;
    protected $_name = [
        'count'       => 'Count',
        'name'        => 'Name',
        'riskLevelId' => 'RiskLevelId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->riskLevelId) {
            $res['RiskLevelId'] = $this->riskLevelId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RiskLevelId'])) {
            $model->riskLevelId = $map['RiskLevelId'];
        }

        return $model;
    }
}
