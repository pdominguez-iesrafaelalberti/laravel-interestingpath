<!--Incluye un formulario para añadir ENLACES INTERESANTES -->
@include('includes.interestingpath.form')

<!-- POR CADA interestingpath -->
@foreach($paths as $path)

<div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">

@include('includes.interestingpath')
<div class="carousel-inner">
    <div class="carousel-item active">

        <div class="container col-md-8">


            @if (count($path->comments) >= 1)
                @foreach($path->comments as $comment)
                <div class='alert-message block-message info'>
                <p><strong>({{$comment->user->name}}) </strong>{{$comment->content}}</p>
                </div>
                @endforeach
            @endif

            @include('includes.like.form')
           
        </div>
        @if( $path->user->id === Auth::id() )
       

                        <form action="{{ route('interestingpath.destroy', $path->id) }}" method="POST">

                        <a href="{{ route('interestingpath.show', $path->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg">Mostrar</i>
                        </a>

                        <a href="{{ route('interestingpath.edit', $path->id) }}">
                            <i class="fas fa-edit  fa-lg">Editar</i>

                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger">Borrar</i>

                        </button>
                        </form>

        @endif
    </div>
    
    </div>
 
@endforeach
