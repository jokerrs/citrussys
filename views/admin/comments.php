<?php
if (!isset($_SESSION['uid'])) {
    header('Location: /login');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <title>Offcanvas template for Bootstrap</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/offcanvas/">
    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/examples/offcanvas/../../dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/offcanvas/offcanvas.css" rel="stylesheet">
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
    <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/admin">Dashboard <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/">Homepage </a>
            </li>
        </ul>
        <a href="/logout">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button>
        </a>
    </div>
</nav>
<main role="main" class="container">
    <div class="my-3 p-3 bg-white rounded box-shadow">
        <h6 class="border-bottom border-gray pb-2 mb-0">Suggestions</h6>
        <?php if(!isset($params['error'])): ?>
        <?php foreach ($params as $param): ?>
            <div class="media text-muted pt-3">
                <img data-src="holder.js/32x32?theme=thumb&bg=ff0000&size=1" alt="" class="mr-2 rounded">
                <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <strong class="text-gray-dark">Creator: <?= $param['creator'] ?></strong>
                        <a href="/admin/comments/approve/<?= $param['id'] ?>">Approve</a>
                    </div>
                    <span class="d-block">Comment:</span>
                    <p><?= $param['comment'] ?></p>

                    <small class="d-block text-right mt-3">

                        <?php if ($param['product_id'] === 0): ?>
                            Homepage
                        <?php else: ?>
                            Product id: <?= $param['product_id'] ?>
                        <?php endif; ?> | <?= $param['created_at'] ?>
                    </small>
                </div>
            </div>
        <?php endforeach; ?>
        <?php else: ?>
        <p>There is no new comments</p>
        <?php endif; ?>
    </div>
</main>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.0/examples/offcanvas/../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="https://getbootstrap.com/docs/4.0/examples/offcanvas/../../assets/js/vendor/popper.min.js"></script>
<script src="https://getbootstrap.com/docs/4.0/examples/offcanvas/../../dist/js/bootstrap.min.js"></script>
<script src="https://getbootstrap.com/docs/4.0/examples/offcanvas/../../assets/js/vendor/holder.min.js"></script>
<script src="https://getbootstrap.com/docs/4.0/examples/offcanvas/offcanvas.js"></script>
</body>
</html>

