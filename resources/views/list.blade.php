<x-dashboard>
    <x-slot:title>Home page</x-slot:title>
    @if (session()->has('data'))
        <table>
            <tr>
                <th>ID</th>
                <th>Category</th>
                <th>Name</th>
                <th>PhotoUrls</th>
                <th>Tags</th>
                <th>Status</th>
            </tr>
            <?php $oneItem = session()->get('data'); 
                //dd($oneItem);
                ?>
            @foreach (session()->get('data') as $item)
                <tr>
                    <td>{{ $item['id'] }}</td>
                    <td>
                        @if(array_key_exists('category',$item))
                            {{ $item['category']['name'] }}
                        @endif
                    </td>
                    <td>
                        @if(array_key_exists('name',$item))
                            {{ $item['name'] }}
                        @endif
                    </td>
                    <td>
                        @foreach($item['photoUrls'] as $photo)
                            {{ $photo }}
                        @endforeach
                    </td>
                    <td>
                        @foreach($item['tags'] as $tag)
                            {{ $tag['name'] }}
                        @endforeach
                    </td>
                    <td>{{ $item['status'] }}</td>
                </tr>
            @endforeach
        </table>
    @endif
</x-dashboard>