    <!-- Section: Popular posts -->    
    <section class="section widget-content wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">

      <!-- Heading -->
      <nav class="navbar navbar-dark sidebar-heading">
        <div class="flex-center">
          <p class="white-text">Popular posts</p>
        </div>
      </nav>
      <!--/ Heading --> 
<?php foreach($populararticles as $article):  
$filename = $article->primaryimage['filename'];
if($article->images){
	foreach($article->images as $image){
		if(!isset($image['primary'])){
			$filename = $image['filename'];
		}
	}
}
?>

      <div class="single-post">

        <div class="row">
          <div class="col-md-4 col-xs-4">

            <!-- Image -->
            <div class="view overlay hm-white-slight">
              <img src="<?=base_url(($filename)? '/uploads/images/small/'.$filename : '/uploads/images/default.jpg');?>" class="img-fluid" alt="<?=$article->primaryimage['alt']?>">
              <a>
                <div class="mask waves-light waves-effect waves-light"></div>
              </a>
            </div>
          </div>

          <!-- Excerpt -->
          <div class="col-md-8">
            <h6><a href="<?=base_url('/blog/'.$article->slug);?>"><?=$article->name;?></a></h6>
            <div class="post-data">
              <!-- <p><i class="fa fa-clock-o"></i> <?=date('d/m/Y', strtotime($article->date)); ?></p> -->
            </div>
          </div>
          <!--/ Excerpt -->
        </div>
        <!--/ First row -->
      </div>
<?php endforeach; ?>
     

    </section> 
   <?php /*?> <!--/ Section: Popular posts -->
    <section class="section widget-content wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;margin-top:4rem">

      <!-- Nav tabs -->
      <ul class="nav nav-tabs tabs-3 widget-tabs" role="tablist">
        <li class="nav-item waves-effect waves-light">
          <a class="nav-link active" data-toggle="tab" href="#panel1" role="tab">RECOMMEND</a>
        </li>
        <li class="nav-item waves-effect waves-light">
          <a class="nav-link" data-toggle="tab" href="#panel2" role="tab">RECENT</a>
        </li>
        <li class="nav-item waves-effect waves-light">
          <a class="nav-link" data-toggle="tab" href="#panel3" role="tab">TOP REVIEWS</a>
        </li>
      </ul>

      <!-- Tab panels -->
      <div class="tab-content widget-tabs-content">

        <!-- Panel 1 -->
        <div class="tab-pane fade in active" id="panel1" role="tabpanel">
<?php foreach($recommended as $article): 
$filename = $article->primaryimage['filename'];
if($article->images){
	foreach($article->images as $image){
		if(!isset($image['primary'])){
			$filename = $image['filename'];
		}
	}
}
?>
          <div class="single-post">
            <!-- First row -->
            <div class="row">
              <!-- Image -->
              <div class="col-md-4">
                <div class="view overlay hm-white-slight">
                  <img src="<?=base_url(($filename)? '/uploads/images/small/'.$filename : '/uploads/images/default.jpg');?>" class="img-fluid" alt="">
                  <a>
                    <div class="mask waves-light waves-effect waves-light"></div>
                  </a>
                </div>
              </div>
              <!--/ Image -->

              <!-- Excerpt -->
              <div class="col-md-8">
                <div class="post-data">
                  <p><i class="fa fa-clock-o"></i> <?=date('d/m/Y', strtotime($article->date)); ?></p>
                  <a class="hide"><i class="fa fa-comments-o"></i> 145</a>
                </div>

                <h6><a href="<?=base_url('/blog/'.$article->slug);?>"><?=$article->name;?></a></h6>
              </div>
              <!--/ Excerpt -->
            </div>
            <!--/ First row -->
          </div>
<?php endforeach; ?>
       

        </div>
        <!--/ Panel 1 -->

        <!-- Panel 2 -->
        <div class="tab-pane fade" id="panel2" role="tabpanel">
<?php foreach($recents as $article): 
$filename = $article->primaryimage['filename'];
if($article->images){
	foreach($article->images as $image){
		if(!isset($image['primary'])){
			$filename = $image['filename'];
		}
	}
}
?>
          <div class="single-post">
            <!-- First row -->
            <div class="row">
              <!-- Image -->
              <div class="col-md-4">
                <div class="view overlay hm-white-slight">
                  <img src="<?=base_url(($filename)? '/uploads/images/small/'.$filename : '/uploads/images/default.jpg');?>" class="img-fluid" alt="">
                  <a>
                    <div class="mask waves-light waves-effect waves-light"></div>
                  </a>
                </div>
              </div>
              <!--/ Image -->

              <!-- Excerpt -->
              <div class="col-md-8">
                <div class="post-data">
                  <p><i class="fa fa-clock-o"></i> <?=date('d/m/Y', strtotime($article->date)); ?></p>
                  <a class="hide"><i class="fa fa-comments-o"></i> 63</a>
                </div>

                <h6><a href="<?=base_url('/blog/'.$article->slug);?>"><?=$article->name;?></a></h6>
              </div>
              <!--/ Excerpt -->
            </div>
            <!--/ First row -->
          </div>
<?php endforeach; ?>
        </div>
        <!--/ Panel 2 -->

        <!-- Panel 3 -->
        <div class="tab-pane fade" id="panel3" role="tabpanel">
<?php foreach($top_reviews as $article): 
$filename = $article->primaryimage['filename'];
if($article->images){
	foreach($article->images as $image){
		if(!isset($image['primary'])){
			$filename = $image['filename'];
		}
	}
}
?>
          <div class="single-post">
            <!-- First row -->
            <div class="row">
              <!-- Image -->
              <div class="col-md-4">
                <div class="view overlay hm-white-slight">
                  <img src="<?=base_url(($filename)? '/uploads/images/small/'.$filename : '/uploads/images/default.jpg');?>" class="img-fluid" alt="">
                  <a>
                    <div class="mask waves-light waves-effect waves-light"></div>
                  </a>
                </div>
              </div>
              <!--/ Image -->

              <!-- Excerpt -->
              <div class="col-md-8">
                <div class="post-data">
                  <p><i class="fa fa-clock-o"></i> <?=date('d/m/Y', strtotime($article->date)); ?></p>
                  <a class="hide"><i class="fa fa-comments-o"></i> 176</a>
                </div>

                <h6><a href="<?=base_url('/blog/'.$article->slug);?>"><?=$article->name;?></a></h6>
              </div>
              <!--/ Excerpt -->
            </div>
            <!--/ First row -->
          </div>
<?php endforeach; ?>

        </div>
        <!--/ Panel 3 -->

      </div>
      <!--/ Tab panels -->
    
    </section><?php */?>
     
    <div class="divider-new wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
      <h3>Newsletter</h3>
    </div>
    <section class="wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">

      <!--First row-->
      <div class="row">
        <!--First column-->
        <div class="col-md-12">

          <!--Form without header-->
          <div class="card">
            <div class="card-block">

              <!--Header-->
              <div class="text-center">
                <h3><i class="fa fa-pencil"></i> Subscribe:</h3>
                <hr class="mt-2 mb-2">
              </div>

              <!--Body-->
              <p>We'll write rarely, but only the best content.</p>
              <br>
			<form method="post" action="#" id="subscribe">
              <!--Body-->
              <div class="md-form">
                <i class="fa fa-user prefix"></i>
               <?php echo form_input(array('id' => 'name','type' => 'text', 'name' => 'name', 'class' => 'form-control')); ?>
                <label for="name">Your name</label>
              </div>

              <div class="md-form">
                <i class="fa fa-envelope prefix"></i>
                 <?php echo form_input(array('id' => 'email','type' => 'email', 'name' => 'email', 'class' => 'form-control', 'required' => 'required')); ?>
                <label for="email">Your email</label>
              </div>
<div class="col=md-12" align="center" id="subscribereturn"></div>
              <div class="text-center">
                <button class="btn btn-rounded btn-default waves-effect waves-light">Submit</button>
              </div>

            </div>
          </div>
          <!--/Form without header-->
        </form>
        </div>
        <!--/First column-->
      </div>
      <!--/First row-->
<script>


     $('form#subscribe').submit(function(e) {
        var form = $(this);
        e.preventDefault();
        $('#subscribereturn').html('<div align="center"><span class="fa fa-spin fa-circle-o-notch"></span></div>'); 
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('service/subscribe'); ?>",
        data: form.serialize(), // <--- THIS IS THE CHANGE
        success: function(data){
            $('#subscribereturn').html('<span class="font18">'+ data +'</span>');
            $('#subscribe')[0].reset();
        },
        error: function(resp) { alert(JSON.stringify(resp)); }
    });

    });

</script>
    </section>
  