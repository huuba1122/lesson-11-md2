
<style>
    table{
        margin-top: 50px;
        border-collapse: collapse;
        border: 1px solid;
    }
    th, td{
        border: 1px solid;
        font-size: 16px;
        padding: 5px;
    }
</style>
<h2><a href="index.php">thu thap so dien thoai</a></h2>
<table>
    <tr><td colspan="3">Danh sach so dien thoai cac nha mang</td></tr>
    <tr>
        <th>Viettel</th>
        <th>VinaPhone</th>
        <th>MobiFone</th>
    </tr>
    <tr>
        <td><?php echo showTelephoneNumbers($Viettel)?></td>
        <td><?php echo showTelephoneNumbers($VinaPhone)?></td>
        <td><?php echo showTelephoneNumbers($MobiFone)?></td>
    </tr>
</table>