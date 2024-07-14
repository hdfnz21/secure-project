<nav id="sidebar">
        <!-- Sidebar Header-->   
        <li>
            <a href="index.html"><i class="icon-home"></i> Home</a>
        </li>
        <li>
            <a href="{{url('category_page')}}"><i class="icon-grid"></i> Category</a>
        </li>
        <li>
            <a href="{{url('add_book')}}"><i class="icon-grid"></i> Add Textbooks</a>
        </li>
        <li>
            <a href="{{url('show_book')}}"><i class="bx bx-phone-call"></i>Show Textbooks</a>
        </li>
        <li>
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <i class="bx bx-log-out"></i>
                <span class="align-middle">Log Out</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    </ul>
</nav>

