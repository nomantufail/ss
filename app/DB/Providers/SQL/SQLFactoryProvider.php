<?php
/**
 * Created by PhpStorm.
 * User: zeenomlabs
 * Date: 4/1/2016
 * Time: 9:38 PM
 */

namespace App\DB\Providers\SQL;


use App\DB\FactoryProvider;
use App\DB\Interfaces\FactoryProviderInterface;
use App\DB\Providers\SQL\Factories\Factories\Student\StudentFactory;

class SQLFactoryProvider extends FactoryProvider implements FactoryProviderInterface{

    /**
     * @return StudentFactory
     */
    public static function student()
    {
        return new StudentFactory();
    }
} 