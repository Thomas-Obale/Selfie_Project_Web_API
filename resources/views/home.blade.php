
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials.meta-header')
  </head>

  <body>

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills float-right">
            @include('partials.nav')
          </ul>
        </nav>
        <h3 class="text-muted">3D Mini Selfie Project API</h3>
      </div>

      <div class="jumbotron">
        <h1 class="display-3">API Documentation</h1>
        <p class="lead">This document aims to help understand the API the structure for new team taking over the project. It will explain how HTTP requests are handled and relevent documentation useful from Laravel</p>
        <p><a class="btn btn-lg btn-primary" href="{{url('selfie/v1/projects')}}" role="button">View Current Projects</a></p>
      </div>

      <div class="row marketing">
          <div class="about">
            <h4>Project Overview (Needs Editing)</h4>
            <p>This project stems from Richard Garsthagen who is the creator of the website
<a href="http://www.pi3dscan.com" target="_blank">www.pi3dscan.com</a> and the originator of the Raspberry Pi 3D scanning model. On Richard’s
website, he has blogs, videos, and information about 3D scanning with Raspberry Pi’s
which will be prove to be very helpful as we move towards working on the project.</p>
<p>The aim of this project is to essentially replicate what Richard Garsthagen has done, but in
a smaller size. This is due to limitations we adhere to such as time and cost constraints.
With the assistance of our client Andrew Leahy and academic supervisor Chris Boulamatsis,
we hope to successfully implement the knowledge that has been gathered from Richard
Garsthagen’s documentation and resources, the previous student’s work as well as hands
on experience to overcome any obstacles and deliver an excellent product.</p>
          </div>
          <div class="lumen">
            <h4>Using Laravel's Lumen</h4>
            <p><a href='https://lumen.laravel.com/' target="_blank">Lumen</a> is a stripped down version of the Laravel Web Framework specifically built for APIs. As part of the 3D Mini Selfie project, we have implemented this framework to build this API. Please see the <a href="https://github.com/Thomas-Obale/Selfie_Project_Web_API" target="_blank">Github repository</a> to access the full project with some instructions within the <code>readme.md</code> file on how you could get started with using the API</p>

            <h6>Using Laravel Lumen</h6>
            <p>The 3D Mini Selfie  API is made of routes and the whole collection of routes are located in the <a href="https://github.com/Thomas-Obale/Selfie_Project_Web_API/blob/master/routes/web.php" target="_blank">routes/web.php</a> directory. To learn/read more about routes, please refer back to the <a href="https://lumen.laravel.com/docs/5.5/routing" target="_blank">Lumen documentation</a></p>

            <p>Other useful Lumen documentation you may need to understand what has already been done with the API, please refer to the following documentations</p>
            <ul>
              <li><a href="https://laravel.com/docs/5.5/migrations" target="_blank">Database Migrations</a></li>
              <li><a href="https://laravel.com/docs/5.5/eloquent" target="_blank">Laravel Elequent</a></li>
              <li><a href="https://lumen.laravel.com/docs/5.5/controllers" target="_blank">Controllers</a></li>
              <li><a href="https://laravel.com/docs/5.5/helpers" target="_blank">Usefull Helper Functions</a></li>
            </ul>
          </div>

          <hr>

          <div id="project">
            <h4>API Projects</h4>
            <p>Projects are the fundemental building blocks on how the entire API is organised within the database table. It is currently the primary link for images, masking images (Used auto processing with Agisoft PhotoScan) and will hold other additional information which might be included in the future.</p>

            <p>Below is a list routes to help explain how HTTP Requsts are handles to operations which will occur with each request. Remember strings enclosed in <code>{</code>...<code>}</code> are replaced by ID found in the database</p>

            <h6>HTTP Request for Projects</h6>
            <table class="table table-condensed">
              <thead>
                <tr>
                  <th>TYPE</th>
                  <th>Routes</th>
                  <th>Paramaters</th>
                  <th>Purpose</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>GET</td>
                  <td><code>{{ url("selfie/v1/projects") }}</code></td>
                  <td>None</td>
                  <td>Retrieve all Projects</td>
                </tr>
                <tr>
                  <td>POST</td>
                  <td><code>{{ url("selfie/v1/projects") }}</code></td>
                  <td>name (text)</td>
                  <td>Add Project</td>
                </tr>
                <tr>
                  <td>GET</td>
                  <td><code>{{ url("selfie/v1/projects/{prject_id}") }}</code></td>
                  <td>None</td>
                  <td>Retrieve Project Info</td>
                </tr>
                <tr>
                  <td>PUT</td>
                  <td><code>{{ url("selfie/v1/projects/{prject_id}") }}</code></td>
                  <td>name (string)</td>
                  <td>Update Project</td>
                </tr>
                <tr>
                  <td>DELETE</td>
                  <td><code>{{ url("selfie/v1/projects/{prject_id}") }}</code></td>
                  <td>None</td>
                  <td>Remove Project</td>
                </tr>
                <tr>
                  <td>GET</td>
                  <td><code>{{ url("selfie/v1/projects/{prject_id}/images") }}</code></td>
                  <td>Project ID (Int)</td>
                  <td>Project Images</td>
                </tr>
              </tbody>
            </table>
          </div>

          <hr>
            <div id="photoscan">
              <h4>Processing with Agisoft PhotoScan</h4>
              <p><a href="http://www.agisoft.com/" target="_blank">Agisoft PhotoScan</a> is a 3D model rendering application. This project uses this application's application due to it's ability to run python scripts.</p>

              <p>Currently the Agisoft server (Virtual Linux Machine) <code>Process.py</code> found on  the <a href="https://github.com/Thomas-Obale/PS1722_Selfie" target="_blank">Github repository</a> to retrieve images/projects placed on queue on the Web Server (Running the Laravel Lumen Application). Please view the <code>readme.md</code> to understand how all the files within the repository works.</p>
            </div>
          <hr>
        </div>
  
      <footer class="footer">
        <p>&copy; Professional Experience Group  2017 | All Rights Reserved</p>
      </footer>

    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
