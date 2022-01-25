<?php

declare(strict_types=1);

namespace dawnFrost\JdJos\Request;

class KplOpenSkuQueryinfoRequest
{
    public function __construct()
    {
        $this->version = '1.0';
    }

    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jd.kpl.open.sku.queryinfo';
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

    private $skuQuery;

    public function setSkuQuery($skuQuery): void
    {
        $this->apiParas['skuQuery'] = $skuQuery;
    }

    public function getSkuQuery()
    {
        return $this->apiParas['skuQuery'];
    }
}
