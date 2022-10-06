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
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-healthcheck">
                                <a href="#endpoints-GETapi-v1-healthcheck">Healthcheck</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-organization-employee-directory-management" class="tocify-header">
                <li class="tocify-item level-1" data-unique="organization-employee-directory-management">
                    <a href="#organization-employee-directory-management">Organization employee directory management</a>
                </li>
                                    <ul id="tocify-subheader-organization-employee-directory-management" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="organization-employee-directory-management-GETapi-v1-org-users">
                                <a href="#organization-employee-directory-management-GETapi-v1-org-users">Display a listing of the organization users.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="organization-employee-directory-management-GETapi-v1-org-users--id-">
<<<<<<< HEAD
                                <a href="#organization-employee-directory-management-GETapi-v1-org-users--id-">Display the Employee by uuid.</a>
=======
                                <a href="#organization-employee-directory-management-GETapi-v1-org-users--id-">Employee info by ID</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="organization-employee-directory-management-GETapi-v1-org-qrcodes--id-">
                                <a href="#organization-employee-directory-management-GETapi-v1-org-qrcodes--id-">EmployeeQR Code vCard</a>
>>>>>>> c7d5ce39d1d0de29c38b27e0d102cd61112c3226
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
        <li>Last updated: October 6 2022</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<p>В этой документации Вы найдете информацию о работе с нашим API.</p>
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

                    <h2 id="endpoints-GETapi-v1-healthcheck">Healthcheck</h2>

<p>
</p>

<p>Проверяет что контейнер с backend работоспособен. Если все нормально, то возвращает
status code 200 в ответе. Любой другой код говорит о неработоспособности сервиса.</p>
<p>Check that the service is up. If everything is okay, you'll get a 200 OK response.
Otherwise, the request will fail with a 400 error, and a response listing the failed services.</p>

<span id="example-requests-GETapi-v1-healthcheck">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://api.localhost/api/v1/healthcheck" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.localhost/api/v1/healthcheck"
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

<span id="example-responses-GETapi-v1-healthcheck">
            <blockquote>
            <p>Example response (400, Service is unhealthy):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;status&quot;: &quot;down&quot;,
    &quot;services&quot;: {
        &quot;database&quot;: &quot;down&quot;
    }
}</code>
 </pre>
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
x-ratelimit-remaining: 58
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;status&quot;: &quot;up&quot;,
    &quot;services&quot;: {
        &quot;database&quot;: &quot;1 ms&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-healthcheck" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-healthcheck"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-healthcheck"></code></pre>
</span>
<span id="execution-error-GETapi-v1-healthcheck" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-healthcheck"></code></pre>
</span>
<form id="form-GETapi-v1-healthcheck" data-method="GET"
      data-path="api/v1/healthcheck"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-healthcheck', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-healthcheck"
                    onclick="tryItOut('GETapi-v1-healthcheck');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-healthcheck"
                    onclick="cancelTryOut('GETapi-v1-healthcheck');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-healthcheck" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/healthcheck</code></b>
        </p>
                    </form>

    <h3>Response</h3>
    <h4 class="fancy-heading-panel"><b>Response Fields</b></h4>
    <p>
            <b><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
<br>
<p>The status of this API (<code>up</code> or <code>down</code>).</p>
        </p>
                <p>
            <b><code>services</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
 &nbsp;
<br>
<p>Map of each downstream service and their status (<code>ping time</code> or <code>down</code>).</p>
        </p>
                    <h1 id="organization-employee-directory-management">Organization employee directory management</h1>

    <p>APIs for managing organization employee directory /
API для управления справочником сотрудников организации</p>
<aside class="success">Описание полей см. в эндпоинте org/users</aside>

                                <h2 id="organization-employee-directory-management-GETapi-v1-org-users">Display a listing of the organization users.</h2>

<p>
</p>

<p>Возвращает всех сотрудников организации массивом в объекте data, метаинформацией в объекте meta, ссылками в
объекте links.</p>

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
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
            &quot;id&quot;: &quot;976dcd0f-1bd4-4d66-adb9-dddb0b469f26&quot;,
            &quot;name&quot;: &quot;Belyaev.F.19deb5e7-0f8e-38d0-bff7-027834f6766e&quot;,
            &quot;hide&quot;: false,
            &quot;thumbnail&quot;: false,
            &quot;gender&quot;: &quot;m&quot;,
            &quot;first_name&quot;: &quot;Фёдор&quot;,
            &quot;last_name&quot;: &quot;Беляев&quot;,
            &quot;middle_name&quot;: &quot;Сергеевич&quot;,
            &quot;birthday&quot;: &quot;27.03&quot;,
            &quot;email&quot;: &quot;Belyaev.F@example.ru&quot;,
            &quot;cn&quot;: &quot;Беляев Фёдор Сергеевич&quot;,
            &quot;telephone&quot;: &quot;5802&quot;,
            &quot;mobile&quot;: &quot;9898034893&quot;,
            &quot;title&quot;: &quot;Архитектор&quot;,
            &quot;department&quot;: &quot;Управление бухгалтерского учета&quot;,
            &quot;company&quot;: &quot;ООО \&quot;БумПрофи\&quot;&quot;,
            &quot;city&quot;: &quot;Краснодар&quot;,
            &quot;created_at&quot;: &quot;2022-10-05T14:01:15.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-10-05T14:01:15.000000Z&quot;
        },
        {
            &quot;id&quot;: &quot;976dcd0f-2088-4529-b829-3eab9857beee&quot;,
            &quot;name&quot;: &quot;Savina.I.fa9c3191-4403-3f9a-819d-bb044cc06950&quot;,
            &quot;hide&quot;: false,
            &quot;thumbnail&quot;: false,
            &quot;gender&quot;: &quot;f&quot;,
            &quot;first_name&quot;: &quot;Ирина&quot;,
            &quot;last_name&quot;: &quot;Савина&quot;,
            &quot;middle_name&quot;: &quot;Львовна&quot;,
            &quot;birthday&quot;: &quot;04.06&quot;,
            &quot;email&quot;: &quot;Savina.I@example.ru&quot;,
            &quot;cn&quot;: &quot;Савина Ирина Львовна&quot;,
            &quot;telephone&quot;: &quot;1614&quot;,
            &quot;mobile&quot;: &quot;9897012591&quot;,
            &quot;title&quot;: &quot;Главный бухгалтер&quot;,
            &quot;department&quot;: &quot;Отдел налогового учета&quot;,
            &quot;company&quot;: &quot;ООО \&quot;Вилюна экспресс\&quot;&quot;,
            &quot;city&quot;: &quot;Владивосток&quot;,
            &quot;created_at&quot;: &quot;2022-10-05T14:01:15.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-10-05T14:01:15.000000Z&quot;
>>>>>>> refs/remotes/origin/master
=======
            &quot;id&quot;: &quot;976fe4e9-b243-43f8-bf21-f797aaa7c4e0&quot;,
            &quot;name&quot;: &quot;Voronov.D.639eda1a-2e4c-324c-9d1e-4dee37e0f5d6&quot;,
            &quot;hide&quot;: false,
            &quot;thumbnail&quot;: false,
            &quot;gender&quot;: &quot;m&quot;,
            &quot;first_name&quot;: &quot;Денис&quot;,
            &quot;last_name&quot;: &quot;Воронов&quot;,
            &quot;middle_name&quot;: &quot;Львович&quot;,
            &quot;birthday&quot;: &quot;27.11&quot;,
            &quot;email&quot;: &quot;Voronov.D@example.ru&quot;,
            &quot;cn&quot;: &quot;Воронов Денис Львович&quot;,
            &quot;telephone&quot;: &quot;2063&quot;,
            &quot;mobile&quot;: &quot;9899869262&quot;,
            &quot;title&quot;: &quot;Долбежник&quot;,
            &quot;department&quot;: &quot;Отдел налогового учета&quot;,
            &quot;company&quot;: &quot;ООО \&quot;РогаРадио\&quot;&quot;,
            &quot;city&quot;: &quot;Сочи&quot;,
            &quot;created_at&quot;: &quot;2022-10-06T14:59:36.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-10-06T14:59:36.000000Z&quot;
        },
        {
            &quot;id&quot;: &quot;976fe4e9-b7fa-4816-b6d1-cad4ae7a282d&quot;,
            &quot;name&quot;: &quot;SHubin.A.c86c7852-6b27-3ad0-a4df-1ead62ae121b&quot;,
            &quot;hide&quot;: false,
            &quot;thumbnail&quot;: false,
            &quot;gender&quot;: &quot;m&quot;,
            &quot;first_name&quot;: &quot;Александр&quot;,
            &quot;last_name&quot;: &quot;Шубин&quot;,
            &quot;middle_name&quot;: &quot;Дмитриевич&quot;,
            &quot;birthday&quot;: &quot;12.06&quot;,
            &quot;email&quot;: &quot;SHubin.A@example.ru&quot;,
            &quot;cn&quot;: &quot;Шубин Александр Дмитриевич&quot;,
            &quot;telephone&quot;: &quot;5935&quot;,
            &quot;mobile&quot;: &quot;9891316565&quot;,
            &quot;title&quot;: &quot;Мойщик мокрых отходов&quot;,
            &quot;department&quot;: &quot;Отдел маркетинга&quot;,
            &quot;company&quot;: &quot;ООО \&quot;БумПрофи\&quot;&quot;,
            &quot;city&quot;: &quot;Краснодар&quot;,
            &quot;created_at&quot;: &quot;2022-10-06T14:59:36.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-10-06T14:59:36.000000Z&quot;
>>>>>>> c7d5ce39d1d0de29c38b27e0d102cd61112c3226
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;/?page=1&quot;,
        &quot;last&quot;: &quot;/?page=1&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: null
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 1,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;/?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;/&quot;,
        &quot;per_page&quot;: 2,
        &quot;to&quot;: 2,
        &quot;total&quot;: 2
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
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>page</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number"
               name="page"
               data-endpoint="GETapi-v1-org-users"
               value="1"
               data-component="url" hidden>
    <br>
<p>Response page number / Номер страницы.</p>
            </p>
<<<<<<< HEAD
                    </form>

    <h3>Response</h3>
    <h4 class="fancy-heading-panel"><b>Response Fields</b></h4>
    <p>
            <b><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
<br>
<p>The uuid of the organization user / ID сотрудника в формате UUID.</p>
        </p>
                <p>
            <b><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
<br>
<p>The uniq name of the organization user / Уникальное имя сотрудника.</p>
        </p>
                <p>
            <b><code>hide</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
 &nbsp;
<br>
<p>If eq true then don't show the employee / Если true то не показывать сотрудника.</p>
        </p>
                <p>
            <b><code>thumbnail</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
 &nbsp;
<br>
<p>If eq true show avatar, otherwise show default avatar / Если true то показать
фото профиля, в противном случае показать дефолтное фото.</p>
        </p>
                <p>
            <b><code>gender</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
<br>
<p>m - male, f - female, u - unknown / Пол: m - мужчина, f - женщина, u - неизвестен.</p>
        </p>
                <p>
            <b><code>first_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
<br>
<p>Employee name / Имя сотрудника.</p>
        </p>
                <p>
            <b><code>last_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
<br>
<p>Employee last name / Фамилия сотрудника.</p>
        </p>
                <p>
            <b><code>middle_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
<br>
<p>Employee middle name / Отчество сотрудника.</p>
        </p>
                <p>
            <b><code>birthday</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
<br>
<p>Date of birth in the format dd.mm / Дата рождения в формате dd.mm</p>
        </p>
                <p>
            <b><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
<br>
<p>email / Адрес электронной почты.</p>
        </p>
                <p>
            <b><code>cn</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
<br>
<p>LDAP common name / LDAP cn. В общем случай ФИО.</p>
        </p>
                <p>
            <b><code>telephone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
<br>
<p>Internal or additional phone number in nnnn format / Внутренний или
дополнительный номер телефона в формате nnnn.</p>
        </p>
                <p>
            <b><code>mobile</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
<br>
<p>Cell phone number in the format nnnnnnnnnn / Номер мобильного телефона
в формате nnnnnnnnnn.</p>
        </p>
                <p>
            <b><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
<br>
<p>Employee position / Должность сотрудника.</p>
        </p>
                <p>
            <b><code>department</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
<br>
<p>Employee's department / Структурное подразделение сотрудника.</p>
        </p>
                <p>
            <b><code>company</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
<br>
<p>Employee's company / Компания.</p>
        </p>
                <p>
            <b><code>city</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
<br>
<p>Employee's city / Город.</p>
        </p>
                <p>
            <b><code>created_at</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
<br>
<p>Creation date (UTC) / Дата создания записи (UTC).</p>
        </p>
                <p>
            <b><code>updated_at</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
<br>
<p>Modification date (UTC) / Дата изменения записи (UTC).</p>
        </p>
                        <h2 id="organization-employee-directory-management-GETapi-v1-org-users--id-">Display the Employee by uuid.</h2>

<p>
</p>

<p>Вернет сотрудника по uuid.</p>

<span id="example-requests-GETapi-v1-org-users--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://api.localhost/api/v1/org/users/976b48f0-7fd3-4d03-82ce-395ddeafe5d5" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.localhost/api/v1/org/users/976b48f0-7fd3-4d03-82ce-395ddeafe5d5"
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

<span id="example-responses-GETapi-v1-org-users--id-">
            <blockquote>
            <p>Example response (500):</p>
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
    &quot;message&quot;: &quot;SQLSTATE[22P02]: Invalid text representation: 7 ERROR:  invalid input syntax for type uuid: \&quot;1\&quot; (SQL: select * from \&quot;org_users\&quot; where \&quot;org_users\&quot;.\&quot;id\&quot; = 1 limit 1)&quot;,
    &quot;exception&quot;: &quot;Illuminate\\Database\\QueryException&quot;,
    &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Database/Connection.php&quot;,
    &quot;line&quot;: 759,
    &quot;trace&quot;: [
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Database/Connection.php&quot;,
            &quot;line&quot;: 719,
            &quot;function&quot;: &quot;runQueryCallback&quot;,
            &quot;class&quot;: &quot;Illuminate\\Database\\Connection&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Database/Connection.php&quot;,
            &quot;line&quot;: 421,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Database\\Connection&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Database/Query/Builder.php&quot;,
            &quot;line&quot;: 2636,
            &quot;function&quot;: &quot;select&quot;,
            &quot;class&quot;: &quot;Illuminate\\Database\\Connection&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Database/Query/Builder.php&quot;,
            &quot;line&quot;: 2624,
            &quot;function&quot;: &quot;runSelect&quot;,
            &quot;class&quot;: &quot;Illuminate\\Database\\Query\\Builder&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Database/Query/Builder.php&quot;,
            &quot;line&quot;: 3160,
            &quot;function&quot;: &quot;Illuminate\\Database\\Query\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Database\\Query\\Builder&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Database/Query/Builder.php&quot;,
            &quot;line&quot;: 2625,
            &quot;function&quot;: &quot;onceWithColumns&quot;,
            &quot;class&quot;: &quot;Illuminate\\Database\\Query\\Builder&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php&quot;,
            &quot;line&quot;: 699,
            &quot;function&quot;: &quot;get&quot;,
            &quot;class&quot;: &quot;Illuminate\\Database\\Query\\Builder&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php&quot;,
            &quot;line&quot;: 683,
            &quot;function&quot;: &quot;getModels&quot;,
            &quot;class&quot;: &quot;Illuminate\\Database\\Eloquent\\Builder&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Database/Concerns/BuildsQueries.php&quot;,
            &quot;line&quot;: 296,
            &quot;function&quot;: &quot;get&quot;,
            &quot;class&quot;: &quot;Illuminate\\Database\\Eloquent\\Builder&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php&quot;,
            &quot;line&quot;: 431,
            &quot;function&quot;: &quot;first&quot;,
            &quot;class&quot;: &quot;Illuminate\\Database\\Eloquent\\Builder&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php&quot;,
            &quot;line&quot;: 463,
            &quot;function&quot;: &quot;find&quot;,
            &quot;class&quot;: &quot;Illuminate\\Database\\Eloquent\\Builder&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Support/Traits/ForwardsCalls.php&quot;,
            &quot;line&quot;: 23,
            &quot;function&quot;: &quot;findOrFail&quot;,
            &quot;class&quot;: &quot;Illuminate\\Database\\Eloquent\\Builder&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Model.php&quot;,
            &quot;line&quot;: 2230,
            &quot;function&quot;: &quot;forwardCallTo&quot;,
            &quot;class&quot;: &quot;Illuminate\\Database\\Eloquent\\Model&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Model.php&quot;,
            &quot;line&quot;: 2242,
            &quot;function&quot;: &quot;__call&quot;,
            &quot;class&quot;: &quot;Illuminate\\Database\\Eloquent\\Model&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/app/Http/Controllers/Api/Org/OrgUserController.php&quot;,
            &quot;line&quot;: 86,
            &quot;function&quot;: &quot;__callStatic&quot;,
            &quot;class&quot;: &quot;Illuminate\\Database\\Eloquent\\Model&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Routing/Controller.php&quot;,
            &quot;line&quot;: 54,
            &quot;function&quot;: &quot;show&quot;,
            &quot;class&quot;: &quot;App\\Http\\Controllers\\Api\\Org\\OrgUserController&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Routing/ControllerDispatcher.php&quot;,
            &quot;line&quot;: 45,
            &quot;function&quot;: &quot;callAction&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Controller&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Routing/Route.php&quot;,
            &quot;line&quot;: 261,
            &quot;function&quot;: &quot;dispatch&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\ControllerDispatcher&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Routing/Route.php&quot;,
            &quot;line&quot;: 204,
            &quot;function&quot;: &quot;runController&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Route&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Routing/Router.php&quot;,
            &quot;line&quot;: 725,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Route&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 141,
            &quot;function&quot;: &quot;Illuminate\\Routing\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Routing/Middleware/SubstituteBindings.php&quot;,
            &quot;line&quot;: 50,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Middleware\\SubstituteBindings&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Routing/Middleware/ThrottleRequests.php&quot;,
            &quot;line&quot;: 126,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Routing/Middleware/ThrottleRequests.php&quot;,
            &quot;line&quot;: 102,
            &quot;function&quot;: &quot;handleRequest&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Middleware\\ThrottleRequests&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Routing/Middleware/ThrottleRequests.php&quot;,
            &quot;line&quot;: 54,
            &quot;function&quot;: &quot;handleRequestUsingNamedLimiter&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Middleware\\ThrottleRequests&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Middleware\\ThrottleRequests&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 116,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Routing/Router.php&quot;,
            &quot;line&quot;: 726,
            &quot;function&quot;: &quot;then&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Routing/Router.php&quot;,
            &quot;line&quot;: 703,
            &quot;function&quot;: &quot;runRouteWithinStack&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Routing/Router.php&quot;,
            &quot;line&quot;: 667,
            &quot;function&quot;: &quot;runRoute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Routing/Router.php&quot;,
            &quot;line&quot;: 656,
            &quot;function&quot;: &quot;dispatchToRoute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php&quot;,
            &quot;line&quot;: 189,
            &quot;function&quot;: &quot;dispatch&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 141,
            &quot;function&quot;: &quot;Illuminate\\Foundation\\Http\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php&quot;,
            &quot;line&quot;: 21,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/ConvertEmptyStringsToNull.php&quot;,
            &quot;line&quot;: 31,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php&quot;,
            &quot;line&quot;: 21,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TrimStrings.php&quot;,
            &quot;line&quot;: 40,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TrimStrings&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/ValidatePostSize.php&quot;,
            &quot;line&quot;: 27,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/PreventRequestsDuringMaintenance.php&quot;,
            &quot;line&quot;: 86,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Http/Middleware/HandleCors.php&quot;,
            &quot;line&quot;: 62,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Http\\Middleware\\HandleCors&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Http/Middleware/TrustProxies.php&quot;,
            &quot;line&quot;: 39,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Http\\Middleware\\TrustProxies&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 116,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php&quot;,
            &quot;line&quot;: 164,
            &quot;function&quot;: &quot;then&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php&quot;,
            &quot;line&quot;: 133,
            &quot;function&quot;: &quot;sendRequestThroughRouter&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/knuckleswtf/scribe/src/Extracting/Strategies/Responses/ResponseCalls.php&quot;,
            &quot;line&quot;: 299,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/knuckleswtf/scribe/src/Extracting/Strategies/Responses/ResponseCalls.php&quot;,
            &quot;line&quot;: 287,
            &quot;function&quot;: &quot;callLaravelOrLumenRoute&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/knuckleswtf/scribe/src/Extracting/Strategies/Responses/ResponseCalls.php&quot;,
            &quot;line&quot;: 89,
            &quot;function&quot;: &quot;makeApiCall&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/knuckleswtf/scribe/src/Extracting/Strategies/Responses/ResponseCalls.php&quot;,
            &quot;line&quot;: 45,
            &quot;function&quot;: &quot;makeResponseCall&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/knuckleswtf/scribe/src/Extracting/Strategies/Responses/ResponseCalls.php&quot;,
            &quot;line&quot;: 35,
            &quot;function&quot;: &quot;makeResponseCallIfConditionsPass&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/knuckleswtf/scribe/src/Extracting/Extractor.php&quot;,
            &quot;line&quot;: 209,
            &quot;function&quot;: &quot;__invoke&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/knuckleswtf/scribe/src/Extracting/Extractor.php&quot;,
            &quot;line&quot;: 166,
            &quot;function&quot;: &quot;iterateThroughStrategies&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/knuckleswtf/scribe/src/Extracting/Extractor.php&quot;,
            &quot;line&quot;: 95,
            &quot;function&quot;: &quot;fetchResponses&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/knuckleswtf/scribe/src/GroupedEndpoints/GroupedEndpointsFromApp.php&quot;,
            &quot;line&quot;: 122,
            &quot;function&quot;: &quot;processRoute&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/knuckleswtf/scribe/src/GroupedEndpoints/GroupedEndpointsFromApp.php&quot;,
            &quot;line&quot;: 69,
            &quot;function&quot;: &quot;extractEndpointsInfoFromLaravelApp&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\GroupedEndpoints\\GroupedEndpointsFromApp&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/knuckleswtf/scribe/src/GroupedEndpoints/GroupedEndpointsFromApp.php&quot;,
            &quot;line&quot;: 47,
            &quot;function&quot;: &quot;extractEndpointsInfoAndWriteToDisk&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\GroupedEndpoints\\GroupedEndpointsFromApp&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/knuckleswtf/scribe/src/Commands/GenerateDocumentation.php&quot;,
            &quot;line&quot;: 53,
            &quot;function&quot;: &quot;get&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\GroupedEndpoints\\GroupedEndpointsFromApp&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php&quot;,
            &quot;line&quot;: 36,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Commands\\GenerateDocumentation&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Container/Util.php&quot;,
            &quot;line&quot;: 41,
            &quot;function&quot;: &quot;Illuminate\\Container\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php&quot;,
            &quot;line&quot;: 93,
            &quot;function&quot;: &quot;unwrapIfClosure&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\Util&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php&quot;,
            &quot;line&quot;: 37,
            &quot;function&quot;: &quot;callBoundMethod&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Container/Container.php&quot;,
            &quot;line&quot;: 651,
            &quot;function&quot;: &quot;call&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Console/Command.php&quot;,
            &quot;line&quot;: 144,
            &quot;function&quot;: &quot;call&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\Container&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/symfony/console/Command/Command.php&quot;,
            &quot;line&quot;: 308,
            &quot;function&quot;: &quot;execute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Console/Command.php&quot;,
            &quot;line&quot;: 126,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Command\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/symfony/console/Application.php&quot;,
            &quot;line&quot;: 1002,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/symfony/console/Application.php&quot;,
            &quot;line&quot;: 299,
            &quot;function&quot;: &quot;doRunCommand&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/symfony/console/Application.php&quot;,
            &quot;line&quot;: 171,
            &quot;function&quot;: &quot;doRun&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Console/Application.php&quot;,
            &quot;line&quot;: 102,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php&quot;,
            &quot;line&quot;: 151,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/artisan&quot;,
            &quot;line&quot;: 37,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Console\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-org-users--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-org-users--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-org-users--id-"></code></pre>
</span>
<span id="execution-error-GETapi-v1-org-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-org-users--id-"></code></pre>
</span>
<form id="form-GETapi-v1-org-users--id-" data-method="GET"
      data-path="api/v1/org/users/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-org-users--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-org-users--id-"
                    onclick="tryItOut('GETapi-v1-org-users--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-org-users--id-"
                    onclick="cancelTryOut('GETapi-v1-org-users--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-org-users--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/org/users/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text"
               name="id"
               data-endpoint="GETapi-v1-org-users--id-"
               value="976b48f0-7fd3-4d03-82ce-395ddeafe5d5"
               data-component="url" hidden>
    <br>
<p>employee uuid / uuid сотрудника .</p>
            </p>
=======
>>>>>>> c7d5ce39d1d0de29c38b27e0d102cd61112c3226
                    </form>

    <h3>Response</h3>
    <h4 class="fancy-heading-panel"><b>Response Fields</b></h4>
    <p>
            <b><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
<br>
<p>The uuid of the organization user / ID сотрудника в формате UUID.</p>
        </p>
                <p>
            <b><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
<br>
<p>The uniq name of the organization user / Уникальное имя сотрудника.</p>
        </p>
                <p>
            <b><code>hide</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
 &nbsp;
<br>
<p>If eq true then don't show the employee / Если true то не показывать сотрудника.</p>
        </p>
                <p>
            <b><code>thumbnail</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
 &nbsp;
<br>
<p>If eq true show avatar, otherwise show default avatar / Если true то показать
фото профиля, в противном случае показать дефолтное фото.</p>
        </p>
                <p>
            <b><code>gender</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
<br>
<p>m - male, f - female, u - unknown / Пол: m - мужчина, f - женщина, u - неизвестен.</p>
        </p>
                <p>
            <b><code>first_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
<br>
<p>Employee name / Имя сотрудника.</p>
        </p>
                <p>
            <b><code>last_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
<br>
<p>Employee last name / Фамилия сотрудника.</p>
        </p>
                <p>
            <b><code>middle_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
<br>
<p>Employee middle name / Отчество сотрудника.</p>
        </p>
                <p>
            <b><code>birthday</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
<br>
<p>Date of birth in the format dd.mm / Дата рождения в формате dd.mm</p>
        </p>
                <p>
            <b><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
<br>
<p>email / Адрес электронной почты.</p>
        </p>
                <p>
            <b><code>cn</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
<br>
<p>LDAP common name / LDAP cn. В общем случай ФИО.</p>
        </p>
                <p>
            <b><code>telephone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
<br>
<p>Internal or additional phone number in nnnn format / Внутренний или
дополнительный номер телефона в формате nnnn.</p>
        </p>
                <p>
            <b><code>mobile</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
<br>
<p>Cell phone number in the format nnnnnnnnnn / Номер мобильного телефона
в формате nnnnnnnnnn.</p>
        </p>
                <p>
            <b><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
<br>
<p>Employee position / Должность сотрудника.</p>
        </p>
                <p>
            <b><code>department</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
<br>
<p>Employee's department / Структурное подразделение сотрудника.</p>
        </p>
                <p>
            <b><code>company</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
<br>
<p>Employee's company / Компания.</p>
        </p>
                <p>
            <b><code>city</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
<br>
<p>Employee's city / Город.</p>
        </p>
                <p>
            <b><code>created_at</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
<br>
<p>Creation date (UTC) / Дата создания записи (UTC).</p>
        </p>
                <p>
            <b><code>updated_at</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
<br>
<p>Modification date (UTC) / Дата изменения записи (UTC).</p>
        </p>
                        <h2 id="organization-employee-directory-management-GETapi-v1-org-users--id-">Employee info by ID</h2>

<p>
</p>

<p>Return the Employee info by uuid. /
Вернет информацию о сотруднике по uuid.</p>

<span id="example-requests-GETapi-v1-org-users--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://api.localhost/api/v1/org/users/976b48f0-7fd3-4d03-82ce-395ddeafe5d5" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.localhost/api/v1/org/users/976b48f0-7fd3-4d03-82ce-395ddeafe5d5"
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

<span id="example-responses-GETapi-v1-org-users--id-">
            <blockquote>
            <p>Example response (500):</p>
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
    &quot;message&quot;: &quot;SQLSTATE[22P02]: Invalid text representation: 7 ERROR:  invalid input syntax for type uuid: \&quot;1\&quot; (SQL: select * from \&quot;org_users\&quot; where \&quot;org_users\&quot;.\&quot;id\&quot; = 1 limit 1)&quot;,
    &quot;exception&quot;: &quot;Illuminate\\Database\\QueryException&quot;,
    &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Database/Connection.php&quot;,
    &quot;line&quot;: 759,
    &quot;trace&quot;: [
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Database/Connection.php&quot;,
            &quot;line&quot;: 719,
            &quot;function&quot;: &quot;runQueryCallback&quot;,
            &quot;class&quot;: &quot;Illuminate\\Database\\Connection&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Database/Connection.php&quot;,
            &quot;line&quot;: 421,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Database\\Connection&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Database/Query/Builder.php&quot;,
            &quot;line&quot;: 2636,
            &quot;function&quot;: &quot;select&quot;,
            &quot;class&quot;: &quot;Illuminate\\Database\\Connection&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Database/Query/Builder.php&quot;,
            &quot;line&quot;: 2624,
            &quot;function&quot;: &quot;runSelect&quot;,
            &quot;class&quot;: &quot;Illuminate\\Database\\Query\\Builder&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Database/Query/Builder.php&quot;,
            &quot;line&quot;: 3160,
            &quot;function&quot;: &quot;Illuminate\\Database\\Query\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Database\\Query\\Builder&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Database/Query/Builder.php&quot;,
            &quot;line&quot;: 2625,
            &quot;function&quot;: &quot;onceWithColumns&quot;,
            &quot;class&quot;: &quot;Illuminate\\Database\\Query\\Builder&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php&quot;,
            &quot;line&quot;: 699,
            &quot;function&quot;: &quot;get&quot;,
            &quot;class&quot;: &quot;Illuminate\\Database\\Query\\Builder&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php&quot;,
            &quot;line&quot;: 683,
            &quot;function&quot;: &quot;getModels&quot;,
            &quot;class&quot;: &quot;Illuminate\\Database\\Eloquent\\Builder&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Database/Concerns/BuildsQueries.php&quot;,
            &quot;line&quot;: 296,
            &quot;function&quot;: &quot;get&quot;,
            &quot;class&quot;: &quot;Illuminate\\Database\\Eloquent\\Builder&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php&quot;,
            &quot;line&quot;: 431,
            &quot;function&quot;: &quot;first&quot;,
            &quot;class&quot;: &quot;Illuminate\\Database\\Eloquent\\Builder&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php&quot;,
            &quot;line&quot;: 463,
            &quot;function&quot;: &quot;find&quot;,
            &quot;class&quot;: &quot;Illuminate\\Database\\Eloquent\\Builder&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Support/Traits/ForwardsCalls.php&quot;,
            &quot;line&quot;: 23,
            &quot;function&quot;: &quot;findOrFail&quot;,
            &quot;class&quot;: &quot;Illuminate\\Database\\Eloquent\\Builder&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Model.php&quot;,
            &quot;line&quot;: 2230,
            &quot;function&quot;: &quot;forwardCallTo&quot;,
            &quot;class&quot;: &quot;Illuminate\\Database\\Eloquent\\Model&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Model.php&quot;,
            &quot;line&quot;: 2242,
            &quot;function&quot;: &quot;__call&quot;,
            &quot;class&quot;: &quot;Illuminate\\Database\\Eloquent\\Model&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/app/Http/Controllers/Api/Org/OrgUserController.php&quot;,
            &quot;line&quot;: 88,
            &quot;function&quot;: &quot;__callStatic&quot;,
            &quot;class&quot;: &quot;Illuminate\\Database\\Eloquent\\Model&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Routing/Controller.php&quot;,
            &quot;line&quot;: 54,
            &quot;function&quot;: &quot;show&quot;,
            &quot;class&quot;: &quot;App\\Http\\Controllers\\Api\\Org\\OrgUserController&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Routing/ControllerDispatcher.php&quot;,
            &quot;line&quot;: 45,
            &quot;function&quot;: &quot;callAction&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Controller&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Routing/Route.php&quot;,
            &quot;line&quot;: 261,
            &quot;function&quot;: &quot;dispatch&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\ControllerDispatcher&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Routing/Route.php&quot;,
            &quot;line&quot;: 204,
            &quot;function&quot;: &quot;runController&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Route&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Routing/Router.php&quot;,
            &quot;line&quot;: 725,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Route&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 141,
            &quot;function&quot;: &quot;Illuminate\\Routing\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Routing/Middleware/SubstituteBindings.php&quot;,
            &quot;line&quot;: 50,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Middleware\\SubstituteBindings&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Routing/Middleware/ThrottleRequests.php&quot;,
            &quot;line&quot;: 126,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Routing/Middleware/ThrottleRequests.php&quot;,
            &quot;line&quot;: 102,
            &quot;function&quot;: &quot;handleRequest&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Middleware\\ThrottleRequests&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Routing/Middleware/ThrottleRequests.php&quot;,
            &quot;line&quot;: 54,
            &quot;function&quot;: &quot;handleRequestUsingNamedLimiter&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Middleware\\ThrottleRequests&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Middleware\\ThrottleRequests&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 116,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Routing/Router.php&quot;,
            &quot;line&quot;: 726,
            &quot;function&quot;: &quot;then&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Routing/Router.php&quot;,
            &quot;line&quot;: 703,
            &quot;function&quot;: &quot;runRouteWithinStack&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Routing/Router.php&quot;,
            &quot;line&quot;: 667,
            &quot;function&quot;: &quot;runRoute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Routing/Router.php&quot;,
            &quot;line&quot;: 656,
            &quot;function&quot;: &quot;dispatchToRoute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php&quot;,
            &quot;line&quot;: 189,
            &quot;function&quot;: &quot;dispatch&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 141,
            &quot;function&quot;: &quot;Illuminate\\Foundation\\Http\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php&quot;,
            &quot;line&quot;: 21,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/ConvertEmptyStringsToNull.php&quot;,
            &quot;line&quot;: 31,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php&quot;,
            &quot;line&quot;: 21,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TrimStrings.php&quot;,
            &quot;line&quot;: 40,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TrimStrings&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/ValidatePostSize.php&quot;,
            &quot;line&quot;: 27,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/PreventRequestsDuringMaintenance.php&quot;,
            &quot;line&quot;: 86,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Http/Middleware/HandleCors.php&quot;,
            &quot;line&quot;: 62,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Http\\Middleware\\HandleCors&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Http/Middleware/TrustProxies.php&quot;,
            &quot;line&quot;: 39,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Http\\Middleware\\TrustProxies&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 116,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php&quot;,
            &quot;line&quot;: 164,
            &quot;function&quot;: &quot;then&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php&quot;,
            &quot;line&quot;: 133,
            &quot;function&quot;: &quot;sendRequestThroughRouter&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/knuckleswtf/scribe/src/Extracting/Strategies/Responses/ResponseCalls.php&quot;,
            &quot;line&quot;: 299,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/knuckleswtf/scribe/src/Extracting/Strategies/Responses/ResponseCalls.php&quot;,
            &quot;line&quot;: 287,
            &quot;function&quot;: &quot;callLaravelOrLumenRoute&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/knuckleswtf/scribe/src/Extracting/Strategies/Responses/ResponseCalls.php&quot;,
            &quot;line&quot;: 89,
            &quot;function&quot;: &quot;makeApiCall&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/knuckleswtf/scribe/src/Extracting/Strategies/Responses/ResponseCalls.php&quot;,
            &quot;line&quot;: 45,
            &quot;function&quot;: &quot;makeResponseCall&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/knuckleswtf/scribe/src/Extracting/Strategies/Responses/ResponseCalls.php&quot;,
            &quot;line&quot;: 35,
            &quot;function&quot;: &quot;makeResponseCallIfConditionsPass&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/knuckleswtf/scribe/src/Extracting/Extractor.php&quot;,
            &quot;line&quot;: 209,
            &quot;function&quot;: &quot;__invoke&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/knuckleswtf/scribe/src/Extracting/Extractor.php&quot;,
            &quot;line&quot;: 166,
            &quot;function&quot;: &quot;iterateThroughStrategies&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/knuckleswtf/scribe/src/Extracting/Extractor.php&quot;,
            &quot;line&quot;: 95,
            &quot;function&quot;: &quot;fetchResponses&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/knuckleswtf/scribe/src/GroupedEndpoints/GroupedEndpointsFromApp.php&quot;,
            &quot;line&quot;: 122,
            &quot;function&quot;: &quot;processRoute&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/knuckleswtf/scribe/src/GroupedEndpoints/GroupedEndpointsFromApp.php&quot;,
            &quot;line&quot;: 69,
            &quot;function&quot;: &quot;extractEndpointsInfoFromLaravelApp&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\GroupedEndpoints\\GroupedEndpointsFromApp&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/knuckleswtf/scribe/src/GroupedEndpoints/GroupedEndpointsFromApp.php&quot;,
            &quot;line&quot;: 47,
            &quot;function&quot;: &quot;extractEndpointsInfoAndWriteToDisk&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\GroupedEndpoints\\GroupedEndpointsFromApp&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/knuckleswtf/scribe/src/Commands/GenerateDocumentation.php&quot;,
            &quot;line&quot;: 53,
            &quot;function&quot;: &quot;get&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\GroupedEndpoints\\GroupedEndpointsFromApp&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php&quot;,
            &quot;line&quot;: 36,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Commands\\GenerateDocumentation&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Container/Util.php&quot;,
            &quot;line&quot;: 41,
            &quot;function&quot;: &quot;Illuminate\\Container\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php&quot;,
            &quot;line&quot;: 93,
            &quot;function&quot;: &quot;unwrapIfClosure&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\Util&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php&quot;,
            &quot;line&quot;: 37,
            &quot;function&quot;: &quot;callBoundMethod&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Container/Container.php&quot;,
            &quot;line&quot;: 651,
            &quot;function&quot;: &quot;call&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Console/Command.php&quot;,
            &quot;line&quot;: 144,
            &quot;function&quot;: &quot;call&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\Container&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/symfony/console/Command/Command.php&quot;,
            &quot;line&quot;: 308,
            &quot;function&quot;: &quot;execute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Console/Command.php&quot;,
            &quot;line&quot;: 126,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Command\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/symfony/console/Application.php&quot;,
            &quot;line&quot;: 1002,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/symfony/console/Application.php&quot;,
            &quot;line&quot;: 299,
            &quot;function&quot;: &quot;doRunCommand&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/symfony/console/Application.php&quot;,
            &quot;line&quot;: 171,
            &quot;function&quot;: &quot;doRun&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Console/Application.php&quot;,
            &quot;line&quot;: 102,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php&quot;,
            &quot;line&quot;: 151,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/app/artisan&quot;,
            &quot;line&quot;: 37,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Console\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-org-users--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-org-users--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-org-users--id-"></code></pre>
</span>
<span id="execution-error-GETapi-v1-org-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-org-users--id-"></code></pre>
</span>
<form id="form-GETapi-v1-org-users--id-" data-method="GET"
      data-path="api/v1/org/users/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-org-users--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-org-users--id-"
                    onclick="tryItOut('GETapi-v1-org-users--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-org-users--id-"
                    onclick="cancelTryOut('GETapi-v1-org-users--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-org-users--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/org/users/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="id"
               data-endpoint="GETapi-v1-org-users--id-"
               value="976b48f0-7fd3-4d03-82ce-395ddeafe5d5"
               data-component="url" hidden>
    <br>
<p>employee uuid / uuid сотрудника .</p>
            </p>
                    </form>

                    <h2 id="organization-employee-directory-management-GETapi-v1-org-qrcodes--id-">EmployeeQR Code vCard</h2>

<p>
</p>

<p>Return QRCode jpg image with encoded Employee vCard.
Вернет QRCode изображение в формате jpg с закодированым контактом сотрудника</p>

<span id="example-requests-GETapi-v1-org-qrcodes--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://api.localhost/api/v1/org/qrcodes/976b48f0-7fd3-4d03-82ce-395ddeafe5d5?size=600&amp;style=round&amp;eye=circle&amp;r=128&amp;g=128&amp;b=128&amp;a=100&amp;br=32&amp;bg=32&amp;bb=32&amp;ba=0" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://api.localhost/api/v1/org/qrcodes/976b48f0-7fd3-4d03-82ce-395ddeafe5d5"
);

const params = {
    "size": "600",
    "style": "round",
    "eye": "circle",
    "r": "128",
    "g": "128",
    "b": "128",
    "a": "100",
    "br": "32",
    "bg": "32",
    "bb": "32",
    "ba": "0",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-org-qrcodes--id-">
            <blockquote>
            <p>Example response (200, Operation successful):</p>
        </blockquote>
                <pre>

<code class="language-json">&lt;?xml version=&quot;1.0&quot; encoding=&quot;UTF-8&quot;?&gt;&lt;svg ....&gt;...&lt;/svg&gt;</code>
 </pre>
            <blockquote>
            <p>Example response (422, Validation error):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;The selected style is invalid.&quot;,
    &quot;errors&quot;: {
        &quot;style&quot;: [
            &quot;The selected style is invalid.&quot;
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (404, Employee not found):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Employee with id 976b48f0-7fd3-4d03-82ce-395ddeafe5d4 not found&quot;,
    &quot;error&quot;: &quot;404 not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-org-qrcodes--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-org-qrcodes--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-org-qrcodes--id-"></code></pre>
</span>
<span id="execution-error-GETapi-v1-org-qrcodes--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-org-qrcodes--id-"></code></pre>
</span>
<form id="form-GETapi-v1-org-qrcodes--id-" data-method="GET"
      data-path="api/v1/org/qrcodes/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-org-qrcodes--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-org-qrcodes--id-"
                    onclick="tryItOut('GETapi-v1-org-qrcodes--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-org-qrcodes--id-"
                    onclick="cancelTryOut('GETapi-v1-org-qrcodes--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-org-qrcodes--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/org/qrcodes/{id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="id"
               data-endpoint="GETapi-v1-org-qrcodes--id-"
               value="976b48f0-7fd3-4d03-82ce-395ddeafe5d5"
               data-component="url" hidden>
    <br>
<p>employee uuid / uuid сотрудника .</p>
            </p>
                        <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                    <p>
                <b><code>size</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number"
               name="size"
               data-endpoint="GETapi-v1-org-qrcodes--id-"
               value="600"
               data-component="query" hidden>
    <br>
<p>Image size. / Размер изображения. Must be between 10 and 800.</p>
            </p>
                    <p>
                <b><code>style</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text"
               name="style"
               data-endpoint="GETapi-v1-org-qrcodes--id-"
               value="round"
               data-component="query" hidden>
    <br>
<p>QR code style. square | dot | round. 'square' by default. / Стиль QR кода.</p>
            </p>
                    <p>
                <b><code>eye</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text"
               name="eye"
               data-endpoint="GETapi-v1-org-qrcodes--id-"
               value="circle"
               data-component="query" hidden>
    <br>
<p>QR code eye style. square | circle. 'square' by default. / Стиль QR кода.</p>
            </p>
                    <p>
                <b><code>r</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number"
               name="r"
               data-endpoint="GETapi-v1-org-qrcodes--id-"
               value="128"
               data-component="query" hidden>
    <br>
<p>Foreground red color in RGBA model. Default: 0/ Красная составляющая цвета. Must be between 0 and 255.</p>
            </p>
                    <p>
                <b><code>g</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number"
               name="g"
               data-endpoint="GETapi-v1-org-qrcodes--id-"
               value="128"
               data-component="query" hidden>
    <br>
<p>Foreground green color in RGBA model. Default: 0 / Зеленая составляющая цвета. Must be between 0 and 255.</p>
            </p>
                    <p>
                <b><code>b</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number"
               name="b"
               data-endpoint="GETapi-v1-org-qrcodes--id-"
               value="128"
               data-component="query" hidden>
    <br>
<p>Foreground blue color in RGBA model. Default: 0/ Синия составляющая цвета. Must be between 0 and 255.</p>
            </p>
                    <p>
                <b><code>a</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number"
               name="a"
               data-endpoint="GETapi-v1-org-qrcodes--id-"
               value="100"
               data-component="query" hidden>
    <br>
<p>Transparency (Alpha) in RGBA model. Default: 100/ Прозрачность (Альфа-канал) цвета. Must be between 0 and 255.</p>
            </p>
                    <p>
                <b><code>br</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number"
               name="br"
               data-endpoint="GETapi-v1-org-qrcodes--id-"
               value="32"
               data-component="query" hidden>
    <br>
<p>Background red color in RGBA model. Default: 255/ Красная составляющая фонового цвета. Must be between 0 and 255.</p>
            </p>
                    <p>
                <b><code>bg</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number"
               name="bg"
               data-endpoint="GETapi-v1-org-qrcodes--id-"
               value="32"
               data-component="query" hidden>
    <br>
<p>Background green color in RGBA model. Default: 255 / Зеленая составляющая фонового цвета. Must be between 0 and 255.</p>
            </p>
                    <p>
                <b><code>bb</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number"
               name="bb"
               data-endpoint="GETapi-v1-org-qrcodes--id-"
               value="32"
               data-component="query" hidden>
    <br>
<p>Background blue color in RGBA model. Default: 255 / Синяя составляющая фонового цвета. Must be between 0 and 255.</p>
            </p>
                    <p>
                <b><code>ba</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number"
               name="ba"
               data-endpoint="GETapi-v1-org-qrcodes--id-"
               value="0"
               data-component="query" hidden>
    <br>
<p>Background transparency (Alpha) in RGBA model. Default: 0/ Прозрачность (Альфа-канал) фона. Must be between 0 and 255.</p>
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
