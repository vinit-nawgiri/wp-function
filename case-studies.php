<?php
/*
Template Name: Case Studies
*/
$siteurl = get_site_url();
//echo $siteurl.'<br>';
$templatepath = get_template_directory_uri();
//echo $templatepath.'<br>';
$documentpath = get_site_url().'/';
//echo $documentpath.'<br>'.'<br>';
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?php echo the_title();?></title>
    <link rel="icon" href="<?php echo $templatepath; ?>/assets/img/favicon.png">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.5.7/slick.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.5.7/slick-theme.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo $templatepath;?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo $templatepath; ?>/assets/css/responsive.css">
    <link rel="stylesheet" href="<?php echo $templatepath; ?>/assets/css/animate.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</head>
<style>
    .grid-post {
        background: #fff;
        height: 100%
    }

    .grid-post__thumb {
        height: 14.66667rem;
        background-size: cover;
        background-position: 50%;
        background-repeat: no-repeat
    }

    .grid-post__content {
        padding: 1.06667rem
    }

    .grid-post__content h2 {
        color: #323232;
        margin-bottom: 1.06667rem;
        font-weight: 300
    }

    .grid-post .read_more {
        padding: 2.13333rem 0 1.06667rem
    }

    .small-up-1 {
        -ms-flex-wrap: wrap;
        flex-wrap: wrap
    }

    .small-up-1>.column,
    .small-up-1>.columns {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%
    }


    .medium-up-3 {
        -ms-flex-wrap: wrap;
        flex-wrap: wrap
    }

    .medium-up-3>.column,
    .medium-up-3>.columns {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 33.33333%;
        flex: 0 0 33.33333%;
        max-width: 33.33333%
    }

    .read_more,
    .read_more svg {
        transition: .2s ease-in-out;
    }

    .read_more {
        display: block;
        text-align: right;
        margin-top: .4rem;
        color: #323232;
        text-transform: lowercase;
        font-family: museo-sans-rounded, sans-serif;
        font-size: 1.2rem;
    }

    .row-options {
        background-color: #f5f5f5;
    }

    .read_more svg {
        width: .66667rem;
        height: .93333rem;
        display: inline-block;
        margin-left: .8rem;
        margin-bottom: -.2rem;
    }

    .grid-post__content a {
        text-decoration: none;
    }


    @media print screen and (min-width:48em) {
        .row-options>.row {
            padding-top: 2.66667rem;
            padding-bottom: 2.66667rem
        }

        .row-options img {
            margin-bottom: 2.13333rem;
            margin-top: 2.13333rem
        }

        .row-options .row-option-column {
            padding: 2.13333rem
        }

        .row-options .row-option-column img {
            margin: 0 auto 2.13333rem
        }

        .row-options .grid-row .column,
        .row-options .grid-row .columns {
            margin-bottom: 2.13333rem
        }

        .row-options .grid-row.medium-up-2 .column,
        .row-options .grid-row.medium-up-2 .columns {
            margin-bottom: 0
        }

        .row-options .medium-6 img {
            margin-top: 0
        }

        .grid-post__thumb {
            height: 18.66667rem
        }

        .grid-post__content {
            padding: 2.13333rem
        }

        .grid-post .read_more {
            padding: 2.13333rem 0 0
        }

        .row-options .grid-row .column,
        .row-options .grid-row .columns {
            margin-bottom: 2.13333rem;
        }

        .column,
        .columns {
            padding-right: 1rem;
            padding-left: 1rem;
        }

        .grid-post .read_more {
            padding: 2.13333rem 0 0;
        }
    }

    @media print screen and (min-width:75em) {
        .row-options>.row {
            padding-top: 2.66667rem;
            padding-bottom: 4rem
        }

        .grid-post__thumb {
            height: 22.66667rem
        }
    }

</style>

<body>

    <?php get_header(); 
	
	
		
	?>

    <div class="bespoke-business-applications post-content">
        <div class="jumbotron text-center">
            <h1><?php the_title(); ?></h1>
        </div>
        <div class="row align-center" style="margin-right:unset;">
            <div class="col-sm-12 col-md-10 columns">
                <div class="row align-center">
                    <div class="small-12">
                        <div class="bread-crumb"><?php get_breadcrumb(); ?></div>
                    </div>
                </div>
                <div class="container">
                    <div class="page-information">

                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                        <?php the_content();
                        endwhile; endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div id="business-application-software-development-services"></div>
        <div class="heading-with-arrow" style="margin-bottom:100px;">
            <div class="">
                <div class="center">
                    <h3>Case Studies</h3>
                </div>
            </div>
            <div class="down-arrow"></div>
        </div>

        <div class="container">
            <?php 
                $my_query_args = array(
                'post_type' => array( 'post'),
                'tag__in'=>array('15'),
                //'post__in'=>array('20433'),
                'orderby' => 'post_date',
                'order' => 'ASC',
                'posts_per_page' => '-1'
                );
                $my_query = new WP_Query( $my_query_args );
                ?>
            <div class="row-options">
                <div class="row grid-row ">
                    <?php 
                        if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post(); 
                    ?>
                    <div class="col-lg-4 col-md-6 col-xs-12 columns">
                        <div class="grid-post">
                            <?php 
                            if(MultiPostThumbnails::has_post_thumbnail('post', 'secondary-image', NULL)){ 
                            $img = MultiPostThumbnails::get_post_thumbnail_url('post', 'secondary-image', NULL);	
                            ?>
                            <div class="grid-post__thumb" style="background-image: url('<?php echo $img; ?>') ">
                            </div>
                            <?php  } ?>
                            <div class="grid-post__content">
                                <a href="<?php echo esc_url( get_permalink( ) );?>">
                                    <h2><?php echo the_title(); ?></h2>										
                                </a>
                                <?php echo the_excerpt(); ?>
								<a href="<?php echo esc_url( get_permalink( ) );?>" class="read_more d-inline-block float-right"> Read More <i class="fas fa-chevron-right"></i></a>

								<div class="website d-inline-block">
								<?php
								$content = get_post_custom();
								$website_url_case = $content['website-url-case'][0];
								?>
									<a href="<?php echo $website_url_case; ?>"><img src="<?php echo $templatepath;?>/assets/img/world-click-512.png" style="width:30px;height:auto;"></a>
								</div>
                            </div>
                        </div>
                    </div>

                    <?php
                        endwhile; 
                        endif;
                    ?>
                </div>
            </div>
        </div>
    </div>

    <?php get_footer();?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.slick/1.5.7/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script src="<?php echo $templatepath; ?>/assets/js/wow.min.js"></script>
    <script src="<?php echo $templatepath; ?>/assets/js/style.js"></script>
    <script>
        new WOW().init();

    </script>
</body>

</html>
