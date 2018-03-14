<div class="container">
    <div class="col-xs-12">
    <?php 
        if(!empty($success_msg)){
            echo '<div class="alert alert-success">'.$success_msg.'</div>';
        }elseif(!empty($error_msg)){
            echo '<div class="alert alert-danger">'.$error_msg.'</div>';
        }
    ?>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading"><?php echo $action; ?> Post <a href="<?php echo site_url('posts/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
                <div class="panel-body">
                    <form method="post" action="" class="form">
                        <div class="form-group">
                            <label for="prodName">Product Name</label>
                            <input type="text" class="form-control" name="prodName" placeholder="Enter title" value="<?php echo !empty($post['prodName'])?$post['prodName']:''; ?>">
                            <?php echo form_error('prodName','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
             
                            <label for="prodDesc">Product Description</label>
                            <textarea name="prodDesc" class="form-control" placeholder="Enter post content"><?php echo !empty($post['prodDesc'])?$post['prodDesc']:''; ?></textarea>
                            <?php echo form_error('prodDesc','<p class="text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="purchPrice">Purchase Price:</label>
                            <input type="text" class="form-control" name="purchPrice" placeholder="Enter title" value="<?php echo !empty($post['purchPrice'])?$post['purchPrice']:''; ?>">
                            <?php echo form_error('purchPrice','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="quantity">Quantity:</label>
                            <input type="text" class="form-control" name="quantity" placeholder="Enter title" value="<?php echo !empty($post['quantity'])?$post['quantity']:''; ?>">
                            <?php echo form_error('quantity','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="suppid">Supplier:</label>
                            <input type="text" class="form-control" name="suppid" placeholder="Enter title" value="<?php echo !empty($post['suppid'])?$post['suppid']:''; ?>">
                            <?php echo form_error('suppid','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                        <input type="submit" name="postSubmit" class="btn btn-primary" value="Submit"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>