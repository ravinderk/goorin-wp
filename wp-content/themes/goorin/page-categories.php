<?php 
/*
Template Name: categories
*/

get_header(); ?>
<div class="experience-page categories-page">
	<section class="breadcrumbs">
        <div class="container">
            <ul>
                <li class="home">
                    <a title="Go to Home Page" href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
                    <span>/ </span>
                </li>
                 <li class="home">
                    <a href="#">Features</a>
                    <span>/ </span>
                </li>
                <li>
                    <strong>Style</strong>
                </li>
            </ul>
        </div>
    </section>
    <!--breadcrumbs-->
    <section class="experience-cat-block">
        <hgroup>
        	<h1>Styling Tips</h1>
        </hgroup>
        <div class="container">
            <div class="experience-cat-list">
                <a href="#" class="experience-cat-toggle"><span>All Features</span></a>
                <ul class="experience-list-toggle">
                    <li class="active"><a href="#">All</a></li>
                    <li><a href="#">Style</a></li>
                    <li><a href="#">Press</a></li>
                    <li><a href="#">From the Hatshop</a></li>
                    <li><a href="#">History</a></li>
                    <li><a href="#">Product news</a></li>        
                </ul>
            </div>
        </div>
    </section>
</div>


<?php get_footer(); ?>
