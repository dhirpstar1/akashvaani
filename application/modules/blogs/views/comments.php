 <div class="section-heading">
   <h1>Comments <span class="badge blue"><?=$comments_count?></span></h1>
 </div>

<?php foreach($comments as $comment): ?>
<!--First row-->

<div class="row">
  <!--Image column-->
  <div class="col-sm-2 col-12"> <img src="<?=base_url(($comment->image)? 'assets/profies/thumbnail/'.$comment->image : 'assets/profies/thumbnail/avatar.jpg');?>"> </div>
  <!--/.Image column-->
  <!--Content column-->
  <div class="col-sm-10 col-12"> <a>
    <h3 class="user-name"><?=$comment->firstname.' '.$comment->lastname?></h3>
    </a>
    <div class="card-data">
      <ul>
        <li class="comment-date"><i class="fa fa-clock-o"></i> <?=date('d/m/Y', strtotime($comment->comment_date));?></li>
      </ul>
    </div>
    <p class="comment-text"><?=$comment->comment;?></p>
  </div>
  <!--/.Content column-->
</div>
<!--/.First row-->
<?php endforeach; ?>