<!-- main -->
<div style="height:150px;"></div>
<body class="fixed-sn white-skin">
<div class="container">
  <section class="section">
    <div class="row">
      <!--First column -->
      <div class="col-lg-4 col-md-12 mb-r">
        <!--Card-->
        <div class="card testimonial-card profile-card">
          <!--Background color-->
          <div class="progilr-card-up indigo"> </div>
          <!--Avatar-->
          <div class="avatar profile-avatar"><img src="<?php echo base_url('/assets/profies/thumbnail/'.(($customer['image']) ? $customer['image']:'avatar.png')); ?>" class="rounded-circle img-responsive"> </div>
          <h3 class="h3-responsive text-center"><?php echo str_replace('{name}', $customer['firstname'].' '.$customer['lastname'], lang('my_account_page_title'));?></h3>
          <p class="text-center grey-text">Marketing Analyst</p>
          
             <p class="text-center grey-text"><?=$customer['about_me'];?></p>
        </div>
        <!--/.Card-->
</div>
      <!--/First column -->
      <div class="col-lg-8 col-md-12 mb-r">
        <h4 class="text-xs-left">Profile</h4>
        <hr style="display:block;margin-bottom:0px">
        <table class="table table-user-information">
          <tbody>
            <tr>
              <td>User Name:</td>
              <td><?php echo $customer['firstname'].' '.$customer['lastname']; ?></td>
            </tr>
            <tr>
              <td>Role:</td>
              <td><?php echo $customer['role']; ?></td>
            </tr>
            <tr>
              <td>Date of Birth</td>
              <td><?php echo $customer['day'].'/'.$customer['month'].'/'.$customer['year']; ?></td>
            </tr>
            <tr>
              <td>Time of Birth</td>
              <td><?php echo $customer['hour'].':'.$customer['minute']; ?></td>
            </tr>
            <tr>
            <tr>
              <td>Gender</td>
              <td><?php echo $customer['gender']; ?></td>
            </tr>
            <tr>
              <td>Address</td>
              <td><?php echo $customer['address']; ?></td>
            </tr>
            <tr>
              <td>Email</td>
              <td><a href="mailto:<?php echo $customer['email']; ?>"><?php echo $customer['email']; ?></a></td>
            </tr>
          <td>Phone Number</td>
            <td><?php echo $customer['phone']; ?>(Landline)<br>
              <br>
              <?php echo $customer['phone']; ?>(Mobile) </td>
          </tr>
          </tbody>
          
        </table>
      </div>
    </div>
  </section>
  <!--Section: Testimonials v.1-->
</div>
</body>
<!--  -->
