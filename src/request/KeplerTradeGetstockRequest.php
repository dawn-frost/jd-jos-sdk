<?php

declare(strict_types=1);

namespace dawnFrost\JdJos\Request;

class KeplerTradeGetstockRequest
{
    public function __construct()
    {
        $this->version = '1.0';
    }

    private $apiParas = [];

    public function getApiMethodName()
    {
        return 'jd.kepler.trade.getstock';
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

    private $skus;

    public function setSkus($skus): void
    {
        $this->apiParas['skus'] = $skus;
    }

    public function getSkus()
    {
        return $this->apiParas['skus'];
    }

    private $area;

    public function setArea($area): void
    {
        $this->apiParas['area'] = $area;
    }

    public function getArea()
    {
        return $this->apiParas['area'];
    }

    private $category;

    public function setCategory($category): void
    {
        $this->apiParas['category'] = $category;
    }

    public function getCategory()
    {
        return $this->apiParas['category'];
    }

    private $venderId;

    public function setVenderId($venderId): void
    {
        $this->apiParas['venderId'] = $venderId;
    }

    public function getVenderId()
    {
        return $this->apiParas['venderId'];
    }
}
