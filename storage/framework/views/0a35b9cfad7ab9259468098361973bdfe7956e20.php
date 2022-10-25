<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333333;
        }
        li {
            float: left;
        }
        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 16px;
            text-decoration: none;
        }
        li a:hover {
            background-color: #111111;
        }
        .footer{
            width: 100%;
            bottom: 0;
            position: fixed;
            background-color: #333333;
        }
        .footer p{
            color: white;
        }
    </style>
</head>
<body>

<div class="menu">
    <ul>
        <li><a href="<?php echo e(route('home')); ?>">home</a></li>
        <li><a href="<?php echo e(route('projects')); ?>">projects</a></li>
        <li><a href="<?php echo e(route('contact')); ?>">contact</a></li>
        <li><a href="<?php echo e(route('about')); ?>">about</a></li>
    </ul>
</div>
    <h1>HOMEEEEE</h1>
    <p>Welcome, <?php echo e($name); ?></p>
    <p>You are <?php echo e($describe); ?></p>

<div class="footer">
    <center>
        <p>Copyright 2021</p>
    </center>
</div>
</body>
</html><?php /**PATH D:\Sauce\Laravel\default-app\resources\views/home.blade.php ENDPATH**/ ?>