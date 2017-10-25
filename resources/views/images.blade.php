@extends('layouts.main')

@section('title', 'HTTP Project Management')

@section('content')
  <div id="images">
      <h3>API Images</h3>
      <p>Images are the core components which links the system together, from being captured Using
      the Raspberry PIs to the final striched up 3D object.</p>

      <p>Below is a list routes to help explain how HTTP Requsts are handles to operations which will occur with
        each request. Remember strings enclosed in <code>{</code>...<code>}</code> are replaced by ID found in the database</p>

      <h4>HTTP Request for Images</h4>
      <hr>
      <div class="request-info">
        <h5>Retrieve all images for a given project</h5>
        <p class="short-description">Retrieve all for a project saved the database</p>
        <table class="table table-condensed">
          <tr>
              <td><b>Request Type</b></td>
              <td>GET</td>
          </tr>
          <tr>
              <td><b>url</b></td>
              <td><code>selfie/v1/projects/{project_is}/images</code></td>
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
        <h5>Add a new image to a give project in the database</h5>
        <p class="short-description">Save a new image to the database</p>
        <table class="table table-condensed">
          <tr>
              <td><b>Request Type</b></td>
              <td>POST</td>
          </tr>
          <tr>
              <td><b>url</b></td>
              <td><code>selfie/v1/{project_is}/image</code></td>
          </tr>
          <tr>
              <td><b>Paramaters</b></td>
              <td>url &rArr; An image directory including filename</td>
          </tr>
          <tr>
              <td><b>Response</b></td>
              <td>Confirmation Message</td>
          </tr>
        </table>
      </div>

      <div class="request-info">
        <h5>Working with the Agisoft PhotoScan Queue List</h5>
        <p class="short-description">Handle operations queuing for Agisoft PhotoScan</p>
        <table class="table table-condensed">
          <tr>
              <td><b>Request Type</b></td>
              <td>PUT</td>
          </tr>
          <tr>
              <td><b>url</b></td>
              <td><code>selfie/v1/{project_is}/image</code></td>
          </tr>
          <tr>
              <td><b>Paramaters</b></td>
              <td>
                <p> status(text) &rArr; Status has to be a can only take one of the three values listed below</p>
                <ul>
                  <li>incomplete - Means Images can still be added </li>
                  <li>ready_for_processing - Agisoft Photoscan can start processing the images</li>
                  <li>processed - Processing is completed</li>
                </ul>
              </td>
          </tr>
          <tr>
              <td><b>Response</b></td>
              <td>Confirmation Message</td>
          </tr>
        </table>
      </div>

  </div>
@endsection
