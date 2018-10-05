<div class="container">
    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sửa danh mục hàng</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card-body card-block">
                        <div class="form-group ">
                            <form >
                                <label for="tên danh mục hàng">Tên loại hàng </label>
                                <input type="text" id="cargo_name" class="form-control" placeholder="Nhập vào tên loại hàng">

                                <label for="mô tả">Mô tả </label>
                                <textarea type="text" id="description" class="form-control" placeholder="Nhập vào mô tả loại hàng" rows="4"></textarea>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="border rounded border-secondary btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button type="button" class="border rounded border-success btn btn-success">Sửa</button>
                </div>
            </div>
        </div>
    </div>
</div>