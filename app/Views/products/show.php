<?php include dirname(__DIR__)."/layouts/header.php"; ?>

<div class="card">
    <div class="card-header">
        Product
        <p class="float-right">
            <a href="/products" class="btn btn-sm btn-primary">Return</a>
        </p>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $data['product']->getId() ?></td>
                    <td><?php echo $data['product']->getName() ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php include dirname(__DIR__)."/layouts/footer.php"; ?>