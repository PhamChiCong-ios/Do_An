<?php
require_once './config/database.php';
spl_autoload_register(function ($class_name) {
    require './app/model/' . $class_name . '.php';
});

$id = $_GET['id'];
$novelModel = new NovelModel();
$item = $novelModel->getNovelById($id);

$notification = '';
if(!empty($_POST['novel_ten']) && !empty($_POST['novel_tacgia']) && !empty($_POST['novel_theloai']) && !empty($_POST['novel_sochuong']) && !empty($_POST['novel_noidung']) && !empty($_FILES['novel_hinh'])) {

    if (is_uploaded_file($_FILES['novel_hinh']['tmp_name']) && move_uploaded_file($_FILES['novel_hinh']['tmp_name'], 'public/images/' . time() . $_FILES['novel_hinh']['name'])) {
        
        $NovelModel = new NovelModel();
        $NovelName = $_POST['novel_ten'];
        $NovelTacGia = $_POST['novel_tacgia'];
        $NovelTheLoai = $_POST['novel_theloai'];
        $NovelSoChuong = $_POST['novel_sochuong'];
        $NovelNoiDung = $_POST['novel_noidung'];
        $NovelHinh = time() . $_FILES['novel_hinh']['name'];

        if($NovelModel->updateNovel($NovelName, $NovelTacGia, $NovelTheLoai, $NovelSoChuong, $NovelNoiDung, $NovelHinh, $id)) {
            $notification = 'Sửa sản phẩm thành công';
            header('http://localhost:82/Do_An/manage.php');

        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <!-- Xuất thông báo -->
        <?php
        if(!empty($notification)) {
        ?>
        <div class="alert alert-success" role="alert">
            <?php echo $notification; ?>
        </div>
        <?php
        }
        ?>

        <!-- Form thêm sản phẩm -->
        <h1>Sửa truyện</h1>
        <p><a href="manage.php">Về trang quảng lý</a></p>
        <form action="updatenovel.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="novel_ten">Tên Truyện</label>
                <input type="text" name="novel_ten" id="novel_ten" class="form-control" placeholder="Nhập Tên Truyện" aria-describedby="helpId">
            </div>
            <div class="form-group">
                <label for="novel_tacgia">Tác Giả</label>
                <input type="text" name="novel_tacgia" id="novel_tacgia" class="form-control" placeholder="Nhập tên tác giả" aria-describedby="helpId">
            </div>
            <div class="form-group">
                <label for="novel_theloai">Thể Loại</label>
                <input type="text" name="novel_theloai" id="novel_theloai" class="form-control" placeholder=" nhập Thể loại" aria-describedby="helpId">
            </div>
            <div class="form-group">
                <label for="novel_sochuong">Số Chương</label>
                <input type="text" name="novel_sochuong" id="novel_sochuong" class="form-control" placeholder=" Nhập số chương" aria-describedby="helpId">
            </div>
            <div class="form-group">
                <label for="novel_noidung">Nội Dung </label>
                <textarea type="text" name="novel_noidung" id="novel_noidung" class="form-control" placeholder="Nhập nội dung" aria-describedby="helpId"></textarea>
            </div>
            <div class="form-group">
                <label for="novel_hinh">Product photo</label>
                <input type="file" name="novel_hinh" id="novel_hinh" class="form-control" placeholder=" thêm ảnh bìa" aria-describedby="helpId">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>