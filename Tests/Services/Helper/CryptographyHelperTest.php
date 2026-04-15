<?php

/**
 * @since       22.09.2022 - 14:07
 *
 * @author      Patrick Froch <info@easySolutionsIT.de>
 *
 * @see         http://easySolutionsIT.de
 *
 * @copyright   e@sy Solutions IT 2022
 */

declare(strict_types=1);

namespace Esit\Cryptography\Tests\Services\Helper;

use Esit\Cryptography\Classes\Exceptions\InvalidArgumentException;
use Esit\Cryptography\Classes\Services\Helper\CryptographyHelper;
use PHPUnit\Framework\TestCase;

class CryptographyHelperTest extends TestCase
{


    public function testEncrypt(): void
    {
        $value      = 'My secret test sting';
        $helper     = new CryptographyHelper('rCmXP3fLTRtqPKvszRNkTRFT', 'aes-256-cbc');
        $encrypted  = $helper->encrypt($value);
        $this->assertSame($value, $helper->decrypt($encrypted));

    }


    public function testEncryptThrowExceptionIfSecretIsEmpty(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('secret could not be empty');
        new CryptographyHelper('', 'aes-256-cbc');
    }


    public function testEncryptThrowExceptionIfCipherIsEmpty(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('cipher could not be empty');
        new CryptographyHelper('rCmXP3fLTRtqPKvszRNkTRFT', '');
    }
}
