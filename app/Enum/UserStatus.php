<?php
namespace App\Enum;

use MyCLabs\Enum\Enum;

/**
 * @method static UserStatus PENDING()
 * @method static UserStatus ACTIVE()
 * @method static UserStatus BLOCKED()
 */
class UserStatus extends Enum
{
    const PENDING = 'Pending';
    const ACTIVE = 'Active';
    const BLOCKED = 'Blocked';
}
