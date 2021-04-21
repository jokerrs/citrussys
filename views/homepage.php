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
    <link href="<?= $_ENV['SITE_LINK'] ?>/css/style.css" rel="stylesheet">
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
                                 src="<?= $_ENV['SITE_LINK'] . $param['image'] ?>"
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
<footer>
    <div class="container">
        <form method="post" action="/comments">
            <div class="mb-3">
                <label for="creator" class="form-label">Email address</label>
                <input type="text" name="creator" id="creator" class="form-control" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="comment" class="form-label">Comment</label>
                <textarea class="form-control" name="comment" id="comment" rows="3" placeholder="Comment..."></textarea>
            </div>
            <i class="disclaimer">*Comments will be posted after they are verified</i><br/>
            <button type="submit" class="btn btn-primary mb-3">Post comment</button>
        </form>
        <hr>
        <?php if(!isset($params2['error'])):
            foreach ($params2 as $param): ?>
                <div class="row comment">
                    <div class="head">
                        <small><strong class='user'><?= $param['creator'] ?></strong> <?= $param['created_at'] ?></small>
                    </div>
                    <p><?= $param['comment'] ?> </p>
                </div>
            <?php endforeach;
        else: ?>
            <p> <?= $params2['error'] ?></p>
        <?php endif; ?>
        <hr>
    </div>
</footer>
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
