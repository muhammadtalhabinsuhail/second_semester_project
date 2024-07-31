<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Modal Example</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    body {
        overflow: hidden;
        /* Set the background image and some styling properties */
        background-image: url('errorbackgroung.jpg');
        /* Replace 'path/to/your/image.jpg' with the actual path to your image */
        background-size: cover;
        /* Cover the entire viewport */
        background-position: center;
        /* Center the background image */
        background-repeat: no-repeat;
        /* Do not repeat the background image */
        /* margin: 0; */
        /* Remove default body margin */
        /* padding: 0; */
        /* Remove default body padding */
        height: 100vh;
        /* Set the height to 100% of the viewport height */
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* Custom CSS for the modal */
    .custom-modal-header {
        background-color: #3498db;
        /* Blue background */
        color: #fff;
        /* White text */
    }

    .custom-modal-body {
        background-color: #ecf0f1;
        /* Light gray background */
        color: #333;
        /* Dark gray text */
    }

    /* Center the modal */
    .modal-dialog {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }

    /* Maroon close button */
    .custom-close-button {
        color: #800000;
        /* Maroon color */
    }
    </style>
    <script>
    function openaddtoproduct() {
        window.location.href = 'add_product.php';
    }
    </script>
</head>

<body>

    <!-- Modal -->
    <div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header custom-modal-header">
                    <h5 class="modal-title" id="errorModalLabel">Error Message</h5>

                    <button type="button" class="close custom-close-button" data-dismiss="modal" aria-label="Close"
                        onclick="openaddtoproduct()">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body custom-modal-body">
                    <p>You have already added the same product with this ID.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"
                        onclick="openaddtoproduct()">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- JavaScript to open the modal on page load -->
    <script>
    $(document).ready(function() {
        $('#errorModal').modal('show');
    });
    </script>

</body>

</html>