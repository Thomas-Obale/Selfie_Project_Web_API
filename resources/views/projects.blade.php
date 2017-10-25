@extends('layouts.main')

@section('title', 'HTTP Project Management')

@section('content')
  <div id="project">
      <h3>API Projects</h3>
      <p>Projects are the fundemental building blocks on how the entire API is organised within the database table. It is currently the primary link for images, masking images (Used auto processing with Agisoft PhotoScan) and will hold other additional information which might be included in the future.</p>

      <p>Below is a list routes to help explain how HTTP Requsts are handles to operations which will occur with each request. Remember strings enclosed in <code>{</code>...<code>}</code> are replaced by ID found in the database</p>

      <h4>HTTP Request for Projects</h4>
      <hr>
      <div class="request-info">
        <h5>Retrieve all projects</h5>
        <p class="short-description">Retrieve all projects from the database</p>
        <table class="table table-condensed">
          <tr>
              <td><b>Request Type</b></td>
              <td>GET</td>
          </tr>
          <tr>
              <td><b>url</b></td>
              <td><code>selfie/v1/projects</code></td>
          </tr>
          <tr>
              <td><b>Paramaters</b></td>
              <td>None</td>
          </tr>
          <tr>
              <td><b>Response</b></td>
              <td>JSON Formatted Data</td>
          </tr>
        </table>
      </div>

      <div class="request-info">
        <h5>Retrieve a single project</h5>
        <p class="short-description">Retrieve the records of a single project within the database in a JSON encoded format</p>
        <table class="table table-condensed">
          <tr>
              <td><b>Request Type</b></td>
              <td>GET</td>
          </tr>
          <tr>
              <td><b>url</b></td>
              <td><code>selfie/v1/projects/{project_id}</code></td>
          </tr>
          <tr>
              <td><b>Paramaters</b></td>
              <td>None</td>
          </tr>
          <tr>
              <td><b>Response</b></td>
              <td>JSON Formatted Data</td>
          </tr>
        </table>
      </div>

      <div class="request-info">
        <h5>Create a new project</h5>
        <p class="short-description">Create a new record in the database, the number of parameters may change according to future improvement of the database.</p>
        <table class="table table-condensed">
          <tr>
              <td><b>Request Type</b></td>
              <td>GET</td>
          </tr>
          <tr>
              <td><b>url</b></td>
              <td><code>selfie/v1/projects/{project_id}</code></td>
          </tr>
          <tr>
              <td><b>Paramaters</b></td>
              <td>name &rArr; The name of the project</td>
          </tr>
          <tr>
              <td><b>Response</b></td>
              <td>Confirmation message</td>
          </tr>
        </table>
      </div>

      <div class="request-info">
        <h5>Update Project Information</h5>
        <p class="short-description">Change information aboout a project in the database, the number of parameters may change according to future improvement of the database.</p>
        <table class="table table-condensed">
          <tr>
              <td><b>Request Type</b></td>
              <td>PUT</td>
          </tr>
          <tr>
              <td><b>url</b></td>
              <td><code>selfie/v1/projects/{project_id}</code></td>
          </tr>
          <tr>
              <td><b>Paramaters</b></td>
              <td>name &rArr; The name of the project</td>
          </tr>
          <tr>
              <td><b>Response</b></td>
              <td>A confirmation message</td>
          </tr>
        </table>
      </div>

      <div class="request-info">
        <h5>Remove a project</h5>
        <p class="short-description">Remove a single project from the database</p>
        <table class="table table-condensed">
          <tr>
              <td><b>Request Type</b></td>
              <td>DELETE</td>
          </tr>
          <tr>
              <td><b>url</b></td>
              <td><code>selfie/v1/projects/{project_id}</code></td>
          </tr>
          <tr>
              <td><b>Paramaters</b></td>
              <td>None</td>
          </tr>
          <tr>
              <td><b>Response</b></td>
              <td>Confirmation message</td>
          </tr>
        </table>
      </div>
  </div>
@endsection
