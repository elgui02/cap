<?php use_helper('Text') ?>
<div id="job">
	<h1><?php $jobeet_job->getCompany() ?></h1>
	<h2><?php $jobeet_job->getLocation() ?></h2>
	<h3>
		<?php echo $jobeet_job->getPosition() ?>
		<small> - <?php echo $jobeet_job->getType() ?></small>
	</h3>
	
	<?php if($jobeet_job->getLogo()): ?>
		<div class="logo">
			<a href="<?php echo $jobeet_job->geturl() ?>">
			<img src="/uploads/<?php echo $jobeet_job->getLogo() ?>" />
			</a> 
		</div>
	<?php endif; ?>

	<div class="description">
		<?php echo simple_format_text($jobeet_job->getDescription()) ?>
	</div>

	<h4>¿Como aplicar?</h4>
	<p class="how_to_apply"><?php echo $jobeet_job->getHowToApply() ?></p>

	<div class="meta">
		<small>creado el <?php echo $jobeet_job->getCreatedAt()  //$jobeet_job->getDateTimeObject('create_at')->format('d/m/Y') ?></small>
	</div>

	<div style="padding: 20px 0">
		<a href="<?php echo url_for('@job_edit?id='.$jobeet_job->getId()) ?>">
		Editar
		</a>
	</div>
</div>
