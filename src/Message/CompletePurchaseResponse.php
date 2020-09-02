<?php

namespace Omnipay\Epay\Message;

/**
 * PayPal Express Complete Payment Response
 */
class CompletePurchaseResponse extends \Omnipay\Common\Message\AbstractResponse
{
    /*
     * Is this complete purchase response successful? Will not be successful if it's a redirect response.
     *
     * @return bool
     */
    public function isSuccessful()
    {
        return true;
    }

    /**
     * The complete purchase response can be in error where it wants to have your customer return to paypal.
     *
     * @return bool
     */
    public function isRedirect()
    {
        return false;
    }

    /**
     * The transaction reference obtained from the purchase() call can't be used to refund a purchase.
     *
     * @return string
     */
    public function getTransactionReference()
    {
        return parent::getTransactionReference();
    }
}
