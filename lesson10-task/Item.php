<?php

class Item
{
    private $id; // не может быть отрицательным или 0
    private $title; // максимум 10 символов
    private $price; // не может быть отрицательным или 0
    private $material; // минимум 3 символа

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    // значения свойств title и id должны задаваться через конструктор,
    public function __construct(string $title, int $id){
      if (strlen($title) < 0 || strlen($title) > 10){
        throw new InvalidArgumentException('Некорректное количество символов');
      }
      $this->title = $title;

      if ($id <= 0) {
        throw new InvalidArgumentException('Неверный номер id');
      }
      $this->id = $id;
      // $this->price = $price;
      // $this->material = $material;
    }


    // добавить все необходимые геттеры и сеттеры
    public function setTitle(string $title){
        $this->title = $title;
    }

    public function getTitle(){
      return $this->title;
    }

    public function setPrice($price){
      if ($price <= 0){
        throw new InvalidArgumentException('Цена не может быть меньше или равно 0');
      }
      $this->price = $price;
    }

    public function getPrice(){
      return $this->price;
    }

    public function setMaterial(string $material){
      if (strlen($material) < 3){
        throw new InvalidArgumentException('Количество символов не может быть меньше 3');
      }
      $this->material = $material;
    }

    public function getMaterial(){
      return $this->material;
    }

}
