<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <x-test-components.app>
        <x-slot name="header">
            <ul>
                <li><a href="">top</a></li>
                <li><a href="">about</a></li>
                <li><a href="">mypage</a></li>
            </ul>
        </x-slot>
        <p>コンポーネント照すっと</p>
    </x-test-components.app>
</body>
</html>