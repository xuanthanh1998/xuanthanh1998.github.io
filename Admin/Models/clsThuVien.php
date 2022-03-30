<?php
class clsThuVien
{
    public function getUploadFile($inputName, $Folder)
    {
        $img = $_FILES[$inputName]["name"];
        $tempFile = $_FILES[$inputName]["tmp_name"];
        move_uploaded_file($tempFile, "$Folder/$img");
        return $img;
    }
    public function ShowOptions($rows, $tencotValue, $tencotLabel, $selectedValue)
    {
        foreach($rows as $row)
        {
            $value = $row[$tencotValue];
            $label = $row[$tencotLabel];
            if($value==$selectedValue)
                echo "\n<option value=\"$value\" selected> $label </option>";
            else
                echo "\n<option value=\"$value\" > $label </option>";
        }
    }
}
?>