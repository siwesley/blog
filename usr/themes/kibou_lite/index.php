<?php
/**
 * Kibou Lite: 轻的主题。
 *
 * @package Kibou Lite
 * @author metheno
 * @version 1.0.1.2
 * @link https://www.metheno.net
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php'); ?>

  <?php while($this->next()): ?>
  <article id="archives" class="archive" itemscope="" itemtype="http://schema.org/BlogPosting">
    <h1 class="blog-post-title" itemprop="name headline"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
    <p class="blog-post-meta">
      <?php $this->category(', '); ?>&nbsp;•
      <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->dateword(); ?></time>
    </p>
    <?php $this->content('阅读'); ?>
  </article><!-- /.blog-post -->
  <?php endwhile; ?>
</div><!-- /.blog-container -->

  <?php $this->pageNav('&laquo;', '&raquo;', 1, '…', array('wrapTag' => 'ul', 'wrapClass' => 'pagination', 'itemTag' => 'li', 'textTag' => 'span', 'currentClass' => 'active', 'prevClass' => 'prev', 'nextClass' => 'next')); ?>

<?php $this->need('footer.php'); ?>
