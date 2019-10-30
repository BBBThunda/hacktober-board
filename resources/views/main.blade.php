<html lang="en">
<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-149411595-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-149411595-1');
    </script>

    <title>Hacktober-Board 2019 - Hacktobefest Issues Board</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="/styles/global.css">
    <link href="https://fonts.googleapis.com/css?family=Space+Mono&display=swap" rel="stylesheet">
    <meta name="description" content="Hacktober-Board helps users find open Github issues to participate in Hacktoberfest.">
    <meta name="author" content="@erikaheidi">
</head>
<body>
<header>
    <span class="logo">
        <a href="{{route('Main.index')}}">
        <img alt="Hacktoberfest logo" src="/img/hacktoberfest-logo.svg" width="475" />
            </a>
    </span>
    <span class="board-title"><a href="{{route('Main.index')}}">Issues Board</a></span>
</header>

<section class="content">

    @yield('content')

</section>

<div class="footer">

    <div class="footer-left">
        <h2>About</h2>
        <p>Hacktober-Board is an unofficial issue-finder for <a href="https://hacktoberfest.com" target="_blank" title="Hacktoberfest Official Website">Hacktoberfest</a> created by <a href="https://twitter.com/erikaheidi" title="@erikaheidi">Erika Heidi</a>. You can <a href="https://github.com/erikaheidi/hacktober-board" target="_blank" title="Visit Hacktober-Board on Github">contribute to this project</a> on Github.</p>
    </div>

    <div class="footer-right">
        <h2>Issues by Language</h2>
        <ul>
            @foreach ($all_languages as $project)
                @if ($project->language)
                    <li><a href="{{ route('Issue.list', ['filter' => ['language' => $project->language]]) }}" title="View {{ $project->language }} Issues">{{ $project->language }}</a></li>
                @endif
            @endforeach
        </ul>
    </div>
    <div id="issues-and-labels-wrap">
        <hr />
        <div class="issues-and-labels">
             <ul>
                <li><a href="{{ route('Issue.list') }}">All Issues</a></li>
                <li><a href="{{ route('Label.list') }}">All Labels</a></li>
                <li><a href="{{ route('Project.list') }}">All Projects</a></li>
            </ul>
        </div>
        <div id="footer-logo">
        <a href="{{route('Main.index')}}"><img src="/img/hacktoberfest-logo.svg" /></a>
        </div>
        <div id="hacktobercopy">
            Hacktober Board  2019
        </div>
    </div>
</div>
</body>
</html>
