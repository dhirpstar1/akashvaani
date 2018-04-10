<h2>Custom Services</h2>
<script type="text/javascript">
function areyousure()
{
    return confirm('Are you sure want to delete.');
}
</script>

<div style="text-align:right">
    <a class="btn btn-primary" href="<?php echo site_url('admin/services/service_form'); ?>"><i class="icon-plus"></i> Add New</a>
</div>

<table class="table table-striped">
    <thead>
       <th>Sr.</th>
       <th>Name</th>
       <th>Price</th>
       <th class="text-right">Action</th>
    </thead>
    <tbody>
        <?php $count=0; foreach ($services as $service): $count++;?>
            <tr>
                <td><?=$count;?></td>
                <td><?=$service->name;?></td>
               <td><?=$service->price;?></td>
                <td class="text-right">
                    <div class="btn-group">
                    <a class="btn btn-default" href="<?php echo  site_url('admin/services/service_form/'.$service->service_id);?>"><i class="icon-pencil"></i></a>
                    <a class="btn btn-danger" href="<?php echo  site_url('admin/services/delete/'.$service->service_id);?>" onclick="return areyousure();"><i class="icon-times "></i></a>
                    </div>
                </td>
            </tr>
            <?php endforeach; ?>
    </tbody>
</table>