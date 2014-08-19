<?php defined('SYSPATH') OR die('No direct script access.'); ?>

<?php if (count($errors)) var_dump($errors)?>

<header>
    <div class="logo"><a href="#"><img src="/public/images/request/logo.png" alt=""></a></div>
    <div class="bg-after"><img src="/public/images/request/head-bg-after.jpg" alt=""/></div>
    <div class="name"><?=__('BRIF Part')?></div>
    <div class="stage">1</div>
</header>
<div id="main">
    <div id="content">
        <form action="" method="POST">
        <input type="hidden" name="id_manager" value="<?php echo $id_manager?>">
            <section class="single current sect-1">
                <div class="head">
                    <?=__('What are your interests?')?>
                    <span class="pos">1</span>
                    <span class="cmpl"></span>
                    <div class="tooltip">
                        <p><?=__('hint question 1')?></p>
                    </div>
                </div>
                <div class="cont" style="display: block;">
                    <div class="blocks single">

                        <?php foreach ($project_types as $project_type):?>
                            <div class="bl bl-<?=$project_type['id']?>">
                                <input type="radio" id="interes-<?=$project_type['id']?>" name="interest" value="<?=$project_type['value']?>"/>
                                <div class="inner">
                                    <label for="interes-<?=$project_type['id']?>"></label>
                                    <?php if ($project_type['features'] === null):?>
                                        <img class="ico" src="/public/images/request/blank.gif" alt=""/>
                                    <?php else:?>
                                        <div class="checks">
                                            <?php foreach($project_type['features'] as $feature):?>
                                                <input type="checkbox" name="features[]" id="<?=$feature['value']?>" value="<?=$feature['value']?>"/>
                                                <label for="<?=$feature['value']?>"><?=__($feature['name'])?></label>
                                            <?php endforeach;?>
                                        </div>
                                    <?php endif;?>
                                </div>
                                <span><?=__($project_type['name'])?></span>
                            </div>
                        <?php endforeach;?>

                        <div class="clear"></div>
                    </div>
                </div>
            </section>
            <section class="single sect-21">
                <div class="head">
                    <?=__('Information about the project 2')?>
                    <span class="pos">2</span>
                    <span class="cmpl"></span>
                    <div class="tooltip">
                        <p><?=__('hint question 2')?></p>
                    </div>
                </div>
                <div class="cont">
                    <div class="chk_bl">
                        <p><?=__('Do you have an old site?')?></p>
                        <div class="ans">
                            <input type="radio" name="old_site" value="yes" id="old_site_yes"/>
                            <label class="left" for="old_site_yes"><?=__('Yes')?></label>
                        </div>
                        <div class="ans">
                            <input type="radio" checked name="old_site" value="no" id="old_site_no"/>
                            <label class="right" for="old_site_no"><?=__('No')?></label>
                        </div>
                        <div class="clear"></div>
                        <input name="old_site_value" id="old_site_value" />
                    </div>
                    <div class="chk_bl last">
                        <p><?=__('Do you need hosting?')?></p>
                        <div class="ans">
                            <input type="radio" name="need_host" value="yes" id="need_host_yes"/>
                            <label class="left" for="need_host_yes"><?=__('Yes')?></label>
                        </div>
                        <div class="ans">
                            <input type="radio" name="need_host" value="no" id="need_host_no"/>
                            <label class="right" for="need_host_no"><?=__('No')?></label>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </section>
            <section class="single sect-2">
                <div class="head">
                    <?=__('Information about the project')?>
                    <span class="pos">3</span>
                    <span class="cmpl"></span>
                    <div class="tooltip">
                        <p><?=__('hint question 3')?></p>
                    </div>
                </div>
                <div class="cont">
                    <div class="select <?= (Arr::get($values, 'budget') !== null) ? 'finish' : 'current'?>">
                        <input type="checkbox" id="toggle" class="toggle">
                        <label for="toggle"><?= (Arr::get($values, 'budget') !== null) ? Arr::get($values, 'budget').' '.__('euro') : __('Project budget')?><i><img class="ico" src="/public/images/request/blank.gif" alt=""/></i></label>
                        <ul>

                            <?php foreach ($budgets as $budget):?>
                                <li class="select-option">
                                    <input type="radio" name="budget" id="c<?=$budget['id']?>" value="<?=$budget['value']?>">
                                    <label for="c<?=$budget['id']?>"><?=__($budget['value'])?> <?=__('euro')?></label>
                                </li>
                            <?php endforeach;?>

                            <?php if (Arr::get($values, 'budget') !== null):?>
                                <li class="select-option">
                                    <input type="radio" name="budget" id="c0" value="<?=Arr::get($values, 'budget')?>" checked>
                                    <label for="c0"><?=__(Arr::get($values, 'budget'))?> <?=__('euro')?></label>
                                </li>
                            <?php endif;?>

                        </ul>
                    </div>
                    <div class="select <?= (Arr::get($values, 'budget') !== null) ? 'current' : null?>">
                        <input type="checkbox" id="toggle-2" class="toggle"> <label for="toggle-2"><?=__('Site category')?><i><img class="ico" src="/public/images/request/blank.gif" alt=""/></i></label>
                        <ul>

                            <?php foreach ($categories as $category):?>
                                <li class="select-option">
                                    <input type="radio" name="category" id="d<?=$category['id']?>" value="<?=$category['value']?>">
                                    <label for="d<?=$category['id']?>"><?=__($category['value'])?></label>
                                </li>
                            <?php endforeach;?>

                        </ul>
                    </div>
                    <div class="select last">
                        <input type="checkbox" id="toggle-3" class="toggle"> <label for="toggle-3"><?=__('Site type')?><i><img class="ico" src="/public/images/request/blank.gif" alt=""/></i></label>
                        <ul>

                            <?php foreach ($services as $service):?>
                                <li class="select-option">
                                    <input type="radio" name="service" id="p<?=$service['id']?>" value="<?=$service['value']?>">
                                    <label for="p<?=$service['id']?>"><?=__($service['value'])?></label>
                                </li>
                            <?php endforeach;?>

                        </ul>
                    </div>
                    <div class="clear"></div>
                </div>
            </section>
            <section class="single sect-3">
                <div class="head">
                    <?=__('Number of pages')?>
                    <span class="pos">4</span>
                    <span class="cmpl"></span>
                    <div class="tooltip">
                        <p><?=__('hint question 4')?></p>
                    </div>
                </div>
                <div class="cont">
                    <div class="blocks single">

                        <?php foreach ($pages_counts as $pages_count):?>
                            <div class="bl bl-<?=$pages_count['id']?>">
                                <input type="radio" name="pages" value="<?=$pages_count['value']?>" id="pages-<?=$pages_count['id']?>"/>
                                <div class="inner">
                                    <label for="pages-<?=$pages_count['id']?>"></label>
                                    <img class="ico" src="/public/images/request/blank.gif" alt=""/>
                                </div>
                                <span><?=__($pages_count['value'])?> <?=__('pages')?></span>
                            </div>
                        <?php endforeach;?>

                        <div class="clear"></div>
                    </div>
                </div>
            </section>
            <section class="multi sect-4">
                <div class="head">
                    <?=__('The main idea of ​​the project')?>
                    <span class="pos">5</span>
                    <span class="cmpl"></span>
                    <div class="tooltip">
                        <p><?=__('hint question 5')?></p>
                    </div>
                </div>
                <div class="cont">
                    <div class="textarea">
                        <p><?=__('What should represent the project and what tasks it should decide?')?></p>
                        <textarea name="section4-1" id="section4-1"></textarea>
                        <p><?=__('Describe the main functions')?></p>
                        <textarea name="section4-2" id="section4-2"></textarea>
                    </div>
                </div>
                <a href="#" class="next-sect"><?=__('next')?></a>
            </section>
            <section class="multi sect-5">
                <div class="head">
                    <?=__('Displaying site')?>
                    <span class="pos">6</span>
                    <span class="cmpl"></span>
                    <div class="tooltip">
                        <p><?=__('hint question 6')?></p>
                    </div>
                </div>
                <div class="cont">
                    <div class="blocks multi">

                        <?php foreach ($devices as $device):?>
                            <div class="bl bl-<?=$device['id']?>">
                                <input type="checkbox" name="devices[]" value="<?=$device['value']?>" id="type-<?=$device['id']?>"/>
                                <div class="inner">
                                    <label for="type-<?=$device['id']?>"></label>
                                    <img class="ico" src="/public/images/request/blank.gif" alt=""/>
                                </div>
                                <span><?=__($device['value'])?></span>
                            </div>
                        <?php endforeach;?>

                        <div class="clear"></div>
                    </div>
                </div>
                <a href="#" class="next-sect"><?=__('next')?></a>
            </section>
            <section class="multi sect-6 multi">
                <div class="head">
                    <?=__('Site design')?>
                    <span class="pos">7</span>
                    <span class="cmpl"></span>
                    <div class="tooltip">
                        <p><?=__('hint question 7')?></p>
                    </div>
                </div>
                <div class="cont">
                    <div class="fix-h">
                        <div class="select current">
                            <input type="checkbox" id="toggle-style" class="toggle"> <label for="toggle-style"><?=__('Site style')?><i><img class="ico" src="public/images/request/blank.gif" alt=""/></i></label>
                            <ul>

                                <?php foreach ($styles as $style):?>
                                    <li class="select-option">
                                        <input type="radio" name="style" id="style<?=$style['id']?>" value="<?=$style['value']?>">
                                        <label for="style<?=$style['id']?>"><?=__($style['value'])?></label>
                                    </li>
                                <?php endforeach;?>

                            </ul>
                        </div>
                        <div class="select last colorized">
                            <input type="checkbox" id="toggle-color" class="toggle"> <label class="orange" for="toggle-color"><?=__('Main site colors')?><i><img class="ico" src="/public/images/request/blank.gif" alt=""/></i></label>
                            <ul>

                                <?php for ($i = 1; $i <=32; $i++):?>
                                    <li class="select-option color color-<?=$i?>"><input type="checkbox" name="colors[]" id="color<?=$i?>" value="<?=$i?>"><label for="color<?=$i?>"></label></li>
                                <?php endfor;?>

                            </ul>
                        </div>
                        <div class="clear"></div>

                    </div>
                    <div class="two-cols">
                        <div class="col">
                            <p><?=__('Specify sites that you enjoy')?></p>
                            <input name="like[]" placeholder="http://"/>
                            <input name="like[]" placeholder="http://"/>
                            <input name="like[]" placeholder="http://"/>
                            <input name="like[]" placeholder="http://"/>
                            <input name="like[]" placeholder="http://"/>
                        </div>
                        <div class="col last">
                            <p><?=__('Specify sites that you not enjoy')?></p>
                            <input name="dislike[]" placeholder="http://"/>
                            <input name="dislike[]" placeholder="http://"/>
                            <input name="dislike[]" placeholder="http://"/>
                            <input name="dislike[]" placeholder="http://"/>
                            <input name="dislike[]" placeholder="http://"/>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <a href="#" class="next-sect"><?=__('next')?></a>
            </section>
            <section class="single sect-7">
                <div class="head">
                    <?=__('Contacts')?>
                    <span class="pos">8</span>
                    <span class="cmpl"></span>
                    <div class="tooltip">
                        <p><?=__('hint question 8')?></p>
                    </div>
                </div>
                <div class="cont">
                    <div class="contacts">
                        <div class="col">
                            <div class="inp nome">
                                <input placeholder="<?=__('Nome')?>" name="nome" value="<?=Arr::get($values, 'nome')?>"/>
                                <div class="ico"></div>
                            </div>
                            <div class="inp email">
                                <input placeholder="<?=__('Email')?>" name="email" value="<?=Arr::get($values, 'email')?>"/>
                                <div class="ico"></div>
                            </div>
                        </div>
                        <div class="col last">
                            <div class="inp cognome">
                                <input placeholder="<?=__('Cognome')?>" name="cognome" value="<?=Arr::get($values, 'cognome')?>"/>
                                <div class="ico"></div>
                            </div>
                            <div class="inp email">
                                <input placeholder="<?=__('re-Email')?>" name="email2" value="<?=Arr::get($values, 'email')?>"/>
                                <div class="ico"></div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="inp phone">
                            <input placeholder="<?=__('Phone')?>" name="phone"/>
                            <div class="ico"></div>
                        </div>
                        <input  type="submit" value="<?=__('SEND')?>"/>
                    </div>
                </div>
            </section>
            <div class="r-bd"></div>
        </form>
    </div>
</div>