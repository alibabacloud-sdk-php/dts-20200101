<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobStatusResponseBody;

use AlibabaCloud\Dara\Model;

class dataSynchronizationStatus extends Model
{
    /**
     * @var string
     */
    public $checkpoint;
    /**
     * @var string
     */
    public $delay;
    /**
     * @var string
     */
    public $errorMessage;
    /**
     * @var string
     */
    public $percent;
    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'checkpoint'   => 'Checkpoint',
        'delay'        => 'Delay',
        'errorMessage' => 'ErrorMessage',
        'percent'      => 'Percent',
        'status'       => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkpoint) {
            $res['Checkpoint'] = $this->checkpoint;
        }

        if (null !== $this->delay) {
            $res['Delay'] = $this->delay;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->percent) {
            $res['Percent'] = $this->percent;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Checkpoint'])) {
            $model->checkpoint = $map['Checkpoint'];
        }

        if (isset($map['Delay'])) {
            $model->delay = $map['Delay'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['Percent'])) {
            $model->percent = $map['Percent'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
