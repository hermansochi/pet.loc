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
                                <a href="#organization-employee-directory-management-GETapi-v1-org-users--id-">Display the Employee by uuid.</a>
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
