<?php
    function ShowErrors($errors,$name){
        if ($errors->has($name))
        return '<div class="alert bg-danger" role="alert">
            <strong>'.$errors->first($name).'</strong>
        </div>';
    }

    
    function GetCategory($mang, $parent, $shift, $id_select)
    {
        foreach($mang as $value)
        {
            if ($value['parent']==$parent)
            {
                if($value['id']==$id_select)
                {
                    echo "<option value=".$value['id']." selected>".$shift.$value['name']."</option>";
                }
                else 
                {
                    echo "<option value=".$value['id']." >".$shift.$value['name']."</option>";
                }
                GetCategory($mang, $value['id'],$shift."---|",$id_select);
            }
        }
    }


    function ShowCategory($mang,$parent,$shift){
        foreach($mang as $value){
            if ($value['parent']==$parent){
                    echo '<div class="item-menu"><span>'.$shift.$value['name'].'</span>
                    <div class="category-fix">
                        <a class="btn-category btn-primary" href="/admin/category/edit/'.$value['id'].'"><i class="fa fa-edit"></i></a>
                        <a onclick="return Del_cate()" class="btn-category btn-danger" href="/admin/category/delete/'.$value['id'].'"><i class="fas fa-times"></i></i></a>
                    </div>
                </div>';

                ShowCategory($mang, $value['id'],$shift."---|");
            }
        }
    }
