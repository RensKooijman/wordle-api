<?php

namespace Models;

use InvalidArgumentException;
use RuntimeException;

class DotEnv
{
    /**
     * The directory where the .env file can be located.
     *
     * @var string
     */
    protected string $path;


    public function __construct(string $path)
    {
        if ( ! file_exists(__DIR__ . '/' .$path)) {
            throw new InvalidArgumentException(
                sprintf('%s does not exist', __DIR__ . '/' . $path)
            );
        }
        $this->path = $path;
    }

    public function load(): void
    {
        if ( ! is_readable( __DIR__ . '/' . $this->path)) {
            throw new RuntimeException(
                sprintf('%s file is not readable',  __DIR__ . '/' . $this->path)
            );
        }

        $lines = file(
            __DIR__ . '/' . $this->path,
            FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES
        );
        foreach ($lines as $line) {
            if (str_starts_with(trim($line), '#')) {
                continue;
            }

            list($name, $value) = explode('=', $line, 2);
            $name = trim($name);
            $value = trim($value);

            if ( ! array_key_exists($name, $_SERVER)
                && ! array_key_exists(
                    $name,
                    $_ENV
                )
            ) {
                putenv(sprintf('%s=%s', $name, $value));
                $_ENV[$name] = $value;
                $_SERVER[$name] = $value;
            }
        }
    }
}