<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La structure blade </title>
</head>
<body>
    <p>la meilleure c'est {{$name}} et elle a {{$age}} Ans </p>

<?php
     if($name== 'GARBA'){?> Message lorsque le nom est Garba <?php }else {?> <p>Message quand ce n'est 
        Garba
     </p> <?php }
?>

@if($name=='GARBA')
  <p>Message lorsque le nom est Garba </p>
  @else
  <p> Message lorsque le nom n'est pas Garba </p>


@endif