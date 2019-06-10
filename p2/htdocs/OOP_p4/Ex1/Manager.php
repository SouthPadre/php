<?php
namespace Ex1;

class Manager
{
    public function place($item)
    {
        if (is_object($item) && ($item instanceof Papers)) {
            echo 'Положил ' . get_class($item) . ' на стол</br>';
        } elseif (is_object($item) && ($item instanceof Tools)) {
                echo 'Убрал ' . get_class($item) . ' внутрь стола</br>';
        } else {
            echo 'Выкинул ' . (is_object($item) ? get_class($item) : $item) . ' в коризну</br>';
        }
    }
}
