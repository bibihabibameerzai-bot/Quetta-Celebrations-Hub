<?php
$pageTitle='Products & Gifts'; $theme='gold'; include 'includes/header.php';
$products=$pdo->query("SELECT * FROM products ORDER BY id DESC")->fetchAll();
?>
<section class="py-5"><div class="container"><div class="row g-4">
<?php foreach($products as $p): ?><div class="col-sm-6 col-lg-4"><article class="product-card"><img onerror="this.style.display='none'" src="<?= htmlspecialchars($p['image']) ?>" alt="<?= htmlspecialchars($p['name']) ?>"><div class="product-body"><small class="text-muted"><?= htmlspecialchars($p['category']) ?></small><h4 class="mt-2"><?= htmlspecialchars($p['name']) ?></h4><p class="text-muted small"><?= htmlspecialchars($p['description']) ?></p><div class="d-flex justify-content-between align-items-center mb-3"><span class="price">PKR <?= number_format((float)$p['price']) ?></span></div><div class="d-grid gap-2"><a class="btn buy-now" href="product-detail.php?id=<?= (int)$p['id'] ?>"><i class="bi bi-bag-heart-fill me-1"></i> Buy Now</a><a class="btn btn-outline-secondary rounded-3" href="product-detail.php?id=<?= (int)$p['id'] ?>">View Details</a></div></div></article></div><?php endforeach; ?>
</div></div></section>
<?php include 'includes/footer.php'; ?>
