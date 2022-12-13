<?php
class TheLoaiModel extends Db
{
    public function getTheLoai()
    {
        //2. Viết câu SQL
        $sql = parent::$connection->prepare("SELECT * FROM theloai");
        return parent::select($sql);
    }
}
