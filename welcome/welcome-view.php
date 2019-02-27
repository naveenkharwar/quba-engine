<?php

/**
 * Welcome Page View
 *
 * @since 0.5.0
 * @package QUBA_ENGINE
 */

if (! defined('WPINC')) {logo
    die;
}

?>

<div id="wpbody" role="main">
    <div id="wpbody-content" aria-label="Main content" tabindex="0">
        <div id="screen-meta" class="metabox-prefs">
            <div id="contextual-help-wrap" class="hidden no-sidebar" tabindex="-1" aria-label="Contextual Help Tab">
                <div id="contextual-help-back"></div>
                <div id="contextual-help-columns">
                    <div class="contextual-help-tabs">
                        <ul></ul>
                    </div>
                    <div class="contextual-help-tabs-wrap"></div>
                </div>
            </div>
        </div>
        <div class="wrap about-wrap full-width-layout">
        <h1>
            <?php printf(__('Quba Engine&nbsp;%s', 'quba-engine'), QUBA_ENGINE_VERSION); ?>
        </h1>
        <p class="about-text">
            <?php printf(__("Thank you for installing Quba Engine %s , ", 'quba-engine'), QUBA_ENGINE_VERSION); ?>
        </p>
        <p class="about-text">
            <?php echo '<img draggable="false" class="emoji" src="' . esc_url(plugins_url('/img/notification.svg', __FILE__)) . '" > '; ?>This plugin works with <a href="http://wordpress.org/themes/quba/">Quba WordPress Theme</a>
        </p>
        <div class="quba-badge welcome__logo">
            <p><?php printf(__('Version&nbsp;%s', 'quba-engine'), QUBA_ENGINE_VERSION); ?></p>
        </div>
        <div class="container">
        <h2 class="nav-tab-wrapper wp-clearfix tabs">
            <a class="nav-tab current" data-tab="tab-1"><?php printf(__('Welcome','quba-engine')); ?></a>
            <a class="nav-tab" data-tab="tab-2"><?php printf(__('About','quba-engine')); ?></a>
            <a class="nav-tab" data-tab="tab-3"><?php printf(__('Credits','quba-engine')); ?></a>
            <a class="nav-tab" data-tab="tab-4"><?php printf(__('Licence', 'quba-engine')); ?></a>
        </h2>
        <div id="tab-1" class="tab-content current">
            <div class="feature-section one-col">
                <div class="col">
                    <h2>
                        <?php printf(__("Thank you for installing Quba Engine. ", 'quba-engine')); ?>
                    </h2>
                </div>
            </div>
            <div class="feature-section one-col margin">
                <div class="col">
                    <h2 class="small-title">
                        <?php printf(__("Do You Have Quba WordPress Theme ?", 'quba-engine')); ?>
                    </h2>
                    <div class="col">
                        <div class="cta">
                            <button class="button btn-yes button-primary button-hero"><?php printf(__("Yes!", 'quba-engine')); ?></button>
                            <button class="button btn-no button-primary button-hero"><?php printf(__("No!", 'quba-engine')); ?></button>
                        </div>
                        <div id="ifno" style="display:none">
                            <p class="about-text">
                                <?php echo '<img draggable="false" class="emoji" src="' . esc_url(plugins_url('/img/notification.svg', __FILE__)) . '" > '; ?><a href="https://codex.wordpress.org/Using_Themes#Adding_New_Themes_using_the_Administration_Panels"><?php printf(__('Adding New Themes using the Administration Panels', 'quba-engine'));?></a>
                            </p>
                            <p class="about-text">
                                <?php echo '<img draggable="false" class="emoji" src="' . esc_url(plugins_url('/img/notification.svg', __FILE__)) . '" > '; ?><a href="https://codex.wordpress.org/Using_Themes#Adding_New_Themes_by_using_cPanel"><?php printf(__('Adding New Themes by using cPanel', 'quba-engine'));?></a>
                            </p>
                            <p class="about-text">
                                <?php echo '<img draggable="false" class="emoji" src="' . esc_url(plugins_url('/img/notification.svg', __FILE__)) . '" > '; ?><a href="https://codex.wordpress.org/Using_Themes#Adding_New_Themes_Manually_.28FTP.29"><?php printf(__('Adding New Themes Manually (FTP)', 'quba-engine'));?></a>
                            </p>
                            <p class="about-text">
                                <?php echo '<img draggable="false" class="emoji" src="' . esc_url(plugins_url('/img/activate.svg', __FILE__)) . '" > '; ?><a href="https://codex.wordpress.org/Using_Themes#Selecting_the_Active_Theme"><?php printf(__('Selecting the Active Theme', 'quba-engine'));?></a>
                            </p>
                            <hr />
                        </div>
                        <div id="ifyes" style="display:none">
                            <h4 class="cta congratulation"><?php printf(__('Congratulation! 🎉', 'quba-engine'));?></h4>
                            <hr />
                        </div>
                    </div>
                </div>
            </div>

            <div class="full-width">
                <picture>
                    <?php echo '<img src="' . esc_url(plugins_url('/img/screenshot_1.png', __FILE__)) . '" > '; ?>
                </picture>
            </div>
            <div class="under-the-hood feature-section">
                <div class="col">
                    <h2 class="font-500">Quba Features</h2>
                </div>
            </div>
            <div class="under-the-hood feature-section three-col">
            <div class="col">
                <picture>
                    <source type="image/webp" srcset="https://s.w.org/images/core/5.0/devs/Protect1x.webp 1x, https://s.w.org/images/core/5.0/devs/Protect.webp 2x">
                    <img src="img/intro.png" srcset="https://s.w.org/images/core/5.0/devs/Protect1x.jpg 1x, https://s.w.org/images/core/5.0/devs/Protect.jpg 2x" alt="">
                </picture>
                <h3 class="cta"><?php printf(__('Intro Section', 'quba-engine')); ?></h3>
            </div>
            <div class="col">
                <picture>
                    <source type="image/webp" srcset="https://s.w.org/images/core/5.0/devs/Compose1x.webp 1x, https://s.w.org/images/core/5.0/devs/Compose.webp 2x">
                    <img src="img/about.png" srcset="https://s.w.org/images/core/5.0/devs/Compose1x.jpg 1x, https://s.w.org/images/core/5.0/devs/Compose.jpg 2x" alt="">
                </picture>
                <h3 class="cta"><?php printf(__('About Section', 'quba-engine'));?> </h3>

            </div>
            <div class="col">
                <picture>
                    <source type="image/webp" srcset="https://s.w.org/images/core/5.0/devs/Create1x.webp 1x, https://s.w.org/images/core/5.0/devs/Create.webp 2x">
                    <img src="img/services.png" srcset="https://s.w.org/images/core/5.0/devs/Create1x.jpg 1x, https://s.w.org/images/core/5.0/devs/Create.jpg 2x" alt="">
                </picture>
                <h3 class="cta"><?php printf(__('Service Section', 'quba-engine')); ?></h3>

            </div>
            <div class="col">
                <picture>
                    <source type="image/webp" srcset="https://s.w.org/images/core/5.0/devs/Create1x.webp 1x, https://s.w.org/images/core/5.0/devs/Create.webp 2x">
                    <img src="img/portfolio.png" srcset="https://s.w.org/images/core/5.0/devs/Create1x.jpg 1x, https://s.w.org/images/core/5.0/devs/Create.jpg 2x" alt="">
                </picture>
                <h3 class="cta"><?php printf(__('Portfolio Section', 'quba-engine')); ?></h3>
            </div>
            <div class="col">
                <picture>
                    <source type="image/webp" srcset="https://s.w.org/images/core/5.0/devs/Create1x.webp 1x, https://s.w.org/images/core/5.0/devs/Create.webp 2x">
                    <img src="img/" srcset="https://s.w.org/images/core/5.0/devs/Create1x.jpg 1x, https://s.w.org/images/core/5.0/devs/Create.jpg 2x" alt="">
                </picture>
                <h3 class="cta"><?php printf(__('Contact Section', 'quba-engine')); ?></h3>

            </div>
            <div class="col">
                <picture>
                    <source type="image/webp" srcset="https://s.w.org/images/core/5.0/devs/Create1x.webp 1x, https://s.w.org/images/core/5.0/devs/Create.webp 2x">
                    <img src="https://s.w.org/images/core/5.0/devs/Create1x.jpg" srcset="https://s.w.org/images/core/5.0/devs/Create1x.jpg 1x, https://s.w.org/images/core/5.0/devs/Create.jpg 2x" alt="">
                </picture>
                <h3 class="cta"><?php printf(__('Footer Widget Area', 'quba-engine')); ?></h3>
            </div>
        </div>
        <div class="feature-section one-col">
            <div class="col">
                <h2>How To ?</h2>
            </div>
        </div>
        <div class="feature-section eight-col">
            <ol>
                <li><b><?php printf(__('Create a Front Page:</b> In <b>Pages</b> choose <b>Add New Page', 'quba-engine')); ?> </b>.
                    <ul>
                        <li><?php printf(__('Title it "Home".','quba-engine')); ?></li>
                            <ol>
                                <li><?php printf(__('To change the look and feel of the front page, select the <b>Template</b> in the <b>Page Attributes</b> panel box.','quba-engine')); ?> </li>
                                <li><?php printf(__('<b>Customization</b> of Front page is given below.','quba-engine')); ?></li>
                                <li><?php printf(__('Publish the Page.','quba-engine')); ?></li>
                            </ol>
                        </li>
                    </ul>
                </li>
                <li><?php printf(__('<b>Create a Blog Page:</b> If choosing to add a blog, choose <b>Add New Page</b> again.','quba-engine')); ?></li>
                <ul>
                    <li> 
                    <?php printf(__('Title it "Blog," "News," "Articles," or an appropriate name.', 'quba-engine')); ?>
                    <ol>
                        <li><?php printf(__('<b>Do not use a custom Page template for this page.</b> The template files <tt>home.php</tt> or <tt>index.php</tt> will be used to generate this page in the Theme.','quba-engine')); ?> </li>
                        <li><?php printf(__('<b>DO NOT add content.</b> Leave it blank. Any content here will be ignored -- only the Title is used.','quba-engine')); ?> </li>
                        <li><?php printf(__('Publish the Page.','quba-engine')); ?>
                    </ol>
                    </li>
                </ul>
                <li>
                    <b>
                        <?php printf(__('Go to','quba-engine')); ?> 
                        <?php printf(__('<a href="https://codex.wordpress.org/Administration_Panels" title="Administration Panels" class="mw-redirect">Administration</a> &gt;','quba-engine'));?>  
                        <?php printf(__('<a href="https://codex.wordpress.org/Administration_Panels#Reading" title="Administration Panels" class="mw-redirect">Settings</a> &gt;', 'quba-engine')); ?> 
                        <?php printf(__('<a href="https://codex.wordpress.org/Settings_Reading_SubPanel" title="Settings Reading SubPanel" class="mw-redirect">Reading</a> panel.','quba-engine')); ?>
                    </b>
                    <ul>
                        <li><?php printf(__('Set <b>Front page displays</b> to <b>a static page</b>', 'quba-engine')); ?> 
                        <ol>
                            <li> <?php printf(__('In the drop down menu for <b>Front Page</b> select "Home."', 'quba-engine')); ?> </li>
                            <li> <?php printf(__('In the drop down menu for <b>Posts page</b> select "Blog" or the name you created, or leave it blank if you will not feature posts on the site.','quba-engine')); ?> </li>
                            <li><?php printf(__('Save changes.', 'quba-engine')); ?> </li>
                        </ol>
                        </li>
                    </ul>
                </li>
            </ol>
        </div>
    </div><!---#tab-1--->
    <div id="tab-2" class="tab-content">
        <div class="full-width">
            <h2><?php printf(__('About Quba Engine', 'quba-engine')); ?> </h2>
            <p><?php printf(__('If you are using <a href="http://wordpress.org/themes/quba/">Quba WordPress Theme</a> theme than Quba Engine will provide some amazing features for example when you install Quba Engine you will get a portfolio menu in your dashboard with the help of it you can add portfolio at your front page as many as you want.','quba-engine')); ?></p>
            <p><b><?php printf(__('Some of the Quba Engine features will be released in future updates.', 'quba-engine')); ?></b></p>
        </div>
    </div>
    <div id="tab-3" class="tab-content">
        <div class="full-width">
            <h2>We are!</h2>
            <ul>
                <li><a href="http://naveenkharwar.com" rel="nofollow">Naveen Kharwar</a> - Author</li>
                <li><a href="https://harsh98trivedi.github.io" rel="nofollow">Harsh Trivedi</a>  - Bug Tester</li>
            </ul>
        </div>
    </div>
    <div id="tab-4" class="tab-content">
        <div class="full-width">
            <div class="col">
                <h2><b><?php printf(__('Quba Engine is licensed under the GNU General Public License v2.0','quba-engine')); ?></b></h2>
            </div>
            <div class="col">
             <?php printf(__('LICENSE URL','quba-engine')); ?> 
             <?php printf(__('<a href="http://www.gnu.org/licenses/gpl-2.0.txt">http://www.gnu.org/licenses/gpl-2.0.txt</a>','quba-engine')); ?>
            </div>
        </div>
    </div>

</div><!-- container -->


    </div>

    <script>

    </script>


<div class="clear"></div></div><!-- wpbody-content -->
<div class="clear"></div></div><?php
