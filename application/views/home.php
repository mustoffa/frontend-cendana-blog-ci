<!-- CONTENT -->
<div class="content-body">
	<div class="container">
		<div class="row">
			<main class="col-md-8">

				<!-- ARTICLE -->
				<article class="post post-1">
					<?php
						foreach($post as $key => $value){
					?>
					<header class="entry-header">
						<h1 class="entry-title">
							<a href="viewpost.php?id=<?php echo $value->id_post; ?>">
								<?php echo $value->post_title; ?>
							</a>
						</h1>
						<div class="entry-meta">
							<!-- <span class="post-category"><a href="#">Web Design</a></span> -->
							<span class="post-date">
								<a href="#"><time class="entry-date">
								<?php echo date('jS M Y H:i:s', strtotime($value->post_date)); ?></time></a>
							</span>
							<!-- <span class="post-author"><a href="#">Albert Einstein</a></span> -->
							<!-- <span class="comments-link"><a href="#">4 Comments</a></span> -->
						</div>
					</header>
					<div class="entry-content clearfix">
						<p><?php echo $value->post_descrip; ?></p>
						<div class="read-more cl-effect-14">
							<a href="<?=base_url('home/showID/'.$value->id_post)?>" class="more-link">
								Continue reading 
								<span class="meta-nav"></span>
							</a>
						</div>
					</div>
					<hr>
					<?php } ?>
				</article>
			</main>