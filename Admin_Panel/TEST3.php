<?php
$conn = mysqli_connect("localhost", "root", "", "company");

// Fetching data from the database
$query = "SELECT * FROM electric_products";
$data = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Display</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <?php
            while ($result = mysqli_fetch_assoc($data)) {
                $imagePath = "Admin_Panel/releasedpro/" . $result['img_drc'];
                ?>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="<?php echo $imagePath; ?>" alt="Image" width="100%" height="225">
                    <div class="card-body">
                        <h3 class="card-text"><?php echo $result['product_name']; ?></h3>
                        <p class="text-muted">&#8377;<?php echo $result['product_price']; ?></p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

</body>

</html>