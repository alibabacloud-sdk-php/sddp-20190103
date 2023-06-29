<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeOssObjectDetailResponseBody;

use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeOssObjectDetailResponseBody\ossObjectDetail\ruleList;
use AlibabaCloud\Tea\Model;

class ossObjectDetail extends Model
{
    /**
     * @description The name of the OSS bucket to which the OSS object belongs.
     *
     * @example bucke***
     *
     * @var string
     */
    public $bucketName;

    /**
     * @description The type of the OSS object.
     *
     * @example Excel file
     *
     * @var string
     */
    public $categoryName;

    /**
     * @description The name of the OSS object.
     *
     * @example obj_id
     *
     * @var string
     */
    public $name;

    /**
     * @description The region ID of the OSS object.
     *
     * @example cn-***
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the sensitivity level for the OSS object.
     *
     * @example Medium sensitivity level
     *
     * @var string
     */
    public $riskLevelName;

    /**
     * @description An array consisting of the sensitive data detection rules that the OSS object hits.
     *
     * @var ruleList[]
     */
    public $ruleList;
    protected $_name = [
        'bucketName'    => 'BucketName',
        'categoryName'  => 'CategoryName',
        'name'          => 'Name',
        'regionId'      => 'RegionId',
        'riskLevelName' => 'RiskLevelName',
        'ruleList'      => 'RuleList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }
        if (null !== $this->categoryName) {
            $res['CategoryName'] = $this->categoryName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->riskLevelName) {
            $res['RiskLevelName'] = $this->riskLevelName;
        }
        if (null !== $this->ruleList) {
            $res['RuleList'] = [];
            if (null !== $this->ruleList && \is_array($this->ruleList)) {
                $n = 0;
                foreach ($this->ruleList as $item) {
                    $res['RuleList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ossObjectDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }
        if (isset($map['CategoryName'])) {
            $model->categoryName = $map['CategoryName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RiskLevelName'])) {
            $model->riskLevelName = $map['RiskLevelName'];
        }
        if (isset($map['RuleList'])) {
            if (!empty($map['RuleList'])) {
                $model->ruleList = [];
                $n               = 0;
                foreach ($map['RuleList'] as $item) {
                    $model->ruleList[$n++] = null !== $item ? ruleList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
