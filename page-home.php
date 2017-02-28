<?php
/**
 * template name: Home Page
 *
 * The template for displaying home page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package the_towing_theme
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main container" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/home-page/content', 'home' );


			endwhile; // End of the loop.
			?>

		</main><!-- #main container-->
	</section><!-- #primary -->
<section id="kudus">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-12">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. At autem blanditiis, cupiditate ea eveniet expedita explicabo iste itaque maxime minus molestiae molestias mollitia neque pariatur perferendis quae quasi quia reprehenderit sint sit temporibus velit, voluptatum.
            </div>
        </div>
    </div>
</section>
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-12">
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem libero, quaerat. Culpa doloremque dolores hic incidunt unde. Consectetur cupiditate dolore dolores, itaque magnam molestiae, officiis quaerat ratione rem repellendus reprehenderit totam vel voluptatum. Autem nisi saepe sed! Aspernatur commodi consequuntur facere inventore laboriosam magnam minima minus nulla quod ratione suscipit, velit veritatis voluptas voluptatibus voluptatum. Accusamus, cum deleniti eos est facilis iusto molestias natus officia possimus quaerat repudiandae soluta vitae voluptatem. Adipisci animi deserunt dicta hic ipsa, ipsam itaque magni maxime minus natus nisi quasi sed sit suscipit, tenetur unde veritatis voluptate, voluptatibus? Aspernatur consequatur dolor laboriosam laborum nam necessitatibus nobis repellendus, sed vitae voluptatem? Aperiam, aut, consequuntur doloremque eius enim error expedita fugit ipsa ipsum laborum necessitatibus nulla officia quia. Commodi explicabo facilis incidunt quia sit. Ab adipisci aut beatae blanditiis, dolore dolorem dolorum eius et ex facilis fuga fugit hic incidunt ipsum laudantium neque numquam perspiciatis quaerat quasi quia, recusandae sint velit vero! Aliquam animi, asperiores atque aut cumque deserunt doloremque earum esse est exercitationem illo ipsa natus officiis praesentium sed ut voluptates. Aliquam architecto atque deleniti dolore expedita magnam non odit possimus? Ab adipisci aliquid autem cupiditate debitis ducimus eveniet impedit ipsum minus mollitia nam nisi nulla quibusdam quidem quod, sed, voluptas. Ab asperiores delectus deleniti doloribus earum enim expedita facere hic iste laborum minima, minus non numquam obcaecati odio pariatur porro quam qui quis quo reiciendis reprehenderit saepe vel vero vitae! Aliquid aut beatae, dolorem incidunt ipsa iure libero minima nemo nihil nulla odio officiis quia rem saepe similique vel vitae voluptatem voluptatum! Accusamus accusantium asperiores culpa et, exercitationem facere incidunt ipsam, minus omnis optio quia quod quos reiciendis repellat tenetur ullam unde, voluptate! A alias aspernatur assumenda aut consectetur cumque cupiditate deleniti distinctio eligendi error eum explicabo fugit harum illo impedit ipsam iste, iure maxime nam necessitatibus nobis nostrum quasi, quo, quos rerum similique veniam. Consequuntur ducimus iste iure laboriosam minima molestias neque quisquam vero. Beatae cum cumque, deleniti eius enim excepturi fugit harum ipsam, ipsum iusto maxime odio perferendis quaerat quas recusandae, similique sint. Dicta eveniet magnam qui quibusdam quidem quis, suscipit temporibus vel?
            </div>
        </div>
    </div>
</section>
    <section id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. At autem blanditiis, cupiditate ea eveniet expedita explicabo iste itaque maxime minus molestiae molestias mollitia neque pariatur perferendis quae quasi quia reprehenderit sint sit temporibus velit, voluptatum.
                </div>
                <div class="col-md-4 col-sm-12">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. At autem blanditiis, cupiditate ea eveniet expedita explicabo iste itaque maxime minus molestiae molestias mollitia neque pariatur perferendis quae quasi quia reprehenderit sint sit temporibus velit, voluptatum.
                </div>
                <div class="col-md-4 col-sm-12">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. At autem blanditiis, cupiditate ea eveniet expedita explicabo iste itaque maxime minus molestiae molestias mollitia neque pariatur perferendis quae quasi quia reprehenderit sint sit temporibus velit, voluptatum.
                </div>
            </div>
        </div>
    </section>
<?php
//get_sidebar();
get_footer();
