<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Spryker Marketplace License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\MerchantProductOption\Business;

use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;
use Spryker\Zed\MerchantProductOption\Business\Expander\ProductOption\ProductOptionGroupExpander;
use Spryker\Zed\MerchantProductOption\Business\Expander\ProductOption\ProductOptionGroupExpanderInterface;
use Spryker\Zed\MerchantProductOption\Business\Validator\MerchantProductOption\MerchantProductOptionValidator;
use Spryker\Zed\MerchantProductOption\Business\Validator\MerchantProductOption\MerchantProductOptionValidatorInterface;
use Spryker\Zed\MerchantProductOption\Dependency\Facade\MerchantProductOptionToMerchantFacadeInterface;
use Spryker\Zed\MerchantProductOption\MerchantProductOptionDependencyProvider;

/**
 * @method \Spryker\Zed\MerchantProductOption\MerchantProductOptionConfig getConfig()
 * @method \Spryker\Zed\MerchantProductOption\Persistence\MerchantProductOptionRepositoryInterface getRepository()
 */
class MerchantProductOptionBusinessFactory extends AbstractBusinessFactory
{
    public function createMerchantProductOptionValidator(): MerchantProductOptionValidatorInterface
    {
        return new MerchantProductOptionValidator(
            $this->getRepository(),
            $this->getConfig(),
        );
    }

    public function createProductOptionGroupExpander(): ProductOptionGroupExpanderInterface
    {
        return new ProductOptionGroupExpander(
            $this->getRepository(),
            $this->getMerchantFacade(),
        );
    }

    public function getMerchantFacade(): MerchantProductOptionToMerchantFacadeInterface
    {
        return $this->getProvidedDependency(MerchantProductOptionDependencyProvider::FACADE_MERCHANT);
    }
}
