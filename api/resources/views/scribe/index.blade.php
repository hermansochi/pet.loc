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
            &quot;created_at&quot;: &quot;2022-10-05T16:12:39.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-10-05T16:12:39.000000Z&quot;
        },
        {
            &quot;id&quot;: &quot;976dfc0e-e0c6-4484-8a3c-7eeca001ba46&quot;,
            &quot;name&quot;: &quot;Pavlov.P.106a4556-0a23-3d0b-96bf-6e250c81ca18&quot;,
            &quot;hide&quot;: false,
            &quot;thumbnail&quot;: false,
            &quot;first_name&quot;: &quot;Платон&quot;,
            &quot;last_name&quot;: &quot;Павлов&quot;,
            &quot;middle_name&quot;: &quot;Алексеевич&quot;,
            &quot;birthday&quot;: &quot;19.09&quot;,
            &quot;email&quot;: &quot;Pavlov.P@example.ru&quot;,
            &quot;cn&quot;: &quot;Павлов Платон Алексеевич&quot;,
            &quot;telephone&quot;: &quot;7700&quot;,
            &quot;mobile&quot;: &quot;9895263680&quot;,
            &quot;title&quot;: &quot;Верховой доменной печи&quot;,
            &quot;department&quot;: &quot;Служба безопасности&quot;,
            &quot;company&quot;: &quot;ООО \&quot;Рогофей\&quot;&quot;,
            &quot;created_at&quot;: &quot;2022-10-05T16:12:40.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-10-05T16:12:40.000000Z&quot;
        },
        {
            &quot;id&quot;: &quot;976dfc0f-45d3-4559-9d82-ef720290ca63&quot;,
            &quot;name&quot;: &quot;Stepanova.A.b76fa4cd-9577-343c-a7b4-4679586655a4&quot;,
            &quot;hide&quot;: false,
            &quot;thumbnail&quot;: false,
            &quot;first_name&quot;: &quot;Анфиса&quot;,
            &quot;last_name&quot;: &quot;Степанова&quot;,
            &quot;middle_name&quot;: &quot;Владимировна&quot;,
            &quot;birthday&quot;: &quot;04.09&quot;,
            &quot;email&quot;: &quot;Stepanova.A@example.ru&quot;,
            &quot;cn&quot;: &quot;Степанова Анфиса Владимировна&quot;,
            &quot;telephone&quot;: &quot;0457&quot;,
            &quot;mobile&quot;: &quot;9895452332&quot;,
            &quot;title&quot;: &quot;Бухгалтер&quot;,
            &quot;department&quot;: &quot;Служба слаботочных систем&quot;,
            &quot;company&quot;: &quot;ООО \&quot;Нарита и сын\&quot;&quot;,
            &quot;created_at&quot;: &quot;2022-10-05T16:12:40.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-10-05T16:12:40.000000Z&quot;
        },
        {
            &quot;id&quot;: &quot;976dfc0f-481b-41d4-b787-255d58429015&quot;,
            &quot;name&quot;: &quot;Savelev.P.99159c5d-6f64-3840-a5e7-9db025697c06&quot;,
            &quot;hide&quot;: false,
            &quot;thumbnail&quot;: false,
            &quot;first_name&quot;: &quot;Пётр&quot;,
            &quot;last_name&quot;: &quot;Савельев&quot;,
            &quot;middle_name&quot;: &quot;Александрович&quot;,
            &quot;birthday&quot;: &quot;28.08&quot;,
            &quot;email&quot;: &quot;Savelev.P@example.ru&quot;,
            &quot;cn&quot;: &quot;Савельев Пётр Александрович&quot;,
            &quot;telephone&quot;: &quot;2597&quot;,
            &quot;mobile&quot;: &quot;9899530125&quot;,
            &quot;title&quot;: &quot;Переворачиватель пингвинов&quot;,
            &quot;department&quot;: &quot;Отдел продаж&quot;,
            &quot;company&quot;: &quot;ООО \&quot;Вилюна экспресс\&quot;&quot;,
            &quot;created_at&quot;: &quot;2022-10-05T16:12:40.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-10-05T16:12:40.000000Z&quot;
        },
        {
            &quot;id&quot;: &quot;976dfc0f-4b47-4416-a04c-f831400688c8&quot;,
            &quot;name&quot;: &quot;Titova.E.fdef5f92-6983-386d-9376-a5c7bcdd4903&quot;,
            &quot;hide&quot;: false,
            &quot;thumbnail&quot;: false,
            &quot;first_name&quot;: &quot;Елена&quot;,
            &quot;last_name&quot;: &quot;Титова&quot;,
            &quot;middle_name&quot;: &quot;Дмитриевна&quot;,
            &quot;birthday&quot;: &quot;05.08&quot;,
            &quot;email&quot;: &quot;Titova.E@example.ru&quot;,
            &quot;cn&quot;: &quot;Титова Елена Дмитриевна&quot;,
            &quot;telephone&quot;: &quot;0770&quot;,
            &quot;mobile&quot;: &quot;9897056296&quot;,
            &quot;title&quot;: &quot;Раздирщик пакетов&quot;,
            &quot;department&quot;: &quot;Инженерная служба&quot;,
            &quot;company&quot;: &quot;ООО \&quot;БумПрофи\&quot;&quot;,
            &quot;created_at&quot;: &quot;2022-10-05T16:12:40.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-10-05T16:12:40.000000Z&quot;
        },
        {
            &quot;id&quot;: &quot;976dfc0f-4e86-42f8-9181-85ffca7f6cc0&quot;,
            &quot;name&quot;: &quot;Nikonov.V.a3ee3b45-4041-32e1-a89f-5d228fbac71e&quot;,
            &quot;hide&quot;: false,
            &quot;thumbnail&quot;: false,
            &quot;first_name&quot;: &quot;Василий&quot;,
            &quot;last_name&quot;: &quot;Никонов&quot;,
            &quot;middle_name&quot;: &quot;Львович&quot;,
            &quot;birthday&quot;: &quot;27.08&quot;,
            &quot;email&quot;: &quot;Nikonov.V@example.ru&quot;,
            &quot;cn&quot;: &quot;Никонов Василий Львович&quot;,
            &quot;telephone&quot;: &quot;0011&quot;,
            &quot;mobile&quot;: &quot;9898096400&quot;,
            &quot;title&quot;: &quot;Мерчендайзер&quot;,
            &quot;department&quot;: &quot;Служба слаботочных систем&quot;,
            &quot;company&quot;: &quot;ООО \&quot;Бумалопа трейдинг\&quot;&quot;,
            &quot;created_at&quot;: &quot;2022-10-05T16:12:40.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-10-05T16:12:40.000000Z&quot;
        },
        {
            &quot;id&quot;: &quot;976dfc0f-5237-4517-b4d5-340f7d98ce9b&quot;,
            &quot;name&quot;: &quot;Kapustin.V.0f92bcd5-17a3-3882-99cb-578661b12d9a&quot;,
            &quot;hide&quot;: false,
            &quot;thumbnail&quot;: false,
            &quot;first_name&quot;: &quot;Виталий&quot;,
            &quot;last_name&quot;: &quot;Капустин&quot;,
            &quot;middle_name&quot;: &quot;Сергеевич&quot;,
            &quot;birthday&quot;: &quot;05.03&quot;,
            &quot;email&quot;: &quot;Kapustin.V@example.ru&quot;,
            &quot;cn&quot;: &quot;Капустин Виталий Сергеевич&quot;,
            &quot;telephone&quot;: &quot;4419&quot;,
            &quot;mobile&quot;: &quot;9899162297&quot;,
            &quot;title&quot;: &quot;Давильщик&quot;,
            &quot;department&quot;: &quot;Планово-экономический отдел&quot;,
            &quot;company&quot;: &quot;ООО \&quot;Рога и копыта\&quot;&quot;,
            &quot;created_at&quot;: &quot;2022-10-05T16:12:40.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-10-05T16:12:40.000000Z&quot;
        },
        {
            &quot;id&quot;: &quot;976dfc0f-558b-44e4-8343-096fb4ae7079&quot;,
            &quot;name&quot;: &quot;SHarova.M.8e7130a6-62ec-37f0-8e11-b536e8e5bf80&quot;,
            &quot;hide&quot;: false,
            &quot;thumbnail&quot;: false,
            &quot;first_name&quot;: &quot;Марта&quot;,
            &quot;last_name&quot;: &quot;Шарова&quot;,
            &quot;middle_name&quot;: &quot;Фёдоровна&quot;,
            &quot;birthday&quot;: &quot;05.01&quot;,
            &quot;email&quot;: &quot;SHarova.M@example.ru&quot;,
            &quot;cn&quot;: &quot;Шарова Марта Фёдоровна&quot;,
            &quot;telephone&quot;: &quot;6699&quot;,
            &quot;mobile&quot;: &quot;9895115418&quot;,
            &quot;title&quot;: &quot;Пастух&quot;,
            &quot;department&quot;: &quot;Финансовая служба&quot;,
            &quot;company&quot;: &quot;ООО \&quot;Бумалопа трейдинг\&quot;&quot;,
            &quot;created_at&quot;: &quot;2022-10-05T16:12:40.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-10-05T16:12:40.000000Z&quot;
        },
        {
            &quot;id&quot;: &quot;976dfc0f-5973-4a84-a476-5bae204a89ae&quot;,
            &quot;name&quot;: &quot;Andreev.G.5b2e7c1a-eb19-3989-aa0c-13b1ee3f86e3&quot;,
            &quot;hide&quot;: false,
            &quot;thumbnail&quot;: false,
            &quot;first_name&quot;: &quot;Гарри&quot;,
            &quot;last_name&quot;: &quot;Андреев&quot;,
            &quot;middle_name&quot;: &quot;Романович&quot;,
            &quot;birthday&quot;: &quot;22.05&quot;,
            &quot;email&quot;: &quot;Andreev.G@example.ru&quot;,
            &quot;cn&quot;: &quot;Андреев Гарри Романович&quot;,
            &quot;telephone&quot;: &quot;6639&quot;,
            &quot;mobile&quot;: &quot;9893837461&quot;,
            &quot;title&quot;: &quot;Намазчик спичечных коробок&quot;,
            &quot;department&quot;: &quot;Инженерная служба&quot;,
            &quot;company&quot;: &quot;ООО \&quot;Рога и копыта\&quot;&quot;,
            &quot;created_at&quot;: &quot;2022-10-05T16:12:40.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-10-05T16:12:40.000000Z&quot;
        },
        {
            &quot;id&quot;: &quot;976dfc0f-5cc2-4820-b37d-160e7417e099&quot;,
            &quot;name&quot;: &quot;Kopylova.R.42ac4a90-90e2-321e-b691-6c17fa3c05f8&quot;,
            &quot;hide&quot;: false,
            &quot;thumbnail&quot;: false,
            &quot;first_name&quot;: &quot;Регина&quot;,
            &quot;last_name&quot;: &quot;Копылова&quot;,
            &quot;middle_name&quot;: &quot;Сергеевна&quot;,
            &quot;birthday&quot;: &quot;14.11&quot;,
            &quot;email&quot;: &quot;Kopylova.R@example.ru&quot;,
            &quot;cn&quot;: &quot;Копылова Регина Сергеевна&quot;,
            &quot;telephone&quot;: &quot;3854&quot;,
            &quot;mobile&quot;: &quot;9891275706&quot;,
            &quot;title&quot;: &quot;Зубополировщик&quot;,
            &quot;department&quot;: &quot;Отдел продаж&quot;,
            &quot;company&quot;: &quot;ООО \&quot;Вилюна экспресс\&quot;&quot;,
            &quot;created_at&quot;: &quot;2022-10-05T16:12:40.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-10-05T16:12:40.000000Z&quot;
        },
        {
            &quot;id&quot;: &quot;976dfc0f-605e-453d-b560-b967cabfef88&quot;,
            &quot;name&quot;: &quot;Rusakov.V.b89fc944-c34d-3c69-a84c-d06c4da3c27b&quot;,
            &quot;hide&quot;: false,
            &quot;thumbnail&quot;: false,
            &quot;first_name&quot;: &quot;Владлен&quot;,
            &quot;last_name&quot;: &quot;Русаков&quot;,
            &quot;middle_name&quot;: &quot;Борисович&quot;,
            &quot;birthday&quot;: &quot;18.04&quot;,
            &quot;email&quot;: &quot;Rusakov.V@example.ru&quot;,
            &quot;cn&quot;: &quot;Русаков Владлен Борисович&quot;,
            &quot;telephone&quot;: &quot;6239&quot;,
            &quot;mobile&quot;: &quot;9897007749&quot;,
            &quot;title&quot;: &quot;Коксоразгрузчик&quot;,
            &quot;department&quot;: &quot;Отдел продаж&quot;,
            &quot;company&quot;: &quot;ООО \&quot;Нарита и сын\&quot;&quot;,
            &quot;created_at&quot;: &quot;2022-10-05T16:12:40.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-10-05T16:12:40.000000Z&quot;
        },
        {
            &quot;id&quot;: &quot;976dfc0f-64b6-4a88-ab90-6d98086a66c3&quot;,
            &quot;name&quot;: &quot;Kovalyova.L.56e7ba54-a135-3366-9ca7-ee5d69ad35e5&quot;,
            &quot;hide&quot;: false,
            &quot;thumbnail&quot;: false,
            &quot;first_name&quot;: &quot;Людмила&quot;,
            &quot;last_name&quot;: &quot;Ковалёва&quot;,
            &quot;middle_name&quot;: &quot;Романовна&quot;,
            &quot;birthday&quot;: &quot;23.07&quot;,
            &quot;email&quot;: &quot;Kovalyova.L@example.ru&quot;,
            &quot;cn&quot;: &quot;Ковалёва Людмила Романовна&quot;,
            &quot;telephone&quot;: &quot;0115&quot;,
            &quot;mobile&quot;: &quot;9893635235&quot;,
            &quot;title&quot;: &quot;Инженер-лесопатолог&quot;,
            &quot;department&quot;: &quot;Административно-хозяйственная служба&quot;,
            &quot;company&quot;: &quot;ООО \&quot;БумПрофи\&quot;&quot;,
            &quot;created_at&quot;: &quot;2022-10-05T16:12:40.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-10-05T16:12:40.000000Z&quot;
        },
        {
            &quot;id&quot;: &quot;976dfc0f-6977-4656-88b2-ccd1c61fd414&quot;,
            &quot;name&quot;: &quot;Belov.D.89091d96-0091-3d62-bf8b-75f89af415c2&quot;,
            &quot;hide&quot;: false,
            &quot;thumbnail&quot;: false,
            &quot;first_name&quot;: &quot;Дан&quot;,
            &quot;last_name&quot;: &quot;Белов&quot;,
            &quot;middle_name&quot;: &quot;Борисович&quot;,
            &quot;birthday&quot;: &quot;09.05&quot;,
            &quot;email&quot;: &quot;Belov.D@example.ru&quot;,
            &quot;cn&quot;: &quot;Белов Дан Борисович&quot;,
            &quot;telephone&quot;: &quot;5754&quot;,
            &quot;mobile&quot;: &quot;9893424542&quot;,
            &quot;title&quot;: &quot;Долбежник&quot;,
            &quot;department&quot;: &quot;Инженерная служба&quot;,
            &quot;company&quot;: &quot;ООО \&quot;Рогофей\&quot;&quot;,
            &quot;created_at&quot;: &quot;2022-10-05T16:12:40.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-10-05T16:12:40.000000Z&quot;
        },
        {
            &quot;id&quot;: &quot;976dfc0f-6db8-4214-9ee8-a50b94ec5d8f&quot;,
            &quot;name&quot;: &quot;Kulakova.A.c5f489ac-4316-380e-a090-e6b9f519a3b0&quot;,
            &quot;hide&quot;: false,
            &quot;thumbnail&quot;: false,
            &quot;first_name&quot;: &quot;Антонина&quot;,
            &quot;last_name&quot;: &quot;Кулакова&quot;,
            &quot;middle_name&quot;: &quot;Андреевна&quot;,
            &quot;birthday&quot;: &quot;05.05&quot;,
            &quot;email&quot;: &quot;Kulakova.A@example.ru&quot;,
            &quot;cn&quot;: &quot;Кулакова Антонина Андреевна&quot;,
            &quot;telephone&quot;: &quot;8632&quot;,
            &quot;mobile&quot;: &quot;9894174105&quot;,
            &quot;title&quot;: &quot;Круговоротчик&quot;,
            &quot;department&quot;: &quot;Служба безопасности&quot;,
            &quot;company&quot;: &quot;ООО \&quot;Рогофей\&quot;&quot;,
            &quot;created_at&quot;: &quot;2022-10-05T16:12:40.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-10-05T16:12:40.000000Z&quot;
        },
        {
            &quot;id&quot;: &quot;976dfc0f-721f-4ddb-a643-9e0284adddf5&quot;,
            &quot;name&quot;: &quot;Romanov.D.58cb114c-821f-3334-bdf9-827028983576&quot;,
            &quot;hide&quot;: false,
            &quot;thumbnail&quot;: false,
            &quot;first_name&quot;: &quot;Дмитрий&quot;,
            &quot;last_name&quot;: &quot;Романов&quot;,
            &quot;middle_name&quot;: &quot;Александрович&quot;,
            &quot;birthday&quot;: &quot;04.03&quot;,
            &quot;email&quot;: &quot;Romanov.D@example.ru&quot;,
            &quot;cn&quot;: &quot;Романов Дмитрий Александрович&quot;,
            &quot;telephone&quot;: &quot;3681&quot;,
            &quot;mobile&quot;: &quot;9898158974&quot;,
            &quot;title&quot;: &quot;Гибщик труб&quot;,
            &quot;department&quot;: &quot;Юридическая служба&quot;,
            &quot;company&quot;: &quot;ООО \&quot;Рогатрон\&quot;&quot;,
            &quot;created_at&quot;: &quot;2022-10-05T16:12:41.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-10-05T16:12:41.000000Z&quot;
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
