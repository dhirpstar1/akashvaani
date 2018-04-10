
<link href="<?php echo base_url('/assets'); ?>/landing/css/blog.css" rel="stylesheet">
<div style="height:100px;"></div>

<div class="container">
<div class="row">
 <div class="col-md-8">
 <div class="view overlay hm-white-light z-depth-2 wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                           <img src="<?=base_url(($blog->primaryimage['filename'])? '/uploads/images/full/'.$blog->primaryimage['filename'] : '/uploads/images/default_blog_view.jpg');?>" class="img-fluid">
                            <a>
                                <div class="mask waves-light waves-effect waves-light"></div>
                            </a>
                        </div>
   <div class="article-text wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                            <!-- Post data -->
                            <h1 class="h1-responsive text-center"><?php echo $blog->name;?></h1>

                            <h5 class="text-center text-muted">By<a href="" class="black-text"><strong> <?=$blog_customer['firstname'].' '.$blog_customer['lastname']?></strong></a> on <?=date('d/m/Y',strtotime($blog->date));?> in <a href="" class="black-text"><strong><?php echo $blog->catgeory_name;?></strong></a></h5>

                          <p>
                         <?=$blog->description;?> 
                            </p>
                        </div>
                        <div class="text-center article-footer wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                                       
                            <h3 class="h3-responsive">Do you want to share?</h3>
                            <!--Facebook-->
                            <a href="https://www.facebook.com/mdbootstrap" target="_blank" class="btn-floating btn-small btn-fb waves-effect waves-light"><i class="fa fa-facebook"> </i></a>
                            <!--Google +-->
                            <a href="https://plus.google.com/u/0/+Mdbootstrap" target="_blank" class="btn-floating btn-small btn-gplus waves-effect waves-light"><i class="fa fa-google-plus"> </i></a>
                            <!--Twitter-->
                            <a href="https://twitter.com/MDBootstrap" target="_blank" class="btn-floating btn-small btn-tw waves-effect waves-light"><i class="fa fa-twitter"> </i></a>
                           

                        </div>
                        <section class="related-posts wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                        
                        <!-- Title -->
                        <h3 class="text-center">RELATED POSTS</h3>
                        
                        <!-- First row -->
                        <div class="row">
                         <?php foreach($related as $article): ?>
                           <!-- Third column -->
                            <div class="col-md-4">

                                <!-- Card -->
                                <div class="card">

                                    <!-- Card image -->
                                    <div class="view hm-white-slight">
                                        <img class="img-fluid" src="<?=base_url(($article->primaryimage['filename'])? '/uploads/images/medium/'.$article->primaryimage['filename'] : '/uploads/images/default.jpg');?>" alt="<?=$article->primaryimage['alt']?>">
                                        <a href="#!">
                                            <div class="mask waves-light waves-effect waves-light"></div>
                                        </a>
                                    </div>

                                    <!-- Card content -->
                                    <div class="card-block">
                                        <!-- Title -->
                                        <a class="card-text" href="<?=base_url('/blog/'.$article->slug);?>"><?=$article->name;?></a>

                                    </div>

                                    <!-- Card footer -->
                                    <div class="card-data">
                                        <ul>
                                            <li><p> <?=date('d/m/Y', strtotime($article->date)); ?></p></li>
                                            <li></li>
                                        </ul>
                                    </div>   

                                </div>
                                <!--/ Card -->

                            </div>
                            <!--/ Third column -->
                            <?php endforeach; ?>
                        </div>
                        <!--/ First row -->
                        
                    </section>
                    <hr class="between-sections wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                    <section class="wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">

                        <!--Main wrapper-->
                        <div class="comments-list" id="comments">
 							<div class="section-heading">
                                <h1>Comments <span class="badge blue">...</span></h1>
                            </div>
                        </div>
                        <!--/.Main wrapper-->

                    </section>
                    
                    <?php if(CI::Login()->isLoggedIn(false, false)):?>
                    <hr class="between-sections wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                    <section class="wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
					<?=form_open('insertcomment', array('id' => 'comment_form'), array('blog_id' => $blog->id, 'customer_id' => $customer['id']));?>
                        <!--Leave a reply form-->
                        <div class="reply-form">
                            <h1 class="section-heading">Leave a reply </h1>
                            <p class="text-center">(Logged In User)</p>

                            <!--Third row-->
                            <div class="row">
                                <!--Image column-->
                                <div class="col-sm-2 col-12">
                                    <img src="<?php echo base_url('/assets/profies/thumbnail/'.(($customer['image']) ? $customer['image']:'avatar.jpg')); ?>">
                                </div>
                                <!--/.Image column-->

                                <!--Content column-->
                                <div class="col-sm-10 col-12">
                                    <div class="md-form">
                                        <textarea type="text" name="comment" id="form8" class="md-textarea" required></textarea>
                                        <label for="form8">Your message</label>
                                    </div>

                                </div>

                                <div class="text-center">
                                    <button class="btn btn-mdb waves-effect waves-light">Submit</button>
                                </div>
                                <!--/.Content column-->

                            </div>
                            <!--/.Third row-->
                        </div>
                        <!--/.Leave a reply form-->
					<?=form_close();?>
                   
                    <script type="application/javascript">
					getComments();
					function getComments(){
					$('#comments').load("<?=base_url('/getcomments/'.$blog->id);?>", function(data){});	}
					$('form#comment_form').submit(function(e) {
					var form = $(this);
					e.preventDefault();
					$.ajax({
						type: "POST",
						url: form.attr('action'),
						data: form.serialize(), // <--- THIS IS THE CHANGE
						dataType: "html",
						success: function(data){
							getComments();
							$('#comment_form')[0].reset();
						},
						error: function() { alert("Error posting feed."); }
				   });
				
				});
				</script>
                    </section>
                    <?php else: ?>                   
                    
                    <hr class="between-sections wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                    <section class="wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                        <!--Leave a reply form-->
                        <div class="reply-form">
                            <h1 class="section-heading">Leave a reply </h1>
                            <p class="text-center">(Not Logged In User)</p>
                            <h4>Sign up with: <span>
                                <!--Facebook-->
                            <a type="button" class="btn-floating btn-small btn-fb waves-effect waves-light"><i class="fa fa-facebook"></i></a>
                            <!--Twitter-->
                            <a type="button" class="btn-floating btn-small btn-tw waves-effect waves-light"><i class="fa fa-twitter"></i></a>
                            <!--Google +-->
                            <a type="button" class="btn-floating btn-small btn-gplus waves-effect waves-light"><i class="fa fa-google-plus"></i></a>

                            </span> <br><br>or:</h4>

                            <div class="md-form">
                                <i class="fa fa-user prefix"></i>
                                <input type="text" id="form22" class="form-control">
                                <label for="form22">Your name</label>
                            </div>

                            <div class="md-form">
                                <i class="fa fa-envelope prefix"></i>
                                <input type="text" id="form32" class="form-control">
                                <label for="form32">Your email</label>
                            </div>


                            <div class="md-form">
                                <i class="fa fa-pencil prefix"></i>
                                <textarea type="text" id="form18" class="md-textarea"></textarea>
                                <label for="form18">Your message</label>
                            </div>

                            <div class="text-center">
                                <button class="btn btn-mdb waves-effect waves-light">Submit</button>
                            </div>
                        </div>
                        <!--/.Leave a reply form-->

                    </section>
                    <?php endif; ?>
 </div>
  <div class="col-xl-4 col-md-12 widget-column">
<?=$sidebar;?>
  </div>
  <!--  -->
</div>
</div>
<script>
 $(document).click(function(e) {
  if(e.target.id!="mydiv"){  // if click is not in 'mydiv'
    $('#serviceDiv').hide();
}
});
 function openNav() {
  document.getElementById("mySidenav").style.width = "240px";
}
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
$("body").click(function(e){
  if(e.target.className == "fa fa-bars")
  {
   openNav();
 }
});
$("body").click(function(e){
  if(e.offsetX > 240)
  {
   closeNav();
 }
});
$(".carousel-caption").click(function(e){
  closeNav();
});
</script>