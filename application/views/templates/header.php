<html>
<head>
    <meta charset="utf-8">
    <title>David Choi - <?= $title ?></title>
</head>
<body>
    <div id="content">
        <header>
            <div id="navbar">
                <div class="logo"><a href="<?= URL ?>"><img src="<?= IMG . 'logo.png' ?>" alt="logo"></a></div>
                <nav id="main-nav">
                    <ul class="nav">
                        <li><a href="<?= URL . 'home' ?>">home</a></li>
                        <li><a href="<?= URL . 'about' ?>">about</a></li>
                        <li><a href="<?= URL . 'contact' ?>">contact</a></li>
                        <li><a href="<?= URL . 'resume' ?>">resume</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <h1><?= $title ?></h1>
