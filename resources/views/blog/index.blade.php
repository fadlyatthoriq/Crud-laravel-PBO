@extends('master')
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    

    <title>Data Blog</title>
    @section('content')
  </head>
  <body>
      
  <div class="container mt-3">
      <div class="row">
          <div class="col-md-12">
              <div class="card border-0 shadow rounded">
                  <div class="card-body">
                  <a href="{{route('blog.create')}}" class="btn btn-md btn-success mb-3 rounded">Tambah Data</a>
                      <table class="table table-hover">
                          <thead>
                              <tr>
                                  <th scope="col" class="text-center">Gambar</th>
                                  <th scope="col" class="text-center">Judul</th>
                                  <th scope="col" class="text-center">Content</th>
                                  <th scope="col" class="text-center">Aksi</th>
                              </tr>
                          </thead>
                          <tbody>
                              @forelse ($blogs as $blog)
                              <tr class="text-center">
                                  <td class="text-center">
                                      <img src="{{ Storage::url('public/blogs/').$blog->image }}" class="rounded" style="width: 150px;">
                                  </td>
                                  <td>{{$blog->title}}</td>
                                  <td>{!! $blog->content !!}</td>
                                  <td class="text-center">
                                        <form onsubmit="return confirm ('apakah anda yakin ?');" action="{{ route('blog.destroy', $blog->id) }}" method="post">
                                            <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                  </td>
                              </tr>
                            @empty
                                <div class="alert alert-danger">
                                    Data Blog Belum Tersedia
                                </div>
                            @endforelse
                          </tbody>
                      </table>
                      {{ $blogs->links() }}
                  </div>
              </div>
          </div>
      </div>
  </div>

    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://use.fontawesome.com/b09327b00a.js"></script>


    <script>
        //message with toastr
        @if(session()->has('success'))

            toastr.success('{{ session('success') }}', 'BERHASIL!');

        @elseif(session()->has('error'))

            toastr.success('{{ session('error') }}', 'GAGAL!');
            
        @endif
    </script>
    @endsection

    @section('tambahbaru')
        Data Blog
    @endsection

    @section('title')
        Data Blog
    @endsection

  </body>
</html>