<?php

namespace App\Logic;

use Exception;

class BaseLogic
{
    protected static ?array $instances = null;

    public static function getInstance(): BaseLogic
    {
        $classCalled = get_called_class();
        try {
            if (!empty(self::$instances[$classCalled])) {
                return self::$instances[$classCalled];
            }

            self::$instances[$classCalled] = new static();
            if (empty(self::$instances[$classCalled])) {
                throw new Exception('Fail to create new instance' . $classCalled);
            }

            return self::$instances[$classCalled];
        } catch (Exception $e) {
            self::$instances[$classCalled] = null;
            throw ($e);
        }
    }
}
