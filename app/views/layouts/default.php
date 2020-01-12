<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DEFAULT | <?=$meta['title']?></title>
    <meta name="description" content="<?=$meta['desc']?>">
    <meta name="keywords" content="<?=$meta['keywords']?>">


    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">
  </head>
  <body>
    <div class="container">

    <h1>Hello World</h1>

      <?php if(!empty($menu)): ?>
        <ul class="nav nav-pills">
        <?php foreach ($menu as $item): ?>
          <li><a href="category/<?=$item['id'] ?>"> <?=$item['title'] ?></a></li>
        <?php endforeach; ?>
        </ul>
        <?php endif; ?>
         <?=$content?>

        <? //debug(vendor\core\Db::$countSql)?>
        <? //debug(vendor\core\Db::$queries)?>

      </div>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>

    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script> -->
    <script src="/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
