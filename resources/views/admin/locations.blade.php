@extends('admin.layouts.admin')

@section('content')
<div>
    <table class="table table-striped jambo_table bulk_action">
        <thead>
            <tr class="headings">
                <th>
                    <input type="checkbox" id="check-all" class="flat">
                </th>
                <th class="column-title">Location name</th>
                <th class="column-title">Location type</th>
                <th class="column-title">Pod</th>
                <th class="column-title">Max time</th>
                <th class="column-title no-link last">
                    <span class="nobr">Action</span>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($locations as $location)
            <tr class="even pointer">
                <td class="a-center ">
                    <input type="checkbox" class="flat" name="table_records">
                </td>
                <td>{{ $location->name }}</td>
                <td>{{ $location->type }}</td>
                <td>{{ $location->is_pod_visible ? 'Yes' : 'No'}}</td>
                <td>{{ $location->max_timespan}}&nbsp;(hours)</td>
                <td class=" last">
                    <a href="#">View</a>
                </td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
</div>
@endsection