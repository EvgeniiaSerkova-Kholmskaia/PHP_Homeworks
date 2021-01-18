<?php
$goods = [
    [
        'id' => 1,
        'title' => 'Flute',
        'price' => 20000,
        'img' => 'flute.jpg',
        'description' => [
            'color' => 'white',
            'material' => 'bamboo'
        ]
    ],
    [
        'id' => 2,
        'title' => 'Гитара',
        'price' => 18000,
        'img' => 'guitar.jpg',
        'description' => [
            'color' => 'brown',
            'material' => 'linden'
        ]
    ],
    [
        'id' => 3,
        'title' => 'Барабан',
        'price' => 68000,
        'img' => 'drum.jpg',
        'description' => [
            'color' => 'brown',
            'material' => 'steel'
        ]
    ],
];
?>

<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Товары</title>
  </head>
  <body>
    <section>
      <?php foreach ($goods as $good): ?>
      <article>
        <hr>
        <h3>Название: <?php echo $good['title']?></h3>
        <p>Цена: <?php echo $good['price']?></p>
        <div>
          <p>Характеристики товара:</p>
          <table border>
            <tr>
              <th>Цвет:</th>
              <th>Материал:</th>
            </tr>
            <tr>
            <?php foreach ($good['description'] as $descript): ?>
              <td><?php echo $descript;?></td>
            <?php endforeach; ?>
            </tr>
          </table>
        </div>
        <img src="img/<?php echo $good['img'] ?>" height="auto" width="30%">
      </article>
    <?php endforeach; ?>
    </section>
  </body>
</html>
