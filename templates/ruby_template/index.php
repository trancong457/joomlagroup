<?php
/**
 * @copyright    Copyright (C) 2011.  joomla-outsource.com All rights reserved.
 * @license        GNU/GPL, see LICENSE.php
 * @Template by    Du Nguyen
 * @E-mail        webmaster@joomla-outsource.com
 * @Date        May, 2011
 */
// no direct access
defined('_JEXEC') or die('Restricted access');
$temp_dir = JPATH_SITE . '/templates/' . $this->template . '/';
require_once($temp_dir . 'template_functions.php');
$gk_tools = new fw_template_17s($this);
$document = JFactory::getDocument();
$user = JFactory::getUser();

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" class="bootstrap3 ">
<head>
    <jdoc:include type="head"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <link rel="shortcut icon" href="<?php echo $gk_tools->templateurl(); ?>/dbklink-icon.ico"/>
    <link rel="stylesheet" href="<?php echo $gk_tools->baseurl(); ?>templates/system/css/system.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo $gk_tools->baseurl(); ?>templates/system/css/general.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo $gk_tools->templateurl(); ?>/css/bootstrap-3.3.7/css/bootstrap.min.css"
          type="text/css"/>
    <link rel="stylesheet" href="<?php echo $gk_tools->templateurl(); ?>/css/font-awesome.min.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo $gk_tools->templateurl(); ?>/css/template.css" type="text/css"/>


    <?php
    if ($this->params->get('loadjquery')) {

        //$document->addScript($gk_tools->templateurl().'/scripts/jquery.js');
    }
    ?>
    <script type="text/javascript" src="<?php echo $gk_tools->templateurl(); ?>/scripts/owl.carousel.js"></script>
    <script type="text/javascript" src="<?php echo $gk_tools->templateurl(); ?>/scripts/js.js"></script>
</head>
<body>

<header class="defineFloat">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#navigation"><span class="icon-bar"></span> <span class="icon-bar"></span>
                            <span class="icon-bar"></span> <span class="sr-only">Toggle navigation</span></button>
                        <div class="mobileLinks">
                            <ul class="list-unstyled">
                                <li>
                                    <div class="headerPhone"><a href="tel:+1(646)-808-0229"><i class="fa fa-phone"
                                                                                               aria-hidden="true"></i>+1(646)-808-0229</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="salesEmail"></div>
                                </li>
                            </ul>
                        </div>
                        <a href="<?php echo JUri::root() ?>" class="navbar-brand">
                            <img src="<?php echo $gk_tools->templateurl(); ?>/images/logo.png" alt=""
                                 class="img-responsive hidden-xs visible-sm visible-md visible-lg"/>
                            <img src="<?php echo $gk_tools->templateurl(); ?>/images/mobilelogo.png" alt=""
                                 class="img-responsive visible-xs hidden-sm"/>
                        </a>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="collapse navbar-collapse" id="navigation">
                        <jdoc:include type="modules" name="menu" style="xhtml"/>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="header_info">
                        <div class="headerPhone"><a href="tel:+1(646)-808-0229"> <i class="fa fa-phone"
                                                                                    aria-hidden="true"></i>
                                +1(646)-808-0229</a></div>
                        <div class="salesEmail"><a href="mailto:sales@webworldexperts.com"><i class="fa fa-envelope"
                                                                                              aria-hidden="true"></i>sales@webworldexperts.com</a>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </nav>
    <div class="bigBnaaer reGetStarted getStarted hidden-xs visible-lg">
        <a class="getstartBtn-header" href="get-started.php"><span class="shake moveAnimate">GET STARTED <span
                        class="listingExrArrow getStartedArrow"></span></span></a>
    </div>
</header>

<section class="section-top">
    <img src="<?php echo $gk_tools->templateurl(); ?>/images/comradeimage.jpg" class="img-responsive" alt="">
    <div class="col-sm-12 col-xs-12 text-center tempSliderText">
        <h2>Joomla Design and Development for <br>
            Extensibility, Usability &amp; Reliability</h2>
        <p>Build powerful web sites &amp; apps using one of the most preferred CMS Platform - Joomla!</p>
    </div>
</section>

<section class="section_portfolio">
    <h2 class="portfolio__title"> Industry Expertise</h2>

    <!--tab -->
    <div id="portfolio-tabs" class="portfolio-tabs owl-carousel owl-loaded owl-drag">
        <div class="owl-stage-outer">
            <div class="owl-stage">
                <div class="owl-item active" style="width: auto;">
                    <div data-tab="0" class="portfolio-tabs__item active"><span>Legal</span></div>
                </div>
                <div class="owl-item active" style="width: auto;">
                    <div data-tab="1" class="portfolio-tabs__item">
                        <span>IT &amp; Startups</span>
                    </div>
                </div>
                <div class="owl-item active" style="width: auto;">
                    <div data-tab="2" class="portfolio-tabs__item">
                        <span>Professional Services</span></div>
                </div>
                <div class="owl-item active" style="width: auto;">
                    <div data-tab="3" class="portfolio-tabs__item"><span>eCommerce</span></div>
                </div>
                <div class="owl-item active" style="width: auto;">
                    <div data-tab="4" class="portfolio-tabs__item"><span>Healthcare</span></div>
                </div>
                <div class="owl-item active" style="width: auto;">
                    <div data-tab="5" class="portfolio-tabs__item"><span>Corporate</span></div>
                </div>
                <div class="owl-item active" style="width: auto;">
                    <div data-tab="6" class="portfolio-tabs__item"><span>Real Estate</span></div>
                </div>
            </div>
        </div>
    </div>
    <!--end tab-- >

    <!--body -->
    <div id="portfolio-body" class="portfolio-body owl-carousel owl-loaded owl-drag">
        <div class="owl-stage-outer">
            <div class="owl-stage">
                <div class="owl-item active">
                    <div class="portfolio-body__item"
                         style="background-image: url('<?php echo JUri::root() . 'images/custom' ?>/BYA_1160x600_2-1024x530.jpg')">
                        <div class="portfolio-body__imgs">
                            <img class="img-logo"
                                 src="<?php echo JUri::root() . 'images/custom' ?>/BarrY_logo-3.png"
                                 alt="">
                            <img src="<?php echo JUri::root() . 'images/custom' ?>/bya-device.png"
                                 alt="">
                        </div>
                        <div class="portfolio-body__text">
                            <div class="custom-text custom-width"><h3>challenges</h3>
                                <p>The Barr &amp; Young Law Firm approached us to help raise their profile above a
                                    growing sea of serious competition. Their website did not clearly delineate services
                                    and lacked strong messages that would connect with prospective clients at the time.
                                    The small amount of Web traffic they once enjoyed had slowed to a trickle; and was
                                    going, instead, to their competitors who were actively applying modern SEO
                                    tactics.</p>
                                <h3 class="green">results</h3>
                                <ul class="green">
                                    <li>Increased monthly leads significantly <strong>(+650%)</strong> without expanding
                                        marketing budget
                                    </li>
                                    <li>Improved Conversion rate <strong>350%</strong> by writing industry-specific
                                        content, and crafting multiple Calls-to-Action
                                    </li>
                                    <li>Enhanced <strong>Sales funnel</strong> functionality with new graphics and
                                        logic-flow for prospective clients
                                    </li>
                                </ul>
                                <a href="#" class="btn">view case
                                    study</a></div>
                        </div>
                    </div>
                </div>
                <div class="owl-item">
                    <div class="portfolio-body__item" style="
                            background-image: url('<?php echo JUri::root() . 'images/custom' ?>/portfolio__bg-1024x525.jpg')
                            ">
                        <div class="portfolio-body__imgs"><img class="img-logo"
                                                               src="<?php echo JUri::root() . 'images/custom' ?>/mgtlogo.png"
                                                               alt=""> <img
                                    src="<?php echo JUri::root() . 'images/custom' ?>/case-study-mockup-1024x630.png"
                                    alt=""></div>
                        <div class="portfolio-body__text">
                            <div class="custom-text custom-width"><p>&nbsp;</p>
                                <h3>strategy</h3>
                                <p>To raise $20,000 in a short, 45-day Kickstarter campaign, we devised and implemented
                                    an out-of-the-box marketing strategy to promote the new GreenTraveler brand as a
                                    rising star in the environmentally-friendly, engineered products space. We
                                    distinguished the to-go food &amp; beverage container’s primary product features as
                                    leading edge: ultimate leak-free, reusable and perfectly compartmentalized.</p>
                                <h3 class="green">results</h3>
                                <ul class="green">
                                    <li>Publication on <strong>100+ Top IT websites</strong> focused on startups and
                                        innovative products
                                    </li>
                                    <li><strong>Total raised: $115,000</strong> (nearly 6x more than our client’s goal)
                                    </li>
                                    <li>Goal: <strong>$20,000</strong> / Backers: <strong>1,700+</strong> / Total
                                        Pledged: <strong>$115,000+</strong></li>
                                </ul>
                                <a href="#" class="btn">view case
                                    study</a></div>
                        </div>
                    </div>
                </div>
                <div class="owl-item">
                    <div class="portfolio-body__item" style="
                            background-image: url('<?php echo JUri::root() . 'images/custom' ?>/bg-2-1024x500.jpg')
                            ">
                        <div class="portfolio-body__imgs"><img class="img-logo"
                                                               src="<?php echo JUri::root() . 'images/custom' ?>/smallArtboard-111w.svg"
                                                               alt=""> <img
                                    src="<?php echo JUri::root() . 'images/custom' ?>/granite-selection-presentation.png"
                                    alt=""></div>
                        <div class="portfolio-body__text">
                            <div class="custom-text custom-width"><p>&nbsp;</p>
                                <h3>challenges / strategy</h3>
                                <p>We were brought by the Client to analyze their marketing and branding assets and
                                    improve results. Our team rebranded perception of the company with a new name, logo
                                    and premium visual identity, and, in effect, invented: “Granite Selection”. Along
                                    with the new website, we’ve developed new interactive tools resulting in increased
                                    conversion rate. Our marketing team has successfully decreased our client’s
                                    expensive paid ads budget while attracting a greater traffic volume via organic SEO
                                    instead.</p>
                                <h3 class="green">results</h3>
                                <ul class="green">
                                    <li><strong>+145% improved</strong> website conversion rate</li>
                                    <li><strong>+470% increased</strong> Illinois SEO traffic</li>
                                    <li><strong>+40% increase</strong> number of online leads</li>
                                    <li>Sustainable <strong>revenue growth</strong></li>
                                </ul>
                                <a href="" class="btn">view case
                                    study</a></div>
                        </div>
                    </div>
                </div>
                <div class="owl-item">
                    <div class="portfolio-body__item" style="
                            background-image: url('<?php echo JUri::root() . 'images/custom' ?>/NY-back-1-1024x476.png')
                            ">
                        <div class="portfolio-body__imgs"><img class="img-logo"
                                                               src="<?php echo JUri::root() . 'images/custom' ?>/NY-logo.png"
                                                               alt=""> <img
                                    src="<?php echo JUri::root() . 'images/custom' ?>/NY-pic-1024x609.png"
                                    alt=""></div>
                        <div class="portfolio-body__text">
                            <div class="custom-text custom-width"><h3>challenges</h3>
                                <p>CWA was asked to transform an outdated website into a lead-capture tool and sales
                                    engine. First, we migrated the website to very flexible Magento platform. Then we
                                    optimized navigation and page structure while adding more product photos and
                                    promotional offers. We applied onsite SEO and steadily increased conversion rate via
                                    A/B testing.</p>
                                <h3 class="green">results</h3>
                                <ul class="green">
                                    <li>Established monthly website traffic at <strong>10,000+</strong> (mostly from
                                        organic SEO)
                                    </li>
                                    <li>Enlarged email subscriber base to <strong>14,000 people</strong> &amp; deployed
                                        monthly email campaigns
                                    </li>
                                    <li>Improved Conversion rate <strong>from 0.5% to 1.2%</strong></li>
                                    <li>Collected and leveraged nearly <strong>400 real reviews</strong> from customers
                                    </li>
                                    <li>Increased <strong>sales by 152%</strong></li>
                                </ul>
                                <a href="" class="btn">view case study</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-item">
                    <div class="portfolio-body__item" style="
                            background-image: url('<?php echo JUri::root() . 'images/custom' ?>/zen_bg-1024x530.jpg')
                            ">
                        <div class="portfolio-body__imgs"><img class="img-logo"
                                                               src="<?php echo JUri::root() . 'images/custom' ?>/zen_logo-1.png"
                                                               alt=""> <img
                                    src="<?php echo JUri::root() . 'images/custom' ?>/zen_devices.png"
                                    alt=""></div>
                        <div class="portfolio-body__text">
                            <div class="custom-text custom-width"><h3>challenges</h3>
                                <p>CWA created a clean, compelling website with slick UIX with the main purpose to
                                    promote an innovative inventory management system built by our Client. As the
                                    company’s technical, creative and marketing partner, we continually refine content
                                    and use SEO to broaden Zen Supplies’ digital footprint and capture leads.</p>
                                <h3 class="green">solution</h3>
                                <ul class="green">
                                    <li>New branded, vibrant website serves as the digital face of the company</li>
                                    <li>Generated marketing Landing pages that lead new demo requests</li>
                                    <li>Integrated HubSpot Marketing Automation and CRM system ensures rapid, specific
                                        responses
                                    </li>
                                </ul>
                                <a href="" class="btn">view case study</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-item">
                    <div class="portfolio-body__item" style="
                            background-image: url('<?php echo JUri::root() . 'images/custom' ?>/tf_bg-1-1024x530.jpg')
                            ">
                        <div class="portfolio-body__imgs"><img class="img-logo"
                                                               src="<?php echo JUri::root() . 'images/custom' ?>/portfolio-body__logo-corporate.png"
                                                               alt=""> <img
                                    src="<?php echo JUri::root() . 'images/custom' ?>/tf_devices-1.png"
                                    alt=""></div>
                        <div class="portfolio-body__text">
                            <div class="custom-text custom-width"><h3>challenges</h3>
                                <p>Thompson Flanagan’s aging website was not inspiring confidence among its clients or
                                    industry partners. Their management team approached us with a challenge to build
                                    their brand and help strengthen their business relationships through the use of
                                    design, technology, and some digital marketing.</p>
                                <h3 class="green">results</h3>
                                <ul class="green">
                                    <li>Custom photo shoot images now show their office culture of excellence, respect,
                                        teamwork, and integrity
                                    </li>
                                    <li>Improved messaging delivers uniform voice that communicates no agency can
                                        outperform them when servicing clients
                                    </li>
                                    <li>Visual timeline provides a quick-view of company’s milestone highlights</li>
                                    <li>Join Our Team navigation item added to attract career-minded professionals</li>
                                    <li>Mobile responsive page layouts ideal for their audience and a boost to SEO</li>
                                </ul>
                                <a href="#" class="btn">view case
                                    study</a></div>
                        </div>
                    </div>
                </div>
                <div class="owl-item">

                    <div class="portfolio-body__item" style="
                            background-image: url('<?php echo JUri::root() . 'images/custom' ?>/Vesta_1160x600_2-1024x530.jpg')
                            ">
                        <div class="portfolio-body__imgs"><img class="img-logo"
                                                               src="<?php echo JUri::root() . 'images/custom' ?>/smallArtboard-1-copy11w.svg"
                                                               alt=""> <img
                                    src="<?php echo JUri::root() . 'images/custom' ?>/device.png"
                                    alt=""></div>
                        <div class="portfolio-body__text">
                            <div class="custom-text custom-width"><h3>challenges / strategy</h3>
                                <p>As one of Chicago’s top Real Estate agencies serving the luxury market, Vesta
                                    Preferred hired us to create a sleek branded website that would serve as a lead
                                    generation tool. We started with three pages and have grown the site into a
                                    substantial technical platform. To continually increase the conversion rate, we
                                    regularly add website pages, sections, and UIX elements.</p>
                                <h3 class="green">solution</h3>
                                <ul class="green">
                                    <li>Updated website design with clean &amp; modern style</li>
                                    <li>Connected APIs for both Sales and Rentals</li>
                                    <li>Added sales funnel elements and Calls-to-Action to transform visitors into
                                        clients
                                    </li>
                                    <li>Developed separate mobile experience with UX focus</li>
                                    <li>Implemented various lead generation tools</li>
                                </ul>
                                <a href="#" class="btn">view case
                                    study</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section> <!-- end section -->

<section class="digital">
    <div class="digital__text"><h2>All Of Your Digital Needs In One Place</h2>
        <p>Businesses often struggle when working with both web design and digital marketing agencies. That’s because
            designers don’t think about conversions or SEO, and marketers don’t always understand the importance of
            visuals.</p>
        <p><span style="font-weight: 400;">At Comrade Web Agency, we merge the two. Our&nbsp;<strong
                        style="color: #91c533;">Web Design &amp; Development</strong> team and&nbsp;<strong
                        style="color: #7ab7f1;">Digital Marketing</strong>&nbsp;staff work side-by-side to produce dynamic, visually-rich websites that are built for optimal web performance, lead attraction, and customer conversion, all while creating a strong brand message.</span>
        </p></div>
    <div class="digital__wrap">
        <div class="digital-item ">
            <div class="digital-item__title">Design &amp; Development</div>
            <div class="digital-item__info-wrap owl-carousel owl-loaded owl-drag">
                <div class="owl-stage-outer">
                    <div class="owl-stage">
                        <div class="owl-item" style="width: 674.5px;">
                            <div class="digital-item__info" style="
 background-image: url('<?php echo JUri::root() . 'images/custom' ?>/uiux-1024x683.jpg')
 ">
                                <div class="digital-item__text"><h2>User Experience and Website Design</h2>
                                    <p>Our award-winning designs have helped clients grow their brand while allowing
                                        visitors to navigate their site with ease, creating the ideal user
                                        experience.</p> <a href="#"
                                                           class="btn">View our designs</a></div>
                            </div>
                        </div>
                        <div class="owl-item active" style="width: 674.5px;">
                            <div class="digital-item__info" style="
 background-image: url('<?php echo JUri::root() . 'images/custom' ?>/ecommerce-1024x683.jpg')
 ">
                                <div class="digital-item__text"><h2>E-commerce Websites</h2>
                                    <p>We perfect your buyer’s journey by creating the ideal shopping environment using
                                        SEO, online tools, and plugins to boost your brand reputation and conversion
                                        rate. We work with Magento, Shopfiy, and WooCommerce, as well as develop
                                        customized solutions.</p></div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 674.5px;">
                            <div class="digital-item__info" style="
 background-image: url('<?php echo JUri::root() . 'images/custom' ?>/landing-1024x683.jpg')
 ">
                                <div class="digital-item__text"><h2>Landing Page/Conversion</h2>
                                    <p>Visually stunning website designs paired with lead-attracting functionality. Our
                                        websites are designed to funnel visitors and convert them into leads.</p></div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 674.5px;">
                            <div class="digital-item__info" style="
 background-image: url('<?php echo JUri::root() . 'images/custom' ?>/web_development-1024x683.jpg')
 ">
                                <div class="digital-item__text"><h2>Web Application Development</h2>
                                    <p>Customized web applications, including cloud, mobile, and desktop-based software
                                        and more.</p></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-nav disabled">
                    <div class="owl-prev">prev</div>
                    <div class="owl-next">next</div>
                </div>
                <div class="owl-dots">
                    <div class="owl-dot"><span></span></div>
                    <div class="owl-dot active"><span></span></div>
                    <div class="owl-dot"><span></span></div>
                    <div class="owl-dot"><span></span></div>
                </div>
            </div>
            <div class="digital-item__tabs digital-item__tabs--first">
                <div data-tab-dig="0" class="digital-item__tab"><span>UX and Website Design </span></div>
                <div data-tab-dig="1" class="digital-item__tab active"><span>E-commerce Websites </span></div>
            </div>
            <div class="digital-item__tabs digital-item__tabs--second">
                <div data-tab-dig="2" class="digital-item__tab"><span>Landing Page/Conversion </span></div>
                <div data-tab-dig="3" class="digital-item__tab"><span>Web Application Development </span></div>
            </div>
        </div>
        <div class="digital-item digital-item--blue">
            <div class="digital-item__title">Digital Marketing</div>
            <div class="digital-item__info-wrap owl-carousel owl-loaded owl-drag">
                <div class="owl-stage-outer">
                    <div class="owl-stage">
                        <div class="owl-item" style="width: 674.5px;">
                            <div class="digital-item__info" style="
 background-image: url('<?php echo JUri::root() . 'images/custom' ?>/inbound_marketing-1024x702.jpg')
 ">
                                <div class="digital-item__text"><h2>SEO (Local, E-Commerce)</h2>
                                    <p>Most of our clients achieve first page SEO results for top industry keywords
                                        within 3-6 months of partnering with us. We excel in quality link-building,
                                        onsite and server-side SEO, and content marketing. Our results speak for
                                        themselves.</p></div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 674.5px;">
                            <div class="digital-item__info" style="
 background-image: url('<?php echo JUri::root() . 'images/custom' ?>/smm-1024x683.jpg')
 ">
                                <div class="digital-item__text"><h2>Social Media Marketing (SMM)</h2>
                                    <p>Our outside-of-the-box social media marketing campaigns attract and engage your
                                        target audience on Facebook, Twitter, Instagram, YouTube, LinkedIn, and several
                                        other platforms.</p></div>
                            </div>
                        </div>
                        <div class="owl-item active" style="width: 674.5px;">
                            <div class="digital-item__info" style="
 background-image: url('<?php echo JUri::root() . 'images/custom' ?>/ppc2-1024x743.jpg')
 ">
                                <div class="digital-item__text"><h2>Pay-Per-Click (PPC)</h2>
                                    <p>We create rich, relevant ads, using both data and experience to attract targeted
                                        traffic to your website with cost-effective techniques.</p></div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 674.5px;">
                            <div class="digital-item__info" style="
 background-image: url('<?php echo JUri::root() . 'images/custom' ?>/marketing_automation.jpg')
 ">
                                <div class="digital-item__text"><h2>Marketing Automation</h2>
                                    <p>As a HubSpot Certified digital marketing agency of 4 years, we know from
                                        experience that great content produced exclusively to address needs of your
                                        buyer personas delivers when used in conjunction with modern marketing
                                        automation tools (Marketo, HubSpot, etc).</p></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-nav disabled">
                    <div class="owl-prev">prev</div>
                    <div class="owl-next">next</div>
                </div>
                <div class="owl-dots">
                    <div class="owl-dot"><span></span></div>
                    <div class="owl-dot"><span></span></div>
                    <div class="owl-dot active"><span></span></div>
                    <div class="owl-dot"><span></span></div>
                </div>
            </div>
            <div class="digital-item__tabs digital-item__tabs--first">
                <div data-tab-dig="0" class="digital-item__tab"><span>SEO (Local, E-Commerce) </span></div>
                <div data-tab-dig="1" class="digital-item__tab"><span>Social Media Marketing (SMM) </span></div>
            </div>
            <div class="digital-item__tabs digital-item__tabs--second">
                <div data-tab-dig="2" class="digital-item__tab active"><span>Pay-Per-Click (PPC) </span></div>
                <div data-tab-dig="3" class="digital-item__tab"><span>Marketing Automation </span></div>
            </div>
        </div>
    </div>
</section>
<!--haha-->

</body>
</html>