<div class="menu-header">
	<h4 class="m-0">
		Cepi Store
	</h4>

	<ul class="menu">
		<li class="menu-item <?php if ($active=="home") {echo "active"; }?>">
			<a href="<?php echo base_url() ?>">
				/ Home /
			</a>
		</li>
		<li class="menu-item <?php if ($active=="gallery") {echo "active"; }?>">
			<a href="<?php echo base_url() ?>frontend/gallery">
				/ Gallery /
			</a>
		</li>
		<li class="menu-item">
			<a href="<?php echo base_url() ?>login">
				/ Login /
			</a>
		</li>
	</ul>
</div>
