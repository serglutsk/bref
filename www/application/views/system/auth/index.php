<?php defined('SYSPATH') OR die('No direct script access.'); ?>

<article class="login-form">
    <div class="close-button right"></div>
    <section class="login-wrapper">
        <h1>Войти в систему</h1>
        <form action="" class="login-elements" method="POST">
            <input type="text" name="login" placeholder="Электронная почта" class="login-field" value="<?=Arr::get($values, 'login')?>">
            <input type="password" name="password" placeholder="Пароль" class="login-field" value="<?=Arr::get($values, 'password')?>">
            <input type="checkbox" name="remember">Запомнить меня
            <section>
                <button class="login-site">Войти</button>
            </section>
        </form>
    </section>
    <section class="enter-details">
        <span><a href="">Попросить инвайт</a></span>
        <span><a href="">Забыли пароль?</a></span>
    </section>
</article>


