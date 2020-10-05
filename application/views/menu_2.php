        <div class="span10">
                아이템 지급<br>
                <input type="radio" name="send_type" value="All">전체
                <input type="radio" name="send_type" value="Individual">개별<br>
                <form method="post" action="$_SERVER[PHP_SELF]">
                        user ID: <input type="text" name="uuid"><br>
                        message: <input type="text" name="message"><br>
                        date_deadline: <input type="text" name="date_deadline" value="0"><br>
                        <input type="radio" id="sr_armor_selector" name="item_id" value="600">
                        <label for="sr_armor_selector">궁극 방어구 선택권</label><br>
                        <input type="radio" id="sr_acc_selector" name="item_id" value="601">
                        <label for="sr_acc_selector">궁극 장신구 선택권</label><br>
                        <input type="radio" id="sr_weapon_selector" name="item_id" value="602">
                        <label for="sr_weapon_selector">궁극 무기 선택권</label><br>
                        <input type="radio" id="ssr_treasure_selector" name="item_id" value="700">
                        <label for="ssr_treasure_selector">SSR 보물 선택권</label><br>
                        <input type="radio" id="ur_treasure_selector" name="item_id" value="800">
                        <label for="ur_treasure_selector">UR 보물 선택권</label><br>
                        <input type="submit" value="확인">
                </form>
        </div>
