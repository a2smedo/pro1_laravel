<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

 <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Code Blog</title>
</head>
<body>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ url("/posts") }}">CodeBlog</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ url("/posts") }}">Posts</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url("/tags") }}">Tags</a>
              </li>

            </ul>

          </div>
        </div>
      </nav>



  <section class="tags py-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 mx-auto">
                <h2 class="border text-center mt-3 mb-5 py-3 shadow-sm text-secondary">All Tags</h2>
            </div>
        </div>



        <div class="row">

          @foreach($tags as $tag )

          <div class="col-md-6 text-center mb-3">
              <div class="card shadow" style="width: 100%;">
                  {{-- <img src="..." class="card-img-top" alt="..."> --}}
                  <div class="card-body">
                      <h5 class="card-title text-muted text-uppercase">
                        {{-- <a href="{{ url("/posts/show/{$post->id}") }}">
                            {{$post->title}}
                        </a> --}}


                        {{$tag->name}}
                      </h5>


                  </div>
              </div>
          </div>
          @endforeach


        </div>

    </div>
  </section>







</body>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</html>
