<?php

namespace Desnake\Notifications;

use Illuminate\Notifications\RoutesNotifications;

trait ExtendedNotifiable
{
    /**
     * @trait is upgraded with HasDatabaseExtendedNotifications trait 
     * instead of regular HasDatabaseNotifications
     */
    use HasDatabaseExtendedNotifications, RoutesNotifications;
}
