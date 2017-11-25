<?php

namespace app\models;

class User extends \yii\db\ActiveRecord
{

    function getName() {
        foreach($this->attributes() as $attr) {
            if($this->endsWith($attr, '_name')) {
                return $this[$attr];
            }
        }
        return null;
    }

    function endsWith($haystack, $needle)
    {
        $length = strlen($needle);

        return $length === 0 ||
            (substr($haystack, -$length) === $needle);
    }

    static function isAdmin() {
        return is_a($_SESSION['user'], Admin::className());
    }

    static function isMetodist() {
        return is_a($_SESSION['user'], Metodist::className());
    }

    static function isTeacher() {
        return is_a($_SESSION['user'], Teacher::className());
    }

    static function isStudent() {
        return is_a($_SESSION['user'], Student::className());
    }
}
