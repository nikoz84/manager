<div>
    <h3>Projetos em desenvolvimento</h3>
    <ul>
        @foreach ($projects as $project)
            <li>
                {{ $project->name }}
            </li>
        @endforeach
    </ul>
</div>
