<nav aria-label="Page navigation">
    <ul class="pagination justify-content-end">
        <li class="page-item <?= $page == 1 ? 'disabled' : '' ?>">
            <a class="page-link" href="#" aria-label="Previous" onclick="gotoPage(<?= $page - 1 ?>, event)">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
            </a>
        </li>
        <?php for ($i = 1; $i <= $totalPage; $i++) : ?>
            <li class="page-item <?= $i == $page ? 'active' : '' ?>"><a class="page-link" href="#" onclick="gotoPage(<?= $i ?>, event)"><?= $i ?></a></li>
        <?php endfor ?>
        <li class="page-item <?= $page == $totalPage ? 'disabled' : '' ?>">
            <a class="page-link" href="#" aria-label="Next" onclick="gotoPage(<?= $page + 1 ?>, event)">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
            </a>
        </li>
    </ul>
</nav>