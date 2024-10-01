<?= $this->extend('layout/templates'); ?>
<?= $this->section('body-content'); ?>
<main class="view-content">
  <header class="user-data">
    <img src="/img/Hello.png" alt="">
    <article>
      <span>
        <h1>Hallo saya <?= $user_view['Nama']; ?></h1>
        <h2>Judul blogs <?= $user_view['Judul_blogs']; ?></h2>
        <h2>Tanggal <?= $user_view['Tanggal_create']; ?></h2>
      </span>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla molestias consequatur sequi delectus doloribus illum nesciunt error debitis assumenda aliquid maiores nihil vel perspiciatis, deleniti cum sit laborum ad cumque nobis nemo inventore earum. Quidem similique reprehenderit nostrum odit libero enim quod. Dolorem, nam quis.</p>
    </article>
  </header>
  <hr>
  <div class="content-view">
    <section>
      <article>
        <?= $user_view['Blogs']; ?>
      </article>
    </section>
    <div class="back">
      <div class="buttons">
        <a href="/edit/<?= $user_view['id']; ?>" class="btn btn-outline-info">Edit</a>
        <form action="/hapus/<?= $user_view['id']; ?>" method="post">
          <?= csrf_field(); ?>
          <input type="hidden" name="_method" value="delete">
          <button class=" btn btn-outline-danger"  type="submit">Delete</a>
        </form>
      </div>
      <div class="user-not-login">
        <a href="/back" class="btn btn-outline-primary">Kembali</a>
        <a href="<?= $user_view['Referensi']; ?>" class="btn btn-outline-primary">Referensi Blog saya</a>
      </div>
    </div>
  </div>
  <hr>
</main>

<?= $this->endSection(); ?>