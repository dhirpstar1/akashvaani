<?=$page_title; ?>
<div class="text-right form-group">
    <a class="btn btn-primary" style="font-weight:normal;"href="<?php echo site_url('admin/products/filters_form');?>"><i class="icon-plus"></i> Add New Filter</a>
</div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
              <th>Title</th>
              <th>Parent</th>
                <th style="width:16%; text-align:right;">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php echo (count($filters) < 1)?'<tr><td style="text-align:center;" colspan="7"> No Filters</td></tr>':''?>
    <?php foreach ($filters as $filter):?>
            <tr>
                <td><?php echo $filter->id;?></td>
                <td><?php echo $filter->title;?></td>
                 <td><?php echo $filter->parent;?></td>
                <td class="text-right">
                    <div class="btn-group">
          
                        <a class="btn btn-default" href="<?php echo site_url('admin/products/filters_form/'.$filter->id);?>" alt="<?php echo lang('copy');?>"><i class="icon-pencil"></i></a>
                        <a class="btn btn-danger" href="<?php echo site_url('admin/products/filter_delete/'.$filter->id);?>" onclick="return areyousure();" alt="<?php echo lang('delete');?>"><i class="icon-times "></i></a>
                    </div>
                </td>
            </tr>
    <?php endforeach; ?>
        </tbody>
    </table>

<script type="text/javascript">
function areyousure()
{
    return confirm('<?php echo lang('confirm_delete_product');?>');
}
</script>