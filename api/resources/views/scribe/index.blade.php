<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var baseUrl = "http://api.localhost";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-4.0.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-4.0.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image" />
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-user">
                                <a href="#endpoints-GETapi-user">GET api/user</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-org-users">
                                <a href="#endpoints-GETapi-v1-org-users">GET api/v1/org/users</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                            <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
                    </ul>
        <ul class="toc-footer" id="last-updated">
        <li>Last updated: October 5 2022</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">http://api.localhost</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GETapi-user">GET api/user</h2>

<p>
</p>



<span id="example-requests-GETapi-user">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://api.localhost/api/user" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.localhost/api/user"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-user">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-user" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-user"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user"></code></pre>
</span>
<span id="execution-error-GETapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user"></code></pre>
</span>
<form id="form-GETapi-user" data-method="GET"
      data-path="api/user"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-user', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-user"
                    onclick="tryItOut('GETapi-user');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-user"
                    onclick="cancelTryOut('GETapi-user');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-user" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/user</code></b>
        </p>
                    </form>

                    <h2 id="endpoints-GETapi-v1-org-users">GET api/v1/org/users</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-org-users">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://api.localhost/api/v1/org/users" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.localhost/api/v1/org/users"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-org-users">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 59
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: &quot;976b48f0-7fd3-4d03-82ce-395ddeafe5d5&quot;,
            &quot;name&quot;: &quot;Alexandrov.H.976b48f0-7fd3-4d03-82ce-395ddeafe5d5&quot;,
            &quot;hide&quot;: false,
            &quot;thumbnail&quot;: true,
            &quot;first_name&quot;: &quot;Герман&quot;,
            &quot;last_name&quot;: &quot;Александров&quot;,
            &quot;middle_name&quot;: &quot;Евгеньевич&quot;,
            &quot;birthday&quot;: &quot;25.01&quot;,
            &quot;email&quot;: &quot;hermansochi@ya.ru&quot;,
            &quot;cn&quot;: &quot;Александров Герман Евгеньевич&quot;,
            &quot;telephone&quot;: &quot;6677&quot;,
            &quot;mobile&quot;: &quot;9899001010&quot;,
            &quot;title&quot;: &quot;Web developer&quot;,
            &quot;department&quot;: &quot;Dream team&quot;,
            &quot;company&quot;: &quot;Looking for a job&quot;,
            &quot;created_at&quot;: &quot;2022-10-05T08:14:23.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-10-05T08:14:23.000000Z&quot;
        },
        {
            &quot;id&quot;: &quot;976d5103-ced0-469c-83aa-4bbc0d4d44c3&quot;,
            &quot;name&quot;: &quot;Turova.T.c94bf411-fc97-3e73-8bb0-9ff2c77da9f6&quot;,
            &quot;hide&quot;: false,
            &quot;thumbnail&quot;: false,
            &quot;first_name&quot;: &quot;Таисия&quot;,
            &quot;last_name&quot;: &quot;Турова&quot;,
            &quot;middle_name&quot;: &quot;Фёдоровна&quot;,
            &quot;birthday&quot;: &quot;10.02&quot;,
            &quot;email&quot;: &quot;Turova.T@example.ru&quot;,
            &quot;cn&quot;: &quot;Турова Таисия Фёдоровна&quot;,
            &quot;telephone&quot;: &quot;1320&quot;,
            &quot;mobile&quot;: &quot;9895446716&quot;,
            &quot;title&quot;: &quot;Круговоротчик&quot;,
            &quot;department&quot;: &quot;Отдел закупок&quot;,
            &quot;company&quot;: &quot;ООО \&quot;Рогатрон\&quot;&quot;,
            &quot;created_at&quot;: &quot;2022-10-05T08:14:24.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-10-05T08:14:24.000000Z&quot;
        },
        {
            &quot;id&quot;: &quot;976d5103-d15a-45fa-bfe9-92a435e25ab1&quot;,
            &quot;name&quot;: &quot;Panov.V.23710e49-069b-3138-a9b4-e3c7bc4489c4&quot;,
            &quot;hide&quot;: false,
            &quot;thumbnail&quot;: false,
            &quot;first_name&quot;: &quot;Виль&quot;,
            &quot;last_name&quot;: &quot;Панов&quot;,
            &quot;middle_name&quot;: &quot;Алексеевич&quot;,
            &quot;birthday&quot;: &quot;10.11&quot;,
            &quot;email&quot;: &quot;Panov.V@example.ru&quot;,
            &quot;cn&quot;: &quot;Панов Виль Алексеевич&quot;,
            &quot;telephone&quot;: &quot;5916&quot;,
            &quot;mobile&quot;: &quot;9893599881&quot;,
            &quot;title&quot;: &quot;Калькулятор&quot;,
            &quot;department&quot;: &quot;Управление бухгалтерского учета&quot;,
            &quot;company&quot;: &quot;ООО \&quot;РогаРадио\&quot;&quot;,
            &quot;created_at&quot;: &quot;2022-10-05T08:14:24.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-10-05T08:14:24.000000Z&quot;
        },
        {
            &quot;id&quot;: &quot;976d5103-d280-4f5b-987d-e50ad2ec7972&quot;,
            &quot;name&quot;: &quot;Medvedeva.G.0c48d204-99fa-3a21-90f6-57b783c3d73a&quot;,
            &quot;hide&quot;: false,
            &quot;thumbnail&quot;: false,
            &quot;first_name&quot;: &quot;Галина&quot;,
            &quot;last_name&quot;: &quot;Медведева&quot;,
            &quot;middle_name&quot;: &quot;Львовна&quot;,
            &quot;birthday&quot;: &quot;31.08&quot;,
            &quot;email&quot;: &quot;Medvedeva.G@example.ru&quot;,
            &quot;cn&quot;: &quot;Медведева Галина Львовна&quot;,
            &quot;telephone&quot;: &quot;6387&quot;,
            &quot;mobile&quot;: &quot;9897140638&quot;,
            &quot;title&quot;: &quot;Завивальщик спиралей&quot;,
            &quot;department&quot;: &quot;Внутренний аудит&quot;,
            &quot;company&quot;: &quot;ООО \&quot;Рога и копыта\&quot;&quot;,
            &quot;created_at&quot;: &quot;2022-10-05T08:14:24.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-10-05T08:14:24.000000Z&quot;
        },
        {
            &quot;id&quot;: &quot;976d5103-d422-474b-9ea0-85614fa0327c&quot;,
            &quot;name&quot;: &quot;Terenteva.F.24759b62-7eda-3ddd-8be8-7549176567ea&quot;,
            &quot;hide&quot;: false,
            &quot;thumbnail&quot;: false,
            &quot;first_name&quot;: &quot;Флорентина&quot;,
            &quot;last_name&quot;: &quot;Терентьева&quot;,
            &quot;middle_name&quot;: &quot;Андреевна&quot;,
            &quot;birthday&quot;: &quot;13.06&quot;,
            &quot;email&quot;: &quot;Terenteva.F@example.ru&quot;,
            &quot;cn&quot;: &quot;Терентьева Флорентина Андреевна&quot;,
            &quot;telephone&quot;: &quot;8104&quot;,
            &quot;mobile&quot;: &quot;9892486760&quot;,
            &quot;title&quot;: &quot;Монтажник позитива&quot;,
            &quot;department&quot;: &quot;Юридическая служба&quot;,
            &quot;company&quot;: &quot;ООО \&quot;Вилюна экспресс\&quot;&quot;,
            &quot;created_at&quot;: &quot;2022-10-05T08:14:24.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-10-05T08:14:24.000000Z&quot;
        },
        {
            &quot;id&quot;: &quot;976d5103-d538-4ef9-b89c-865da6075aab&quot;,
            &quot;name&quot;: &quot;Baranov.L.3c123a95-7b57-3816-9b3c-e598cbe24c2b&quot;,
            &quot;hide&quot;: false,
            &quot;thumbnail&quot;: false,
            &quot;first_name&quot;: &quot;Лаврентий&quot;,
            &quot;last_name&quot;: &quot;Баранов&quot;,
            &quot;middle_name&quot;: &quot;Фёдорович&quot;,
            &quot;birthday&quot;: &quot;24.04&quot;,
            &quot;email&quot;: &quot;Baranov.L@example.ru&quot;,
            &quot;cn&quot;: &quot;Баранов Лаврентий Фёдорович&quot;,
            &quot;telephone&quot;: &quot;0498&quot;,
            &quot;mobile&quot;: &quot;9892631301&quot;,
            &quot;title&quot;: &quot;Порционист лао-ча&quot;,
            &quot;department&quot;: &quot;Отдел продаж&quot;,
            &quot;company&quot;: &quot;ООО \&quot;Рогатрон\&quot;&quot;,
            &quot;created_at&quot;: &quot;2022-10-05T08:14:24.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-10-05T08:14:24.000000Z&quot;
        },
        {
            &quot;id&quot;: &quot;976d5103-d64b-4854-b649-4aa03ddf5815&quot;,
            &quot;name&quot;: &quot;Fadeeva.L.21ab0cc8-bcb2-308c-adc1-76be20f568aa&quot;,
            &quot;hide&quot;: false,
            &quot;thumbnail&quot;: false,
            &quot;first_name&quot;: &quot;Лилия&quot;,
            &quot;last_name&quot;: &quot;Фадеева&quot;,
            &quot;middle_name&quot;: &quot;Владимировна&quot;,
            &quot;birthday&quot;: &quot;29.10&quot;,
            &quot;email&quot;: &quot;Fadeeva.L@example.ru&quot;,
            &quot;cn&quot;: &quot;Фадеева Лилия Владимировна&quot;,
            &quot;telephone&quot;: &quot;5731&quot;,
            &quot;mobile&quot;: &quot;9894917770&quot;,
            &quot;title&quot;: &quot;Долбежник&quot;,
            &quot;department&quot;: &quot;Инженерная служба&quot;,
            &quot;company&quot;: &quot;ООО \&quot;Рогофей\&quot;&quot;,
            &quot;created_at&quot;: &quot;2022-10-05T08:14:24.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-10-05T08:14:24.000000Z&quot;
        },
        {
            &quot;id&quot;: &quot;976d5103-d7ce-48e2-b927-e99d1b6fa321&quot;,
            &quot;name&quot;: &quot;Nikonov.V.dbee66ce-e1ba-3e38-89f8-d1a5fa0bdfc6&quot;,
            &quot;hide&quot;: false,
            &quot;thumbnail&quot;: false,
            &quot;first_name&quot;: &quot;Валентин&quot;,
            &quot;last_name&quot;: &quot;Никонов&quot;,
            &quot;middle_name&quot;: &quot;Андреевич&quot;,
            &quot;birthday&quot;: &quot;02.11&quot;,
            &quot;email&quot;: &quot;Nikonov.V@example.ru&quot;,
            &quot;cn&quot;: &quot;Никонов Валентин Андреевич&quot;,
            &quot;telephone&quot;: &quot;9504&quot;,
            &quot;mobile&quot;: &quot;9897294490&quot;,
            &quot;title&quot;: &quot;Демонстратор пластических поз&quot;,
            &quot;department&quot;: &quot;Администрация&quot;,
            &quot;company&quot;: &quot;ООО \&quot;Рога и копыта\&quot;&quot;,
            &quot;created_at&quot;: &quot;2022-10-05T08:14:24.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-10-05T08:14:24.000000Z&quot;
        },
        {
            &quot;id&quot;: &quot;976d5103-d91c-4177-b4b9-a23b485c2b6a&quot;,
            &quot;name&quot;: &quot;Mamontova.M.ebfd069a-a0c4-3fa0-9c4b-1f22274b35fb&quot;,
            &quot;hide&quot;: false,
            &quot;thumbnail&quot;: false,
            &quot;first_name&quot;: &quot;Марта&quot;,
            &quot;last_name&quot;: &quot;Мамонтова&quot;,
            &quot;middle_name&quot;: &quot;Ивановна&quot;,
            &quot;birthday&quot;: &quot;25.06&quot;,
            &quot;email&quot;: &quot;Mamontova.M@example.ru&quot;,
            &quot;cn&quot;: &quot;Мамонтова Марта Ивановна&quot;,
            &quot;telephone&quot;: &quot;3568&quot;,
            &quot;mobile&quot;: &quot;9898248855&quot;,
            &quot;title&quot;: &quot;Разрисовщик обоев&quot;,
            &quot;department&quot;: &quot;Коммерческий отдел&quot;,
            &quot;company&quot;: &quot;ООО \&quot;Бумалопа трейдинг\&quot;&quot;,
            &quot;created_at&quot;: &quot;2022-10-05T08:14:24.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-10-05T08:14:24.000000Z&quot;
        },
        {
            &quot;id&quot;: &quot;976d5103-da2d-4622-bdff-d9798a762e76&quot;,
            &quot;name&quot;: &quot;Burov.A.ae0bd538-bbf9-37cd-a394-3e7dcdc59d0c&quot;,
            &quot;hide&quot;: false,
            &quot;thumbnail&quot;: false,
            &quot;first_name&quot;: &quot;Ананий&quot;,
            &quot;last_name&quot;: &quot;Буров&quot;,
            &quot;middle_name&quot;: &quot;Александрович&quot;,
            &quot;birthday&quot;: &quot;04.05&quot;,
            &quot;email&quot;: &quot;Burov.A@example.ru&quot;,
            &quot;cn&quot;: &quot;Буров Ананий Александрович&quot;,
            &quot;telephone&quot;: &quot;8286&quot;,
            &quot;mobile&quot;: &quot;9893002015&quot;,
            &quot;title&quot;: &quot;Сушильщик дощечек&quot;,
            &quot;department&quot;: &quot;Отдел маркетинга&quot;,
            &quot;company&quot;: &quot;ООО \&quot;БумПрофи\&quot;&quot;,
            &quot;created_at&quot;: &quot;2022-10-05T08:14:24.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-10-05T08:14:24.000000Z&quot;
        },
        {
            &quot;id&quot;: &quot;976d5103-db8d-4e8f-8d14-4c80a3ff2f91&quot;,
            &quot;name&quot;: &quot;Solovyov.G.6c1707e1-3ca2-3fff-8168-6c41b47e38ad&quot;,
            &quot;hide&quot;: false,
            &quot;thumbnail&quot;: false,
            &quot;first_name&quot;: &quot;Гарри&quot;,
            &quot;last_name&quot;: &quot;Соловьёв&quot;,
            &quot;middle_name&quot;: &quot;Андреевич&quot;,
            &quot;birthday&quot;: &quot;15.02&quot;,
            &quot;email&quot;: &quot;Solovyov.G@example.ru&quot;,
            &quot;cn&quot;: &quot;Соловьёв Гарри Андреевич&quot;,
            &quot;telephone&quot;: &quot;3916&quot;,
            &quot;mobile&quot;: &quot;9893596749&quot;,
            &quot;title&quot;: &quot;Комик, юморист&quot;,
            &quot;department&quot;: &quot;Инженерная служба&quot;,
            &quot;company&quot;: &quot;ООО \&quot;Бумалопа трейдинг\&quot;&quot;,
            &quot;created_at&quot;: &quot;2022-10-05T08:14:24.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-10-05T08:14:24.000000Z&quot;
        },
        {
            &quot;id&quot;: &quot;976d5103-dd20-42d3-9ed4-fbb6fe4cccaf&quot;,
            &quot;name&quot;: &quot;Mihajlova.M.4d3d8650-1671-3dc7-be35-1034ef8532a1&quot;,
            &quot;hide&quot;: false,
            &quot;thumbnail&quot;: false,
            &quot;first_name&quot;: &quot;Мальвина&quot;,
            &quot;last_name&quot;: &quot;Михайлова&quot;,
            &quot;middle_name&quot;: &quot;Андреевна&quot;,
            &quot;birthday&quot;: &quot;20.09&quot;,
            &quot;email&quot;: &quot;Mihajlova.M@example.ru&quot;,
            &quot;cn&quot;: &quot;Михайлова Мальвина Андреевна&quot;,
            &quot;telephone&quot;: &quot;1801&quot;,
            &quot;mobile&quot;: &quot;9890468161&quot;,
            &quot;title&quot;: &quot;Младший помощник веб-программиста&quot;,
            &quot;department&quot;: &quot;Отдел закупок&quot;,
            &quot;company&quot;: &quot;ООО \&quot;Бумалопа трейдинг\&quot;&quot;,
            &quot;created_at&quot;: &quot;2022-10-05T08:14:24.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-10-05T08:14:24.000000Z&quot;
        },
        {
            &quot;id&quot;: &quot;976d5103-de2f-4b6d-91bd-3e53d51319f8&quot;,
            &quot;name&quot;: &quot;Panov.M.68d1b59e-6dd9-323b-adac-cabf81dd2360&quot;,
            &quot;hide&quot;: false,
            &quot;thumbnail&quot;: false,
            &quot;first_name&quot;: &quot;Марк&quot;,
            &quot;last_name&quot;: &quot;Панов&quot;,
            &quot;middle_name&quot;: &quot;Максимович&quot;,
            &quot;birthday&quot;: &quot;18.06&quot;,
            &quot;email&quot;: &quot;Panov.M@example.ru&quot;,
            &quot;cn&quot;: &quot;Панов Марк Максимович&quot;,
            &quot;telephone&quot;: &quot;9485&quot;,
            &quot;mobile&quot;: &quot;9898873525&quot;,
            &quot;title&quot;: &quot;Архитектор&quot;,
            &quot;department&quot;: &quot;Отдел налогового учета&quot;,
            &quot;company&quot;: &quot;ООО \&quot;Рогофей\&quot;&quot;,
            &quot;created_at&quot;: &quot;2022-10-05T08:14:24.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-10-05T08:14:24.000000Z&quot;
        },
        {
            &quot;id&quot;: &quot;976d5103-df41-4af2-9f9d-da55cf9df77a&quot;,
            &quot;name&quot;: &quot;Trofimova.N.1af4cbbe-d899-3b39-96b1-9f13a7e1a589&quot;,
            &quot;hide&quot;: false,
            &quot;thumbnail&quot;: false,
            &quot;first_name&quot;: &quot;Наталья&quot;,
            &quot;last_name&quot;: &quot;Трофимова&quot;,
            &quot;middle_name&quot;: &quot;Борисовна&quot;,
            &quot;birthday&quot;: &quot;07.09&quot;,
            &quot;email&quot;: &quot;Trofimova.N@example.ru&quot;,
            &quot;cn&quot;: &quot;Трофимова Наталья Борисовна&quot;,
            &quot;telephone&quot;: &quot;6379&quot;,
            &quot;mobile&quot;: &quot;9890198022&quot;,
            &quot;title&quot;: &quot;Бегунщик смесительных бегунков&quot;,
            &quot;department&quot;: &quot;Отдел налогового учета&quot;,
            &quot;company&quot;: &quot;ООО \&quot;Рогатрон\&quot;&quot;,
            &quot;created_at&quot;: &quot;2022-10-05T08:14:24.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-10-05T08:14:24.000000Z&quot;
        },
        {
            &quot;id&quot;: &quot;976d5103-e0e5-40cd-866e-9acda033d08e&quot;,
            &quot;name&quot;: &quot;Smirnova.U.bdba54c9-1b02-37d8-8bd1-6f8c92c153e5&quot;,
            &quot;hide&quot;: false,
            &quot;thumbnail&quot;: false,
            &quot;first_name&quot;: &quot;Ульяна&quot;,
            &quot;last_name&quot;: &quot;Смирнова&quot;,
            &quot;middle_name&quot;: &quot;Романовна&quot;,
            &quot;birthday&quot;: &quot;14.07&quot;,
            &quot;email&quot;: &quot;Smirnova.U@example.ru&quot;,
            &quot;cn&quot;: &quot;Смирнова Ульяна Романовна&quot;,
            &quot;telephone&quot;: &quot;0881&quot;,
            &quot;mobile&quot;: &quot;9896084026&quot;,
            &quot;title&quot;: &quot;Изготовитель зубочисток&quot;,
            &quot;department&quot;: &quot;Отдел закупок&quot;,
            &quot;company&quot;: &quot;ООО \&quot;РогаРадио\&quot;&quot;,
            &quot;created_at&quot;: &quot;2022-10-05T08:14:24.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-10-05T08:14:24.000000Z&quot;
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://api.localhost/api/v1/org/users?page=1&quot;,
        &quot;last&quot;: &quot;http://api.localhost/api/v1/org/users?page=67&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: &quot;http://api.localhost/api/v1/org/users?page=2&quot;
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 67,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://api.localhost/api/v1/org/users?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: &quot;http://api.localhost/api/v1/org/users?page=2&quot;,
                &quot;label&quot;: &quot;2&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://api.localhost/api/v1/org/users?page=3&quot;,
                &quot;label&quot;: &quot;3&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://api.localhost/api/v1/org/users?page=4&quot;,
                &quot;label&quot;: &quot;4&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://api.localhost/api/v1/org/users?page=5&quot;,
                &quot;label&quot;: &quot;5&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://api.localhost/api/v1/org/users?page=6&quot;,
                &quot;label&quot;: &quot;6&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://api.localhost/api/v1/org/users?page=7&quot;,
                &quot;label&quot;: &quot;7&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://api.localhost/api/v1/org/users?page=8&quot;,
                &quot;label&quot;: &quot;8&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://api.localhost/api/v1/org/users?page=9&quot;,
                &quot;label&quot;: &quot;9&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://api.localhost/api/v1/org/users?page=10&quot;,
                &quot;label&quot;: &quot;10&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;...&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://api.localhost/api/v1/org/users?page=66&quot;,
                &quot;label&quot;: &quot;66&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://api.localhost/api/v1/org/users?page=67&quot;,
                &quot;label&quot;: &quot;67&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://api.localhost/api/v1/org/users?page=2&quot;,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;http://api.localhost/api/v1/org/users&quot;,
        &quot;per_page&quot;: 15,
        &quot;to&quot;: 15,
        &quot;total&quot;: 1001
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-org-users" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-org-users"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-org-users"></code></pre>
</span>
<span id="execution-error-GETapi-v1-org-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-org-users"></code></pre>
</span>
<form id="form-GETapi-v1-org-users" data-method="GET"
      data-path="api/v1/org/users"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-org-users', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-org-users"
                    onclick="tryItOut('GETapi-v1-org-users');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-org-users"
                    onclick="cancelTryOut('GETapi-v1-org-users');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-org-users" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/org/users</code></b>
        </p>
                    </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
