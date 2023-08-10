<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSynchronizationJobsResponseBody\synchronizationInstances;

use AlibabaCloud\Tea\Model;

class performance extends Model
{
    /**
     * @description The precheck progress. Unit: %.
     *
     * @example 1
     *
     * @var string
     */
    public $FLOW;

    /**
     * @description The precheck result. Valid values:
     *
     *   **Success**: The task passed the precheck.
     *   **Failed**: The task failed to pass the precheck.
     *
     * @example 100
     *
     * @var string
     */
    public $RPS;
    protected $_name = [
        'FLOW' => 'FLOW',
        'RPS'  => 'RPS',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->FLOW) {
            $res['FLOW'] = $this->FLOW;
        }
        if (null !== $this->RPS) {
            $res['RPS'] = $this->RPS;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return performance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FLOW'])) {
            $model->FLOW = $map['FLOW'];
        }
        if (isset($map['RPS'])) {
            $model->RPS = $map['RPS'];
        }

        return $model;
    }
}
