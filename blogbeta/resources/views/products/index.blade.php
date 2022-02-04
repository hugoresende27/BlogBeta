<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produtos Index</title>
</head>
<body>

    <h1>Produtos 2</h1>
    <a href="{{ route('prods') }}">Produtos</a>

    <h1>Produtos</h1>
    <a href="/">home</a><hr>
    <a href="/products/about">about</a><hr>
    <a href="/products/compact">compact</a><hr>
    <a href="/products/with">with</a><hr>
    <a href="/products/with2">with com array</a><hr>
    <a href="/products/with3">diretamente no return</a><hr>
    

    @foreach ($collection as $item)
        
    @endforeach

    @if ()
        
    @endif

  <?php
    if (isset($title)) {
      echo $title."<hr>";
      echo $desc."<hr>";
    } 
  ?>

  <?php
    if (isset($var_da_blade)) {
      echo "<hr>".$var_da_blade."<hr>";
    } 
  ?>

  <?php
    if (isset($dados)) {

      foreach ($dados as $d){
          echo "<hr>".$d."<hr>"; 
        }
     
    } 
  ?>

  <?php
    if (isset($prods)) {
      echo "<hr>".$prods."<hr>";
    } 
  ?>
</body>
</html>