<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ajax Form</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <h1>Registration Form</h1>
    <div class="container">
        <form method="post" action="" name="myform" id="myform">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" required>
                <span id="nameerror" style="color: red;"></span>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
                <span id="emailerror" style="color: red;"></span>
            </div>
            <div class="form-group">
                <label for="DOB">DOB</label>
                <input type="date" name="DOB" id="DOB" required>
                <span id="DOBerror" style="color: red;"></span>
            </div>
            <div class="form-group">
                <!-- <input type="submit" name="" value="abcd"> -->
                <input type="button" class="button" value="Insert" name="showResult" id="showResult">
                <input type="button" class="button" value="Show Data" onclick="getAllData();">

            </div>
        </form>
        <span id="formResult"></span>
        <div class="alert alert-info" id="table_content">
            <h2> Manage User</h2>
            <table border='5' style="width: 1000px;">
                <thead>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>DOB</th>
                    <th>Action</th>

                </thead>
                <tbody id="table_show">

                </tbody>
            </table>
        </div>
        <script>
            /* Display data*/
            function getAllData() {
                $.ajax({
                    type: "GET",
                    url: "getAllData2.php",
                    dataType: "html",
                    success: function(data) {
                        $("#table_show").html(data);
                    }
                });
            }
            /*Insert Data*/
            $("#showResult").click(function() {
                $.ajax({
                    url: "response.php",
                    method: "POST",
                    data: $("#myform").serialize(),
                    success: function(res) {
                        $("#formResult").html(res);

                    }
                });
            });

            /*Delete Data*/

            function onDelete(id) {
                console.log(id);
                let data = {
                    id: id
                };
                $.ajax({
                    url: "delete2.php",
                    method: "POST",
                    data: JSON.stringify(data),
                    success: function(res) {
                        // $("#formResult").html(res);
                        getAllData();
                    }
                });
            }
        </script>

</html>