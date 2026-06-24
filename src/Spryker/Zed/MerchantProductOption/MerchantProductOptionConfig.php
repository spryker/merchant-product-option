<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Spryker Marketplace License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\MerchantProductOption;

use Spryker\Zed\Kernel\AbstractBundleConfig;

class MerchantProductOptionConfig extends AbstractBundleConfig
{
    protected const string CHECKOUT_ERROR_TYPE = 'MerchantProductOptionUnavailable';

    /**
     * @api
     *
     * @var string
     */
    public const STATUS_WAITING_FOR_APPROVAL = 'waiting_for_approval';

    /**
     * @api
     *
     * @var string
     */
    public const STATUS_APPROVED = 'approved';

    /**
     * @api
     *
     * @var string
     */
    public const STATUS_DENIED = 'denied';

    /**
     * Specification:
     * - Returns the error type identifier used in CheckoutErrorTransfer for errors produced by this module.
     *
     * @api
     */
    public function getCheckoutErrorType(): string
    {
        return static::CHECKOUT_ERROR_TYPE;
    }
}
