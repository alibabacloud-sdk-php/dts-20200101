<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobsResponseBody\migrationJobs;

use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobsResponseBody\migrationJobs\migrationJob\dataInitialization;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobsResponseBody\migrationJobs\migrationJob\dataSynchronization;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobsResponseBody\migrationJobs\migrationJob\destinationEndpoint;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobsResponseBody\migrationJobs\migrationJob\migrationMode;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobsResponseBody\migrationJobs\migrationJob\migrationObject;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobsResponseBody\migrationJobs\migrationJob\precheck;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobsResponseBody\migrationJobs\migrationJob\sourceEndpoint;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobsResponseBody\migrationJobs\migrationJob\structureInitialization;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobsResponseBody\migrationJobs\migrationJob\tags;
use AlibabaCloud\Tea\Model;

class migrationJob extends Model
{
    /**
     * @var dataInitialization
     */
    public $dataInitialization;

    /**
     * @var dataSynchronization
     */
    public $dataSynchronization;

    /**
     * @var destinationEndpoint
     */
    public $destinationEndpoint;

    /**
     * @var string
     */
    public $instanceCreateTime;

    /**
     * @var string
     */
    public $jobCreateTime;

    /**
     * @var string
     */
    public $migrationJobClass;

    /**
     * @var string
     */
    public $migrationJobID;

    /**
     * @var string
     */
    public $migrationJobName;

    /**
     * @var string
     */
    public $migrationJobStatus;

    /**
     * @var migrationMode
     */
    public $migrationMode;

    /**
     * @var migrationObject
     */
    public $migrationObject;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var precheck
     */
    public $precheck;

    /**
     * @var sourceEndpoint
     */
    public $sourceEndpoint;

    /**
     * @var structureInitialization
     */
    public $structureInitialization;

    /**
     * @var tags
     */
    public $tags;
    protected $_name = [
        'dataInitialization'      => 'DataInitialization',
        'dataSynchronization'     => 'DataSynchronization',
        'destinationEndpoint'     => 'DestinationEndpoint',
        'instanceCreateTime'      => 'InstanceCreateTime',
        'jobCreateTime'           => 'JobCreateTime',
        'migrationJobClass'       => 'MigrationJobClass',
        'migrationJobID'          => 'MigrationJobID',
        'migrationJobName'        => 'MigrationJobName',
        'migrationJobStatus'      => 'MigrationJobStatus',
        'migrationMode'           => 'MigrationMode',
        'migrationObject'         => 'MigrationObject',
        'payType'                 => 'PayType',
        'precheck'                => 'Precheck',
        'sourceEndpoint'          => 'SourceEndpoint',
        'structureInitialization' => 'StructureInitialization',
        'tags'                    => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataInitialization) {
            $res['DataInitialization'] = null !== $this->dataInitialization ? $this->dataInitialization->toMap() : null;
        }
        if (null !== $this->dataSynchronization) {
            $res['DataSynchronization'] = null !== $this->dataSynchronization ? $this->dataSynchronization->toMap() : null;
        }
        if (null !== $this->destinationEndpoint) {
            $res['DestinationEndpoint'] = null !== $this->destinationEndpoint ? $this->destinationEndpoint->toMap() : null;
        }
        if (null !== $this->instanceCreateTime) {
            $res['InstanceCreateTime'] = $this->instanceCreateTime;
        }
        if (null !== $this->jobCreateTime) {
            $res['JobCreateTime'] = $this->jobCreateTime;
        }
        if (null !== $this->migrationJobClass) {
            $res['MigrationJobClass'] = $this->migrationJobClass;
        }
        if (null !== $this->migrationJobID) {
            $res['MigrationJobID'] = $this->migrationJobID;
        }
        if (null !== $this->migrationJobName) {
            $res['MigrationJobName'] = $this->migrationJobName;
        }
        if (null !== $this->migrationJobStatus) {
            $res['MigrationJobStatus'] = $this->migrationJobStatus;
        }
        if (null !== $this->migrationMode) {
            $res['MigrationMode'] = null !== $this->migrationMode ? $this->migrationMode->toMap() : null;
        }
        if (null !== $this->migrationObject) {
            $res['MigrationObject'] = null !== $this->migrationObject ? $this->migrationObject->toMap() : null;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->precheck) {
            $res['Precheck'] = null !== $this->precheck ? $this->precheck->toMap() : null;
        }
        if (null !== $this->sourceEndpoint) {
            $res['SourceEndpoint'] = null !== $this->sourceEndpoint ? $this->sourceEndpoint->toMap() : null;
        }
        if (null !== $this->structureInitialization) {
            $res['StructureInitialization'] = null !== $this->structureInitialization ? $this->structureInitialization->toMap() : null;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return migrationJob
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataInitialization'])) {
            $model->dataInitialization = dataInitialization::fromMap($map['DataInitialization']);
        }
        if (isset($map['DataSynchronization'])) {
            $model->dataSynchronization = dataSynchronization::fromMap($map['DataSynchronization']);
        }
        if (isset($map['DestinationEndpoint'])) {
            $model->destinationEndpoint = destinationEndpoint::fromMap($map['DestinationEndpoint']);
        }
        if (isset($map['InstanceCreateTime'])) {
            $model->instanceCreateTime = $map['InstanceCreateTime'];
        }
        if (isset($map['JobCreateTime'])) {
            $model->jobCreateTime = $map['JobCreateTime'];
        }
        if (isset($map['MigrationJobClass'])) {
            $model->migrationJobClass = $map['MigrationJobClass'];
        }
        if (isset($map['MigrationJobID'])) {
            $model->migrationJobID = $map['MigrationJobID'];
        }
        if (isset($map['MigrationJobName'])) {
            $model->migrationJobName = $map['MigrationJobName'];
        }
        if (isset($map['MigrationJobStatus'])) {
            $model->migrationJobStatus = $map['MigrationJobStatus'];
        }
        if (isset($map['MigrationMode'])) {
            $model->migrationMode = migrationMode::fromMap($map['MigrationMode']);
        }
        if (isset($map['MigrationObject'])) {
            $model->migrationObject = migrationObject::fromMap($map['MigrationObject']);
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['Precheck'])) {
            $model->precheck = precheck::fromMap($map['Precheck']);
        }
        if (isset($map['SourceEndpoint'])) {
            $model->sourceEndpoint = sourceEndpoint::fromMap($map['SourceEndpoint']);
        }
        if (isset($map['StructureInitialization'])) {
            $model->structureInitialization = structureInitialization::fromMap($map['StructureInitialization']);
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        return $model;
    }
}
