<!--Report-->

  <link href="<?php echo base_url('/assets/reports/'); ?>/css/report.css" rel="stylesheet">
<style type="text/css">

.selectpicker{margin-top: 10px; padding: 0;font-size: 14px;}
</style>
<div class="col-md-12">
             <div class="container reportcontent">
        <h2 class="h2-responsive firsthead">The Story of my Life</h2>
                    
<div class="row">
  <div class="col-md-4 col-sm-12">
    
<!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false">
    <!--Slides-->
    <div class="carousel-inner" role="listbox" style="height:350px;">
        <div class="carousel-item active">
    <p style="text-align:center;">Cover page</p>
            <div class="view hm-black-light">
                <img src="<?php echo base_url('/assets/astrology/img/cover-page.png'); ?>" alt="First slide">
            </div>
        </div>
        <div class="carousel-item">
            <!--Mask color-->
    <p style="text-align:center;">What's Inside</p>
            <div class="view hm-black-strong">
                <img src="<?php echo base_url('/assets/astrology/img/2nd-page.png'); ?>" alt="Second slide">
            </div>
        </div>
        <div class="carousel-item">
            <!--Mask color-->
    <p style="text-align:center;">Planetary Positions</p>
            <div class="view hm-black-slight">
                <img src="<?php echo base_url('/assets/astrology/img/planetary-postions.png'); ?>" alt="Third slide">
            </div>
        </div>
         <div class="carousel-item">
            <!--Mask color-->
    <p style="text-align:center;">Numerology Analysis</p>
            <div class="view hm-black-slight">
                <img src="<?php echo base_url('/assets/astrology/img/numerology.png'); ?>" alt="Third slide">
            </div>
        </div>
        
         <div class="carousel-item">
            <!--Mask color-->
    <p style="text-align:center;">Gemstone Suggestions</p>
            <div class="view hm-black-slight">
                <img src="<?php echo base_url('/assets/astrology/img/gemstones.png'); ?>" alt="Third slide">
            </div>
        </div>
        
         <div class="carousel-item">
            <!--Mask color-->
    <p style="text-align:center;">Manglik Analysis & More</p>
            <div class="view hm-black-slight">
                <img src="<?php echo base_url('/assets/astrology/img/manglik-dosha.png'); ?>" alt="Third slide">
            </div>
        </div>
        
        
    </div>
    <div style="text-align: center; padding:10px;">
        <a id="button2" class="btn waves-effect waves-light" data-toggle="modal" data-target="#sample">What's Inside</a>
    </div>

    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
       <i class="fa fa-angle-left" aria-hidden="true"></i>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
        <i class="fa fa-angle-right" aria-hidden="true"></i>
        <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
</div>

<!-- Modal -->
<div id="sample" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Sample Report</h4>
      </div>
      <div class="modal-body">
        <p><img src="<?php echo base_url('/assets/astrology/img/2nd page 595px840px.jpg'); ?>" alt="Sample Report"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!--/.Carousel Wrapper-->
  </div>
  <div class="col-md-1 col-sm-12">
  </div>
  <div class="col-md-7 col-sm-12" style="padding-top: 60px;">
                    <!--Excerpt-->
                    <h2 class="h2-responsive center-on-small-only product-name"><strong>Your lifetime guide</strong></h2>
                    <p>Your horoscope or Kundali gives you an insight into your Personality & life path. The method of Kundali is developed by ancient sages, which has been an important tool since ages and still  very relevant in today's times for making human life better.</p>
                    
                    <p>This birth Report is specially designed to give you analysis based on your Charts.This is a beautiful piece of booklet about you. You can keep as lifetime guide.</p>
                                        
                    
                    <div class="col-md-12" style="padding: 0">
                    <span>Introductory Price</span>  
                    <span class="cancel-price"><strike> Rs.500/-</strike></span> 
                    <span class="currnt-price">Rs.299/-</span> 
                    <span class="pdf">(PDF)</span>  
                    </div>
                  <div class="col-md-12" style="padding:10px 0;">  
                   <div class="col-md-4 col-sm-12" style="padding:0px;"><a id="button1" href="<?=base_url('/report');?>"  class="btn waves-effect waves-light buy_now pull-left">Buy Now</a></div>          
                   <div class="col-md-4 col-sm-12"><a id="button2" href="<?=base_url('/full-reports');?>" class="btn waves-effect waves-light">See Details</a></div>
                   <div class="col-md-4 col-sm-12"><?php echo form_dropdown('select_langiage', unserialize(LANGUAGES) ,'', array('class' => 'form-control pull-left selectpicker', 'id' => 'langauge_select')); ?></div>
				   </div>
				    
                </div>

			</div>
		</div>
	
<script type="text/javascript">
$('.buy_now').click(function(e){
window.location.href = '<?php echo base_url('/report?lg=');?>' + $('#langauge_select :selected').val();
 e.preventDefault();
});
</script>


<!--Report-->
<hr class="firstheadhr">


             <div class="container reportcontent">
        <h2 class="h2-responsive firsthead">Ask Questions. Uncomplicate your life.</h2>
                    
<div class="row">
  <div class="col-md-4 col-sm-12">
 <img src="<?php echo base_url('/assets/img/free-question.png'); ?>" alt="free  question related marriage kundali milan" class="img-fluid" class="img-fluid">

  </div>
  <div class="col-md-1"> </div>
  <div class="col-md-7 col-sm-12" style="padding-top: 30px;">
  
                      <h2 class="h2-responsive center-on-small-only product-name"><strong>Marriage, Career & Health Issues</strong></h2>
	                <!--Excerpt-->
            <p>You can ask any question regarding your Marriage, Career & Health. Questions like 'When will you get marriage' Why delay in marriage' etc.</p>
            <p>You will receive answers in form of voice recording.</p>
    		<h4 style="color:#00CC99;"><strong>100% Privacy. Incredibly Simple. Satisfaction Guaranteed.</strong></h4>	 
            <br />               
                    <div class="col-md-12" style="padding: 0">
                    <span>Introductory Price</span>  
                    <span class="cancel-price"><strike> Rs.299/-</strike></span> 
                    <span class="currnt-price">Rs.199/-</span> 
                    <span class="pdf">(Rs.100 Off)</span>  
                    </div>
                  <div class="col-md-12" style="padding:10px 0;">  
                   <div class="col-md-4 col-sm-12" style="padding:0px;"><a id="button1" href="<?=base_url('/questions');?>"  class="btn waves-effect waves-light buy_now pull-left">Ask Now</a></div>    
                   
                    <div class="col-md-4 col-sm-12" style="padding:0px;"><a id="button2" href="<?=base_url('/consult-online');?>"  class="btn waves-effect waves-light buy_now pull-left">Know More</a></div>          
           
				   </div>
                </div>

			</div>
		</div>

<!--full consultations-->



             <div class="container reportcontent" style="display:none;">
             <hr class="firstheadhr">
        <h2 class="h2-responsive firsthead">Get Full Consultation. Talk to Astrologer.</h2>
                    
<div class="row">
  <div class="col-md-4 col-sm-12">
 <img src="<?php echo base_url('/assets/astrology/img/full-consultation-400px-300px.png'); ?>" alt="free-question" class="free  question related marriage kundali milan">

  </div>
  <div class="col-md-1"> </div>
  <div class="col-md-7 col-sm-12" style="padding-top: 30px;">
  
                      <h2 class="h2-responsive center-on-small-only product-name"><strong>Discuss your life issues( Marriage, career & health) in Detail.</strong></h2>
	                <!--Excerpt-->
<p>Astrology is an important tool whenever you need a guidance for your future. You always want to find someone have deep knowledge of the subject, who can understand your problem and have a genuine intention to help you for your future. We just want to tell you that you are at the right place.
</p>
<p style="color:#333333;"><strong>Highly Qualified, Experienced & Empathetic Professionals. Discuss as many Life issues as you want. No Time Limit. Tried & Tested Remedies.</strong></p>
<h4 style="color:#00CC99;"><strong>100% Privacy. Simple & Safe Payment. Satisfaction Guaranteed.</strong></h4>	 
<p>Conversation via phone. Your preferred time. </p>
         <br />               
                    <div class="col-md-12" style="padding: 0">
                    <span>Introductory Price</span>  
                    <span class="cancel-price"><strike> Rs.1499/-</strike></span> 
                    <span class="currnt-price">Rs.1100/-</span> 
                    <span class="pdf">(Rs.399 Off)</span>  
                    </div>
                  <div class="col-md-12" style="padding:10px 0;">  
                   <div class="col-md-4 col-sm-12" style="padding:0px;"><a id="button1" href="<?=base_url('/full-consultation');?>"  class="btn waves-effect waves-light buy_now pull-left">Book Now</a></div>          
           
				   </div>
                </div>

			</div>
		</div>
<hr class="firstheadhr">
</div>
<div style="clear:both;"></div>