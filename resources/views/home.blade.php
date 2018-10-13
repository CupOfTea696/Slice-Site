@extends('layouts.master')

@section('content')
<div class="container">
    <header class="jumbotron mb-5">
        <h1 class="display-1">
            /Slice/
            <span class="h1"><small class="text-muted">A little slice of Laravel</small></span>
        </h1>
        <p class="lead">Basic routing and templating, using Laravel's illuminate components.</p>
    </header>
    <main>
        <section class="mb-4">
            <h2 class="h1">Installation</h2>
            <p class="lead">
                To create a new App with Slice, just run the command below.
            </p>
            <pre class="lang-bash command-line" data-prompt="$">
                <code>
                    composer create-project -s dev cupoftea/slice "Your App Path"
                </code>
            </pre>
        </section>
        <section class="mb-4">
            <h2 class="h1">Usage</h2>
            <p class="lead">
                Using Slice is a super simple. Just define your routes in <code>routes/web.php</code> or <code>routes/api.php</code>, and start creating your views in <code>resources/views</code>. Slice will take care of the rest.
            </p>
            
            <div class="card mb-4">
                <header class="card-header">
                    <span class="h5">
                        <code>routes/web.php</code>
                    </span>
                </header>
                <pre class="lang-php">
                    <code>
                        &lt;?php
                        
                        $router->view('/', 'home')->name('home');
                        $router->view('about', 'about')->name('about');
                    </code>
                </pre>
            </div>
            
            <div class="card mb-4">
                <header class="card-header">
                    <span class="h5">
                        <code>resources/views/home.blade.php</code>
                    </span>
                </header>
                <pre class="lang-php">
                    <code>
                        @@extends('layouts.master')
                        
                        @@section('content')
                            &lt;div class=&quot;container&quot;&gt;
                                &lt;h1&gt;Hello World&lt;/h1&gt;
                                &lt;p class=&quot;lead&quot;&gt;Welcome to my app!&lt;/p&gt;
                            &lt;/div&gt;
                        @@endsection
                    </code>
                </pre>
            </div>
            
            <div class="card mb-4">
                <header class="card-header">
                    <span class="h5">
                        <code>resources/views/about.blade.php</code>
                    </span>
                </header>
                <pre class="lang-php">
                    <code>
                        @@extends('layouts.master')
                        
                        @@section('content')
                            &lt;div class=&quot;container&quot;&gt;
                                &lt;h1&gt;About My App&lt;/h1&gt;
                                &lt;p class=&quot;lead&quot;&gt;I made this all by myself!&lt;/p&gt;
                            &lt;/div&gt;
                        @@endsection
                    </code>
                </pre>
            </div>
            
            <div class="card mb-4">
                <header class="card-header">
                    <span class="h5">
                        <code>resources/views/layouts/master.blade.php</code>
                    </span>
                </header>
                <pre class="lang-php">
                    <code>
                        &lt;!DOCTYPE html&gt;
                        &lt;html lang=&quot;@{{ str_replace(&apos;_&apos;, &apos;-&apos;, app()-&gt;getLocale()) }}&quot; id=&quot;Slice&quot;&gt;
                        &lt;head&gt;
                            &lt;meta charset=&quot;utf-8&quot;&gt;
                            &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1&quot;&gt;
                            
                            &lt;title&gt;@{{ config(&apos;app.name&apos;, &apos;My App&apos;) }}&lt;/title&gt;
                            
                            &lt;!-- Fonts --&gt;
                            &lt;link rel=&quot;dns-prefetch&quot; href=&quot;https://fonts.gstatic.com&quot;&gt;
                            &lt;link href=&quot;https://fonts.googleapis.com/css?family=Lato:300,400,400i,700&quot; rel=&quot;stylesheet&quot;&gt;
                            
                            &lt;!-- Styles --&gt;
                            &lt;link rel=&quot;stylesheet&quot; href=&quot;https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css&quot; integrity=&quot;sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO&quot; crossorigin=&quot;anonymous&quot;&gt;
                        &lt;/head&gt;
                        &lt;body class=&quot;route-@{{ app(&apos;router&apos;)-&gt;currentRouteName() }}&quot;&gt;
                            &lt;div id=&quot;app&quot;&gt;
                                &lt;nav class=&quot;navbar navbar-expand-lg navbar-light bg-light&quot;&gt;
                                    &lt;a class=&quot;navbar-brand&quot; href=&quot;/&quot;&gt;My App&lt;/a&gt;
                                    &lt;button class=&quot;navbar-toggler&quot; type=&quot;button&quot; data-toggle=&quot;collapse&quot; data-target=&quot;#navbarNav&quot; aria-controls=&quot;navbarNav&quot; aria-expanded=&quot;false&quot; aria-label=&quot;Toggle navigation&quot;&gt;
                                        &lt;span class=&quot;navbar-toggler-icon&quot;&gt;&lt;/span&gt;
                                    &lt;/button&gt;
                                    &lt;div class=&quot;collapse navbar-collapse&quot; id=&quot;navbarNav&quot;&gt;
                                        &lt;ul class=&quot;navbar-nav&quot;&gt;
                                            &lt;li class=&quot;nav-item @{{ app(&apos;router&apos;)-&gt;currentRouteName() == &apos;home&apos; ? &apos;active&apos; : &apos;&apos; }}&quot;&gt;
                                                &lt;a class=&quot;nav-link&quot; href=&quot;@{{ route(&apos;home&apos;) }}&quot;&gt;
                                                    Home
                                                    @@if(app(&apos;router&apos;)-&gt;currentRouteName() == &apos;home&apos;)&lt;span class=&quot;sr-only&quot;&gt;(current)&lt;/span&gt;@@endif
                                                &lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li class=&quot;nav-item @{{ app(&apos;router&apos;)-&gt;currentRouteName() == &apos;about&apos; ? &apos;active&apos; : &apos;&apos; }}&quot;&gt;
                                                &lt;a class=&quot;nav-link&quot; href=&quot;@{{ route(&apos;about&apos;) }}&quot;&gt;
                                                    About
                                                    @@if(app(&apos;router&apos;)-&gt;currentRouteName() == &apos;about&apos;)&lt;span class=&quot;sr-only&quot;&gt;(current)&lt;/span&gt;@@endif
                                                &lt;/a&gt;
                                            &lt;/li&gt;
                                        &lt;/ul&gt;
                                    &lt;/div&gt;
                                &lt;/nav&gt;
                                @@yield(&apos;content&apos;)
                            &lt;/div&gt;
                        &lt;/body&gt;
                        &lt;/html&gt;
                    </code>
                </pre>
            </div>
        </section>
        <section>
            <h2 class="h1">Helpers</h2>
            <p class="lead">
                Slice has a bunch of useful helpers you'll probably recognise from Laravel. In addition, all helpers from <code>illuminate/support</code> are also available to you.
            </p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <h3 class="h5"><code>app()</code></h3>
                            Get the Slice Application.
                        </li>
                        @foreach($helpers as $helper)
                            @continue($loop->iteration >= count($helpers) / 2)
                            
                            <li class="list-group-item">
                                <h3 class="h5"><code>{{ $helper }}()</code></h3>
                                See the <a href="https://laravel.com/docs/helpers#method-{{ str_replace('_', '-', $helper) }}" target="_blank">Laravel Documentation</a> for more info.
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="list-group">
                        @foreach($helpers as $helper)
                            @continue(count($helpers) / 2 > $loop->iteration)
                            
                            <li class="list-group-item">
                                <h3 class="h5"><code>{{ $helper }}()</code></h3>
                                See the <a href="https://laravel.com/docs/helpers#method-{{ str_replace('_', '-', $helper) }}" target="_blank">Laravel Documentation</a> for more info.
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </section>
    </main>
</div>
@endsection
