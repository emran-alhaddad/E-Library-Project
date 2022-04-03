<?php

namespace coding\app\models;

use coding\app\system\AppSystem;

class Model
{
    public static  $tblName;

    function save(): bool
    {
        $values = array();
        $columns = array();

        foreach (get_object_vars($this) as $key => $property) {
            if ($property != self::$tblName) {
                $values[] = is_string($property) ? "'" . $property . "'" : $property;
                $columns[] = $key;
            }
        }

        $stmt =
            AppSystem::$appSystem->queryBuider
            ->insertInto(self::$tblName)
            ->fields($columns)
            ->values($values);

        if ($stmt->execute())
            return true;
        return false;
    }


    function update($condition="1"): bool
    {
        foreach (get_object_vars($this) as $key => $property) {
            if ($property != self::$tblName) {
                AppSystem::$appSystem->queryBuider
                ->set($key,is_string($property) ? "'" . $property . "'" : $property);
            }
        }

        $stmt =
            AppSystem::$appSystem->queryBuider
            ->update(self::$tblName)
            ->where($condition);

        if ($stmt->execute())
            return true;
        return false;
    }


    public function getAll($view=null)
    {
        return AppSystem::$appSystem
                            ->queryBuider
                            ->select()
                            ->from(empty($view)?self::$tblName:$view)
                            ->execute();
    }

    public function getAllWithJoin($innerTable,$innerField)
    {
        return AppSystem::$appSystem
                            ->queryBuider
                            ->select(self::$tblName.".* , $innerTable.*")
                            ->from(self::$tblName." , ".$innerTable)
                            ->execute();
    }

    public function getSingle($condition,$view=null)
    {
        return AppSystem::$appSystem
                            ->queryBuider
                            ->select()
                            ->from(empty($view)?self::$tblName:$view)
                            ->where($condition)
                            ->execute();
    }
}
