# Yii2 is array validator
Install

	composer require potomkin/yii2-is-array-validator

and use
```
<?php

use Potomkin\Yii2\Validator\IsArrayValidator;

class MyClass extends Model
{
    public function rules(): array
    {
        return [
            [['attr'], IsArrayValidator::class],
        ];
    }
}
