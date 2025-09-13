<x-layout>
    <h2 class="text-3xl">MLBB HEROES</h2>
    
    @foreach($heroes as $hero) 
            <x-card href="{{ route('heroes.view', $hero->id) }}" :highlight="$hero['price'] < 32000">
                <h3> {{ $hero['name'] }}</h3>
            </x-card>
    @endforeach

    {{ $heroes->links() }}
</x-layout>