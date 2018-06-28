<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
    
    <footer class="blog-footer">
      <p>&copy;&nbsp;Copyright&nbsp;<?php echo date('Y'); ?>&nbsp;<a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>
        <?php if($this->options->beianNumber) : echo ' | '; ?>
          <a href="http://www.miibeian.gov.cn" rel="nofollow"><?php echo $this->options->beianNumber(); ?></a>
        <?php endif; ?>
      </p>
      <p>Theme <a style="cursor:default;" href="https://www.metheno.net/">Kibou Lite</a> made with ♥</p>
    </footer>
    
    <!-- Load Theme Dedicated JS -->
    <script src="https://cdn.bootcss.com/highlight.js/9.12.0/highlight.min.js"></script>
    <script src="https://cdn.bootcss.com/highlight.js/9.12.0/languages/r.min.js"></script>
    <script src="https://cdn.bootcss.com/highlight.js/9.12.0/languages/scss.min.js"></script>
    <script src="<?php $this->options->themeUrl('js/loadup.js'); ?>"></script>
    
    <?php if ($this->options->analyticsGoogle): ?>
    <script>
      <?php $this->options->analyticsGoogle(); ?>
    </script>
    <?php endif; ?>

    <?php if ($this->options->enableMathJax == 1): ?>
    <script src="//cdn.bootcss.com/mathjax/2.7.2/latest.js?config=TeX-AMS-MML_HTMLorMML"></script>
    <script type="text/x-mathjax-config">
      MathJax.Hub.Config({
        extensions: ["tex2jax.js"],
        jax: ["input/TeX", "output/HTML-CSS"],
        tex2jax: {
          inlineMath: [ ['$','$'], ["\\(","\\)"] ],
          displayMath: [ ['$$','$$'], ["\\[","\\]"] ],
          processEscapes: true
        },
        "HTML-CSS": { availableFonts: ["TeX"] }
      });
    </script>
    <?php endif; ?>

    <?php $this->footer(); ?>

  </body>
</html>