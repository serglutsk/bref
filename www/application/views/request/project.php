<?php defined('SYSPATH') OR die('No direct script access.'); ?>

<?php if (count($errors)) var_dump($errors)?>

<header>
    <div class="logo"><a href="#"><img src="/public/images/request/logo.png" alt=""></a></div>
    <div class="bg-after"><img src="/public/images/request/head-bg-after.jpg" alt=""/></div>
    <div class="name"><?=__('BRIF Part')?></div>
    <div class="stage">2</div>
</header>
<div id="main">
    <div id="content">
        <form action="" method="POST">
        <section class="single current sect2-1">
            <div class="head">
                <?=__('Information about company')?>
                <span class="pos">1</span>
                <span class="cmpl"></span>
                <div class="tooltip">
                    <h3>Text mode demo</h3>
                    <p>competition (or compo, or contest - same thing, really) was held for the first time in 1996. Back then there were a few demos running in  TMDC was after, and others tweaked the text mode.</p>
                    <b></b>
                </div>
            </div>
            <div class="cont" style="display: block;">
                <div class="inp">
                    <?=__('Name of a company')?>
                    <input name="company_name" id="company_name" type="text"/>
                </div>
                <div class="inp">
                    <?=__('Company activity')?>
                    <input name="company_scope" id="company_scope" type="text"/>
                </div>
                <div class="center">
                    <div class="block">
                        <?=__('Services / Products business')?>
                        <input name="company_products" id="company_service" type="text"/>
                    </div>
                    <div class="block">
                        <p><?=__('Already have a company logo?')?></p>
                        <div class="ans">
                            <input name="company_logo" id="company_logo_yes" value="yes" type="radio"/>
                            <label for="company_logo_yes"><?=__('Yes')?></label>
                        </div>
                        <div class="ans">
                            <input checked class="left" name="company_logo" id="company_logo_no" value="no" type="radio"/>
                            <label class="right" for="company_logo_no"><?=__('No')?></label>
                        </div>
                    </div>
                    <div class="block">
                        <p><?=__('Already have a corporate style?')?></p>
                        <div class="ans">
                            <input name="company_style" id="company_style_yes" value="yes" type="radio"/>
                            <label for="company_style_yes"><?=__('Yes')?></label>
                        </div>
                        <div class="ans">
                            <input checked class="left" name="company_style" id="company_style_no" value="no" type="radio"/>
                            <label class="right" for="company_style_no"><?=__('No')?></label>
                        </div>
                    </div>
                    <div class="block">
                        <p><?=__('Company slogan')?></p>
                        <div class="ans">
                            <input name="company_slogan" id="company_slogan_yes" value="yes" type="radio"/>
                            <label for="company_slogan_yes"><?=__('Yes')?></label>
                        </div>
                        <input name="company_slogan_value" type="text" id="company_slogan_value"/>
                        <div class="ans">
                            <input checked name="company_slogan" id="company_slogan_no" value="no" type="radio"/>
                            <label for="company_slogan_no"><?=__('No')?></label>
                        </div>

                    </div>
                </div>
            </div>
            <a class="next-sect" rel="validate" href="#"><?=__('next')?></a>
        </section>

        <section class="single sect2-3">
            <div class="head">
                <?=__('Target audience')?>
                <span class="pos">2</span>
                <span class="cmpl"></span>
                <div class="tooltip">
                    <h3>Text mode demo</h3>
                    <p>competition (or compo, or contest - same thing, really) was held for the first time in 1996. Back then there were a few demos running in  TMDC was after, and others tweaked the text mode.</p>
                    <b></b>
                </div>
            </div>
            <div class="cont">
                <p><?=__('Age')?></p>

                <div class="col">

                    <?php $counter = 1; ?>
                    <?php foreach ($audience_ages as $age):?>

                    <?php if ($counter % 4 === 0):?>
                        <div class="ans last">
                    <?php else:?>
                        <div class="ans">
                    <?php endif;?>

                        <input name="audience_age[]" id="audience_age_<?=$age['id']?>" type="checkbox" value="<?=$age['value']?>"/>
                        <label class="show-bl" for="audience_age_<?=$age['id']?>"><?=__($age['value'])?></label>
                    </div>

                    <?php if ($counter % 4 === 0):?>
                        </div>
                        <div class="col">
                    <?php endif;?>
                    <?php $counter++;?>

                    <?php endforeach;?>

                </div>

                <div class="razd"></div>
                <p><?=__('Gender')?></p>

                <div class="col first items-3">

                    <?php foreach($audience_genders as $gender): ?>
                        <div class="ans">
                            <input type="checkbox" name="audience_gender[]" id="audience_gender_<?=$gender['id']?>" value="<?=$gender['value']?>"/>
                            <label for="audience_gender_<?=$gender['id']?>"><?=__($gender['value'])?></label>
                        </div>
                    <?php endforeach;?>

                </div>

                <div class="razd"></div>

                <p><?=__('Occupation')?></p>

                <div class="col items-2">

                <?php $counter = 0;?>
                <?php foreach ($target_audiences as $audience):?>
                <?php if ($counter & 1): ?>
                <div class="ans last">
                    <?php else:?>
                    <div class="ans">
                        <?php endif;?>
                        <input name="audience_occupation[]" id="audience_occupation_<?=$audience['id']?>" type="checkbox" value="<?=$audience['value']?>"/>
                        <label class="show-bl" for="audience_occupation_<?=$audience['id']?>"><?=__($audience['value'])?></label>
                    </div>

                    <?php if ($counter & 1): ?>
                </div>
                <div class="col items-2">
                    <?php endif;?>
                    <?php $counter++;?>
                    <?php endforeach;?>

                </div>

                <div class="razd"></div>

                <p><?=__('Other')?></p>

                <div class="col">

                    <?php for ($counter = 0; $counter <= 3; $counter++):?>

                        <?php if ($counter & 1):?>
                            <div class="ans text-field last">
                        <?php else:?>
                            <div class="ans text-field">
                        <?php endif;?>

                                <input type="checkbox" name="additional_audience_<?=$counter?>" id="additional_audience_<?=$counter?>"/>
                                <label for="additional_audience_<?=$counter?>"></label>
                                <input name="target_audience[]" id="additional_audience_<?=$counter?>" type="text"/>
                            </div>

                        <?php if ($counter & 1):?>
                            <div class="clear"></div>
                            </div>
                            <div class="col">
                        <?php endif;?>

                    <?php endfor;?>

                </div>

                <div class="razd"></div>

                <p><?=__('Location')?></p>
                <div class="col">
                    <div class="cnt-bl">
                        <div class="ans it">
                            <input name="audience_location[]" id="country_italy" type="checkbox" value="Italy">
                            <label class="show-bl" for="country_italy"><?=__('Italy')?></label>
                        </div>
                        <div class="select current last colorized">
                            <input type="checkbox" id="country" class="toggle">
                            <label for="country"><?=__('Other')?><i><img class="ico" src="/public/images/request/blank.gif" alt=""/></i></label>
                            <ul>
                                <?php foreach ($audience_locations as $location):?>
                                    <li class="select-option">
                                        <input type="radio" name="audience_location[]" id="country_<?=$location['id']?>" value="<?=$location['value']?>">
                                        <label for="country_<?=$location['id']?>"><?=__($location['value'])?></label>
                                    </li>
                                <?php endforeach;?>
                            </ul>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="single sect2-4">
            <div class="head">
                <?=__('General Information about competitors')?>
                <span class="pos">3</span>
                <span class="cmpl"></span>
                <div class="tooltip">
                    <h3>Text mode demo</h3>
                    <p>competition (or compo, or contest - same thing, really) was held for the first time in 1996. Back then there were a few demos running in  TMDC was after, and others tweaked the text mode.</p>
                    <b></b>
                </div>
            </div>
            <div class="cont">
                <p><?=__('Main competitors')?></p>
                <div class="ans_block first">
                    <div class="first-col">
                        <p><?=__('Name of a competitor company')?></p>
                    </div>
                    <div class="last-col">
                        <p><?=__('Link to website')?></p>
                    </div>
                    <div class="clear"></div>
                </div>

                <?php for ($i = 0; $i <= 3; $i++):?>

                <div class="ans_block">
                    <div class="first-col">
                        <input type="text" name="competitors_name[]" class="competitors_name"/>
                    </div>
                    <div class="last-col">
                        <input type="text" placeholder="http://" name="competitors_url[]" class="competitors_url"/>
                    </div>
                    <div class="clear"></div>
                    <div class="textarea">
                        <span><?=__('Advantages')?></span>
                        <textarea name='vantages[]'></textarea>
                        <div class="clear"></div>
                    </div>
                    <div class="textarea">
                        <span><?=__('Disadvantages')?></span>
                        <textarea name="disvantages[]"></textarea>
                        <div class="clear"></div>
                    </div>
                </div>

                <?php endfor;?>

                <div class="razd"></div>

            </div>
            <a class="next-sect" href="#"><?=__('next')?></a>
        </section>
        <section class="single sect2-5 multi">
            <div class="head">
                <?=__('General site requirements')?>
                <span class="pos">4</span>
                <span class="cmpl"></span>
                <div class="tooltip">
                    <h3>Text mode demo</h3>
                    <p>competition (or compo, or contest - same thing, really) was held for the first time in 1996. Back then there were a few demos running in  TMDC was after, and others tweaked the text mode.</p>
                    <b></b>
                </div>
            </div>
            <div class="cont">
                <div class="two-cols">
                    <p><?=__('What is the type of site you need?')?></p>

                    <?php $counter = 0;?>
                    <?php foreach ($site_types as $types):?>
                        <div class="ans before <?php echo $counter & 1 ? ' fl-r last' : 'fl-l';?>">
                            <input name="site_type[]" id="site_type<?=$types['id']?>" type="checkbox" value="<?=$types['value']?>">
                            <label class="show-bl" for="site_type<?=$types['id']?>"><?=__($types['value'])?></label>
                        </div>
                    <?php $counter++;?>
                    <?php endforeach;?>

                    <div class="clear"></div>
                </div>
            </div>
            <a href="#" class="next-sect"><?=__('next')?></a>
        </section>
        <section class="single sect2-6">
            <div class="head">
                <?=__('Navigation')?>
                <span class="pos">5</span>
                <span class="cmpl"></span>
                <div class="tooltip">
                    <h3>Text mode demo</h3>
                    <p>competition (or compo, or contest - same thing, really) was held for the first time in 1996. Back then there were a few demos running in  TMDC was after, and others tweaked the text mode.</p>
                    <b></b>
                </div>
            </div>
            <div class="cont">
                <div class="menu-creator">
                    <script type="text/javascript">
                        _lang = {
                            add_section: '<?=__('Add section')?>',
                            add_subsection: '<?=__('Add subsection')?>',
                            delete_subsection: '<?=__('Delete section')?>',
                            placeholder: '<?=__('Input name...')?>'
                        };
                    </script>
                    <div class="razdel parent">
                        <div class="pos">1</div>
                        <input type="text" name="menu" value="<?=__('Main page')?>"/>
                        <a href="javascript:void(0)" class="plus">+</a>
                        <div class="popup"><?=__('Add section')?></div>
                        <a href="javascript:void(0)" class="delete">&times;</a>
                        <div class="popup"><?=__('Delete section')?></div>
                    </div>
                    <div class="razdel parent">
                        <a href="javascript:void(0)" class="delete">&times;</a>
                        <div class="popup"><?=__('Delete section')?></div>
                        <div class="pos">2</div>
                        <input name="menu" type="text" value="<?=__('About us')?>"/>
                        <a href="javascript:void(0)" class="plus">+</a>
                    </div>
                        <div class="subsection">
                            <div class="razdel sub">
                                <a href="javascript:void(0)" class="delete">&times;</a>
                                <div class="popup"><?=__('Delete section')?></div>
                                <input name="menu" type="text" value="<?=__('About company')?>"/>
                                <a href="javascript:void(0)" class="plus">+</a>
                            </div>
                            <div class="razdel sub">
                                <a href="javascript:void(0)" class="delete">&times;</a>
                                <div class="popup"><?=__('Delete section')?></div>
                                <input  name="menu"type="text" value="<?=__('About company2')?>"/>
                                <a href="javascript:void(0)" class="plus">+</a>
                            </div>
                            <a class="add sub" href="javascript:void(0)"><?=__('Add section')?></a>
                        </div>

                    <div class="razdel parent">
                        <a href="javascript:void(0)" class="delete">&times;</a>
                        <div class="popup"><?=__('Delete section')?></div>
                        <div class="pos">3</div>
                        <input name="menu" type="text" value="<?=__('About us')?>"/>
                        <a href="javascript:void(0)" class="plus">+</a>
                    </div>
                        <div class="subsection">
                            <div class="razdel sub">
                                <a href="javascript:void(0)" class="delete">&times;</a>
                                <div class="popup"><?=__('Delete section')?></div>
                                <input name="menu" type="text" value="<?=__('About us2')?>"/>
                                <a href="javascript:void(0)" class="plus">+</a>
                            </div>
                            <a class="add sub" href="javascript:void(0)"><?=__('Add section')?></a>
                        </div>

                    <a class="add" href="javascript:void(0)"><?=__('Add section')?></a>
                </div>
                <input id="created-menu" type="hidden" name="created_menu">
                <input id="send-request" onclick="return false" type="submit" value="<?=__('SEND')?>"/>
            </div>
        </section>
        <div class="r-bd"></div>
        </form>
    </div>
</div>