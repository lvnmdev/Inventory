<div class="container">
    <?php if(!empty($success_msg)){ ?>
        <div class="col-xs-12">
            <div class="alert alert-success">
                <?php echo $success_msg; ?>
            </div>
        </div>
    <?php }elseif(!empty($error_msg)){ ?>
        <div class="col-xs-12">`
            <div class="alert alert-danger">
                <?php echo $error_msg; ?>   
            </div>
        </div>
    <?php } ?>

    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Notifications</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="<?php echo site_url('posts/add/'); ?>" class="glyphicon glyphicon-plus pull-right" ></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger count" style="border-radius:10px;"></span> <span class="glyphicon glyphicon-envelope" style="font-size:18px;"></span></a>
                    <ul class="dropdown-menu">
                        ...
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <table class="table table-striped table-bordered">
        <h2>Purchase Order</h2>
        <thead>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Product Description</th>
                <th>Purchase Price</th>
                <th>Quantity</th>
                <th>Supplier</th>
                <th>Date</th>
                <th>Period of Delivery</th>
                <th>Date Delivered</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="userData">
            <?php if(!empty($posts)): foreach($posts as $post): ?>
            <tr>
                <td><?php echo '#'.$post['purchID']; ?></td>
                <td><?php echo $post['prodName']; ?></td>
                <td><?php echo $post['prodDesc']; ?></td>
                <td><?php echo '₱ '.$post['purchPrice']; ?></td>
                <td><?php echo $post['quantity']; ?></td>
                <td></td>
                <td></td>
                <td>
                    <a href="<?php echo site_url('posts/view/'.$post['purchID']); ?>" class="glyphicon glyphicon-eye-open"></a>
                    <a href="<?php echo site_url('posts/edit/'.$post['purchID']); ?>" class="glyphicon glyphicon-edit"></a>
                    <a href="<?php echo site_url('posts/delete/'.$post['purchID']); ?>" class="glyphicon glyphicon-trash" onclick="return confirm('Are you sure to delete?')"></a>
                </td>
            </tr>
            <?php endforeach; else: ?>
            <tr>
                <td colspan="10">Product(s) not found......</td>
            </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
