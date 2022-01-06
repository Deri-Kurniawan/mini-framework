<?= addComponent('layouts.components.header', $title) ?>
<?= addComponent('layouts.components.navbar') ?>

<form action="<?= baseUrl('users/save'); ?>" method="post">
  <input type="text" name="name" id="name" class="" value="" placeholder="">
  <button>simpan</button>
</form>

<?= addComponent('layouts.components.footer') ?>