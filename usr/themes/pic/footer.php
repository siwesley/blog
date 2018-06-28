<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
?>


        <footer id="footer" class="gray text-center footer-1">
            <div class="container">
                <!--
                <p class="footer-logo">
                    <img class="retina" src="<?php $this->options->themeUrl('img/logo.png'); ?>" alt="" />
                </p> 
                -->
                <div class="sub-title" id="hitokoto"><p></p></div>
                <script>
                fetch('https://sslapi.hitokoto.cn/?encode=json')
                    .then(function(_){
                        return _.text();
                    }).then(function(_){
                        var hitokoto = JSON.parse(_).from + '：' + JSON.parse(_).hitokoto;
                        $('#hitokoto > p').text(hitokoto);
                    })
                </script>
                <div class="sub-title"><?php $this->options->description() ?></div>
                <div class="copyright">
                    &copy; <?php echo date("Y"); ?> 晋ICP备17006387号
                </div>
                <div class="copyright-sub-title text-uppercase">
                    <span>Powered by <a href="http://www.typecho.org/" rel="nofollow" target="_blank">Typecho</a> | Theme by <a href="https://zhangxiaoyao.cn/" target="_blank">Zxy</a> </span>
                </div>
            </div>
        </footer>





    </div>


	<!-- inject:js -->
	<script src="//cdn.bootcss.com/jquery/2.2.3/jquery.min.js"></script>
	<script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="//cdn.bootcss.com/validator/7.2.0/validator.min.js"></script>
	<script src="//cdn.bootcss.com/jquery-countto/1.2.0/jquery.countTo.min.js"></script>
	<script src="//cdn.bootcss.com/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
	<script src="//cdn.bootcss.com/flexslider/2.6.3/jquery.flexslider-min.js"></script>
	<script src="//cdn.bootcss.com/jquery.isotope/3.0.4/isotope.pkgd.min.js"></script>
	<script src="//cdn.bootcss.com/jquery.sticky/1.0.4/jquery.sticky.min.js"></script>
	<script src="<?php $this->options->themeUrl('js/imagesloaded.js'); ?>"></script>
	<script src="<?php $this->options->themeUrl('js/menuzord.js'); ?>"></script>
	<script src="<?php $this->options->themeUrl('js/smooth.js'); ?>"></script>
	<script src="<?php $this->options->themeUrl('js/scripts.js'); ?>"></script>
	<!-- endinject -->
</body>

</html>
