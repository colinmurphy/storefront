<?php declare(strict_types=1);

namespace Shopware\Storefront\Pagelet\Listing;

use Shopware\Core\Checkout\CheckoutContext;
use Shopware\Core\Framework\Context;
use Shopware\Core\Framework\Event\NestedEvent;
use Symfony\Component\HttpFoundation\Request;

class ListingPageletRequestEvent extends NestedEvent
{
    public const NAME = 'listing.pagelet.request.event';

    /**
     * @var CheckoutContext
     */
    protected $context;

    /**
     * @var Request
     */
    protected $request;

    /**
     * @var ListingPageletRequest
     */
    protected $listingPageletRequest;

    public function __construct(Request $request, CheckoutContext $context, ListingPageletRequest $listingPageletRequest)
    {
        $this->context = $context;
        $this->request = $request;
        $this->listingPageletRequest = $listingPageletRequest;
    }

    public function getName(): string
    {
        return self::NAME;
    }

    public function getContext(): Context
    {
        return $this->context->getContext();
    }

    public function getCheckoutContext(): CheckoutContext
    {
        return $this->context;
    }

    public function getRequest(): Request
    {
        return $this->request;
    }

    public function getListingPageletRequest(): ListingPageletRequest
    {
        return $this->listingPageletRequest;
    }
}
