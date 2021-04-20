<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/docs/4.0/examples/album/docs/4.0/assets/img/favicons/favicon.ico">
    <title>Home Page</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">
    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/examples/album/../../dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/album/album.css" rel="stylesheet">
</head>
<body>
<main role="main">
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                <?php foreach ($params as $param): ?>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top"
                             src="<?= $_ENV['SITE_LINK'].$param['image'] ?>"
                             alt="Card image cap">
                        <div class="card-body">
                            <h3>
                                <?= $param['title'] ?>
                            </h3>
                            <p class="card-text">
                                <?= $param['description'] ?>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="/products/<?= $param['slug'] ?>">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</main>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.0/examples/album/../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="https://getbootstrap.com/docs/4.0/examples/album/../../assets/js/vendor/popper.min.js"></script>
<script src="https://getbootstrap.com/docs/4.0/examples/album/../../dist/js/bootstrap.min.js"></script>
<script src="https://getbootstrap.com/docs/4.0/examples/album/../../assets/js/vendor/holder.min.js"></script>
</body>
</html>
