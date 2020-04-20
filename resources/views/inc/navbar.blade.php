

<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <a href="/" class="navbar-brand">TodoList</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse7">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse7">
            <div class="navbar-nav">
            <li class="{{Request::is('/') ? 'active' : ''}}">  
            <a href="/" class="nav-item nav-link active">Home</a>
            </li>
            <li class="{{Request::is('todo/create') ? 'active' : ''}}"> 
                <a href="todo/create" class="nav-item nav-link">Create Todo</a>
                </li>
               
            </div>
          
        </div>
    </nav>