@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
   <h1>タスク一覧</h1>

    @if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>ステータス</th>
                    <th>内容</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                <tr>
                    {{-- タスク詳細ページへのリンク --}}
                    <td>{!! link_to_route('tasks.show', $task->id, ['task' => $task->id]) !!}</td>
                    <td>{{ $task->status }}</td>
                    <td>{{ $task->content }}</td>
                </tr>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    {{-- ページネーションのリンク --}}
    {{ $tasks->links() }}
    {{-- タスク作成ページへのリンク --}}
    {!! link_to_route('tasks.create', '新規タスクの追加', [], ['class' => 'btn btn-info']) !!}
@endsection