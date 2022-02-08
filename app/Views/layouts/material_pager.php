<?php $pager->setSurroundCount(2) ?>

<nav aria-label="Page navigation example">
  <ul class="pagination">
 
    <?php if ($pager->hasPrevious()) : ?>
    <li class="page-item">
      <a class="page-link" href="<?= $pager->getPrevious() ?>" aria-label="<?= lang('Pager.last') ?>">
        <span class="material-icons">
          first_page
        </span>
        <span class="sr-only"><?= lang('Pager.last') ?></span>
      </a>
    </li>
    <?php endif ?>
    
    <?php foreach ($pager->links() as $link): ?>
    <li class="page-item <?= $link['active'] ? 'active' : '' ?>">
      <a class="page-link" href="<?= $link['uri'] ?>"><?= $link['title'] ?></a>
    </li>
    <?php endforeach ?>

    <?php if ($pager->hasNext()) : ?>
    <li class="page-item">
      <a class="page-link" href="<?= $pager->getNext() ?>" aria-label="<?= lang('Pager.next') ?>">
        <span class="material-icons">
          last_page
        </span>
        <span class="sr-only"><?= lang('Pager.next') ?></span>
      </a>
    </li>
    <?php endif ?>
  </ul>
</nav>