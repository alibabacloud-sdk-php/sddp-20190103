<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventTypesResponseBody;

use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventTypesResponseBody\eventTypeList\subTypeList;
use AlibabaCloud\Tea\Model;

class eventTypeList extends Model
{
    /**
     * @description The code of the anomalous event type.
     *
     * @example 01
     *
     * @var string
     */
    public $code;

    /**
     * @description The description of the anomalous event type.
     *
     * @example Anomalous permission usage,\*\*\*\*
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the anomalous event type.
     *
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the anomalous event type.
     *
     * @example Anomalous permission usage
     *
     * @var string
     */
    public $name;

    /**
     * @description An array that consists of anomalous event subtypes.
     *
     * @var subTypeList[]
     */
    public $subTypeList;
    protected $_name = [
        'code'        => 'Code',
        'description' => 'Description',
        'id'          => 'Id',
        'name'        => 'Name',
        'subTypeList' => 'SubTypeList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->subTypeList) {
            $res['SubTypeList'] = [];
            if (null !== $this->subTypeList && \is_array($this->subTypeList)) {
                $n = 0;
                foreach ($this->subTypeList as $item) {
                    $res['SubTypeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eventTypeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SubTypeList'])) {
            if (!empty($map['SubTypeList'])) {
                $model->subTypeList = [];
                $n                  = 0;
                foreach ($map['SubTypeList'] as $item) {
                    $model->subTypeList[$n++] = null !== $item ? subTypeList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
