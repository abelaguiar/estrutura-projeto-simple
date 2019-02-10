<?php include dirname(__DIR__)."/layouts/header.php"; ?>

<div class="card">
    <div class="card-header">
        Edit Product
        <p class="float-right">
            <a href="/products" class="btn btn-sm btn-primary">Return</a>
        </p>
    </div>
    <div class="card-body">
    <form action="/product/<?php echo $data['product']->getId() ?>/update" method="POST">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="<?php echo $data['product']->getName() ?>">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</div>

<?php include dirname(__DIR__)."/layouts/footer.php"; ?>