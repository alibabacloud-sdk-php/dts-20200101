<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponseBody;

use AlibabaCloud\Tea\Model;

class migrationMode extends Model
{
    /**
     * @description The database account of the destination instance.
     *
     * @example false
     *
     * @var bool
     */
    public $dataExtractTransformLoad;

    /**
     * @description The database engine of the destination instance.
     *
     * @example true
     *
     * @var bool
     */
    public $dataInitialization;

    /**
     * @description The migration types or synchronization types.
     *
     * @example true
     *
     * @var bool
     */
    public $dataSynchronization;

    /**
     * @description Indicates whether data transformation is performed. Valid values:
     *
     *   **true**: Data transformation is performed.
     *   **false**: Data transformation is not performed.
     *
     * @example true
     *
     * @var bool
     */
    public $structureInitialization;
    protected $_name = [
        'dataExtractTransformLoad' => 'DataExtractTransformLoad',
        'dataInitialization'       => 'DataInitialization',
        'dataSynchronization'      => 'DataSynchronization',
        'structureInitialization'  => 'StructureInitialization',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataExtractTransformLoad) {
            $res['DataExtractTransformLoad'] = $this->dataExtractTransformLoad;
        }
        if (null !== $this->dataInitialization) {
            $res['DataInitialization'] = $this->dataInitialization;
        }
        if (null !== $this->dataSynchronization) {
            $res['DataSynchronization'] = $this->dataSynchronization;
        }
        if (null !== $this->structureInitialization) {
            $res['StructureInitialization'] = $this->structureInitialization;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return migrationMode
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataExtractTransformLoad'])) {
            $model->dataExtractTransformLoad = $map['DataExtractTransformLoad'];
        }
        if (isset($map['DataInitialization'])) {
            $model->dataInitialization = $map['DataInitialization'];
        }
        if (isset($map['DataSynchronization'])) {
            $model->dataSynchronization = $map['DataSynchronization'];
        }
        if (isset($map['StructureInitialization'])) {
            $model->structureInitialization = $map['StructureInitialization'];
        }

        return $model;
    }
}
