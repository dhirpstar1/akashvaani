<?php echo pageHeader(lang('blog_form')); ?>

<?php $GLOBALS['optionValueCount'] = 0;?>
<style type="text/css">
    .sortable { list-style-type: none; margin: 0; padding: 0; width: 100%; }
    .sortable li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; height: 18px; }
    .sortable li>col-md- { position: absolute; margin-left: -1.3em; margin-top:.4em; }
</style>

<?php echo form_open('admin/blogs/form/'.$id ); ?>
    <div class="row">
        <div class="col-md-9">
            <div class="tabbable">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#blog_info" data-toggle="tab">Details</a></li>
                    <li><a href="#blog_categories" data-toggle="tab">Categories</a></li>
                    <li><a href="#blog_photos" data-toggle="tab">Images</a></li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane active" id="blog_info">

                    <div class="form-group">
                        <label><?php echo lang('name');?></label>
                        <?php echo form_input(['placeholder'=>lang('name'), 'name'=>'name', 'value'=>assign_value('name', $name), 'class'=>'form-control']); ?>
                    </div>

                    <div class="form-group">
                        <label><?php echo lang('description');?></label>
                        <?php echo form_textarea(['name'=>'description', 'class'=>'redactor', 'value'=>assign_value('description', $description)]); ?>
                    </div>

                    <div class="form-group">
                        <label><?php echo lang('excerpt');?></label>
                        <?php echo form_textarea(['name'=>'excerpt', 'value'=>assign_value('excerpt', $excerpt), 'class'=>'redactor']); ?>
                    </div>

                    

                    <fieldset>
                        <legend><?php echo lang('header_information');?></legend>
                        <div style="padding-top:10px;">
                            
                            <div class="form-group">
                                <label for="slug"><?php echo lang('slug');?> </label>
                                <?php echo form_input(['name'=>'slug', 'value'=>assign_value('slug', $slug), 'class'=>'form-control']); ?>
                            </div>

                            <div class="form-group">
                                <label for="seo_title"><?php echo lang('seo_title');?> </label>
                                <?php echo form_input(['name'=>'seo_title', 'value'=>assign_value('seo_title', $seo_title), 'class'=>'form-control']); ?>
                            </div>

                            <div class="form-group">
                                <label for="meta"><?php echo lang('meta');?></label>
                                <?php echo form_textarea(['name'=>'meta', 'value'=>assign_value('meta', html_entity_decode($meta)), 'class'=>'form-control']);?>
                                <span class="help-block"><?php echo lang('meta_example');?></span>
                            </div>
                            <div class="form-group">
                                <label for="seo_title">Tags(Comma{,} Separated) </label>
                                <?php echo form_input(['name'=>'tags', 'value'=>assign_value('tags', $tags), 'class'=>'form-control']); ?>
                            </div>
                        </div>
                    </fieldset>
                </div>

                <div class="tab-pane" id="blog_downloads">
                    <div class="alert alert-info">
                        <?php echo lang('digital_blogs_desc'); ?>
                    </div>
                    <fieldset>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th><?php echo lang('filename');?></th>
                                    <th><?php echo lang('title');?></th>
                                    <th><?php echo lang('size');?></th>
                                    <th style="width:16px;"></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php echo (count($file_list) < 1)?'<tr><td style="text-align:center;" colspan="6">'.lang('no_files').'</td></tr>':''?>
                            <?php foreach ($file_list as $file):?>
                                <tr>
                                    <td><?php echo $file->filename ?></td>
                                    <td><?php echo $file->title ?></td>
                                    <td><?php echo $file->size ?></td>
                                    <td><?php echo form_checkbox('downloads[]', $file->id, in_array($file->id, $blog_files)); ?></td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </fieldset>
                </div>

                <div class="tab-pane" id="blog_categories">
                    <?php if(isset($categories[0])):?>
                        <label><strong><?php echo lang('select_a_category');?></strong></label>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th><i class="icon-eye-slash"></i></th>
                                    <th><?php echo lang('name')?></th>
                                   
                                    <th class="text-center"><?php echo lang('in').'/'.lang('main'); ?></th>
                                </tr>
                            </thead>
                        <?php
                        function list_categories($parent_id, $cats, $sub='', $blog_categories, $primary_category, $groups, $hidden)
                        {
                            if(isset($cats[$parent_id]))
                            {
                                foreach ($cats[$parent_id] as $cat):?>
                                <tr>
                                    <td><?php echo ($hidden)?'<i class="icon-eye-slash">':'';?></i></td>
                                    <td><?php echo  $sub.$cat->name; ?></td>
                                   
                                    <td class="text-center">
                                        <input type="checkbox" name="blog_categories[]" value="<?php echo $cat->id;?>" <?php echo(in_array($cat->id, $blog_categories))?'checked="checked"':'';?>/>
                                        &nbsp;&nbsp;
                                        <input type="radio" name="primary_category" value="<?php echo $cat->id;?>" <?php echo ($primary_category == $cat->id)?'checked="checked"':'';?>/>
                                    </td>
                                </tr>
                                <?php
                                if (isset($cats[$cat->id]) && sizeof($cats[$cat->id]) > 0)
                                {
                                    $sub2 = str_replace('&rarr;&nbsp;', '&nbsp;', $sub);
                                        $sub2 .=  '&nbsp;&nbsp;&nbsp;&rarr;&nbsp;';
                                    list_categories($cat->id, $cats, $sub2, $blog_categories, $primary_category, $groups, $hidden);
                                }
                                endforeach;
                            }
                        }

                        list_categories(-1, $categories, '', $blog_categories, $primary_category, $groups, true);
                        list_categories(0, $categories, '', $blog_categories, $primary_category, $groups, false);
                        ?>

                    </table>
                <?php else:?>
                    <div class="alert"><?php echo lang('no_available_categories');?></div>
                <?php endif;?>

                </div>

                <div class="tab-pane" id="BlogOptions">

                    <div class="row" style="margin-bottom:15px;">
                        <div class="col-md-5 col-md-offset-7">
                            <div class="input-group">
                               <select id="optionTypes" class="form-control">
                                    <option value=""><?php echo lang('select_option_type')?></option>
                                    <option value="checklist"><?php echo lang('checklist');?></option>
                                    <option value="radiolist"><?php echo lang('radiolist');?></option>
                                    <option value="droplist"><?php echo lang('droplist');?></option>
                                    <option value="textfield"><?php echo lang('textfield');?></option>
                                    <option value="textarea"><?php echo lang('textarea');?></option>
                                </select>
                                <span class="input-group-btn">
                                    <button id="addOption" class="btn btn-primary" type="button"><?php echo lang('add_option');?></button>
                                </span>
                            </div>
                        </div>
                    </div>

                    <style type="text/css">
                        .option-form {
                            display:none;
                            margin-top:10px;
                        }
                        .optionValuesForm
                        {
                            background-color:#fff;
                            padding:6px 3px 6px 6px;
                            -webkit-border-radius: 3px;
                            -moz-border-radius: 3px;
                            border-radius: 3px;
                            margin-bottom:5px;
                            border:1px solid #ddd;
                        }

                        .optionValuesForm input {
                            margin:0px;
                        }
                        .optionValuesForm a {
                            margin-top:3px;
                        }
                    </style>

                    <table class="table table-striped">
                        <tbody id="optionsContainer">
                        </tbody>
                    </table>

                </div>

                <div class="tab-pane" id="blog_related">

                    <label><strong><?php echo lang('select_a_blog');?></strong></label>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input class="form-control" type="text" id="blog_search" />
                            </div>
                            <script type="text/javascript">
                            $('#blog_search').keyup(function(){
                                $('#blog_list').html('');
                                run_blog_query();
                            });

                            function run_blog_query()
                            {
                                $.post("<?php echo site_url('admin/blogs/blog_autocomplete/');?>", { name: $('#blog_search').val(), limit:10},
                                    function(data) {

                                        $('#blog_list').html('');

                                        $.each(data, function(index, value){

                                            if($('#related_blog_'+index).length == 0)
                                            {
                                                $('#blog_list').append('<option id="blog_item_'+index+'" value="'+index+'">'+value+'</option>');
                                            }
                                        });

                                }, 'json');
                            }
                            </script>

                            <div class="form-group">
                                <select class="form-control" id="blog_list" size="5" style="margin:0px;"></select>
                            </div>
                            <button type="button" onclick="add_related_blog();return false;" class="btn btn-primary btn-block" title="Add Related Blog"><?php echo lang('add_related_blog');?></button>
                        </div>

                        <div class="col-md-8">
                            <table class="table table-striped" style="margin-top:10px;">
                                <tbody id="blog_items_container">

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="blog_photos">
                    <iframe id="iframe_uploader" src="<?php echo site_url('admin/blogs/blog_image_form');?>" style="height:75px; width:100%; border:0px;"></iframe>
                    <div id="gc_photos"></div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary"><?php echo lang('save');?></button>

        </div>
        <div class="col-md-3">
            
            <div class="form-group">
                <label for="sku">Customer</label>
                <?php echo form_dropdown('customer_id', $customers, assign_value('customer_id', $customer_id), ['name'=>'customer_id', 'class'=>'form-control']); ?>
            </div>

            <div class="form-group">
                <label for="sku">Status</label>
                <?php echo form_dropdown('status', array('Inactive', 'Active'), assign_value('status', $status), ['name'=>'status', 'class'=>'form-control']); ?>
            </div>

           
        </div>
    </div>
</form>


<script type="text/template" id="imageTemplate">
    <div class="row gc_photo" id="gc_photo_{{id}}" style="background-color:#fff; border-bottom:1px solid #ddd; padding-bottom:20px; margin-bottom:20px;">
        <div class="col-md-2">
            <input type="hidden" name="images[{{id}}][filename]" value="{{filename}}"/>
            <img class="gc_thumbnail" src="<?php echo base_url('uploads/images/thumbnails/{{filename}}');?>" style="padding:5px; border:1px solid #ddd"/>
        </div>
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <input name="images[{{id}}][alt]" value="{{alt}}" class="form-control" placeholder="<?php echo lang('alt_tag');?>"/>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="checkbox">
                        <label>
                            <input type="radio" name="primary_image" value="{{id}}" {{#primary}}checked="checked"{{/primary}}/> <?php echo lang('main_image');?>
                        </label>
                    </div>
                </div>
                <div class="col-md-4">
                    <a onclick="return remove_image($(this));" rel="{{id}}" class="btn btn-danger pull-right"><i class="icon-times "></i></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label><?php echo lang('caption');?></label>
                    <textarea name="images[{{id}}][caption]" class="form-control" rows="3">{{caption}}</textarea>
                </div>
            </div>
        </div>
    </div>
</script>


<script>

var imageTemplate = $('#imageTemplate').html();
var images = <?php echo json_encode($images);?>


$(document).ready(function() {

    optionsSortable();
    optionValuesSortable();

    $('body').on('click', '.optionTitle', function(){
        $($(this).attr('href')).slideToggle();
        return false;
    }).on('click', '.deleteOptionValue', function(){
        if(confirm('<?php echo lang('confirm_remove_value');?>'))
        {
            $(this).closest('.optionValuesForm').remove();
        }
    });

    $(".sortable").sortable();
    $(".sortable > col-medium-").disableSelection();

    //init the photo sortable
    photos_sortable();


    $.each(images, function(key,val) {
        addBlogImage(key, val.filename, val.alt, val.primary, val.caption);
    });
   
});

function addBlogImage(id, filename, alt, primary, caption)
{
    view = {
        id:id,
        filename:filename,
        alt:alt,
        primary:primary,
        caption:caption
    }

    var output = Mustache.render(imageTemplate, view);

    $('#gc_photos').append(output);
    $('#gc_photos').sortable('refresh');
    photos_sortable();
}

function remove_image(img)
{
    if(confirm('<?php echo lang('confirm_remove_image');?>'))
    {
        var id  = img.attr('rel');
        $('#gc_photo_'+id).remove();
    }
}

function photos_sortable()
{
    $('#gc_photos').sortable({
        handle : '.gc_thumbnail',
        items: '.gc_photo',
        axis: 'y',
        scroll: true
    });
}

function optionsSortable()
{
    $('#optionsContainer').sortable({
        axis: "y",
        items:'tr',
        handle:'.handle1',
        forceHelperSize: true,
        forcePlaceholderSize: true
    });
}

function optionValuesSortable()
{
    $('.optionItems').sortable({
        axis: "y",
        handle:'.handle2',
        forceHelperSize: true,
        forcePlaceholderSize: true
    });
}



function photos_sortable()
{
    $('#gc_photos').sortable({
        handle : '.gc_thumbnail',
        items: '.gc_photo',
        axis: 'y',
        scroll: true
    });
}

</script>
<style>
.tree > ul > li {
    float: left;
    width: 50%;
}
</style>