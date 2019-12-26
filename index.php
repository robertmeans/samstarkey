<?php require('_includes/head.php'); ?>
<body>
<div id="top-of-page"></div>
<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

<div id="hero">
	<div id="bob">
		<img src="_images/sam-starkey.jpg">
		<p>Bohemian Catman</p>
		<!-- <p class="small-txt"></p> -->
		<a class="down-arrow" href="#gallery"><i class="fas fa-caret-down"></i></a>
	</div><!-- #bob -->
</div><!-- #hero -->

<div id="gallery">

<p class="click-a-pic"><i class="far fa-eye"></i>&nbsp;&nbsp; click a pic &nbsp;&nbsp;<i class="far fa-eye"></i></p>

<!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

    <!-- Background of PhotoSwipe. 
         It's a separate element as animating opacity is faster than rgba(). -->
    <div class="pswp__bg"></div>

    <!-- Slides wrapper with overflow:hidden. -->
    <div class="pswp__scroll-wrap">

        <!-- Container that holds slides. 
            PhotoSwipe keeps only 3 of them in the DOM to save memory.
            Don't modify these 3 pswp__item elements, data is added later on. -->
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>

        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
        <div class="pswp__ui pswp__ui--hidden">

            <div class="pswp__top-bar">

                <!--  Controls are self-explanatory. Order can be changed. -->

                <div class="pswp__counter"></div>

                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                <button class="pswp__button pswp__button--share" title="Share"></button>

                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
                <!-- element will get class pswp__preloader--active when preloader is running -->
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                      <div class="pswp__preloader__cut">
                        <div class="pswp__preloader__donut"></div>
                      </div>
                    </div>
                </div>
            </div>

            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div> 
            </div>

            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
            </button>

            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>

            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>

        </div>

    </div>

</div>


<div class="sams-gallery grid" data-masonry='{ "itemSelector": ".grid-item", "columnWidth": 310 }' itemscope itemtype="http://schema.org/ImageGallery">

    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
        <a class="grid-item" href="_images/sam-starkey-001_lg.jpg" itemprop="contentUrl" data-size="1920x1882">
            <img class="thumbnail-image" src="_images/sam-starkey-001_sm.jpg" itemprop="thumbnail" alt="Image description" />
        </a>
        <!-- <figcaption itemprop="caption description">Image caption</figcaption> -->
    </figure>

    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
        <a class="grid-item" href="_images/sam-starkey-002_lg.jpg" itemprop="contentUrl" data-size="1920x1079">
            <img class="thumbnail-image" src="_images/sam-starkey-002_sm.jpg" itemprop="thumbnail" alt="Image description" />
        </a>
        <!-- <figcaption itemprop="caption description">Image caption</figcaption> -->
    </figure>

    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
        <a class="grid-item" href="_images/sam-starkey-003_lg.jpg" itemprop="contentUrl" data-size="926x923">
            <img class="thumbnail-image" src="_images/sam-starkey-003_sm.jpg" itemprop="thumbnail" alt="Image description" />
        </a>
        <!-- <figcaption itemprop="caption description">Image caption</figcaption> -->
    </figure>

    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
        <a class="grid-item" href="_images/sam-starkey-004_lg.jpg" itemprop="contentUrl" data-size="905x625">
            <img class="thumbnail-image" src="_images/sam-starkey-004_sm.jpg" itemprop="thumbnail" alt="Image description" />
        </a>
        <!-- <figcaption itemprop="caption description">Image caption</figcaption> -->
    </figure>

    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
        <a class="grid-item" href="_images/sam-starkey-005_lg.jpg" itemprop="contentUrl" data-size="1920x1948">
            <img class="thumbnail-image" src="_images/sam-starkey-005_sm.jpg" itemprop="thumbnail" alt="Image description" />
        </a>
        <!-- <figcaption itemprop="caption description">Image caption</figcaption> -->
    </figure>

    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
        <a class="grid-item" href="_images/sam-starkey-006_lg.jpg" itemprop="contentUrl" data-size="960x888">
            <img class="thumbnail-image" src="_images/sam-starkey-006_sm.jpg" itemprop="thumbnail" alt="Image description" />
        </a>
        <!-- <figcaption itemprop="caption description">Image caption</figcaption> -->
    </figure>


</div><!-- .sams-gallery -->

</div><!-- #gallery -->
<footer>
	<p class="footer-txt">&copy;2019 Sam Starkey | Witch Doctor, Wet Nurse</p>
</footer>

<script src="js/masonry.pkgd.min.js?<?php echo time(); ?>"></script>
<script src="js/scripts.js?<?php echo time(); ?>"></script>
<script src="http://localhost:35729/livereload.js"></script>	
</body>
</html>