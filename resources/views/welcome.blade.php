@extends('shopify-app::layouts.default')

@section('content')
    <!-- You are: (shop domain name) -->
    <p>You are: {{ $shopDomain ?? Auth::user()->name }}</p>
    <form action="{{ route('faq.create') }}" method="POST">
        @sessionToken
        <input type="text" name="question">
        <input type="text" name="answer">
        <button type="submit" class="btn btn-primary">Submit</button>

        <table class="table">
            <thead>
            <tr>
                <th>Question</th>
                <th>Answer</th>
            </tr>
            </thead>
            <tbody>
            @foreach($faqs as $faq)
                <tr>
                    <td>{{ $faq->question }}</td>
                    <td>{{ $faq->answer }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </form>
@endsection

@section('scripts')
    @parent

    <script>
        actions.TitleBar.create(app, { title: 'Welcome' });
    </script>
@endsection