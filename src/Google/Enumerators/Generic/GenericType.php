<?php

declare(strict_types=1);

namespace Chiiya\Passes\Google\Enumerators\Generic;

use Chiiya\Passes\Common\LegacyValueEnumerator;

final class GenericType
{
    /** @var string */
    public const GENERIC_TYPE_UNSPECIFIED = 'GENERIC_TYPE_UNSPECIFIED';

    /** @var string */
    public const GENERIC_SEASON_PASS = 'GENERIC_SEASON_PASS';

    /** @var string */
    public const GENERIC_VOUCHER = 'GENERIC_VOUCHER';

    /** @var string */
    public const GENERIC_GYM_MEMBERSHIP = 'GENERIC_GYM_MEMBERSHIP';

    /** @var string */
    public const GENERIC_LIBRARY_MEMBERSHIP = 'GENERIC_LIBRARY_MEMBERSHIP';

    /** @var string */
    public const GENERIC_RESERVATIONS = 'GENERIC_RESERVATIONS';

    /** @var string */
    public const GENERIC_AUTO_INSURANCE = 'GENERIC_AUTO_INSURANCE';

    /** @var string */
    public const GENERIC_HOME_INSURANCE = 'GENERIC_HOME_INSURANCE';

    /** @var string */
    public const GENERIC_ENTRY_TICKET = 'GENERIC_ENTRY_TICKET';

    /** @var string */
    public const GENERIC_RECEIPT = 'GENERIC_RECEIPT';

    /** @var string */
    public const GENERIC_OTHER = 'GENERIC_OTHER';

    public static function values(): array
    {
        return [
            self::GENERIC_TYPE_UNSPECIFIED,
            self::GENERIC_SEASON_PASS,
            self::GENERIC_VOUCHER,
            self::GENERIC_GYM_MEMBERSHIP,
            self::GENERIC_LIBRARY_MEMBERSHIP,
            self::GENERIC_RESERVATIONS,
            self::GENERIC_AUTO_INSURANCE,
            self::GENERIC_HOME_INSURANCE,
            self::GENERIC_ENTRY_TICKET,
            self::GENERIC_RECEIPT,
            self::GENERIC_OTHER,
        ];
    }
}
