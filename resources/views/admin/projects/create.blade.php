@extends('layouts.app')

@section('content')
<section>
    <div class="container">
        <h1>Inserisci un nuovo progetto</h1>

    </div>
    <div class="container">
        <form action="{{route ('admin.projects.store')}}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="project_name" class="form-label">Nome del nuovo progetto</label>
                <input type="string" class="form-control" id="exampleFormControlInput1" name="project_name" placeholder="Nome del nuovo progetto">
            </div>

        </form>


    </div>

</section>
@endsection