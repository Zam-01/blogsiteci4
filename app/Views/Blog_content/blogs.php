<?= $this->extend('layout/templates'); ?>
<?= $this->section('body-content'); ?>
<main class="blogs-view">
  <section class="hero-blogs">
    <img src="/img/Blog.png" alt="">
    <header>
      <h1>Blog</h1>
      <article>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam aliquam neque assumenda ut enim quis doloremque, asperiores nisi ipsum eum ratione labore praesentium, cum velit amet recusandae, architecto ex porro reprehenderit consequatur. Minima molestias quisquam obcaecati nulla dolorum, veritatis suscipit perferendis odit explicabo quam totam recusandae, quaerat voluptatum praesentium, dolorem iste reiciendis architecto animi esse aliquam. Distinctio soluta aspernatur beatae possimus, commodi nisi quis magni quae facere aperiam similique non, explicabo vel voluptatum consectetur saepe animi dicta libero laboriosam dolore alias. Exercitationem voluptatum nostrum alias reicie
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit error nemo ea possimus, quibusdam, non quos autem praesentium esse architecto, voluptas ipsum vitae? Aperiam quisquam vero magni. Nulla libero ex itaque! Alias laborum ipsa ipsam reiciendis nemo. Molestias officiis odit quasi ipsa sapiente optio, corrupti iusto. Error impedit praesentium ipsum.
        </p>
      </article>
    </header>
  </section>
  <!-- pengulangan data buat disini -->
  <div class="views">
    <?php foreach ($blog as $v) : ?>
      <div class="content-blogs">
        <section class="create-content">
          <div class="data-user">
            <b>Nama = <i><?= $v['Nama']; ?></i></b>
            <b>Tanggal pembuatan = <i><?= $v['Tanggal_create']; ?></i></b>
          </div>
          <article class="value-content">
            <b>Judul blogs = <i><?= $v['Judul_blogs']; ?></i></b>
          </article>
        </section>
        <div class="buttons m-2 p-2">
          <a href="/read/<?= $v['id']; ?>" class="btn btn-outline-primary">Read more</a>
        </div>
      </div>
    <?php endforeach; ?>
    <!-- end pengulangan -->
  </div>
</main>
<?= $this->endSection(); ?>