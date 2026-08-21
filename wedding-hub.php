<?php
$pageTitle='Quetta Wedding Hub'; $theme='burgundy'; include 'includes/header.php';
$vendors=$pdo->query("SELECT * FROM services ORDER BY id DESC")->fetchAll();
$cats=[];
foreach($vendors as $v){$cats[$v['category']]=true;}
?>
<section class="py-5"><div class="container">
<div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end gap-3 mb-4">
<div><p class="eyebrow" style="color:var(--burgundy)">WEDDING MARKETPLACE</p><h2>Find the right people for your day</h2><p class="text-muted mb-0">Browse local celebration services and send a direct inquiry.</p></div>
<div style="min-width:240px"><label class="form-label fw-semibold">Filter by category</label><select id="vendorFilter" class="form-select"><option value="all">All Categories</option><?php foreach(array_keys($cats) as $c): ?><option value="<?= htmlspecialchars(strtolower($c)) ?>"><?= htmlspecialchars($c) ?></option><?php endforeach; ?></select></div>
</div>
<div class="row g-4" id="vendorGrid">
<?php foreach($vendors as $v): ?>
<div class="col-md-6 col-lg-4 vendor-item" data-category="<?= htmlspecialchars(strtolower($v['category'])) ?>">
<article class="content-card h-100 p-3"><img onerror="this.style.display='none'" src="<?= htmlspecialchars($v['image']) ?>" class="w-100 rounded-4" style="height:230px;object-fit:cover" alt="<?= htmlspecialchars($v['name']) ?>">
<div class="p-3"><span class="badge text-bg-light"><?= htmlspecialchars($v['category']) ?></span><h4 class="mt-3"><?= htmlspecialchars($v['name']) ?></h4><p class="text-muted"><?= htmlspecialchars($v['description']) ?></p><a href="contact.php?service=<?= urlencode($v['name']) ?>" class="btn btn-brand" style="background:var(--burgundy)">Contact / Inquire</a></div></article>
</div>
<?php endforeach; ?>
</div>
</div></section>
<script>
document.addEventListener('DOMContentLoaded',()=>{const f=document.getElementById('vendorFilter');const cards=document.querySelectorAll('.vendor-item');f?.addEventListener('change',()=>{const v=f.value;cards.forEach(c=>c.classList.toggle('d-none',v!=='all'&&c.dataset.category!==v));});});
</script>
<?php include 'includes/footer.php'; ?>