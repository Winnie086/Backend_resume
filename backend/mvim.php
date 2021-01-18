
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli"><?=$tstr[$do];?></p>
    <form method="post" action="./api/edit.php">
        <table width="100%">
            <tbody>
                <h4 style="text-align:center">經歷</h4>
                <tr class="dkb">
                    <td width="30%">時間</td>
                    <td width="30%">單位</td>
                    <td width="30%">內容</td>
                    <td width="5%">顯示</td>
                    <td width="5%">刪除</td>
                </tr>
                
                <?php
                $rows=$Mvim->all();

                foreach($rows as $row){
                ?>
                <tr>
                    <td><input style="width:98%" type="text" name="period[]" value="<?=$row['period'];?>";?></td>
                    <td><input style="width:98%" type="text" name="place[]" value="<?=$row['place'];?>";?></td>
                    <td><textarea name="subject[]" style="width:100%;height:4em"><?=$row['subject'];?></textarea> </td>
                    <td><input type="checkbox" name="sh[]" value="<?=$row['id'];?>"></td>
                    <td><input type="checkbox" name="del[]" value="<?=$row['id'];?>"></td>
                </tr>

                <?php
                    }
                    ?>
        </table>

        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <input type="hidden" name="table" value="<?=$do;?>">
                    <td width="200px">
                     <input type="button"
                            onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;./modal/<?=$do;?>.php?table=<?=$do;?>&#39;)"
                            value="<?=$addstr[$do];?>"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>


        
        <br>

        <table width="100%">
            <tbody>
                <h4 style="text-align:center">學歷</h4>
                <tr class="dkb">
                    <td width="30%">時間</td>
                    <td width="30%">單位</td>
                    <td width="30%">內容</td>
                    <td width="5%">顯示</td>
                    <td width="5%">刪除</td>
                </tr>
                
                <?php
                $rowws=$Mvim01->all();

                foreach($rowws as $roww){
                ?>
                <tr>
                    <td><input style="width:98%" type="text" name="period[]" value="<?=$roww['period'];?>";?></td>
                    <td><input style="width:98%" type="text" name="place[]" value="<?=$roww['place'];?>";?></td>
                    <td><textarea name="subject[]" style="width:100%;height:4em"><?=$roww['subject'];?></textarea> </td>
                    <td><input type="checkbox" name="sh[]" value="<?=$roww['id'];?>"></td>
                    <td><input type="checkbox" name="del[]" value="<?=$roww['id'];?>"></td>
                </tr>

                <?php
                    }
                    ?>
        </table>
      


        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <input type="hidden" name="table" value="<?=$do;?>">
                    <td width="200px">
                     <input type="button"
                            onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;./modal/<?=$do;?>.php?table=<?=$do;?>&#39;)"
                            value="<?=$addstr[$do];?>"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>

    </form>
</div>