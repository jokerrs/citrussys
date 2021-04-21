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

<div class="container">
    <div class="btn-group">
        <a href="/">
            <button type="button" class="btn btn-sm btn-outline-secondary">Home</button>
        </a>
    </div>
</div>
<main role="main">
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top"
                             src="<?= $_ENV['SITE_LINK'] . $params['image'] ?>"
                             alt="Card image cap">
                        <div class="card-body">
                            <h3>
                                <?= $params['title'] ?>
                            </h3>
                            <p class="card-text">
                                <?= $params['description'] ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<footer>
    <div class="container">
        <form method="post" action="/comments">
            <div class="mb-3">
                <label for="creator" class="form-label">Name</label>
                <input type="text" name="creator" id="creator" class="form-control" placeholder="Your name...">
            </div>
            <div class="mb-3">
                <label for="comment" class="form-label">Comment</label>
                <textarea class="form-control" name="comment" id="comment" rows="3" placeholder="Comment..."></textarea>
            </div>
            <input type="hidden" name="product_id" value="<?= $params['id'] ?>">
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
            <p> No comments</p>
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
