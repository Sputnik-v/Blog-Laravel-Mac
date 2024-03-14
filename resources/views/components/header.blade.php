<div>
    <div class="header">
        <div class="logo">
            <a href="/" class="logo__link">
                <img class="logo__img" src="{{asset('assets/images/amazon.png')}}" alt="logo">
            </a>
        </div>
        <ul class="header_list_menu">
            <li class="header_list_item"><a href="{{route('home')}}" class="header_list_link">About</a></li>
            <li class="header_list_item"><a href="{{route('home')}}" class="header_list_link">Management</a></li>
            <li class="header_list_item"><a href="{{route('home')}}" class="header_list_link">How Use</a></li>
        </ul>
        <div class="header_email">
            <span class="header_icon">@</span>
                <a href="mailto:pegas@gmail.com" class="header_mail">pegas@gmail.com</a>
        </div>
        <div class="auth">
            <a href="{{route('home')}}" class="register">register</a>
            <a href="{{route('home')}}" class="login">login</a>
        </div>
    </div>
    @include('components.search')

</div>
