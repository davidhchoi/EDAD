<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?= CSS . "base.css" ?>">
    <title>David Choi - <?= $title ?></title>
</head>
<body>
    <div id="content">
        <header>
            <div class="logo"><a href="<?= URL ?>"><img src="<?= IMG . 'logo.png' ?>" alt="logo"></a></div>
        </header>
        <hr />
        <aside>
            <div id="navbar">
                <nav id="main-nav">
                    <ul class="nav">
                        <li><a href="<?= URL . 'home' ?>">home</a></li>
                        <li><a href="<?= URL . 'about' ?>">about</a></li>
                        <li><a href="<?= URL . 'contact' ?>">contact</a></li>
                        <li><a href="<?= URL . 'resume' ?>">resume</a></li>
                        <li><a href="https://github.com/davidhchoi/website">source code</a></li>
                    </ul>
                </nav>
            </div>
        </aside>
