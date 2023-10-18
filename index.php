<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <!-- bootsrap css -->
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-4">
        <h1>PHP CRUD Operations</h1>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#adduser">
            Add New Student
        </button>
        <div id="displayDataTable"></div>
    </div>


    <!-- Modal -->
    <div class=" modal fade" id="adduser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Adding users</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- <form method="post"> -->
                    <div class="mb-3 w-75">
                        <label class="form-label">Student name</label>
                        <input type="text" class="form-control" id="stdname" placeholder="Enter name">
                    </div>
                    <div class=" mb-3 w-75">
                        <label class="form-label">Email address</label>
                        <input type="email" class="form-control" id="stdemail" placeholder=" Enter Email Address">
                    </div>
                    <div class="mb-3 w-75">
                        <label for="exampleInputPassword1" class="form-label">Address</label>
                        <input type="text" class="form-control" id="stdaddress" placeholder=" Enter Address">
                    </div>
                    <div class="mb-3 w-75">
                        <label for="exampleInputPassword1" class="form-label">Class</label>
                        <input type="text" class="form-control" id="stdclass" placeholder=" Enter Address">
                    </div>
                    <!-- </form>~ -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="addStudents()">Submit</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap js and jquery -->
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>

    <script>
    $(document).ready(function() {
        displayData()
    })

    function displayData() {
        var display_data = "true";
        $.ajax({
            url: "display.php",
            type: 'post',
            data: {
                display: display_data
            },
            success: function(data, status) {
                $('#displayDataTable').html(data);
            }
        });
    }
    // Isnert
    function addStudents() {
        var name = $('#stdname').val();
        var email = $('#stdemail').val();
        var address = $('#stdaddress').val();
        var classs = $('#stdclass').val();

        $.ajax({
            url: "users.php",
            type: 'post',
            data: {
                stdname: name,
                stdemail: email,
                stdaddress: address,
                stdclass: classs,
            },
            success: function(data, status) {
                console.log(status);
                displayData();
            }
        });
    }
    // Delete 
    function deleteStudent(deleteid) {
        $.ajax({
            url: "delete.php",
            type: 'post',
            data: {
                deleteId: deleteid
            },
            success: function(data, status) {
                console.log(status);
                displayData();
            }
        })
    }
    </script>

</body>

</html>