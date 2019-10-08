<!doctype html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ajax Upload</title>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.css" rel="stylesheet">
    <style>
        .formSmall {
            width: 500px;
            margin: 20px auto 20px auto;
        }
        .message {
            padding:10px;
        }
    </style>

</head>
<body>
<div class="container">
    <form method="post" action="" class="formSmall" id="upload_form">
        <div class="row">
            <div class="col-lg-12">
                <h5 class="text-align"> Upload Form</h5>
            </div>
            <div class="message"></div>
            <div class="col-lg-12">
                <div class="form-group">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                </div><!-- /input-group -->

                <div class="form-group">
                    <input type="file" class="form-control" name="image" id="image">
                </div><!-- /input-group -->
                <div class="form-group">
                    <button type="submit" name="submit" id="submit" class="btn btn-primary">Save</button>
                </div><!-- /input-group -->
            </div>
        </div><!-- .row -->
    </form>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
    $( "#upload_form" ).submit(function() {

        var form = document.getElementById('upload_form');
        var formData = new FormData(form);

        $.ajax({
            url:'upload_image.php',
            data: formData,
            processData: false,
            type: 'POST',
            contentType: false,
            success: function (response) {
                $(".message").html(response);
                //Reseting values
                $('#image').val('');
                $('#name').val('');
            }
        });
        return false
    });
</script>
</body>
</html>