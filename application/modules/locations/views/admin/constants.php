<?php pageHeader('Constants') ?>

<script type="text/javascript">
//<![CDATA[
$(document).ready(function(){
    create_sortable();  
});
// Return a helper with preserved width of cells
var fixHelper = function(e, ui) {
    ui.children().each(function() {
        $(this).width($(this).width());
    });
    return ui;
};
function create_sortable()
{
    $('#countries').sortable({
        scroll: true,
        helper: fixHelper,
        axis: 'y',
        handle:'.handle',
        update: function(){
            save_sortable();
        }
    }); 
    $('#countries').sortable('enable');
}

function save_sortable()
{
    serial=$('#countries').sortable('serialize');
            
    $.ajax({
        url:'<?php echo site_url('admin/locations/organize_countries');?>',
        type:'POST',
        data:serial
    });
}
function areyousure()
{
    return confirm('<?php echo lang('confirm_delete_country');?>');
}
//]]>
</script>

<div class="text-right">
    <a class="btn btn-primary" href="<?php echo site_url('admin/locations/constant'); ?>"><i class="icon-plus"></i> Add Constant</a>
</div>

<table class="table table-striped" cellspacing="0" cellpadding="0">
    <thead>
        <tr>
            <th><?php echo lang('sort');?></th>
            <th>Key</th>
            <th>Value</th>
            <th>Optional Value</th>
            <th>Location</th>
            <th>Date</th>
            <th/>
        </tr>
    </thead>
    <tbody id="countries">
<?php foreach ($constants as $constant):?>
        <tr id="country-<?php echo $constant->id;?>">
            <td class="handle"><a class="btn btn-primary"><span class="icon-sort"></span></a></td>
            <td><?php echo  $constant->constant_key; ?></td>
            <td><?php echo $constant->constant_value;?></td>
            <td><?php echo $constant->constant_optional_value;?></td>
            <td><?php echo $constant->constant_location;?></td>
            <td><?php echo $constant->date;?></td>
            <td class="text-right">
                <div class="btn-group">
                    <a class="btn btn-default" href="<?php echo site_url('admin/locations/constant/'.$constant->id); ?>"><i class="icon-pencil"></i></a>
                    <a class="btn btn-danger" href="<?php echo site_url('admin/locations/delete_constant/'.$constant->id); ?>" onclick="return areyousure<();"><i class="icon-times "></i></a>
                </div>
            </td>
      </tr>
<?php endforeach; ?>
    </tbody>
</table>