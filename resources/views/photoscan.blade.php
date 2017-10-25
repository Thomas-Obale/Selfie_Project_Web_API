@extends('layouts.main')

@section('title', 'Using Agisoft PhotoScan')

@section('content')
  <div id="photoscan">
      <h4>Processing with Agisoft PhotoScan</h4>
      <p><a href="http://www.agisoft.com/" target="_blank">Agisoft PhotoScan</a> is a 3D model rendering application. This project uses this application's application due to it's ability to run python scripts.</p>

      <p>Currently the Agisoft server (Virtual Linux Machine) <code>Process.py</code> found on  the <a href="https://github.com/Thomas-Obale/PS1722_Selfie" target="_blank">Github repository</a> to retrieve images/projects placed on queue on the Web Server (Running the Laravel Lumen Application). Please view the <code>readme.md</code> to understand how all the files within the repository works.</p>
  </div>
@endsection
