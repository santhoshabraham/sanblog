<style class="customize">
<?php
    $customize = (array)json_decode($json, true);
    if($customize):
?>

    <?php //================= Font Body Typography ====================== ?>
    <?php if(isset($customize['font_family_primary'])  && $customize['font_family_primary'] != '---'){ ?>
        body, .breadcrumb-content-inner nav.breadcrumb li, .topbar .topbar-left ul.gva_menu > li a, .article-detail .post-top .post-meta .post-categories a,
        .gallery-post .post-meta-wrap .post-title a, .testimonial-node-1 .testimonial-content .info .title, .btn-theme, .view-node a, .block .block-title > span,
        .menu-hover .navigation .gva_menu .megamenu > .sub-menu > li > a,.portfolio-filter ul.nav-tabs > li > a, .portfolio-v1 .content-inner .title a,
        .post-block .post-title a, .tags-list .item-list > ul > li a, .category-list ul > li a, .widget.gsc-icon-box .highlight_content .title, .gsc-tab-views.style-1 .list-links-tabs .nav-tabs > li a,
        .gsc-tab-views.style-2 .list-links-tabs .nav-tabs > li a, .gsc-tab-views.style-3 .list-links-tabs .nav-tabs > li a,.gsc-service-carousel .item .content-inner .title a,
        h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6
        {
            font-family: <?php echo $customize['font_family_primary'] ?>!important;
        }
    <?php } ?>

    <?php if(isset($customize['font_family_second'])  && $customize['font_family_second'] != '---'){ ?>
        body,
        h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6
        {
            font-family: <?php echo $customize['font_family_primary'] ?>!important;
        }
    <?php } ?>

    <?php if(isset($customize['font_body_size'])  && $customize['font_body_size']){ ?>
        body{
            font-size: <?php echo ($customize['font_body_size'] . 'px'); ?>;
        }
    <?php } ?>

    <?php if(isset($customize['font_body_weight'])  && $customize['font_body_weight']){ ?>
        body{
            font-weight: <?php echo $customize['font_body_weight'] ?>;
        }
    <?php } ?>

    <?php //===================MSU Header======================= ?>
    <?php if(isset($customize['msuheader_bg'])  && $customize['msuheader_bg']){ ?>
        #msu-header-container::before{
            background-color: <?php echo $customize['msuheader_bg'] ?> !important;
            opacity: <?php echo $customize['filterheaderopacity'] ?>!important;
        }

    <?php } ?>
    <?php if(isset($customize['msuheader_bg_image'])  && $customize['msuheader_bg_image']){ ?>
        .msu-logo-column{
            background-image: url('<?php global $base_url;print $base_url; ?>/themes/sanblog/images/msuheader/<?php echo  $customize['msuheader_bg_image']; ?>');
        }
    <?php } ?>

     <?php if(isset($customize['msuheader_color'])  && $customize['msuheader_color']){ ?>
        .msu-header{
            color: <?php echo $customize['msuheader_color'] ?> !important;
        }
    <?php } ?>

    <?php if(isset($customize['msuheader_color_link'])  && $customize['msuheader_color_link']){ ?>
        .msu-header a{
            color: <?php echo $customize['msuheader_color_link'] ?>!important;
        }
    <?php } ?>

    <?php if(isset($customize['msuheader_color_link_hover'])  && $customize['msuheader_color_link_hover']){ ?>
        .msu-header a:hover{
            color: <?php echo $customize['msuheader_color_link_hover'] ?> !important;
        }
    <?php } ?>

    <?php //===================Dept Header======================= ?>
    <?php if(isset($customize['deptheader_bg'])  && $customize['deptheader_bg']){ ?>
        .dept-header{
            background: <?php echo $customize['deptheader_bg'] ?> !important;
        }
    <?php } ?>

     <?php if(isset($customize['deptheader_color'])  && $customize['deptheader_color']){ ?>
        .dept-header{
            color: <?php echo $customize['deptheader_color'] ?> !important;
        }
    <?php } ?>

    <?php if(isset($customize['deptheader_color_link'])  && $customize['deptheader_color_link']){ ?>
        .dept-header a{
            color: <?php echo $customize['deptheader_color_link'] ?>!important;
        }
    <?php } ?>

    <?php if(isset($customize['deptheader_color_link_hover'])  && $customize['deptheader_color_link_hover']){ ?>
        .dept-header a:hover{
            color: <?php echo $customize['deptheader_color_link_hover'] ?> !important;
        }
    <?php } ?>

    <?php //================= Body ================== ?>
    <?php if(isset($customize['body_bg_image'])  && $customize['body_bg_image']){ ?>
        body{
            background-image: url('<?php global $base_url;print $base_url; ?>/themes/sanblog/images/patterns/<?php echo  $customize['body_bg_image']; ?>');
        }
    <?php } ?>
    <?php if(isset($customize['body_bg_color'])  && $customize['body_bg_color']){ ?>
        body{
            background-color: <?php echo $customize['body_bg_color'] ?>!important;
        }
    <?php } ?>
    <?php if(isset($customize['body_bg_position'])  && $customize['body_bg_position']){ ?>
        body{
            background-position:<?php echo $customize['body_bg_position'] ?>;
        }
    <?php } ?>
    <?php if(isset($customize['body_bg_repeat'])  && $customize['body_bg_repeat']){ ?>
        body{
            background-repeat: <?php echo $customize['body_bg_repeat'] ?>;
        }
    <?php } ?>

    <?php //================= Body page ===================== ?>
    <?php if(isset($customize['text_color'])  && $customize['text_color']){ ?>
        body .body-page{
            color: <?php echo $customize['text_color'] ?>;
        }
    <?php } ?>

    <?php if(isset($customize['link_color'])  && $customize['link_color']){ ?>
        body .body-page a{
            color: <?php echo $customize['link_color'] ?>!important;
        }
    <?php } ?>

    <?php if(isset($customize['link_hover_color'])  && $customize['link_hover_color']){ ?>
        body .body-page a:hover{
            color: <?php echo $customize['link_hover_color'] ?>!important;
        }
    <?php } ?>

    <?php //===================Header=================== ?>
    <?php if(isset($customize['header_bg'])  && $customize['header_bg']){ ?>
        header .header-main{
            background: <?php echo $customize['header_bg'] ?>!important;
        }
    <?php } ?>

    <?php if(isset($customize['header_color_link'])  && $customize['header_color_link']){ ?>
        header .header-main a{
            color: <?php echo $customize['header_color_link'] ?>!important;
        }
    <?php } ?>

    <?php if(isset($customize['header_color_link_hover'])  && $customize['header_color_link_hover']){ ?>
        header .header-main a:hover{
            color: <?php echo $customize['header_color_link_hover'] ?>!important;
        }
    <?php } ?>

   <?php //===================Menu=================== ?>
    <?php if(isset($customize['menu_bg']) && $customize['menu_bg']){ ?>
        .main-menu, .navbar-default, .we-mega-menu-ul > .we-mega-menu-li > a, ul.gva_menu{
            background: <?php echo $customize['menu_bg'] ?>!important;
        }
        .tb-megamenu{
            background-color: <?php echo $customize['menu_bg'] ?>!important;
        }
        span.caret{
display:none !important;
}
        .tb-megamenu .nav > li > a:focus,
.tb-megamenu .nav > li > a:hover,
.tb-megamenu .nav > li > span.tb-megamenu-no-link:focus,
.tb-megamenu .nav > li > span.tb-megamenu-no-link:hover {
  color: #000;

}

.tb-megamenu .nav > .active > a,
.tb-megamenu .nav > .active > a:hover,
.tb-megamenu .nav > .active > a:focus,
.tb-megamenu .nav > .active > span.tb-megamenu-no-link,
.tb-megamenu .nav > .active > span.tb-megamenu-no-link:hover,
.tb-megamenu .nav > .active > span.tb-megamenu-no-link:focus {
  background-color:  <?php echo $customize['menu_bg'] ?>!important;
}
.tb-megamenu .nav li.dropdown.open > .dropdown-toggle {

  color: <?php echo $customize['menu_bg'] ?>!important;
}
.tb-megamenu .nav li.dropdown.active > .dropdown-toggle,
.tb-megamenu .nav li.dropdown.open.active > .dropdown-toggle {
  background-color: <?php echo $customize['menu_bg'] ?>!important;

}
.tb-megamenu .dropdown-menu {

  border-bottom: 3px solid <?php echo $customize['menu_bg'] ?>!important;

}
.tb-megamenu .dropdown-menu li > a:hover,
.tb-megamenu .dropdown-menu li > a:focus,
.tb-megamenu .dropdown-submenu:hover > a,
.tb-megamenu .dropdown-menu li > span.tb-megamenu-no-link:hover,
.tb-megamenu .dropdown-menu li > span.tb-megamenu-no-link:focus,
.tb-megamenu .dropdown-submenu:hover > span.tb-megamenu-no-link {

  color: <?php echo $customize['menu_bg'] ?>!important;

}
.tb-megamenu .dropdown-menu .active > a,
.tb-megamenu .dropdown-menu .active > a:hover,
.tb-megamenu .dropdown-menu .active > span.tb-megamenu-no-link,
.tb-megamenu .dropdown-menu .active > span.tb-megamenu-no-link:hover {
    background-color: red !important;

}

.tb-megamenu .nav li.dropdown.active > .dropdown-toggle,
.tb-megamenu .nav li.dropdown.open.active > .dropdown-toggle,
.tb-megamenu .nav > li.dropdown.open.active > a:hover,
.tb-megamenu .nav > li.dropdown.open.active > span.tb-megamenu-no-link:hover {
    background-color: <?php echo $customize['menu_bg'] ?>!important;

}

.tb-megamenu .nav > li > a,
.tb-megamenu .nav > li > span.tb-megamenu-no-link {
  border-right: 1px solid<?php echo $customize['menu_border'] ?>!important;
}
.tb-megamenu .nav > li > a:hover,
.tb-megamenu .nav > li > span.tb-megamenu-no-link:hover {
  background-color: 1px solid<?php echo $customize['menu_border'] ?>!important;
}
        .we-mega-menu-ul > .we-mega-menu-li > a:hover, ul.gva_menu{

        background: linear-gradient(180deg, <?php echo $customize['menu_bg'] ?> 90%, <?php echo $customize['menu_border'] ?> 10%) !important;
        }
    <?php } ?>
    <?php if(isset($customize['menu_bg']) && $customize['menu_bg']){ ?>
        .we-mega-menu-submenu{
            background: <?php echo $customize['sub_menu_bg'] ?>!important;
        }
    <?php } ?>

    <?php if(isset($customize['menu_color_link']) && $customize['menu_color_link']){ ?>
        .main-menu ul.gva_menu > li > a{
            color: <?php echo $customize['menu_color_link'] ?>!important;
        }
    <?php } ?>

    <?php if(isset($customize['menu_color_link_hover']) && $customize['menu_color_link_hover']){ ?>
        .main-menu ul.gva_menu > li > a:hover{
            color: <?php echo $customize['menu_color_link_hover'] ?>!important;
        }
    <?php } ?>

    <?php if(isset($customize['submenu_background']) && $customize['submenu_background']){ ?>
        .main-menu .sub-menu{
            background: <?php echo $customize['submenu_background'] ?>!important;
            color: <?php echo $customize['submenu_color'] ?>!important;
        }
    <?php } ?>

    <?php if(isset($customize['submenu_color']) && $customize['submenu_color']){ ?>
        .main-menu .sub-menu{
            color: <?php echo $customize['submenu_color'] ?>!important;
        }
    <?php } ?>

    <?php if(isset($customize['submenu_color_link']) && $customize['submenu_color_link']){ ?>
        .main-menu .sub-menu a{
            color: <?php echo $customize['submenu_color_link'] ?>!important;
        }
    <?php } ?>

    <?php if(isset($customize['submenu_color_link_hover']) && $customize['submenu_color_link_hover']){ ?>
        .main-menu .sub-menu a:hover{
            color: <?php echo $customize['submenu_color_link_hover'] ?>!important;
        }
    <?php } ?>

    <?php //===================Feature=================== ?>
    <?php if(isset($customize['tag1'])  && $customize['tag1']){ ?>
        .feature-text h2{
            color: <?php echo $customize['tag1'] ?>!important;
        }
    <?php } ?>
    <?php if(isset($customize['tag2'])  && $customize['tag2']){ ?>
        .feature-text h3{
            color: <?php echo $customize['tag2'] ?>!important;
        }
    <?php } ?>
    <?php if(isset($customize['featuredescription'])  && $customize['featuredescription']){ ?>
        .feature-text p{
            color: <?php echo $customize['featuredescription'] ?>!important;
        }
    <?php } ?>
    <?php if(isset($customize['featurebuttonbg'])  && $customize['featurebuttonbg']){ ?>
        .feature-text a{
            background: <?php echo $customize['featurebuttonbg'] ?>!important;
            color: <?php echo $customize['featurebtntxt'] ?>!important;
        }
    <?php } ?>
    <?php if(isset($customize['featurefilter'])  && $customize['featurefilter']){ ?>
        .overlay{
            background: <?php echo $customize['featurefilter'] ?>!important;
            opacity: <?php echo $customize['filteropacity'] ?>!important;
        }
    <?php } ?>

    <?php //===================Footer=================== ?>
    <?php if(isset($customize['footer_bg']) && $customize['footer_bg'] ){ ?>
        #footer .footer-center{
            background: <?php echo $customize['footer_bg'] ?>!important;
        }
    <?php } ?>
    <?php if(isset($customize['footer_topbg']) && $customize['footer_topbg'] ){ ?>
        #footer .footer-top{
            background: <?php echo $customize['footer_topbg'] ?>!important;
            color: <?php echo $customize['footer_topcolor'] ?> !important;
        }
        #footer .footer-top h1, .footer-top h2, .footer-top h3, .footer-top h4, .footer-top h5, .footer-top h6, .footer-top .h1, .footer-top .h2, .footer-top .h3, .footer-top .footer-top .h4, .footer-top .h5, .footer-top .h6{
            color: <?php echo $customize['footer_tophcolor'] ?> !important;
        }
    <?php } ?>
    <?php if(isset($customize['footer_bottombg']) && $customize['footer_bottombg'] ){ ?>
        #footer .footer-bottom{
            background: <?php echo $customize['footer_bottombg'] ?>!important;
            color: <?php echo $customize['footer_bottomcolor'] ?> !important;
        }
        #footer .footer-bottom h1, .footer-bottom h2, .footer-bottom h3, .footer-bottom h4, .footer-bottom h5, .footer-bottom h6, .footer-bottom .h1, .footer-bottom .h2, .footer-bottom .h3, .footer-bottom .footer-bottom .h4, .footer-bottom .h5, .footer-bottom .h6{
            color: <?php echo $customize['footer_bottomhcolor'] ?> !important;
        }
    <?php } ?>

     <?php if(isset($customize['footer_color'])  && $customize['footer_color']){ ?>
        #footer .footer-center{
            color: <?php echo $customize['footer_color'] ?> !important;
        }
        #footer .footer-center h1, .footer-center h2, .footer-center h3, .footer-center h4, .footer-center h5, .footer-center h6, .footer-center .h1, .footer-center .h2, .footer-center .h3, .footer-center .footer-center .h4, .footer-center .h5, .footer-center .h6{
            color: <?php echo $customize['footer_centerhcolor'] ?> !important;
        }
    <?php } ?>

    <?php if(isset($customize['footer_color_link'])  && $customize['footer_color_link']){ ?>
        #footer .footer-center ul.menu > li a::after, .footer a{
            color: <?php echo $customize['footer_color_link'] ?>!important;
        }
    <?php } ?>

    <?php if(isset($customize['footer_color_link_hover'])  && $customize['footer_color_link_hover']){ ?>
        #footer .footer-center a:hover{
            color: <?php echo $customize['footer_color_link_hover'] ?> !important;
        }
    <?php } ?>

    <?php //===================Copyright======================= ?>
    <?php if(isset($customize['copyright_bg'])  && $customize['copyright_bg']){ ?>
        .copyright{
            background: <?php echo $customize['copyright_bg'] ?> !important;
        }
    <?php } ?>

     <?php if(isset($customize['copyright_color'])  && $customize['copyright_color']){ ?>
        .copyright{
            color: <?php echo $customize['copyright_color'] ?> !important;
        }
    <?php } ?>

    <?php if(isset($customize['copyright_color_link'])  && $customize['copyright_color_link']){ ?>
        .copyright a{
            color: <?php echo $customize['copyright_color_link'] ?>!important;
        }
    <?php } ?>

    <?php if(isset($customize['copyright_color_link_hover'])  && $customize['copyright_color_link_hover']){ ?>
        .copyright a:hover{
            color: <?php echo $customize['copyright_color_link_hover'] ?> !important;
        }
    <?php } ?>

    <?php //===================MSU Footer======================= ?>
    <?php if(isset($customize['msufooter_bg'])  && $customize['msufooter_bg']){ ?>
        .msu-footer{
            background: <?php echo $customize['msufooter_bg'] ?> !important;
        }
    <?php } ?>
    <?php if(isset($customize['msufooter_bg_image'])  && $customize['msufooter_bg_image']){ ?>
        .msu-footer-logo{
            background-image: url('<?php global $base_url;print $base_url; ?>/themes/sanblog/images/msufooter/<?php echo  $customize['msufooter_bg_image']; ?>');
        }
    <?php } ?>
     <?php if(isset($customize['msufooter_color'])  && $customize['msufooter_color']){ ?>
        .msu-footer{
            color: <?php echo $customize['msufooter_color'] ?> !important;
        }
    <?php } ?>

    <?php if(isset($customize['msufooter_color_link'])  && $customize['msufooter_color_link']){ ?>
        .msu-footer a{
            color: <?php echo $customize['msufooter_color_link'] ?>!important;
        }
    <?php } ?>

    <?php if(isset($customize['msufooter_color_link_hover'])  && $customize['msufooter_color_link_hover']){ ?>
        .msu-footer a:hover{
            color: <?php echo $customize['msufooter_color_link_hover'] ?> !important;
        }
    <?php } ?>

<?php endif; ?>
</style>
