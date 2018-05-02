<base href="<?php echo site_url();?>">
<style>
    #div1{
        width: 200px;
        height: 200px;
    }
</style>

<div class="div1">
    <h3>添加分类</h3>
    <form action="blog/add_catalog" method="post">
        添加分类：<input type="text" name="cata">
        <input type="submit" name="sub" value="添加">
    </form>
</div>