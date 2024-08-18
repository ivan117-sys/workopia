<?php loadPartial('head'); ?>
<?php loadPartial('navbar'); ?>

<section>
  <div class="container mx-auto p-4 mt-4">
    <div class="text-center text-3xl mb-4 font-bold border border-gray-300 p-3"><?= $status ?></div>
    <p class="text-center text-2xl mb-4">
      <?= $message ?>
    </p>
    <a class="text-center block" href="/listings">Go back to listings</a>
  </div>
</section>


<?php loadPartial('footer'); ?>