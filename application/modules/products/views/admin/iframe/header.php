<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Go Cart</title>

<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/css/admin.css');?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/css/font-awesome.css');?>" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-2.1.3.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/spin.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/redactor.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/imagemanager.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/spin.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/mustache.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/redactor_lang/'.config_item('language').'.js');?>"></script>

<?php if(CI::auth()->isLoggedIn(false, false)):?>

<script type="text/javascript">
$(document).ready(function(){
    $('.redactor').redactor({
        lang: '<?php echo config_item('language');?>',
        minHeight: 200,
        pastePlainText: true,
        linebreaks:true,
        imageUpload: '<?php echo site_url('admin/wysiwyg/upload_image');?>',
        imageManagerJson: '<?php echo site_url('admin/wysiwyg/get_images');?>',
        imageUploadErrorCallback: function(json)
        {
            alert(json.error);
        },
        plugins: ['imagemanager']
    });
});
</script>
<?php endif;?>
<style type="text/css">
	body{
		padding:0px;
		margin:0px;
	}
</style>
<body>
