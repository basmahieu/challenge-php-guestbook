<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- CSS -->
    <link rel="stylesheet" href="src/css/style.css" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />

    <title>Notebook</title>
</head>

<body class="bg-info">

    <!-- Header -->
    <?php include 'Header.php' ?>

    <!-- Form -->
    <div class="bg-light container p-4 mt-4 rounded shadow p-3">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

            <div class="form-group">
                <label for="date"></label>
                <input type="date" name="date" value="">
                <span class=" error text-danger"><?php echo $dateErr; ?></span>

            </div>

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" class="form-control" value="<?php echo $title; ?>">
                <span class=" error text-danger"><?php echo $titleErr; ?></span>
            </div>

            <div class="form-group">
                <label for="author">Author:</label>
                <input type="text" name="author" id="author" class="form-control" value="<?php echo $author; ?>">
                <span class=" error text-danger"><?php echo $authorErr; ?></span>
            </div>

            <div class="form-group">
                <label for="content">Content:</label>
                <textarea class="form-control" id="content" name="content" rows="4" value="<?php echo $content; ?>"></textarea>
                <span class=" error text-danger"><?php echo $contentErr; ?></span>
            </div>



            <button type="submit" class="btn btn-primary">Hit me</button>

        </form>
    </div>
    <!-- Footer -->
    <?php include 'Footer.php' ?>
</body>

</html>