
        <?php if (isset($params['alert'])) { ?>
            <div class="alert alert-<?= $params['alert']['type'] ?> alert-dismissible fade show" role="alert">
                <strong><?= $params['alert']['msg']?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php } ?>