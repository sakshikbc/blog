@extends('layouts.master')

@section('content')

<table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Blog Name</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
						@foreach($posts as $post)
						<tr>
							<td>{{ $post->id }}</td>
							<td>{{ $post->title }}</td>
							<td class="action-button-list" width="230">
							<a class="" href="{{-- {{ route('users.edit', {user: user.id}) }} --}}" ><i class="bigly-icon-pencil2"></i></a>
									<a class="" onclick="return destroy(this);" href="{{-- {{ route('users.destroy', {user: user.id}) }} --}}"><i class="bigly-icon-trash"></i></a>
							</td>
						</tr>
						@endforeach
                    </tbody>
                </table>
@endsection