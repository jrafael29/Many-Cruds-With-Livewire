<tr>
    <td>
        <img style="height: 40px; width: 40px; object-fit:cover;" class="rounded-circle" src="
        @if($user->photo)
            @if(strpos($user->photo, 'https') !== false )
                {{$user->photo}}
            @else
                {{asset('storage/photos/'. $user->photo)}}
            @endif
        @else 
            {{'https://via.placeholder.com/150'}}
        @endif
        " alt="">
    </td>
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    <td> 
        <livewire:user.delete-user :wire:key="$user->id" :user="$user" />
    </td>
</tr>
