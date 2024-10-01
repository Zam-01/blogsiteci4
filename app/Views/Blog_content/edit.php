<?= $this->extend('layout/templates'); ?>
<?= $this->section('body-content'); ?>

<header class="ms-5 mt-4 p-4">
  <h1>
    create your blogs here
  </h1>
  <article class="w-75">
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates ab ad voluptatibus id. Saepe iste architecto asperiores doloremque quas ab. veniam ex numquam hic autem provident ratione, aut dicta dolore et laudantium nobis ut alias quae doloribus soluta nesciunt! Earum quasi corrupti deserunt quaerat incidunt id natus neque, impedit facilis magnam.
    </p>
  </article>
</header>
<main class="create">
  <div class="w-75 form-input">
    <form class="row g-3" method="post" action="/update/<?= $user_edit['id']; ?>">
      <?= csrf_field(); ?>
      <div class="col-md-6">
        <label for="inputName" class="form-label">Nama</label>
        <input type="text" class="form-control" id="inputName" name="Nama" value="<?= $user_edit['Nama']; ?>">
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Judul blogs</label>
        <input type="text" class="form-control" id="inputPassword4" name="Judul_blogs" value="<?= $user_edit['Judul_blogs']; ?>">
      </div>
      <div class="col-md-6">
        <label for="Tanggal_create" class="form-label">Tanggal pembuatan</label>
        <input type="date" class="form-control" id="Tanggal_crate" name="Tanggal_create" value="<?= $user_edit['Tanggal_create']; ?>">
      </div>
      <div class="col-md-6">
        <label for="Referensi" class="form-label">Referensi</label>
        <input type="url" class="form-control" id="Referensi" placeholder="masukkan url website referensi" name="Referensi" value="<?= $user_edit['Referensi']; ?>">
      </div>
      <div class="form-floating">
        <textarea class="form-control" style="height: 150px" name="Blogs" id="Blogs">
          <?= $user_edit['Blogs']; ?>
          </textarea>
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-outline-primary mt-3">create</button>
      </div>
    </form>
  </div>
  <section class="images-hero">
    <img src="/img/Programming.png" alt="">
  </section>
</main>
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
<script>
  CKEDITOR.replace('Blogs')
</script>
<?= $this->endSection(); ?>