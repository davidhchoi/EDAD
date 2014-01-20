<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?= CSS . "base.css" ?>">
    <link rel='shortcut icon' href="<?= IMG . 'favicon.ico' ?>" type='image/x-icon'/ >
    <title>David Choi - <?= $title ?></title>
</head>
<body>
    <div id="clouds"></div>
    <div id="content">
        <header>
            <div class="logo"><a href="<?= URL ?>"><img src="<?= IMG . 'logo.png' ?>" alt="logo"></a></div>
            <br class="clear" />
        </header>
        <hr />
        <aside>
            <div id="navbar">
                <nav id="main-nav">
                    <ul class="nav">
                        <li><a href="<?= URL . 'home' ?>">home</a></li>
                        <li><a href="<?= URL . 'contact' ?>">contact</a></li>
                        <li><a href="<?= ASS . 'resume.pdf' ?>">resume</a></li>
                    </ul>
                </nav>
            </div>
            <div id="media-links">
                <a href="http://www.linkedin.com/pub/david-choi/8a/101/a60" class="linkedin"></a>
                <a href="https://github.com/davidhchoi" class="github"></a>
                <a href="https://github.com/davidhchoi" class="facebook"></a>
            </div>
        </aside>
        <h1><?= $title !== "Home" ? $title : "" ?></h2>
        <div class="text">
