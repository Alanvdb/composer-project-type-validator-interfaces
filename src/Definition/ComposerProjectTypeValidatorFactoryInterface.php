<?php declare(strict_types=1);

namespace AlanVdb\Composer\Definition;

use AlanVdb\Validator\Definition\ValidatorInterface;

interface ComposerProjectTypeValidatorFactoryInterface
{
    public function create(string $errorMessage = '') : ValidatorInterface;
}
