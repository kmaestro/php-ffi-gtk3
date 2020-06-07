<?php

declare(strict_types=1);

namespace Gtk3\Support;

trait SingletonTrait
{
    /**
     * @var self|null
     */
    private static ?self $instance = null;

    /**
     * @return $this
     */
    public static function getInstance(): self
    {
        return self::$instance ??= new static();
    }

    /**
     * @param SingletonTrait|null $instance
     * @return void
     */
    public static function setInstance(?self $instance): void
    {
        self::$instance = $instance;
    }
}