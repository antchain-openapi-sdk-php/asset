<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\ASSET\Models;

use AlibabaCloud\Tea\Model;

class QueryStatisticsConversionmetricsRequest extends Model
{
    // OAuth模式下的授权token
    /**
     * @var string
     */
    public $authToken;

    /**
     * @var string
     */
    public $productInstanceId;

    // 租户id
    //
    /**
     * @var string
     */
    public $tenantId;

    // 请求唯一id
    //
    /**
     * @var string
     */
    public $requestUniqueId;

    // VOUCHER_CONVERSION, USER_CONVERSION
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'authToken'         => 'auth_token',
        'productInstanceId' => 'product_instance_id',
        'tenantId'          => 'tenant_id',
        'requestUniqueId'   => 'request_unique_id',
        'type'              => 'type',
    ];

    public function validate()
    {
        Model::validateRequired('tenantId', $this->tenantId, true);
        Model::validateRequired('requestUniqueId', $this->requestUniqueId, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateMaxLength('requestUniqueId', $this->requestUniqueId, 36);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authToken) {
            $res['auth_token'] = $this->authToken;
        }
        if (null !== $this->productInstanceId) {
            $res['product_instance_id'] = $this->productInstanceId;
        }
        if (null !== $this->tenantId) {
            $res['tenant_id'] = $this->tenantId;
        }
        if (null !== $this->requestUniqueId) {
            $res['request_unique_id'] = $this->requestUniqueId;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryStatisticsConversionmetricsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['auth_token'])) {
            $model->authToken = $map['auth_token'];
        }
        if (isset($map['product_instance_id'])) {
            $model->productInstanceId = $map['product_instance_id'];
        }
        if (isset($map['tenant_id'])) {
            $model->tenantId = $map['tenant_id'];
        }
        if (isset($map['request_unique_id'])) {
            $model->requestUniqueId = $map['request_unique_id'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}