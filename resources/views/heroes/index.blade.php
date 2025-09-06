<x-layout>
    <h2>MLBB HEROES</h2>
    
    @foreach($heroes as $hero) 
        <li>
            <x-card href="/heroes/{{ $hero['id']}}" :highlight="$hero['price'] < 32000">
                <h3> {{ $hero['name']}}</h3>
            </x-card>
        </li>
    @endforeach
</x-layout>