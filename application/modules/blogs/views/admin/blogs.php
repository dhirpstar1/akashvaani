<?php pageHeader(lang('blogs')); ?>

<?php
//set "code" for searches
if(!empty($term)):
    $term = json_decode($term);
    if(!empty($term->term) || !empty($term->category_id)):?>
        <div class="alert alert-info">
            <?php echo sprintf(lang('search_returned'), intval($total));?>
        </div>
    <?php endif;?>
<?php endif;?>

<script type="text/javascript">
function areyousure()
{
    return confirm('<?php echo lang('confirm_delete_blog');?>');
}
</script>
<style type="text/css">
    .pagination {
        margin:0px;
        margin-top:-3px;
    }
</style>
<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-4">
                <?php echo CI::pagination()->create_links();?>  &nbsp;
            </div>
            <div class="col-md-8">
                <?php echo form_open('admin/blogs', 'class="form-inline form-group" style="float:right"');?>
                    <div class="form-group">
                        <?php
                        unset($blog_categories[-1]);
                        unset($blog_categories[0]);

                        if(!empty($blog_categories))
                        {
                            echo '<select class="form-control" name="category_id">';
                            echo '<option value="">'.lang('filter_by_category').'</option>';
                            foreach($blog_categories as $key=>$name)
                            {
                                echo '<option value="'.$key.'">'.$name.'</option>';
                            }
                            echo '</select>';

                        }?>
                    </div>
                     <div class="form-group">
                        <input type="text" class="form-control" name="term" placeholder="<?php echo lang('search_term');?>" />
                    </div>
                        <button class="btn btn-default" name="submit" value="search"><?php echo lang('search')?></button>
                        <a class="btn btn-default" href="<?php echo site_url('admin/blogs');?>">Reset</a>
                </form>
            </div>
        </div>
    </div>
</div>

<?php echo form_open('admin/blogs/bulk_save', array('id'=>'bulk_form'));?>
<div class="text-right form-group">
    <button class="btn btn-primary" href="#"><i class="icon-ok"></i> Save</button>
    <a class="btn btn-primary" style="font-weight:normal;"href="<?php echo site_url('admin/blogs/form');?>"><i class="icon-plus"></i>Add new Blog</a>
    
</div>
    <table class="table table-striped">
        <thead>
            <tr>
                <?php
                    foreach(['name'] as $thead)
                    {
                        echo '<th>';

                        $uristring = 'admin/blogs/'.$rows.'/'.$thead.'/';
                        $icon = '';
                        if ($order_by == $thead)
                        {
                            if($sort_order == 'asc')
                            {
                                $uristring .= 'desc/';
                                $icon   = ' <i class="icon-sort-alt-up"></i>';
                            }
                            else
                            {
                                $uristring .= 'asc/';
                                $icon   = ' <i class="icon-sort-alt-down"></i>';
                            }
                        }
                        else
                        {
                            $uristring .='asc/';
                        }

                        echo '<a href="'.site_url($uristring.$code.'/'.$page).'">'.lang($thead).$icon.'</a></th>';
                    }
                ?>
                <th>Customer</th>
                <th>Status</th>
                <th>Date</th>
                <th style="width:16%">

                </th>
            </tr>
        </thead>
        <tbody>
        <?php echo (count($blogs) < 1)?'<tr><td style="text-align:center;" colspan="7">'.lang('no_blogs').'</td></tr>':''?>
    <?php foreach ($blogs as $blog):?>
            <tr>
               <td><?php echo $blog->name;?></td>
               <td><?php echo $blog->firstname.' '.$blog->lastname;?></td>
               <td><?php echo ($blog->status == 0) ? 'Inactive' : 'Active';?></td>
                <td><?php echo $blog->date;?></td>
                <td class="text-right">
                    <div class="btn-group">                       
                        <a class="btn btn-default" href="<?php echo site_url('admin/blogs/form/'.$blog->id.'/1');?>" alt="<?php echo lang('copy');?>"><i class="icon-pencil"></i></a>
                        <a class="btn btn-danger" href="<?php echo site_url('admin/blogs/delete/'.$blog->id);?>" onclick="return areyousure();" alt="<?php echo lang('delete');?>"><i class="icon-times "></i></a>
                    </div>
                </td>
            </tr>
    <?php endforeach; ?>
        </tbody>
    </table>
</form>
