<?php


class ItemStorage{
    private $items = [];

    // добавление товара в хранилище
    public function add_item(Item $item){
        $this->items[$item->getId()] = $item;
    }

    // написать реализацию следующих методов
    public function get_by_id($id){
        // возвращает товар по id
        return $this->items[$id];
    }

    public function get_by_title(string $title){
        // возвращает товар по названию (title)
        $result_by_title = [];
        foreach ($this->items as $item){
          if ($item->getTitle() === $title){
            $result_by_title[] = $item;
          }
        }
        return $result_by_title;
    }

    public function get_by_price(int $price_from, int $price_to){
        // возвращает товары, стоимость которых находится в диапазоне от $price_from до $price_to
        $result_by_price = [];
        foreach ($this->items as $item){
          if ($item->getPrice() >= $price_from && $item->getPrice() <= $price_to){
            $result_by_price[] = $item;
          }
        }
        return $result_by_price;
    }

    public function get_by_material(...$materials){
        // возвращает товары, которые изготовлены из материалов, перечисленных в $materials,
        // например
        // при вызове в метод передаются ->get_by_material('дерево', 'железо', 'пластик');
        // значит метод должен вернуть все товары, сделанные из дерева, железа или пластика
        $result_by_material = [];
        foreach ($this->items as $item){
          foreach ($materials as $material) {
            if ($item->getMaterial() === $material) {
              $result_by_material[] = $item;
            }
          }
        }
        return $result_by_material;
    }

    public function get_by_price_and_material(int $price_to, string $material){
        // возвращает товары, стоимость которых не превышает $price_to и
        // материал, из которого изготовлен товар соответствует $material
        $result_by_price_material = [];
        foreach ($this->items as $item){
          if ($item->getPrice() <= $price_to && $item->getMaterial() === $material){
            $result_by_price_material[] = $item;  
          }
        }
        return $result_by_price_material;
    }
}
