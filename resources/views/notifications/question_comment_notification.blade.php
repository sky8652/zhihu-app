<li class="notifications {{ $notification->unread() ? 'unread' : '' }}">
    <a href="#"><span>{{$notification->data['name']}}</span> </a>
    评论了你的问题 <a href="/questions/{{$notification->data['id']}}">{{$notification->data['title']}}</a>
</li>