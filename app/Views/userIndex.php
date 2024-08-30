<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- STYLES -->


</head>
<body>
<!-- <h1>Create User</h1> -->
<div class="container">
    <table class="table-responsive">
        <thead>
            <tr>
                <td>Email</td>
                <td>Actions</td>
            </tr>
            <tbody>
            <?php foreach($users_data as $user){ ?>
                <tr>
                        <td>
                            <?php
                            echo $user['email']
                            ?>
                    </td>
                    <td>
                        <a class="bg-info px-2 py-1 text-white" href="#">Show</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </thead>
    </table>
</div>

<!-- -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
