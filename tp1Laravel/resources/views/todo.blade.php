@extends('layouts.base')

@section('title', 'Bienvenue')
@section("content")
<div style="display: flex; justify-content: center; gap: 50px;">
    <div style="border: 1px solid rgba(0,0,0,0.3); padding: 2rem">
        <h2 style="text-align: center; padding: 1rem;">Todo Liste</h2>
        <div style="display: flex; flex-direction: column; gap: 20px;">
            @foreach($todos as $todo)
                <div
                    style="font-family: Arial; color: #1a202c; border-radius: 10px 10px 10px 10px; border: 1px solid rgba(0,0,0,0.5); width: 500px; display: flex; justify-content: center; padding: 1rem; margin: auto; background-color: rgba(0,0,0,0.1); ">
                    {{$todo->texte}}
                    {{$todo->commentaire}}
                </div>
            @endforeach
        </div>
    </div>
    <div style="border: 1px solid rgba(0,0,0,0.3); padding: 2rem">
        <h2 style="text-align: center; padding: 1rem;">Ajouter une Todo Liste</h2>
        <div>

        </div>
    </div>
</div>
@endsection
