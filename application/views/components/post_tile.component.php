<?php
	function createPostTile($post) {

			echo '
				<div class="card mb-3" >
						<div class="row g-0 pl-4 pt-4 pt-md-0">
							<div class="col-md-4 d-flex justify-content-center align-items-center p-3">
								<img style="max-height: 250px" src="https://camo.githubusercontent.com/9f29e3d7fc79b01485632a99af0fd6a0f65d921adc720d0d30cdce9475caa9ca/68747470733a2f2f6769746875622e7375726d6f6e2e6d652f696d616765732f636f6d6d6f6e2f7377697065722d6c6f676f2e737667" alt="Swiper.js logo">
							</div>
							<div class="col-md-8">
								<div class="card-body">
									<h3 class="card-title"> '.$post['title'].'</h3>
									<small class="post-date">📅 '.$post['created_at'].'</small>
									<p class="card-text">'.$post['body'].'</p>
									<a class="btn btn-primary" href='.site_url().'posts/'.$post['slug'].'>Więcej</a>
								</div>
							</div>
						</div>
				</div>
			';
	}
?>
