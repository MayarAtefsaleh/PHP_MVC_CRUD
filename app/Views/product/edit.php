<?php include(VIEWS.'inc/header.php'); ?>

<h1 class="text-center  mt-5 mb-2 py-3">Edit Product </h1>

<div class="container">
    <div class="row">
        <div class="col-8 mx-auto">


            <?php if(isset($success)): ?>
            <h3 class="alert alert-success text-center"><?php  echo $success; ?></h3>
            <?php endif; ?>
            <?php if(isset($error)): ?>
            <h3 class="alert alert-danger text-center"><?php  echo $error; ?></h3>
            <?php endif; ?>


            <form class="p-5 border mb-5" method="POST" action="<?php url('product/update/'.$row['id']); ?>">
                <div class="form-group p-2">
                    <label for="name" class="fs-4 fw-bold">Name</label>
                    <input type="text" required value="<?php echo $row['name']; ?>" name="name" class="form-control"
                        id="name" placeholder="Enter item`s Name">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="id">
                </div>
                <div class="form-group p-2">
                    <label for="price" class="fs-4 fw-bold">Price</label>
                    <input type="text" required class="form-control" value="<?php echo $row['price']; ?>" name="price"
                        id="price" placeholder="Enter item`s Price">
                </div>

                <div class="form-group p-2">
                    <label for="description" class="fs-4 fw-bold">Description</label>
                    <input type="text" required class="form-control" value="<?php echo $row['description']; ?>"
                        name="description" id="description" placeholder="Enter item`s Description ">
                </div>

                <div class="form-group p-2">
                    <label for="qty" class="fs-4 fw-bold">Quantity</label>
                    <input type="number" required class="form-control" value="<?php echo $row['qty']; ?>" name="qty"
                        id="qty" placeholder="Enter item`s Quantity">
                </div>
                <button type="submit" name="submit" class="btn btn-success w-100 mt-2">Submit</button>
            </form>

        </div>
    </div>
</div>

<?php include(VIEWS.'inc/footer.php'); ?>