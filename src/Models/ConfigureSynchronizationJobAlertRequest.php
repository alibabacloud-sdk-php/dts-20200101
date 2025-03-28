<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Dara\Model;

class ConfigureSynchronizationJobAlertRequest extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $delayAlertPhone;

    /**
     * @var string
     */
    public $delayAlertStatus;

    /**
     * @var string
     */
    public $delayOverSeconds;

    /**
     * @var string
     */
    public $errorAlertPhone;

    /**
     * @var string
     */
    public $errorAlertStatus;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $synchronizationDirection;

    /**
     * @var string
     */
    public $synchronizationJobId;
    protected $_name = [
        'accountId' => 'AccountId',
        'delayAlertPhone' => 'DelayAlertPhone',
        'delayAlertStatus' => 'DelayAlertStatus',
        'delayOverSeconds' => 'DelayOverSeconds',
        'errorAlertPhone' => 'ErrorAlertPhone',
        'errorAlertStatus' => 'ErrorAlertStatus',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'synchronizationDirection' => 'SynchronizationDirection',
        'synchronizationJobId' => 'SynchronizationJobId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }

        if (null !== $this->delayAlertPhone) {
            $res['DelayAlertPhone'] = $this->delayAlertPhone;
        }

        if (null !== $this->delayAlertStatus) {
            $res['DelayAlertStatus'] = $this->delayAlertStatus;
        }

        if (null !== $this->delayOverSeconds) {
            $res['DelayOverSeconds'] = $this->delayOverSeconds;
        }

        if (null !== $this->errorAlertPhone) {
            $res['ErrorAlertPhone'] = $this->errorAlertPhone;
        }

        if (null !== $this->errorAlertStatus) {
            $res['ErrorAlertStatus'] = $this->errorAlertStatus;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->synchronizationDirection) {
            $res['SynchronizationDirection'] = $this->synchronizationDirection;
        }

        if (null !== $this->synchronizationJobId) {
            $res['SynchronizationJobId'] = $this->synchronizationJobId;
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
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }

        if (isset($map['DelayAlertPhone'])) {
            $model->delayAlertPhone = $map['DelayAlertPhone'];
        }

        if (isset($map['DelayAlertStatus'])) {
            $model->delayAlertStatus = $map['DelayAlertStatus'];
        }

        if (isset($map['DelayOverSeconds'])) {
            $model->delayOverSeconds = $map['DelayOverSeconds'];
        }

        if (isset($map['ErrorAlertPhone'])) {
            $model->errorAlertPhone = $map['ErrorAlertPhone'];
        }

        if (isset($map['ErrorAlertStatus'])) {
            $model->errorAlertStatus = $map['ErrorAlertStatus'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['SynchronizationDirection'])) {
            $model->synchronizationDirection = $map['SynchronizationDirection'];
        }

        if (isset($map['SynchronizationJobId'])) {
            $model->synchronizationJobId = $map['SynchronizationJobId'];
        }

        return $model;
    }
}
