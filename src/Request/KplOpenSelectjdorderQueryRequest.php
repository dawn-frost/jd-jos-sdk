<?php

declare(strict_types=1);

namespace DawnFrost\JdJos\Request;

class KplOpenSelectjdorderQueryRequest
{
    public function __construct()
    {
        $this->version = '1.0';
    }

    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jd.kpl.open.selectjdorder.query';
    }

    public function getApiParas()
    {
        if (empty($this->apiParas)) {
            return '{}';
        }

        return json_encode($this->apiParas);
    }

    public function check(): void
    {
    }

    public function putOtherTextParam($key, $value): void
    {
        $this->apiParas[$key] = $value;
        $this->{$key} = $value;
    }

    private $version;

    public function setVersion($version): void
    {
        $this->version = $version;
    }

    public function getVersion()
    {
        return $this->version;
    }

    private $jdOrderId;

    public function setJdOrderId($jdOrderId): void
    {
        $this->apiParas['jdOrderId'] = $jdOrderId;
    }

    public function getJdOrderId()
    {
        return $this->apiParas['jdOrderId'];
    }

    private $queryExts;

    public function setQueryExts($queryExts): void
    {
        $this->apiParas['queryExts'] = $queryExts;
    }

    public function getQueryExts()
    {
        return $this->apiParas['queryExts'];
    }
}