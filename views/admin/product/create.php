      <div class="row">
        <form action="<?= BASE_URL_ADMIN .'&action=store-product' ?>" method="POST" enctype="multipart/form-data">
            <div class="mb-3 mt-3">
              <label class="form-label">Tên sản phẩm:</label>
              <input type="text" class="form-control" name="name">
            </div>
            <div class="mb-3 mt-3">
                <label class="form-label">Danh mục:</label>
                <select name="category_id" id="" class="form-control">
                    <?php foreach($categories as $cat): ?>
                        <option value="<?=$cat['id']?>"><?=$cat['name']?></option>
                    <?php endforeach;?>
                </select>
              </div>
              <div class="mb-3 mt-3">
                <label class="form-label">Mô tả:</label>
                <textarea name="description" id="" class="form-control"></textarea>
              </div>
              <div class="mb-3 mt-3">
                <label class="form-label">Giá:</label>
                <input type="number" class="form-control" name="price">
              </div>
              <div class="mb-3 mt-3">
                <label class="form-label">Số lượng:</label>
                <input type="number" class="form-control" name="quantity">
              </div>
              <div class="mb-3 mt-3">
                <label class="form-label">Ảnh:</label>
                <input type="file" class="form-control" name="image">
              </div>
            <button type="submit" class="btn btn-primary">Tạo mới</button>
        </form>