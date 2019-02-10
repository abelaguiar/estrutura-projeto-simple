<?php include dirname(__DIR__)."/layouts/header.php"; ?>

<div class="card">
    <div class="card-header">
        All Products
        <p class="float-right">
            <a href="/product/create" class="btn btn-sm btn-success">Create</a>
        </p>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data['products'] as $product) { ?>
                    <tr>
                        <td><?php echo $product->getId() ?></td>
                        <td><?php echo $product->getName() ?></td>
                        <td>
                            <div class="btn-group">
                                <a href="/product/<?php echo $product->getId() ?>" class="btn btn-sm btn-primary">
                                    View
                                </a>
                                <a href="/product/<?php echo $product->getId() ?>/edit" class="btn btn-sm btn-warning">
                                    Edit
                                </a>
                                <a href="/product/<?php echo $product->getId() ?>/delete" class="btn btn-sm btn-danger">
                                    Delete
                                </a>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<?php include dirname(__DIR__)."/layouts/footer.php"; ?>