@if ( 15< 10)
    <p>true</p>

@elseif (25>100)
    <p>han?</p>
@else 
    <h2>Tudo Errado</h2>
@endif


{{-- ---------------------------------------------------------------------------- --}}
@unless (empty($name))
    <h2>Name is not empty com UNLESS</h2>
@endunless

{{-- ---------------------------------------------------------------------------- --}}
@if (!empty($name))
    <h2>Name is not empty com IF</h2>
@endif

{{-- ---------------------------------------------------------------------------- --}}
@empty(!$name)
    <h2>Name is not empty com empy</h2>
@endempty

{{-- ---------------------------------------------------------------------------- --}}
@isset($name)
    <h2>Name has been set com isset</h2>
@endisset

{{-- ---------------------------------------------------------------------------- --}}
@switch($name)

    @case('Hugão!')
        <h2>Nome ok é hugão</h2>        
        @break
    @case('John')
        <h2>Nome é João</h2>
        @break
    @case('Michael')
        <h2>Nome é Miguel</h2>
        @break
    @default
        <h2>Sem nome</h2>
        
@endswitch

{{-- ---------------------------------------------------------------------------- --}}
@foreach ($dados as $item)
    
    <h2>{{ $item }}</h2>

@endforeach

{{-- ---------------------------------------------------------------------------- --}}
@forelse ($dados as $item)
    <h2>{{ $item }}</h2>
@empty
    <h1>VAZIO</h1>
@endforelse


{{-- ---------------------------------------------------------------------------- --}}
{{ $i=0 }}
@while ($i<10)
    
    <h2>{{ $i }}</h2>    
    {{ $i++ }}
@endwhile