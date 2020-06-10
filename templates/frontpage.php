<?php include 'inc/header.php'; ?>

    <div class="jumbotron">
        <div class="container">
            <div class="centered col-md-8 col-xs-12">
                <h3 class="text-center display-4">Find a Job</h3>
                <br/>
                <form action="index.php" method="get">
                    <select name="category" class="form-control" id="">
                        <option value="0">Choose Category</option>
                        <?php foreach($categories as $category): ?>
                            <option value="<?php echo $category->id;?>">
                                <?php echo $category->name; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <br/>
                    <input type="submit" class="btn btn-lg btn-success" value="Search">
                </form>
            </div>
        </div><!--.container-->
    </div><!--.jumbotron-->

    <div class="container">
        <h3><?php echo $title; ?></h3>
        <?php foreach($jobs as $job): ?>
            <div class="jobs">
                <h3><?php echo $job->job_title; ?></h3>

                <div class="row">
                    <div class="col-md-10">
                        <p><?php echo $job->description; ?></p>
                    </div>

                    <div class="col-md-2">
                        <a class="col-md-12 btn btn-success" href="#">View</a>
                    </div>
                </div><!--.row-->
                <hr>
            </div><!--.jobs-->
            <?php endforeach; ?>
    </div><!--.container-->

<?php include 'inc/footer.php'; ?>