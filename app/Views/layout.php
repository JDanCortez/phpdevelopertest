<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- STYLES -->


</head>
<body>

<div class="container">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/post/create">Add New</a>
            </li>
        </ul>
        <div class="d-flex">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo \auth()->user()->username ?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/logout">Log Out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
  </div>
</nav>

    <?php if(isset($_SESSION['messageAlert'])) { ?>
        <div class="mt-4 alert alert-success" role="alert">
            <?php echo $_SESSION['messageAlert']; unset($_SESSION['messageAlert']); ?>
        </div>
    <?php } ?>

    <?php if(isset($_SESSION['_ci_validation_errors'])) { ?>
        <div class="mt-4 alert alert-danger" role="alert" id='formErrorAlert'>
            <?php echo $_SESSION['_ci_validation_errors']['title'] .'<br>' ?? '' ?>
            <?php echo $_SESSION['_ci_validation_errors']['post'] ?? '' ?>
        </div>
    <?php } ?>

<?php echo $this->renderSection('content'); ?>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
