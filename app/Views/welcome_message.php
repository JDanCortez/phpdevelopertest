<?php echo $this->extend('layout'); ?>

<?php echo $this->section('content') ?>

    <div class="row p-auto m-auto">
        <?php foreach($posts as $post){ ?>
            <div class='col-lg-3 col-md-6 col-sm-12 my-4'>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $post['title']; ?></h5>
                        <p class="card-text text-truncate"><?php echo $post['post']; ?></p>
                        <?php $date = date_create($post['created_at']); ?>
                        
                    </div>
                    <div class="card-body">
                    <p class="fs-6 fst-italic lh-sm text-end">Posted on <br><?php echo date_format($date,"M/d/y h:m a"); ?></p>
                        <div class="d-flex justify-content-end">
                            <a href="/post/<?php echo $post['id'] ?>/show" class="btn btn-sm btn-outline-primary mx-1">Show</a>
                            <a href="/post/<?php echo $post['id'] ?>/edit" class="btn btn-sm btn-outline-warning mx-1">Edit</a>
                            <form action="/post/<?php echo $post['id']; ?>" method="post" class="mx-1">
                                <input type="hidden" name="_method" value="delete">
                                <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>


<?php echo $this->endSection('content'); ?>