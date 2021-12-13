@extends('admin.layouts.admin')

@section('title', 'Настройка')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <p>Скачайте <a href="https://www.spigotmc.org/resources/gsa-locklogin.75156/" target="_blank">LockLogin</a></p>
            <p>Скачайте модуль <a href="https://karmadev.es/locklogin/modules/sql/v4/LockLoginSQL.jar">LockLoginSQL</a> для привязки к сайту</p>
            <p>1 - Поместите LockLogin.jar на ваш сервер в папку plugins</p>
            <p>2 - Запустите свой сервер, чтобы LockLogin сгенерировал свои папки</p>
            <p>3 - Остановите сервер</p>
            <p>4 - Поместите LockLoginSQL.jar в /plugins/LockLogin/plugin/modules/ ( если вы используете legacy LockLogin: plugins/LockLogin/modules )<p>
            <p>5 - Отредактируйте файл <code>/plugins/LockLogin/config.yml</code></p><br>
            <code>
                Encryption: <br>
                   ‍    ‍ Passwords: '{{config('hashing.driver')}}' <br>
            </code><br>
            <p>6 - Отредактируйте файл <code>/plugins/LockLogin/plugin/modules/LockLoginSQL/config.yml</code> ( если вы используете legacy LockLogin: <code>plugins/LockLogin/modules/LockLoginSQL/config.yml</code> )<br>
               ‍    ‍ <ins style="color: #1dc489; text-decoration: none; font-size: 19px">Убедитесь, что SemiPremium совпадает с типом вашей панели mc-online [ mc-online = true, mc-offline = false]<br>
               ‍    ‍ Тип панели: <ins style="color: #32a8a8; text-decoration: none">{{config('azuriom.game')}}</ins></ins></p><br>
            <code>
                MySQL:  <br>
                   ‍    ‍ Enabled: true<br>
                   ‍    ‍ Restricted: true ( необязательно, если вы хотите, чтобы пользователи были зарегистрированы на этом веб-сайте azuriom, чтобы присоединиться к серверу )<br>
                   ‍    ‍ SemiPremium: true|false ( зависит от типа панели online(лицензия) или offline(пиратка) )<br>
                   ‍    ‍ host: '{{config('database.connections.mysql.host')}}' <br>
                   ‍    ‍ database: '{{config('database.connections.mysql.database')}}' <br>
                   ‍    ‍ port: {{config('database.connections.mysql.port')}} <br>
                   ‍    ‍ table: users <br>
                   ‍   ‍  password: '{{config('database.connections.mysql.password')}}' <br>
            </code><br>
        </div>
    </div>
@endsection
