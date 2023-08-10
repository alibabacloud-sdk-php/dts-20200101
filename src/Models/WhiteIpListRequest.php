<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class WhiteIpListRequest extends Model
{
    /**
     * @description The HTTP status code.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $destinationRegion;

    /**
     * @description The ID of the region where the destination instance resides. For more information, see [List of supported regions](~~141033~~).
     *
     * >
     *   If the destination instance is a self-managed database with a public IP address or a third-party cloud database, you can set the parameter to **cn-hangzhou** or the ID of the closest region.
     *   If the DTS task is a data migration or data synchronization task, you must specify this parameter.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the region where the source instance resides. For more information, see [List of supported regions](~~141033~~).
     *
     * >  If the source instance is a self-managed database with a public IP address or a third-party cloud database, you can set the parameter to **cn-hangzhou** or the ID of the closest region.
     * @example vpc
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'destinationRegion' => 'DestinationRegion',
        'region'            => 'Region',
        'regionId'          => 'RegionId',
        'type'              => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destinationRegion) {
            $res['DestinationRegion'] = $this->destinationRegion;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return WhiteIpListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestinationRegion'])) {
            $model->destinationRegion = $map['DestinationRegion'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
