<style>
    .section{
        margin-left: -20px;
        margin-right: -20px;
    }
    .section h1{
        text-align: center;
        text-transform: uppercase;
        color: #808a97;
        font-size: 35px;
        font-weight: 700;
        line-height: normal;
        display: inline-block;
        width: 100%;
        margin: 50px 0 0;
    }
    .section:nth-child(even){
        background-color: #fff;
    }
    .section:nth-child(odd){
        background-color: #f1f1f1;
    }
    .section .section-title img{
        display: table-cell;
        vertical-align: middle;
        float: left;
        width: auto;
        margin-right: 15px;
    }
    .section .section-title h2,.section .section-title h3
     {
        display: table-cell;
        vertical-align: middle;
        padding: 0;
        font-size: 24px;
        font-weight: 700;
        color: #808a97;
        text-transform: uppercase;
    }

    .section .section-title h3 {
        font-size: 14px;
        line-height: 28px;
        margin-bottom: 0;
        display: block;
    }

    .section p{
        font-size: 13px;
        margin: 25px 0;
    }
    .section ul li{
        margin-bottom: 4px;
    }
    .landing-container{
        max-width: 750px;
        margin-left: auto;
        margin-right: auto;
        padding: 50px 0 30px;
    }
    .landing-container:after{
        display: block;
        clear: both;
        content: '';
    }
    .landing-container .col-1,
    .landing-container .col-2{
        float: left;
        box-sizing: border-box;
        padding: 0 15px;
    }
    .landing-container .col-1 img{
        width: 100%;
    }
    .landing-container .col-1{
        width: 55%;
    }
    .landing-container .col-2{
        width: 45%;
    }
    .premium-cta{
        background-color: #808a97;
        color: #fff;
        border-radius: 6px;
        padding: 20px 15px;
    }
    .premium-cta:after{
        content: '';
        display: block;
        clear: both;
    }
    .premium-cta p{
        margin: 7px 0;
        font-size: 14px;
        font-weight: 500;
        display: inline-block;
        width: 60%;
    }
    .premium-cta a.button{
        border-radius: 6px;
        height: 60px;
        float: right;
        background: url(<?php echo YITH_YWPI_ASSETS_IMAGES_URL?>upgrade.png) #ff643f no-repeat 13px 13px;
        border-color: #ff643f;
        box-shadow: none;
        outline: none;
        color: #fff;
        position: relative;
        padding: 9px 50px 9px 70px;
    }
    .premium-cta a.button:hover,
    .premium-cta a.button:active,
    .premium-cta a.button:focus{
        color: #fff;
        background: url(<?php echo YITH_YWPI_ASSETS_IMAGES_URL?>upgrade.png) #971d00 no-repeat 13px 13px;
        border-color: #971d00;
        box-shadow: none;
        outline: none;
    }
    .premium-cta a.button:focus{
        top: 1px;
    }
    .premium-cta a.button span{
        line-height: 13px;
    }
    .premium-cta a.button .highlight{
        display: block;
        font-size: 20px;
        font-weight: 700;
        line-height: 20px;
    }
    .premium-cta .highlight{
        text-transform: uppercase;
        background: none;
        font-weight: 800;
        color: #fff;
    }

    @media (max-width: 767px){
        .section{
            margin-left: 0;
            margin-right: 0;
        }
        .premium-cta a.button{
            float: none;
        }
        .premium-cta{
            text-align: center;
        }
        .premium-cta p{
            width: 100%;
        }
    }

    @media (max-width: 480px){
        .wrap{
            margin-right: 0;
        }
        .section{
            margin: 0;
        }
        .landing-container .col-1,
        .landing-container .col-2{
            width: 100%;
            padding: 0 15px;
        }
        .section-odd .col-1 {
            float: left;
            margin-right: -100%;
        }
        .section-odd .col-2 {
            float: right;
            margin-top: 65%;
        }
    }

    @media (max-width: 320px){
        .premium-cta a.button{
            padding: 9px 20px 9px 70px;
        }

        .section .section-title img{
            display: none;
        }
    }
</style>
<div class="landing">
    <div class="section section-cta section-odd">
        <div class="landing-container">
            <div class="premium-cta">
                <p>
                    Upgrade to the <span class="highlight">premium version</span>
                    of <span class="highlight">YITH WooCommerce Pdf Invoice and Shipping List</span> to benefit from all features!
                </p>
                <a href="<?php echo YITH_YWPI_Plugin_FW_Loader::get_instance()->get_premium_landing_uri(); ?>" target="_blank" class="premium-cta-button button btn">
                    <span class="highlight">UPGRADE</span>
                    <span>to the premium version</span>
                </a>
            </div>
        </div>
    </div>
    <div class="section section-even clear" style="background: url(<?php echo YITH_YWPI_ASSETS_IMAGES_URL ?>01-bg.png) no-repeat #fff; background-position: 85% 75%">
        <h1>Premium Features</h1>
        <div class="landing-container">
            <div class="col-1">
                <img src="<?php echo YITH_YWPI_ASSETS_IMAGES_URL ?>01.png" alt="Review Title" />
            </div>
            <div class="col-2">
                <div class="section-title">
                    <img src="<?php echo YITH_YWPI_ASSETS_IMAGES_URL ?>01-icon.png" alt="Review Title"/>
                    <h2>PRO FORMA INVOICE</h2>
                </div>
                <p>While waiting for the invoice of the order, users can ask a pro forma invoice for their order and download immediately a summarizing document of their payment. One click and the requested PDF file will be at their disposal.</p>
            </div>
        </div>
    </div>
    <div class="section section-odd clear" style="background: url(<?php echo YITH_YWPI_ASSETS_IMAGES_URL ?>02-bg.png) no-repeat #f1f1f1; background-position: 15% 100%">
        <div class="landing-container">
            <div class="col-2">
                <div class="section-title">
                    <img src="<?php echo YITH_YWPI_ASSETS_IMAGES_URL ?>02-icon.png" alt="Attachment List" />
                    <h2>FILE NAME</h2>
                </div>
                <p>Every name of the created PDF files will be composed following the settings of the plugin option panel. For every kind of document (Pro Forma Invoice, Invoice, or Shipping), you can create names with a different structure.</p>
            </div>
            <div class="col-1">
                <img src="<?php echo YITH_YWPI_ASSETS_IMAGES_URL ?>02.png" alt="Attachment List" />
            </div>
        </div>
    </div>
    <div class="section section-even clear" style="background: url(<?php echo YITH_YWPI_ASSETS_IMAGES_URL ?>03-bg.png) no-repeat #fff; background-position: 85% 100%">
        <div class="landing-container">
            <div class="col-1">
                <img src="<?php echo YITH_YWPI_ASSETS_IMAGES_URL ?>03.png" alt="Vote the review" />
            </div>
            <div class="col-2">
                <div class="section-title">
                    <img src="<?php echo YITH_YWPI_ASSETS_IMAGES_URL ?>03-icon.png" alt="Vote the review" />
                    <h2>SAVE PATH</h2>
                </div>
                <p>If your business is booming, you will create many invoices, and so there will be many downloads. Choose the file path and decide to sort out the folders by year, month or day in which you save the file.</p>
            </div>
        </div>
    </div>
    <div class="section section-odd clear" style="background: url(<?php echo YITH_YWPI_ASSETS_IMAGES_URL ?>04-bg.png) no-repeat #f1f1f1; background-position: 15% 100%">
        <div class="landing-container">
            <div class="col-2">
                <div class="section-title">
                    <img src="<?php echo YITH_YWPI_ASSETS_IMAGES_URL ?>04-icon.png" alt="Attachment List" />
                    <h2>AUTOMATIC BACKUP ON DROBOX</h2>
                </div>
                <p>The saving of the created documents can be synchronized with your Dropbox account; in this way, you will have a backup copy of your details every time you make a new save.</p>
            </div>
            <div class="col-1">
                <img src="<?php echo YITH_YWPI_ASSETS_IMAGES_URL ?>04.png" alt="Attachment List" />
            </div>
        </div>
    </div>
    <div class="section section-even clear" style="background: url(<?php echo YITH_YWPI_ASSETS_IMAGES_URL ?>05-bg.png) no-repeat #fff; background-position: 85% 100%">
        <div class="landing-container">
            <div class="col-1">
                <img src="<?php echo YITH_YWPI_ASSETS_IMAGES_URL ?>05.png" alt="Vote the review" />
            </div>
            <div class="col-2">
                <div class="section-title">
                    <img src="<?php echo YITH_YWPI_ASSETS_IMAGES_URL ?>05-icon.png" alt="Vote the review" />
                    <h2>NOTES AND FOOTER IN THE DOCUMENT</h2>
                </div>
                <p>In addition to the name of the company and the order details, you can write a different text (even for every type of PDF file created) to both add freely a note into the document, and a footer.</p>
            </div>
        </div>
    </div>
    <div class="section section-odd clear" style="background: url(<?php echo YITH_YWPI_ASSETS_IMAGES_URL ?>06-bg.png) no-repeat #f1f1f1; background-position: 15% 100%">
        <div class="landing-container">
            <div class="col-2">
                <div class="section-title">
                    <img src="<?php echo YITH_YWPI_ASSETS_IMAGES_URL ?>06-icon.png" alt="Attachment List" />
                    <h2>SSN AND VAT</h2>
                </div>
                <p>Once activated, these two options will add two new input fields for the users during the checkout step. These elements can also be showed into the PDF document.</p>
            </div>
            <div class="col-1">
                <img src="<?php echo YITH_YWPI_ASSETS_IMAGES_URL ?>06.png" alt="Attachment List" />
            </div>
        </div>
    </div>
    <div class="section section-even clear" style="background: url(<?php echo YITH_YWPI_ASSETS_IMAGES_URL ?>07-bg.png) no-repeat #fff; background-position: 85% 100%">
        <div class="landing-container">
            <div class="col-1">
                <img src="<?php echo YITH_YWPI_ASSETS_IMAGES_URL ?>07.png" alt="Vote the review" />
            </div>
            <div class="col-2">
                <div class="section-title">
                    <img src="<?php echo YITH_YWPI_ASSETS_IMAGES_URL ?>07-icon.png" alt="Vote the review" />
                    <h2>DIFFERENT TEMPLATES FOR EVERY DOCUMENT TYPE</h2>
                </div>
                <p>For every document created, you can set which kind of information it should contain: the name of your business and its information, notes and footer, and even all the order details with the products and the related prices.</p>
            </div>
        </div>
    </div>


    <div class="section section-cta section-odd">
        <div class="landing-container">
            <div class="premium-cta">
                <p>
                    Upgrade to the <span class="highlight">premium version</span>
                    of <span class="highlight">YITH WooCommerce Pdf Invoice and Shipping List</span> to benefit from all features!
                </p>
                <a href="<?php echo YITH_YWPI_Plugin_FW_Loader::get_instance()->get_premium_landing_uri(); ?>" target="_blank" class="premium-cta-button button btn">
                    <span class="highlight">UPGRADE</span>
                    <span>to the premium version</span>
                </a>
            </div>
        </div>
    </div>
</div>