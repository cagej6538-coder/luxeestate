<?php
require_once 'config.php';
$page_title='Premium Homes';
$featured=$conn->query("SELECT * FROM properties WHERE featured=1 AND status='Available' ORDER BY id DESC LIMIT 6");
include 'includes/header.php';
?>
<section class="hero">
<div class="container"><div class="row align-items-center min-vh-100"><div class="col-lg-7 reveal">
<div class="eyebrow mb-3">Lagos • Abuja • Beyond</div>
<h1>Find a home that feels <em>exceptional.</em></h1>
<p class="lead muted my-4" style="max-width:650px">Discover handpicked homes, apartments and investment properties with a smoother, smarter buying and renting experience.</p>
<form class="search-box row g-0 align-items-center" action="properties.php">
<div class="col-md-5"><input name="q" placeholder="Search location or property"></div>
<div class="col-md-3"><select name="type"><option value="">Buy or Rent</option><option>Sale</option><option>Rent</option></select></div>
<div class="col-md-2"><select name="category"><option value="">Type</option><option>House</option><option>Villa</option><option>Apartment</option></select></div>
<div class="col-md-2"><button class="btn btn-gold w-100 py-3">Search</button></div>
</form></div>
<div class="col-lg-4 offset-lg-1 mt-5 mt-lg-0 reveal"><div class="hero-card float"><div class="small muted">Featured residence</div><h4 class="mt-2">The Emerald Residence</h4><p class="muted mb-3">Ikoyi, Lagos • 5 beds • 6 baths</p><div class="d-flex justify-content-between align-items-center"><strong class="price">₦185M</strong><a href="property.php?id=1" class="btn btn-outline-light btn-sm">Explore →</a></div></div></div>
</div></div>
</section>
<section class="stats py-5"><div class="container"><div class="row text-center g-4">
<div class="col-6 col-lg-3"><div class="stat-num" data-count="1200">0</div><div class="muted">Properties</div></div>
<div class="col-6 col-lg-3"><div class="stat-num" data-count="850">0</div><div class="muted">Happy clients</div></div>
<div class="col-6 col-lg-3"><div class="stat-num" data-count="24">0</div><div class="muted">Expert agents</div></div>
<div class="col-6 col-lg-3"><div class="stat-num" data-count="12">0</div><div class="muted">Years experience</div></div>
</div></div></section>
<section class="section"><div class="container"><div class="d-flex justify-content-between align-items-end mb-5"><div><div class="eyebrow">Curated for you</div><h2 class="section-title mb-2">Featured properties</h2><p class="muted">Beautiful spaces selected for exceptional living.</p></div><a href="properties.php" class="btn btn-outline-light">View all</a></div>
<div class="row g-4"><?php while($p=$featured->fetch_assoc()): ?><div class="col-md-6 col-lg-4 reveal">
<div class="property-card"><div class="img-wrap"><img class="w-100 property-img" src="<?=e($p['image'])?>" alt="<?=e($p['title'])?>"><span class="badge-status"><?=e($p['type'])?></span></div><div class="p-4"><div class="d-flex justify-content-between"><h5><?=e($p['title'])?></h5><button class="save-property btn btn-sm text-warning" data-id="<?=$p['id']?>">♡</button></div><p class="muted small">📍 <?=e($p['location'])?></p><div class="d-flex justify-content-between"><span class="muted"><?=$p['bedrooms']?> beds • <?=$p['bathrooms']?> baths</span><span class="price">₦<?=number_format($p['price'])?></span></div><a class="stretched-link" href="property.php?id=<?=$p['id']?>"></a></div></div>
</div><?php endwhile; ?></div></div></section>
<section class="section pt-0"><div class="container"><div class="row g-4"><div class="col-lg-4 reveal"><div class="feature"><div class="icon">⌂</div><h4>Curated homes</h4><p class="muted">Every listing is presented with the details you need to make a confident decision.</p></div></div><div class="col-lg-4 reveal"><div class="feature"><div class="icon">✦</div><h4>Human expertise</h4><p class="muted">Work with people who understand neighborhoods, pricing and what makes a home right.</p></div></div><div class="col-lg-4 reveal"><div class="feature"><div class="icon">◈</div><h4>Easy viewings</h4><p class="muted">Save favorites and request a property tour directly from any listing.</p></div></div></div></div></section>
<?php include 'includes/footer.php'; ?>