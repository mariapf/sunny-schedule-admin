@extends('admin.layouts.admin')

@section('content')

@section('title')
Locations
@endsection
<div class="row">
  <div class="col-md-12">
    <div class="x_panel">
      <div class="x_title">
        <h3>Location List</h3>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <!-- start project list -->
        <table class="table table-striped jambo_table projects">
          <thead class="headings">
            <tr>
              <th class="column-title" style="width: 1%">#</th>
              <th class="column-title" style="width: 20%">Location Name</th>
              <th class="column-title">Location Type</th>
              <th class="column-title">Location Available</th>
              <th class="column-title">Pod</th>
              <th class="column-title" style="width: 20%">#Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($locations as $location)
            <tr>
              <td>#</td>
              <td>
                <a>{{ $location->name }}</a>
              </td>
              <td>{{ $location->type }}</td>
              <td class="project_progress">
                <div class="progress progress_sm">
                  <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="57"></div>
                </div>
                <small>57% Available</small>
              </td>
              <td>{{ $location->is_pod_visible ? 'Yes' : 'No'}}</td>
              <td>
                <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <!-- end project list -->
      </div>
    </div>
  </div>
</div>
@endsection