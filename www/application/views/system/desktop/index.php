<?php defined('SYSPATH') OR die('No direct script access.');?>

<section class="content">
    <div class="happy"></div>
    <section class="desktop">
        <?php foreach ($modules as $module):?>
            <article class="module">
                <a href="<?=URL::site($module->dir)?>">
                    <div class="module-icon"></div>
                    <span class="module-name"><?=__($module->name)?></span>
                </a>
            </article>
        <?php endforeach;?>
    </section>
</section>

