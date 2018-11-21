{{-- responsive bootstrap navbar --}}

{{-- <ul class="nav justify-content-left"> --}}
<div class="container-nav navbar" style="background-color: rgb(221, 68, 68;">
        <div class="align-left">
                  <a class="nav-link button" class="{{ Request::is('/') ? "active" : "" }}" href="/"><b>Home</b></a>
                  <a class="nav-link button" class="{{ Request::is('/') ? "active" : "" }}" href="/posts"><b>Top stories</b></a>
                  <a class="nav-link button" href="/posts/create"><b>Write a post!</b></a> 
        </div>          

        <div class="align-right">
                    <a class="nav-link button" class="{{ Request::is('/') ? "active" : "" }}" href="/signup"><b>Signup</b></a>
                    <a class="nav-link button" class="{{ Request::is('/') ? "active" : "" }}" href="/login"><b>Login</b></a>
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