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
x-ratelimit-remaining: 59
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
            &quot;id&quot;: &quot;976daaf4-b937-423f-8bfc-ded45e1bc4ed&quot;,
            &quot;name&quot;: &quot;Vinogradova.U.25828ca0-6272-3ef1-ba30-407a85c40137&quot;,
            &quot;hide&quot;: false,
            &quot;thumbnail&quot;: false,
            &quot;gender&quot;: &quot;f&quot;,
            &quot;first_name&quot;: &quot;Ульяна&quot;,
            &quot;last_name&quot;: &quot;Виноградова&quot;,
            &quot;middle_name&quot;: &quot;Евгеньевна&quot;,
            &quot;birthday&quot;: &quot;01.10&quot;,
            &quot;email&quot;: &quot;Vinogradova.U@example.ru&quot;,
            &quot;cn&quot;: &quot;Виноградова Ульяна Евгеньевна&quot;,
            &quot;telephone&quot;: &quot;1873&quot;,
            &quot;mobile&quot;: &quot;9897146983&quot;,
            &quot;title&quot;: &quot;Бухгалтер&quot;,
            &quot;department&quot;: &quot;Отдел закупок&quot;,
            &quot;company&quot;: &quot;ООО \&quot;Нарита и сын\&quot;&quot;,
            &quot;city&quot;: &quot;Краснодар&quot;,
            &quot;created_at&quot;: &quot;2022-10-05T12:25:53.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-10-05T12:25:53.000000Z&quot;
        },
        {
            &quot;id&quot;: &quot;976daaf4-bd81-4b14-981e-7cb1d4250445&quot;,
            &quot;name&quot;: &quot;Antonova.T.83824bfb-e6bb-3679-89ff-653fe29603d7&quot;,
            &quot;hide&quot;: false,
            &quot;thumbnail&quot;: false,
            &quot;gender&quot;: &quot;f&quot;,
            &quot;first_name&quot;: &quot;Тамара&quot;,
            &quot;last_name&quot;: &quot;Антонова&quot;,
            &quot;middle_name&quot;: &quot;Евгеньевна&quot;,
            &quot;birthday&quot;: &quot;14.11&quot;,
            &quot;email&quot;: &quot;Antonova.T@example.ru&quot;,
            &quot;cn&quot;: &quot;Антонова Тамара Евгеньевна&quot;,
            &quot;telephone&quot;: &quot;7502&quot;,
            &quot;mobile&quot;: &quot;9897615119&quot;,
            &quot;title&quot;: &quot;Сомелье&quot;,
            &quot;department&quot;: &quot;Внутренний аудит&quot;,
            &quot;company&quot;: &quot;ООО \&quot;БумПрофи\&quot;&quot;,
            &quot;city&quot;: &quot;Москва&quot;,
            &quot;created_at&quot;: &quot;2022-10-05T12:25:53.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-10-05T12:25:53.000000Z&quot;
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
