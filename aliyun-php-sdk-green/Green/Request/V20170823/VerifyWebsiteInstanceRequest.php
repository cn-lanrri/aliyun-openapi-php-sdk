<?php

namespace Green\Request\V20170823;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of VerifyWebsiteInstance
 *
 * @method string getInstanceId()
 * @method string getSourceIp()
 * @method string getVerifyMethod()
 * @method string getLang()
 */
class VerifyWebsiteInstanceRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Green',
            '2017-08-23',
            'VerifyWebsiteInstance',
            'green'
        );
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        $this->requestParameters['InstanceId'] = $instanceId;
        $this->queryParameters['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function setSourceIp($sourceIp)
    {
        $this->requestParameters['SourceIp'] = $sourceIp;
        $this->queryParameters['SourceIp'] = $sourceIp;

        return $this;
    }

    /**
     * @param string $verifyMethod
     *
     * @return $this
     */
    public function setVerifyMethod($verifyMethod)
    {
        $this->requestParameters['VerifyMethod'] = $verifyMethod;
        $this->queryParameters['VerifyMethod'] = $verifyMethod;

        return $this;
    }

    /**
     * @param string $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        $this->requestParameters['Lang'] = $lang;
        $this->queryParameters['Lang'] = $lang;

        return $this;
    }
}
