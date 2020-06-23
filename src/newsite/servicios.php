<?php
//include_once 'practico-3-refactor.php';
//$categories = array_keys($productByCategory);
//sort($categories);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Productos</title>
</head>
<body>
<?php include 'views/menu.php' ?>
<div class="container">
    <section>
        <div class="row">
            <div class="col-md-12 blog-main">
                <div class="blog-post">
                    <h2 class="blog-post-title">Servicios</h2>
                    <p><?php include 'views/servicios.txt' ?></p>
                </div>
            </div>
        </div>
    </section>
    <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
            <div class="col-12 col-md">
                <img class="mb-2" src="./Pricing example · Bootstrap_files/bootstrap-solid.svg" alt="" width="24" height="24">
                <small class="d-block mb-3 text-muted">© 2017-2019</small>
            </div>
            <div class="col-6 col-md">
                <h5>Features</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="https://getbootstrap.com/docs/4.4/examples/pricing/#">Cool stuff</a></li>
                    <li><a class="text-muted" href="https://getbootstrap.com/docs/4.4/examples/pricing/#">Random feature</a></li>
                    <li><a class="text-muted" href="https://getbootstrap.com/docs/4.4/examples/pricing/#">Team feature</a></li>
                    <li><a class="text-muted" href="https://getbootstrap.com/docs/4.4/examples/pricing/#">Stuff for developers</a></li>
                    <li><a class="text-muted" href="https://getbootstrap.com/docs/4.4/examples/pricing/#">Another one</a></li>
                    <li><a class="text-muted" href="https://getbootstrap.com/docs/4.4/examples/pricing/#">Last time</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Resources</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="https://getbootstrap.com/docs/4.4/examples/pricing/#">Resource</a></li>
                    <li><a class="text-muted" href="https://getbootstrap.com/docs/4.4/examples/pricing/#">Resource name</a></li>
                    <li><a class="text-muted" href="https://getbootstrap.com/docs/4.4/examples/pricing/#">Another resource</a></li>
                    <li><a class="text-muted" href="https://getbootstrap.com/docs/4.4/examples/pricing/#">Final resource</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>About</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="https://getbootstrap.com/docs/4.4/examples/pricing/#">Team</a></li>
                    <li><a class="text-muted" href="https://getbootstrap.com/docs/4.4/examples/pricing/#">Locations</a></li>
                    <li><a class="text-muted" href="https://getbootstrap.com/docs/4.4/examples/pricing/#">Privacy</a></li>
                    <li><a class="text-muted" href="https://getbootstrap.com/docs/4.4/examples/pricing/#">Terms</a></li>
                </ul>
            </div>
        </div>
    </footer>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>