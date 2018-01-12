<?php
/**
 * GLR
 *
 * Template Name: Issues
 */

get_header();
the_post();
?>

<!-- MASTHEAD -->
<?php get_template_part('masthead') ?>

<!-- CONTENT -->
<section id="content" role="main">
<div class="row wrapper">
	<!-- Page -->
	<div id="page" class="col s12" itemprop="MainContentOfPage">
        <?=Template::partial('intro.php') ?>

        <div class="center-align">
            <div class="issues">
                <div class="issue">
                    <figure>
                        <img src="<?=assetDir?>/img/legislative-big.png" />
                        <h2>Legislative</h2>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti quibusdam minima, distinctio rerum non fugiat. Iure labore molestias dicta nisi mollitia delectus obcaecati placeat, saepe autem. Distinctio ab repellendus saepe?</p>
                    </figure>

                    <div class="links">
                        <ul>
                            <li>
                                <a href="javsacript:;">Statewide Business Court <span>View</span></a>
                            </li>
                            <li>
                                <a href="javsacript:;">Eliminating Phantom Damages<span>View</span></a>
                            </li>
                            <li>
                                <a href="javsacript:;">Seat-belt Nonuse Evidence<span>View</span></a>
                            </li>
                            <li>
                                <a href="javsacript:;">Updating Georgia’s Civil Practice Act<span>View</span></a>
                            </li>
                            <li>
                                <a href="javsacript:;">Predatory Lawsuit Lending<span>View</span></a>
                            </li>
                            <li>
                                <a href="javsacript:;">Punitive Damages Cap <span>View</span></a>
                            </li>
                            <li>
                                <a href="javsacript:;">Defend Reforms Under SB3 in 2005<span>View</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="issue">
                    <figure>
                        <img src="<?=assetDir?>/img/judicial-big.png" />
                        <h2>Judicial</h2>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti quibusdam minima, distinctio rerum non fugiat. Iure labore molestias dicta nisi mollitia delectus obcaecati placeat, saepe autem. Distinctio ab repellendus saepe?</p>
                    </figure>

                    <div class="links">
                        <ul>
                            <li>
                                <a href="javsacript:;">Statewide Business Court <span>View</span></a>
                            </li>
                            <li>
                                <a href="javsacript:;">Eliminating Phantom Damages <span>View</span></a>
                            </li>
                            <li>
                                <a href="javsacript:;">Seat-belt Nonuse Evidence <span>View</span></a>
                            </li>
                            <li>
                                <a href="javsacript:;">Updating Georgia’s Civil Practice Act <span>View</span></a>
                            </li>
                            <li>
                                <a href="javsacript:;">Predatory Lawsuit Lending <span>View</span></a>
                            </li>
                            <li>
                                <a href="javsacript:;">Punitive Damages Cap <span>View</span></a>
                            </li>
                            <li>
                                <a href="javsacript:;">Defend Reforms Under SB3 in 2005 <span>View</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="issue">
                    <figure>
                        <img src="<?=assetDir?>/img/political-big.png" />
                        <h2>Political</h2>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti quibusdam minima, distinctio rerum non fugiat. Iure labore molestias dicta nisi mollitia delectus obcaecati placeat, saepe autem. Distinctio ab repellendus saepe?</p>
                    </figure>

                    <div class="links">
                        <ul>
                            <li>
                                <a href="javsacript:;">Statewide Business Court <span>View</span></a>
                            </li>
                            <li>
                                <a href="javsacript:;">Eliminating Phantom Damages <span>View</span></a>
                            </li>
                            <li>
                                <a href="javsacript:;">Seat-belt Nonuse Evidence <span>View</span></a>
                            </li>
                            <li>
                                <a href="javsacript:;">Updating Georgia’s Civil Practice Act <span>View</span></a>
                            </li>
                            <li>
                                <a href="javsacript:;">Predatory Lawsuit Lending <span>View</span></a>
                            </li>
                            <li>
                                <a href="javsacript:;">Punitive Damages Cap <span>View</span></a>
                            </li>
                            <li>
                                <a href="javsacript:;">Defend Reforms Under SB3 in 2005 <span>View</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
		</div>
	</div>
</div>
</section>

<?php get_footer() ?>