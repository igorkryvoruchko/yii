<div>
    <h1>Бриф на разработку сайта</h1>

    <form id="msform" method="post" action="">
        <!-- progressbar
        <ul id="progressbar">
            <li class="active">Personal Details</li>
            <li>Address</li>
            <li>Comment</li>
            <li>Result</li>
        </ul>
         fieldsets -->
        <fieldset id="first_field">
            <label for="title">Название вашего сайта:</label>
            <input type="text" id="title" name="title"><br>

            <label>Что нужно сделать:</label>
            <button>Создать новый</button>
            <button>Обновить старый</button><br>
            <label for="domain">Доменное имя:</label>
            <input type="text" id="domain" name="domain"><br>
            <input type="checkbox" name="register">
            <input type="checkbox" name="success">
            <p>Что не устраивает в существующем интернет-магазине?</p>
            <input type="checkbox" name="design" id="design"> <label></label>
            <input type="checkbox" name="admin_penal" id="admin_penal">
            <input type="checkbox" name="speed" id="speed">
            <input type="checkbox" name="usability" id="usability">
            <input type="checkbox" name="ranging" id="ranging">
            <input type="checkbox" name="else" id="else">
            <textarea name="else_text" placeholder="Напишите, что еще вы хотите изменить в своем интернет-магазине" id="else_text"></textarea>
            <br><label for="user_name">Ваше ФИО:</label>
            <input type="text" id="user_name" name="user_name"><br>
            <label for="email">Ваш email:</label>
            <input type="text" id="email" name="email"><br>
            <label for="phone">Ваш телефон:</label>
            <input type="text" id="phone" name="phone"><br>
            <input type="button" name="next" class="next action-button" data-id="3" value="Вперед →" />
        </fieldset>
        <fieldset>
            <h2 class="fs-title">Аудитория</h2>
            <label for="auditory">Целевая аудитория вашего сайта:</label>
            <input type="text" class="js-range-slider" id="auditory" name="my_range" value="" />
            <label for="age_range">Возраст:</label>
            <input type="text" class="js-range-slider" id="age_range" name="age_range" value="" />
            <p>Социальная группа:</p>
            <input type="checkbox" name="middle_class" id="middle_class"> <label for="middle_class"></label>
            <input type="checkbox" name="top_class" id="top_class"> <label for="top_class"></label>
            <input type="checkbox" name="else_class" id="else_class"> <label for="else_class"></label>
            <textarea name="else_class_text" id="else_class_text" placeholder="Опишите наиболее типичных посетителей вашего сайта"></textarea>
            <label for="locations">География аудитории (города, области, страны):</label>
            <input type="text" name="locations" id="locations">
            <input type="button" name="previous" class="previous action-button" data-id="1" value="Назад" />
            <input type="submit" name="submit" class="submit action-button" value="Отправить" />
        </fieldset>
    </form>
</div>
<script>

</script>