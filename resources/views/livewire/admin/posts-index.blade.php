<div class="card">

    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder="Ingrese el nombre de un post">
    </div>

    @if ($posts->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{$post->id}}</td>
                            <td>{{$post->name}}</td>
                            <td width="25px"><a href="{{route('admin.posts.edit', $post)}}"><x-feathericon-edit style="color: orange" /></td>
                            <td width="25px">
                                <form action="{{route('admin.posts.destroy', $post)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" style="
                                        background-color: transparent;
                                        border-width: 0;
                                        font-family: inherit;
                                        font-size: inherit;
                                        font-style: inherit;
                                        font-weight: inherit;
                                        line-height: inherit;
                                        padding: 0;">
                                        <x-eos-delete style="width: 24px; color: red" ></x-eos-delete>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="card-footer">
            {{$posts->links()}}
        </div>
    @else
        <div class="card-body"><strong>No se encontraron resultados</strong></div>
    @endif

</div>