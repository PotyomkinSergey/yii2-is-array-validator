<?php
declare(strict_types=1);

namespace Potomkin\Yii2\Validator;

use yii\validators\Validator;

class IsArrayValidator extends Validator
{
    public function validateAttribute($model, $attribute): void
    {
        if (!is_array($model->$attribute)) {
            $model->addError($attribute, "The attribute {$attribute} must be an array.");
        }
    }
}
