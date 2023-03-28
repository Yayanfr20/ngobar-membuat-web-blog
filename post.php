<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Jals blog - Posting</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
     <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
     <link rel="stylesheet" href="assets/css/post.css">
</head>

<body>
     <!-- start navbar -->
     <div class="container box-navbar">
          <div class="navbar">
               <p class="brand">Jals blog</p>
               <div class="menu">
                    <a href=""><i class="bi bi-house"></i>Home</a>
                    <a href=""><i class="bi bi-plus-circle"></i>Post</a>
               </div>
          </div>
     </div>
     <!-- end navbar -->
     <div class="container">
          <form action="" class="form-post">
               <h3>Posting</h3>
               <hr>
               <div class="mb-3">
                    <label for="">Judul postingan</label>
                    <input type="text" name="judul">
               </div>
               <div class="mb-3">
                    <label for="">Tanggal postingan</label>
                    <input type="date" name="tanggal">
               </div>
               <div class="mb-3">
                    <label for="">kategori postingan</label>
                    <select name="kategori" id="">
                         <option value="">Pilih Kategori!</option>
                         <option value="">Web programming</option>
                         <option value="">Potografer</option>
                         <option value="">Berita</option>
                    </select>
               </div>
               <div class="mb-3">
                    <label for="">article</label>
                    <textarea name="" id="editor1" cols="30" rows="10"></textarea>
               </div>
               <div class="mb-3">
                    <button type="submit" name="posting">Posting</button>
               </div>
          </form>
     </div>
     <script>
     CKEDITOR.replace('editor1');
     </script>
</body>

</html>