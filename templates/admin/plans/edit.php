<div class="wrap">
    <h2>اضافه کردن محصول جدید
        <a href="admin.php?page=wpvip_admin_plans" class="page-title-action">لیست محصولات</a>
    </h2>
    <form action="" method="post">
    <table class="form-table">
    <tr valign="top">
        <th scope="row">عنوان محصول</th>
        <td>
        <input type="text" name="title" value="<?php echo isset($plan_edit) ? $plan_edit->title :"" ?>">
         </td>
    </tr>
    <tr valign="top">
        <th scope="row">قیمت</th>
        <td>
        <input type="text" name="price">
         </td>
    </tr>
    <tr valign="top">
        <th scope="row">اعتبار روزانه</th>
        <td>
        <input type="text" name="credit">
         </td>
    </tr>
</table>
<?php submit_button(); ?>
    </form>
</div>