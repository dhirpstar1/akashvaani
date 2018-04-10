<?php pageHeader(lang('page_form')) ?>

<?php echo form_open('admin/pages/form/'.$id); ?>
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css" rel="stylesheet" type="text/css">
<style>
    body { background-color:#fafafa;}
        .table-sortable {
            position: relative;
        }
        .table-sortable .sortable-placeholder {
            height: 37px;
        }
        .table-sortable .sortable-placeholder:after {
            position: absolute;
            z-index: 10;
            content: " ";
            height: 37px;
            background: #f9f9f9;
            left: 0;
            right: 0;
        }
    </style>
<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            <label for="title"><?php echo lang('title');?></label>
            <?php echo form_input(['name'=>'title', 'value'=>assign_value('title', $title), 'class'=>'form-control']);?>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="menu_title"><?php echo lang('menu_title');?></label>
            <?php echo form_input(['name'=>'menu_title', 'value'=>assign_value('menu_title', $menu_title), 'class'=>'form-control']);?>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="seo_title"><?php echo lang('seo_title');?></label>
            <?php echo form_input(['name'=>'seo_title', 'value'=>assign_value('seo_title', $seo_title), 'class'=>'form-control']);?>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="slug"><?php echo lang('slug');?></label>
            <?php echo form_input(['name'=>'slug', 'value'=>assign_value('slug', $slug), 'class'=>'form-control']);?>
        </div>
    </div>
</div>

<div class="form-group">
    <div class="form-group">
        <label for="content"><?php echo lang('content');?></label>
        <?php echo form_textarea(['name'=>'content', 'value'=>assign_value('content', $content), 'class'=>'form-control redactor']);?>
    </div>
</div>


<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            <label for="parent_id"><?php echo lang('parent_id');?></label>
            <?php
            $options    = [];
            $options[-1] = lang('hidden');
            $options[0] = lang('top_level');
            function page_loop($pages, $dash = '', $id=0)
            {
                $options    = [];
                foreach($pages as $page)
                {
                    //this is to stop the whole tree of a particular link from showing up while editing it
                    if($id != $page->id)
                    {
                        $options[$page->id] = $dash.' '.$page->title;
                        $options            = $options + page_loop($page->children, $dash.'-', $id);
                    }
                }
                return $options;
            }
            $options    = $options + page_loop($pages, '', $id);
            echo form_dropdown('parent_id', $options,  assign_value('parent_id', $parent_id), 'class="form-control"');
            ?>
        </div>

        <div class="form-group">
            <label for="sequence"><?php echo lang('sequence');?></label>
            <?php echo form_input(['name'=>'sequence', 'value'=>assign_value('sequence', $sequence), 'class'=>'form-control']); ?>
        </div>
    </div>
    <div class="col-md-9">
        <div class="form-group">
            <label><?php echo lang('meta');?></label>
            <?php echo form_textarea(['rows'=>'3', 'name'=>'meta', 'value'=>assign_value('meta', html_entity_decode($meta)), 'class'=>'form-control']); ?>
            <span id="helpBlock" class="help-block"><?php echo lang('meta_data_description');?></span>
        </div>
    </div>

<div class="col-md-9">
        <div class="form-group">
            <?php if($id): ?>
<section>
                    <h2>Articles List</h2>
                    <div class="row">
                    <div class="col-md-6">
                    <button type="button" class="btn btn-success" id="save_order">Save order</button>
                    </div> 
                    <div class="col-md-6">
                        <div id="message">...</div>
                    </div>

                    </div>
                    <div class="row"><br>
                        <div class="col-sm-12" style="max-height:400px; overflow-y: auto;">
                            <ul class="list-group list-group-sortable">
                                <?php foreach($articles as $artile): ?>
                                <li class="list-group-item list-group-item-info <?php if($artile->id == $artile->blog_id): ?> selectedli <?php endif; ?>" id="<?=$artile->id;?>"><input type="checkbox" <?php if($artile->id == $artile->blog_id): ?> checked="checked" <?php endif; ?> name="selected[]" value="<?=$artile->id;?>" class="selected"> ->>>> <?=$artile->name;?></li>
                                 <?php endforeach; ?>
                            </ul>
                        </div>

                      
                        
                    </div>
                </section>
<?php endif; ?>
</div>

 </div>
    </div>

<div class="form-actions">
    <button type="submit" class="btn btn-primary"><?php echo lang('save');?></button>
</div>  
</form>
<script src="<?=base_url('/assets/js/jquery.sortable.js');?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>

    <script>
        $(function() {

           $('.thumbnail-sortable').sortable({
                placeholderClass: 'col-sm-6 col-md-4'
            });
            $('.table-sortable tbody').sortable({
                handle: 'span'
            });
            $('.list-group-sortable').sortable({
                placeholderClass: 'list-group-item'
            });
 
       });
 $('.selected').click(function() {
       $('#' + $(this).val()).toggleClass('selectedli');
});


$('#save_order').click(function(e){
var arr = [];
$('.selectedli').each(function () {
   arr.push($(this).attr('id'));
});
if(arr.length === 0){
$('#message').html('<div class="alert alert-danger fade in"> <a href="#" class="close" data-dismiss="alert">&times;</a><strong>Error!</strong>Please select articles.</div>');
   
}else{
    $('#message').html('<div class="alert alert-info fade in"> Loading...</div>');
$.ajax({
        url: '<?=base_url('/admin/pages/savearticles');?>',
        type: 'POST',
        data: { id: <?=$id;?>, options : arr} ,
        success: function (response) {
            //alert(response);
$('#message').html('<div class="alert alert-success fade in"> <a href="#" class="close" data-dismiss="alert">&times;</a><strong>Success!</strong>Your order has been saved.</div>');

        },
        error: function () {
            alert("error");
        }
    }); 
}
e.preventDefault();
});

       
    </script>