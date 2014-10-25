			<?php  
			if(!empty($data))
			{
				if(!empty($data['cats']))
				{
					foreach($data['cats'] as $catRow):
						if($this->model->countChild($catRow->cat_id))
						{
							?>
							<header class="row">
								<div class="col-md-12">
									<a class="title" href="#"><?php echo $catRow->cat_name ?></a>
								</div>
							</header>
							<?php
						} 
						if(!empty($data['topics']))
						{
							foreach($data['topics'] as $tpRow):
								if($tpRow->tp_cat === $catRow->cat_id)
								{
									?>
									<section class="row forum"><h4 class="hidden">#</h4>
										<div class="col-md-12">
											<a class="title" href="sub-forum.html"><?php echo $tpRow->tp_title ?></a>
											<p>
												<?php echo $tpRow->tp_desc ?>
											</p>

											<div class="details">
												<table class="table">
													<tbody>
														<tr>
															<th>TOPICS</th>
															<th></th>
														</tr>
														<tr>
															<td>140,734</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<paper-shadow z="1"></paper-shadow>
									</section>
									<?php 
								}
								endforeach;
							}
							endforeach;
						}
					}
					?>