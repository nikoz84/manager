@extends('layouts.master')
@section('content')
    <div>
        <h3>Projetos em desenvolvimento</h3>
        <ul>
            @forelse ($projects as $project)
                <li>
                    {{ $project->name }}
                </li>
            @empty
                <div class="flex flex- flex-col space-y-3">
                    <app-skeleton class="w-[100px] h-5 rounded-full"></app-skeleton>
                    <app-skeleton class="w-[100px] h-5 rounded-full"></app-skeleton>
                    <app-skeleton class="w-[100px] h-5 rounded-full"></app-skeleton>
                    <app-skeleton class="w-[100px] h-5 rounded-full"></app-skeleton>
                </div>
            @endforelse
        </ul>
        <app-button>Total</app-button>
    </div>
@endsection
