<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Книги</title>
    <style>
        .book-gallery {
            display: flex;
            justify-content: space-around;
            margin-top: 50px;
        }
        .book {
            text-align: center;
        }
        .book img {
            width: 200px;
            height: auto;
            border: 1px solid #ccc;
            box-shadow: 2px 2px 10px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
<h1 style="text-align: center;">Галерея книг</h1>

<div class="book-gallery">

    <div class="book">
        <img src="{{ asset('storage/books11.jpg') }}" alt="Книга 1">
        <p>Книга 1</p>
    </div>

    <div class="book">
        <img src="{{ ('images/books12.jpg') }}" alt="Книга 2">
        <p>Книга 2</p>
    </div>
    <div class="book">
        <img src="{{ ('images/books13.jpg') }}" alt="Книга 3">
        <p>Книга 3</p>
    </div>
</div>
</body>
</html>
