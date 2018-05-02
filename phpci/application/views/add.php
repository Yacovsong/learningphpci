<base href="<?php echo site_url();?>">
<meta charset="utf-8">
<form action="Blog/add" method="post">
    标题：<input type="text" name="title">
    <select name="catalog" id="">
        <?php
            foreach ($cata as $value) {
                ?>
                <option value="<?php echo $value->CATALOG_ID?>"><?PHP echo $value->NAME?></option>
                <?php
            }
        ?>
    </select><br>
    <textarea name="con" id="" cols="20" rows="10"></textarea><br>
    <input type="submit" name="sub" value="添加文章 ">
</form>
<?php
