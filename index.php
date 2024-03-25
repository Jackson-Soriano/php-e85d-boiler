<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basics</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <div class="container col-sm-10">
        <div class="row ">
            <h1 class="display-7 p-3 mb-1 text-center text-bg-dark">PHP Basics</h1>
        </div>
        <div class="row text-bg-success">
           <!-- form -->
           <form action="index.php" method="post">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" placeholder="Name" class="form-control" value="<?= $name?>">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" name="email" id="email" placeholder="Email" class="form-control" value="<?= $email?>">
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea name="message" id="message" class="form-control" rows="5"><?=$message?></textarea>
                </div>
                <input type="submit" name="submit" id="submit" class="btn btn-primary btn-lg mt-1" value="Send Message">
            </form>
        </div>
    </div>
</body>

</html>
