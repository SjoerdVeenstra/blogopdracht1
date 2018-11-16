{{-- responsive bootstrap navbar --}}

{{-- <ul class="nav justify-content-left"> --}}
<div class="container-nav navbar" style="background-color: rgb(221, 68, 68;">
        <div class="align-right">
                  <a class="nav-link button" class="{{ Request::is('/') ? "active" : "" }}" href="/">Home</a>
                  <a class="nav-link button" class="{{ Request::is('/') ? "active" : "" }}" href="/posts">Top stories</a>
                  <a class="nav-link button" href="/posts/create">Write a post!</a> 
        </div>          

        <div class="align-right">
                    <a class="nav-link button" class="{{ Request::is('/') ? "active" : "" }}" href="/signup">Signup</a>
                    <a class="nav-link button" class="{{ Request::is('/') ? "active" : "" }}" href="/login">Login</a>
        </div>
  </div>

{{-- <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown button
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div> --}}