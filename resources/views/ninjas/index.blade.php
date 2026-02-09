<x-layout>
    <div>Ninjas:</div>
    <br>

    <ul style="display: flex; flex-direction: column; gap: 20px;">
        @foreach($ninjas as $ninja)
        {{-- <li>
            <span>Name: {{ $ninja["name"] }}</span><br />
        <span>Skill: {{ $ninja["skill"] }}</span><br />
        <span>Power: {{ $ninja["power"] }}</span><br />
        <a href="/ninjas/{{ $ninja["id"] }}">{{ $ninja["name"] }}</a><br />
        </li> --}}

        <x-card :name="$ninja['name']" :skill="$ninja['skill']" :power="$ninja['power']" :highlight="$ninja['id'] == 2" href="/ninjas/{{ $ninja['id'] }}">
        </x-card>
        @endforeach
    </ul>
</x-layout>
