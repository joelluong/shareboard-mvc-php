<div>
    <a class="btn btn-success btn-share m-2" href="<?php echo ROOT_PATH; ?>shares/add">Share Something</a>
    <div class="row">
        <?php foreach($viewModel as $item) :?>
            <div class="col-md-3 m-2">
                <div class="card card-block bg-faded" style="width: 18rem;">
                    <div class="card-body">
                        <h3 class="card-title"><?php echo $item['title']?></h3>
                        <small><?php echo $item['create_date']; ?></small>
                        <p class="card-text"><?php echo $item['body']; ?></p>
                        <a class="btn btn-secondary" href="<?php echo $item['link']; ?>" target="_blank">Go To Website</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>