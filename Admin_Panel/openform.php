<?php
error_reporting(0);
$Product_Test_Id = $_POST[ 'Product_Test_Id' ];
// $server = "localhost";
// $username = "root";
// $password = "";
// $database = "srs_company";

// $conn = mysqli_connect($server,$username,$password,$database);
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>SRS - Software requirement Specification</title>
</head>

<body>
    <div class="d-grid">
        <button type="button" class="btn btn-primary btn-block" onclick="goback()">Go Back</button>
    </div>
    <script>
    function goback() {
        window.location.href = "launch_show.php";

    }
    </script>
    <div class="container p-3 mt-4">

        <?php
    $conn = mysqli_connect( 'localhost', 'root', '', 'Project_Database' ) or die( 'connection failed' );
    $query = "SELECT * FROM ApprovedProducts_Launch_table23 WHERE Product_Test_Id = '{$Product_Test_Id}' AND Product_Status='Ready To Launch';";
    $data = mysqli_query( $conn, $query ) or die ( 'query Failed' );
    if ( mysqli_num_rows( $data ) >0 ) {
        while( $rows = mysqli_fetch_assoc( $data ) ) {

            
            ?>

        <form action="processor.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" value="<?php echo $rows[ 'Product_Test_Id' ];?>" name="value">

            <div class="mb-3">
                <label class="form-label">Product Name:</label>
                <input type="text" class="form-control" name="proname" value="<?php echo $rows[ 'Product_Name' ];?>"
                    required>
            </div>
            <div class="mb-3">
                <label class="form-label">Product Description:</label>
                <input type="text" class="form-control" name="prodesc" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Product Price:</label>
                <input type="text" class="form-control" name="proprice" value="<?php echo $rows[ 'Product_Price' ];?>"
                    required>
            </div>
            <div class="mb-3">
                <label class="form-label">Product Feature:</label>
                <input type="text" class="form-control" name="proftre" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Product Usage:</label>
                <input type="text" class="form-control" name="prousge" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Product Warranty:</label>
                <input type="text" class="form-control" name="prowrnty" required>
            </div>
            <div><br>
                <hr><br>
            </div>
            <div class="mb-3">
                <label class="form-label">Upload Product Image:</label>
                <input type="file" class="btn btn-success" id="image_input" name="uploadfile" required>
                <img class="image-preview" id="image_preview" src="#" alt="Image Preview"
                    style="max-width: 100%; max-height: 300px; display: none;"><br><br>
            </div>
            <input type="submit" class="btn btn-info" name="approve" value="Approve">
        </form>
        <?php
        }

    }
    ?>

    </div>
    <div class="d-grid">
        <button type="button" class="btn btn-dark btn-block" onclick="gohome()">Go Home</button>
    </div>
    <script>
    function gohome() {
        window.location.href = "index.php";

    }
    </script>

    <script>
    // This line adds an event listener to the "image_input" element, listening for the "change" event. The function inside the addEventListener is executed when the "change" event occurs. In this case, it triggers when the user selects a file using the file input field.
    document.getElementById("image_input").addEventListener("change", function() {
        //creates a variable input and sets it to this. Inside the event handler function, this refers to the "image_input" element, so input now references that element.
        var input = this;
        // retrieves the HTML element with the id attribute set to "image_preview." In our HTML, this corresponds to the img element where the image preview will be displayed.
        var preview = document.getElementById("image_preview");
        // conditional statement checks if the input.files property exists and if there is at least one file selected in the file input. If both conditions are true, it means the user has selected a file.
        if (input.files && input.files[0]) {
            var reader =
                new FileReader(); // A FileReader is used to read the content of files (in this case, the selected image).
            //This line sets an event handler for the reader object's onload event. This event is triggered when the file reading operation is completed.
            reader.onload = function(e) {
                //sets the src attribute of the preview image element to e.target.result. e.target.result contains the data URL of the selected image, which is then displayed in the img element.
                preview.src = e.target.result;
                //sets the display style property of the preview image element to "block," making the image visible. Initially, the image is hidden with display: none.
                preview.style.display = "block";
            };
            //This line reads the data of the selected image as a data URL using FileReader. It reads the first file from the input.files array and prepares it for display in the preview.
            reader.readAsDataURL(input.files[0]);
            //no file was selected, so this else block is executed.
        } else {
            //src attribute of the preview image element is set to an empty string, effectively clearing the image preview.
            preview.src = "";
            //hides the preview image by setting its display style property to "none."
            preview.style.display = "none";
        }
    });
    </script>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>