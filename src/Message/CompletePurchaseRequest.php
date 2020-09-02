<?php

namespace Omnipay\Epay\Message;

/**
 * PayPal Express Complete Purchase Request
 */
class CompletePurchaseRequest extends \Omnipay\Common\Message\AbstractRequest
{
    public function getData()
    {
        return [];
    }

    public function sendData($data)
    {
        return $this->createResponse($data);
    }

    protected function createResponse($data)
    {
        return $this->response = new CompletePurchaseResponse($this, $data);
    }
}
