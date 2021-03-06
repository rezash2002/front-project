<!DOCTYPE html>
<html lang="en" dir="rtl">
  <head>
    <meta charset="utf-8" />
    <title>Edit product</title>
    <link rel="stylesheet" href="../account/style.css" />
  </head>
  <body>
    <div class="grid"></div>
    <div class="wrapper">
      <div class="title-text">
        <div class="title">Edit Product</div>
      </div>
      <div class="form-container">
        <div class="form-inner">
          <form action="edit_product_controller.php?id=3" method="post">
            <div class="field">
              <label for="product-name" class="text">نام:</label>
              <input
                type="text"
                placeholder="نام محصول"
                required
                id="product-name"
                name="product-name"
                autofocus
                value="<?=$nameProduct?>"
              />
            </div>
            <div class="field">
              <label for="category" class="text">دسته بندی:</label>
              <input type="text" placeholder="دسته بندی محصول" id="category" value="<?=$category ?>" name="category" />
            </div>
            <div class="field">
              <label for="price" class="text">قیمت:</label>
              <input
                type="number"
                placeholder="قیمت محصول"
                required
                id="price"
                name="price"
                value="<?=$price ?>"
              />
            </div>
            <div class="field">
              <label class="text">تصویر محصول خود را انتخاب کنید</label>
              <label for="Product-Pic" class="choose_file">choose file</label>
              <input type="file" id="Product-Pic" name="product_pic" />
              <label id="pic-file" class="file_name"></label>
            </div>
            <div class="field">
              <label class="text">فایل PDF خود را انتخاب نمایید</label>
              <label for="product-PDF" class="choose_file">choose file</label>
              <input type="file" id="product-PDF" name="product_PDF" />
              <label id="PDF-file" class="file_name"></label>
            </div>
            <div class="field">
              <label for="textarea" class="text">درباره محصول:</label>
              <textarea
                id="textarea"
                placeholder="توضیحاتی درباره محصول خود بنویسید... "
                required
                name="caption"
              
              ><?=$caption?></textarea>
            </div>
            <div class="field">
              <input type="reset" value="Reset" />
              <input type="submit" value="Update" />
            </div>
          </form>
        </div>
      </div>
    </div>
    <script>
      const fileInputpic = document.getElementById("Product-Pic");
      const fileNamepic = document.getElementById("pic-file");
      fileInputpic.addEventListener("change", picture);
      function picture() {
        const filespic = fileInputpic.files;

        if (filespic.length !== 0) {
          for (const filepic of filespic) {
            fileNamepic.textContent = filepic.name;
          }
        }
      }
      const fileInputPDF = document.getElementById("product-PDF");
      const fileNamePDF = document.getElementById("PDF-file");
      fileInputPDF.addEventListener("change", pdf);
      function pdf() {
        const filesPDF = fileInputPDF.files;

        if (filesPDF.length !== 0) {
          for (const filePDF of filesPDF) {
            fileNamePDF.textContent = filePDF.name;
          }
        }
      }
    </script>
    <div class="grid"></div>
  </body>
</html>
