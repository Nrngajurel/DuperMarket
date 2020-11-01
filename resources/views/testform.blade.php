<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<form action="{{ route('product.index') }}" method="get">
    <input type="checkbox" name="categories[]" id="" value="laptop">
    <input type="checkbox" name="categories[]" id="" value="desktop">
    <input type="checkbox" name="categories[]" id="" value="t-shirt">
    <input type="checkbox" name="categories[]" id="" value="shirt">
    <input type="submit" value="submit data">
</form>

</body>
</html>
