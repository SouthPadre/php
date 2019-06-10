<?php
namespace Ex2;

class EmptyItem extends Item
{
    public function show()
    {
        echo 'Класс ' . $this->name . ' не найден</br>';
    }
}
