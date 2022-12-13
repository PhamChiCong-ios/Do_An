<?php
class NovelModel extends Db
{
    // Lấy tát cả sản phẩm
    public function getNovels()
    {
        //2. Viết câu SQL
        $sql = parent::$connection->prepare("SELECT * FROM novel");
        return parent::select($sql);
    }

    // Lấy tát cả sản phẩm theo trang
    public function getNovelsByPage($perPage, $page)
    {
        $start = $perPage * ($page - 1);
        //2. Viết câu SQL
        $sql = parent::$connection->prepare("SELECT * FROM novel LIMIT ?, ?");
        $sql->bind_param('ii', $start, $perPage);
        return parent::select($sql);
    }

    // Lấy chi tiết sản phẩm theo id
    public function getNovelById($id)
    {
        //2. Viết câu SQL
        $sql = parent::$connection->prepare("SELECT * FROM novel WHERE novel_id = ?");
        $sql->bind_param('i', $id);
        return parent::select($sql)[0];
    }

    // Lấy sản phẩm theo danh mục
    public function getNovelsByTheLoai($theloaiId)
    {
        //2. Viết câu SQL
        $sql = parent::$connection->prepare("SELECT * FROM novel INNER JOIN novel_theloai ON novel.novel_id = novel_theloai.novel_id WHERE novel_theloai.theloai_id = ?");
        $sql->bind_param('i', $theloaiId);
        return parent::select($sql);
    }
    
    // Tìm sản phẩm theo từ khóa
    public function searchNovels($keyword)
    {
        //2. Viết câu SQL
        $sql = parent::$connection->prepare("SELECT * FROM novel WHERE novel_ten LIKE ?");
        $search = "%{$keyword}%";
        $sql->bind_param('s', $search);
        return parent::select($sql);
    }

    // Lấy tổng số dòng
    public function getTotalRow()
    {
        $sql = parent::$connection->prepare("SELECT COUNT(novel_theloai) FROM novel");
        return parent::select($sql)[0]['COUNT(novel_theloai)'];
    }

    // Thêm sản phẩm
    public function createNovel($NovelName, $NovelTacGia, $NovelTheLoai, $NovelSoChuong, $NovelNoiDung, $NovelHinh)
    {
        $sql = parent::$connection->prepare("INSERT INTO `novel` (`novel_ten`, `novel_tacgia`, `novel_theloai`, `novel_sochuong`, `novel_noidung`, `novel_hinh`) VALUES (?, ?, ?, ?, ?, ?);");
        $sql->bind_param('sssiss', $NovelName, $NovelTacGia, $NovelTheLoai, $NovelSoChuong, $NovelNoiDung, $NovelHinh);
        return $sql->execute();
    }
    
    // Cập nhật sản phẩm
    public function updateNovel($NovelName, $NovelTacGia, $NovelTheLoai, $NovelSoChuong, $NovelNoiDung, $NovelHinh, $id)
    {
        $sql = parent::$connection->prepare("UPDATE `novel` SET `novel_ten` = ?, `novel_tacgia` = ?, `novel_theloai` = ?, `novel_sochuong` = ?, `novel_noidung` = ?, `novel_hinh` = ? WHERE `novel`.`novel_id` = ?;");
        $sql->bind_param('sssissi', $NovelName, $NovelTacGia, $NovelTheLoai, $NovelSoChuong, $NovelNoiDung, $NovelHinh, $id);
        return $sql->execute();
    }

    // Xóa sản phẩm
    public function deleteNovel($id)
    {
        $sql = parent::$connection->prepare("DELETE FROM `novel` WHERE `novel`.`novel_id` = ?");
        $sql->bind_param('i', $id);
        return $sql->execute();
    }
    public function updateView($id)
    {
        $sql = parent::$connection->prepare("UPDATE `novel` SET `novel_view` = `novel_view` + 1 WHERE `novel`.`novel_id` = ?;");
        $sql->bind_param('i', $id);
        return $sql->execute();
    }
}
