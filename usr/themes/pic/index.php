<?php
/**
 * pic - 从原来的MASSIVE修改过来的
 * 
 * @package pic
 * @author 国服第一盖伦
 * @version 1.0
 * @link https://p.liangxingjian.com
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');?>


		
        <!--body content start-->
        <section class="body-content">
            <div class="container">
                <div class="row ">
                    <div class="portfolio portfolio-with-title portfolio-masonry blog-m col-4 gutter ">
                        <?php if($this->have()):?>
						<?php while($this->next()): ?>
						<div class="portfolio-item ">
                            <div class="thumb">
                                <img src="<?php echo showThumb($this,true); ?>" alt="">
                                <div class="portfolio-hover">
                                    <div class="action-btn">
                                        <a href="<?php $this->permalink(); ?>"> 
<!--<i class="fa fa-send"></i> -->
<?php $this->title(); ?>

                                        </a>
                                    </div>
                                </div>
                            </div>

<!--
                            <div class="portfolio-title">
                                <h4><a href="<?php $this->permalink(); ?>"><?php $this->title(); ?></a></h4>
                                <div class="date"><?php $this->author(); ?> , <?php $this->date('Y/m/d'); ?></div>
                                <p><?php $this->excerpt(60, '...'); ?></p>
                                <div class="m-top-20 m-bot-20"><a href="<?php $this->permalink(); ?>" class="btn btn-extra-small btn-dark-border btn-transparent"> Read More</a>
                                </div>
                            </div>
-->

                        </div>
						<?php endwhile; ?>
						<?php endif; ?>

                    </div>

                </div>
            </div>

			<div class="col-md-12">
                <!--pagination-->
                <div class="text-center">
					<?php $this->pageNav('Prev', 'Next', 1, '<a>...</a>', array('wrapTag' => 'ul', 'wrapClass' => 'pagination custom-pagination', 'itemTag' => 'li', 'textTag' => '', 'currentClass' => 'active', 'prevClass' => 'prev', 'nextClass' => 'next')); ?>
                </div>
                <!--pagination-->
            </div>
        </section>
        <!--body content end-->

<?php $this->need('footer.php'); ?>