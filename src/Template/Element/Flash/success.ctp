<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<!-- <div class="message success" onclick="this.classList.add('hidden')"></div> -->

<div class="alert alert-success alert-dismissible fade show" role="alert">
    <?= $message ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>