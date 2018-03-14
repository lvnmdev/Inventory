<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">Purchase Details <a href="<?php echo site_url('posts/'); ?>" class="glyphicon glyphicon-arrow-left pull-right"></a></div>
            <div class="panel-body">
                <div class="form-group">
                    <label>Product Name:</label>
                    <p><?php echo !empty($post['prodName'])?$post['prodName']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>Product Description:</label>
                    <p><?php echo !empty($post['prodDesc'])?$post['prodDesc']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>Purchase Price:</label>
                    <p><?php echo !empty($post['purchPrice'])?$post['purchPrice']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>Quantity:</label>
                    <p><?php echo !empty($post['quantity'])?$post['quantity']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>Supplier:</label>
                    <p><?php echo !empty($post['suppid'])?$post['suppid']:''; ?></p>
                </div>
                <div class="form-group">
                    <label>Date:</label>
                    <p><?php echo !empty($post['date_&_time'])?$post['date_&_time']:''; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
