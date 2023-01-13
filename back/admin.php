<fieldset>
    <legend>帳號管理</legend>
    <form action="./api/del_acc.php" method="post">
        <?php
        $rows = $User->all();
        ?>
        <table>
            <tr>
                <td>帳號</td>
                <td>密碼</td>
                <td>刪除</td>
            </tr>
            <?php
            foreach ($rows as $row) {

            ?>
                <tr>
                    <td><?= $row['acc']; ?></td>
                    <td>
                        <?= str_repeat("*", $row['pw']); ?>
                        <input type="password" name="pw" value="<?=$row['pw'];?>">
                    </td>
                    <td><input type="checkbox" name="<?= $row['id']; ?>"></td>
                    <input type="hidden" name="id" value="<?= $row['id']; ?>">
                </tr>
        </table>
    <?php
            }
    ?>

    <div class="ct">
        <input type="submit" value="確定刪除">
        <input type="reset" value="清空選取">
    </div>

    </form>

    <h2>新增會員</h2>
    <div style="color:red">
        *請設定您要註冊的帳號及密碼(最長12個字元)
    </div>
    <table>
        <tr>
            <td>step1：登入帳號</td>
            <td><input type="text" name="acc" id="acc"></td>
        </tr>
        <tr>
            <td>step2：登入密碼</td>
            <td><input type="password" name="pw" id="pw"></td>
        </tr>
        <tr>
            <td>step3：再次確認密碼</td>
            <td><input type="password" name="pw2" id="pw2"></td>
        </tr>
        <tr>
            <td>step4：信箱(忘記密碼時使用)</td>
            <td><input type="text" name="email" id="email"></td>
        </tr>
        <tr>
            <td>
                <button onclick="reg()">註冊</button>
                <button onclick="reset()">清除</button>
            </td>
            <td></td>
        </tr>
    </table>
</fieldset>