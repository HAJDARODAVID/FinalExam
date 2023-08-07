<table class="table">
    <thead class="thead-dark" style="background-color: gray">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col" style="width:40%">Body</th>
        <th scope="col">Created at</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
            <tr>
                <th scope="row">{{ $post->id }}</th>
                <td>{{ $post->post_title }}</td>
                <td>{{ Str::limit($post->post_body, 155, $end='...') }}</td>
                <td>{{ $post->created_at }}</td>
                <td>
                    {{-- EDIT BUTTON --}}
                    <a class="btn btn-primary" href="{{ route('editPost', $post->id) }}" >{{ __('EDIT') }}</a>

                    {{-- DELETE BUTTON --}}
                    <a class="btn btn-danger" href="" onclick="event.preventDefault();
                    document.getElementById('destoryPost-{{ $post->id }}-form').submit();">{{ __('DELETE') }}</a>
                    <form 
                      id="destoryPost-{{ $post->id }}-form" 
                      method="POST" 
                      action="{{ route('deletePost', $post->id) }}"  
                      class="d-none">
                        @method('DELETE')
                        @csrf
                    </form>
                </td>
                
            </tr> 
        @endforeach
    </tbody>
  </table>