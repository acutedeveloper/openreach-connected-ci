
<?php if(isset($page)): ?>
				<article>
					<h1><?php echo $page->title; ?></h1>

					<?php if(isset($page->filename)): ?><img class="headerimg" src="<?php echo base_url('media').'/'.$page->filename.$page->ext; ?>" alt="" ><?php endif; ?>
					<?php echo $page->content; ?>
					
				</article>
<?php endif;?>
